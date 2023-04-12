@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Pegawai</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">CRUD Pegawai</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">

                <a href="{{url('employee/create')}}" class="btn btn-sm btn-success mb-3">Tambah Data</a>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($emp->count() > 0)
                        @foreach($emp as $i => $e)
                        <tr>
                            <td>{{$i + $emp->firstitem() }}</td>
                            <td>{{$e->nip}}</td>
                            <td>{{$e->nama}}</td>
                            <td>{{$e->jabatan}}</td>
                            <td>{{$e->alamat}}</td>
                            <td>{{$e->hp}}</td>
                            <td>
                                <!-- Bikin tombol edit dan delete -->
                                <a href="{{ url('/employee/'. $e->id.'/edit') }}"
                                    class="btn btn-sm btn-warning mr-2">Edit</a>

                                <form method="POST" action="{{ url('/employee/'.$e->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                {{ $emp->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection