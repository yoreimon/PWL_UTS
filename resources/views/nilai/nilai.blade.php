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
      <form method="GET" action="{{ route('nilai.index') }}">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Cari Nama Mahasiswa" value="{{ request()->query('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
      </form>


        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Nilai</h3>

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

                <a href="{{url('nilai/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Proyek</th>
                            <th>Manj. Proyek</th>
                            <th>Jarkom</th>
                            <th>KWN</th>
                            <th>PWL</th>
                            <th>Prak. Jarkom</th>
                            <th>Statkom</th>
                            <th>Business I.</th>
                            <th>ADBO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($nilai->count() > 0)
                        @foreach($nilai as $i => $m)
                        <tr>
                            <td>{{$i + $nilai->firstItem() }}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->nim}}</td>
                            <td>{{$m->Proyek}}</td>
                            <td>{{$m->Manajemen_Proyek}}</td>
                            <td>{{$m->Jaringan_Komputer}}</td>
                            <td>{{$m->Kewarganegaraan}}</td>
                            <td>{{$m->PWL}}</td>
                            <td>{{$m->Praktikum_Jarkom}}</td>
                            <td>{{$m->Statkom}}</td>
                            <td>{{$m->Business_Intellegence}}</td>
                            <td>{{$m->ADBO}}</td>
                            <td>
                                <a href="{{ url('/nilai/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                                <form method="POST" action="{{ url('/nilai/'.$m->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">hapus</button>
                                </form>
                                <!-- <form action="{{ route('nilai.destroy', $m->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger">Hapus {{ $m->id }}</button>
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" id="smallBody">
                                                        <h5 class="text-center">Apakah anda yakin ingin menghapus data {{$m->nim}}?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger">Setuju</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form> -->
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
                {{ $nilai->links() }}

            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<!-- <script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#modal_delete').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script> -->


@endsection