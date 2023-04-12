<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $emp = EmployeeModel::all();
        // $emp = EmployeeModel::paginate(10);
        if (request('search')) {
            $emp = EmployeeModel::where('nama', 'like', '%' . request('search') . '%')
                                ->orWhere('nip', '=', request('search'))
                                ->orWhere('email', 'like', '%' . request('search') . '%')
                                ->orWhere('jabatan', 'like', '%' . request('search') . '%')
                                ->paginate(10);
        } else {
            $emp = EmployeeModel::paginate(10);
        }
        return view('employee.employee')->with('emp', $emp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create_employee')->with('url_form', url('/employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ubah Format Datepicker
        $requestDateFormated = new Request([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'tanggal_masuk' => date('Y-m-d', strtotime($request->tanggal_masuk)),
        ]);

        // Validation
        $requestDateFormated->validate([
            'nip' => 'required|string|max:10|unique:employees,nip',
            'nama' => 'required|string|max:50',
            'email' => 'required|string|email|max:50',
            'jabatan' => 'required|string|max:60',
            'alamat' => 'required|string|max:100',
            'hp' => 'required|digits_between:6,15',
            'tanggal_masuk' => 'required|date|before_or_equal:' . date('Y-m-d'),
        ]);

        $data = EmployeeModel::create($requestDateFormated->except(['_token']));
        // Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('employee')
            ->with('success', 'Data Pegawai Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = EmployeeModel::find($id);
        return view('employee.create_employee')
            ->with('emp', $emp)
            ->with('url_form', url('/employee/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Ubah Format Datepicker
        $requestDateFormated = new Request([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'tanggal_masuk' => date('Y-m-d', strtotime($request->tanggal_masuk)),
        ]);

        // Validation
        $requestDateFormated->validate([
            'nip' => 'required|string|max:10|unique:employees,nip,' . $id,
            'nama' => 'required|string|max:50',
            'email' => 'required|string|email|max:50',
            'jabatan' => 'required|string|max:60',
            'alamat' => 'required|string|max:100',
            'hp' => 'required|digits_between:6,15',
            'tanggal_masuk' => 'required|date|before_or_equal:' . date('Y-m-d'),
        ]);

        $data = EmployeeModel::where('id', '=', $id)
                ->update($requestDateFormated->except(['_token', '_method']));
        return redirect('employee')
            ->with('success', 'Data Pegawai Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EmployeeModel::where('id', '=', $id)->delete();
        return redirect('employee')
        ->with('success', 'Data Pegawai Berhasil Dihapus');
    }
}