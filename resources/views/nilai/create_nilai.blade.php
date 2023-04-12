@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Nilai</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Data Nilai</li>
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
                <h3 class="card-title">Tabel Nilia</h3>

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
                <form method="post" action="{{ $nilai_form }}">
                    @csrf
                    {!! (isset($nilai))? method_field('PUT') : '' !!}

                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->nama : old('nama')}}" name="nama">
                        @error('nama')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->nim : old('nim')}}" name="nim">
                        @error('nim')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Proyek</label>
                        <input type="text" class="form-control @error('Proyek') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->Proyek : old('Proyek')}}" name="Proyek">
                        @error('Proyek')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Manajemen Proyek</label>
                        <input type="text" class="form-control @error('Manajemen_Proyek') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->Manajemen_Proyek : old('Manajemen_Proyek')}}"
                            name="Manajemen_Proyek">
                        @error('Manajemen_Proyek')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jaringan komputer</label>
                        <input type="text" class="form-control @error('Jaringan_Komputer') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->Jaringan_Komputer : old('Jaringan_Komputer')}}"
                            name="Jaringan_Komputer">
                        @error('Jaringan_Komputer')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <input type="text" class="form-control @error('Kewarganegaraan') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->Kewarganegaraan : old('Kewarganegaraan')}}"
                            name="Kewarganegaraan">
                        @error('Kewarganegaraan')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Pemrograman Web Lanjut</label>
                        <input type="text" class="form-control @error('PWL') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->PWL : old('PWL')}}" name="PWL">
                        @error('PWL')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Praktikum Jaringan Komputer</label>
                        <input type="text" class="form-control @error('Praktikum_Jarkom') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->Praktikum_Jarkom : old('Praktikum_Jarkom')}}"
                            name="Praktikum_Jarkom">
                        @error('Praktikum_Jarkom')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Statistika Komputasi</label>
                        <input type="text" class="form-control @error('Statkom') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->Statkom : old('Statkom')}}" name="Statkom">
                        @error('Statkom')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Business Intellegence</label>
                        <input type="text" class="form-control @error('Business_Intellegence') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->Business_Intellegence : old('Business_Intellegence')}}"
                            name="Business_Intellegence">
                        @error('Business_Intellegence')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>ADBO</label>
                        <input type="text" class="form-control @error('ADBO') is-invalid @enderror"
                            value="{{ isset($nilai)? $nilai->ADBO : old('ADBO')}}" name="ADBO">
                        @error('ADBO')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- /.card-body -->
            <!-- /.card-body -->
            <div class="card-footer">
                ~Alfino Febry Krissaputra
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

@endsection