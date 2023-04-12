@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pegawai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/employee') }}">Daftar Pegawai</a></li>
                        <li class="breadcrumb-item active">Data Pegawai</li>
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
                <h3 class="card-title">Tambah atau Edit Data Pegawai</h3>

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
                <form action="{{ $url_form }}" method="POST">
                    @csrf
                    {!! (isset($emp))? method_field('PUT') : '' !!}
                    <div class="form-group">
                        <label>NIP</label>
                        <input class="form-control @error('nip') is-invalid @enderror"
                            value="{{ isset($emp)? $emp->nip : old('nip') }}" name="nip" type="text">
                        @error('nip')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control @error('nama') is-invalid @enderror"
                            value="{{ isset($emp)? $emp->nama : old('nama') }}" name="nama" type="text">
                        @error('nama')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control @error('email') is-invalid @enderror"
                            value="{{ isset($emp)? $emp->email : old('email') }}" name="email" type="email">
                        @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input class="form-control @error('jabatan') is-invalid @enderror"
                            value="{{ isset($emp)? $emp->jabatan : old('jabatan') }}" name="jabatan" type="text">
                        @error('jabatan')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control @error('alamat') is-invalid @enderror"
                            value="{{ isset($emp)? $emp->alamat : old('alamat') }}" name="alamat" type="text">
                        @error('alamat')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input class="form-control @error('hp') is-invalid @enderror"
                            value="{{ isset($emp)? $emp->hp : old('hp') }}" name="hp" type="text">
                        @error('hp')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input class="form-control @error('tanggal_masuk') is-invalid @enderror"
                            value="{{ isset($emp)? $emp->tanggal_masuk : old('tanggal_masuk') }}" name="tanggal_masuk"
                            type="date">
                        @error('tanggal_masuk')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                ~Josafat Pratama Susilo
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection