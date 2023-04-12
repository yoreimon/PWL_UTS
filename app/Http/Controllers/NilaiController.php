<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::orderBy('nama')->paginate(10);
        return view('nilai.nilai', ['nilai' => $nilai]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create_nilai')
        ->with('nilai_form', url('/nilai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'Proyek' => 'required|string|max:255',
            'Manajemen_Proyek' => 'required|string|max:255',
            'Jaringan_Komputer' => 'required|string|max:255',
            'Kewarganegaraan' => 'required|string|max:255',
            'PWL' => 'required|string|max:255',
            'Praktikum_Jarkom' => 'required|string|max:255',
            'Statkom' => 'required|string|max:255',
            'Business_Intellegence' => 'required|string|max:255',
            'ADBO' => 'required|string|max:255',
        ]);
        
        $data = Nilai::create($request->except('_token'));
        return redirect('/nilai')
        ->with('success', 'Data nilai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::find($id);
        return view('nilai.edit_nilai')
        ->with('nilai', $nilai)
        ->with('nilai_form', url('/nilai/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255,' .$id,
            'nim' => 'required|string|max:255',
            'Proyek' => 'required|string|max:255',
            'Manajemen_Proyek' => 'required|string|max:255',
            'Jaringan_Komputer' => 'required|string|max:255',
            'Kewarganegaraan' => 'required|string|max:255',
            'PWL' => 'required|string|max:255',
            'Praktikum_Jarkom' => 'required|string|max:255',
            'Statkom' => 'required|string|max:255',
            'Business_Intellegence' => 'required|string|max:255',
            'ADBO' => 'required|string|max:255',
        ]);

        $nilai = Nilai::where('id', '=', $id)->update($request->except('_token', '_method'));
        return redirect('/nilai')
        ->with('success', 'Data nilai berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nilai::destroy($id);
        return redirect('/nilai')
        ->with('success', 'Data nilai berhasil dihapus');
    }
}
