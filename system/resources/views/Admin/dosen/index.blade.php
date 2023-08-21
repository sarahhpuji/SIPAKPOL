@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>DATA DOSEN</b></h5>
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="btn btn-success" href="{{ url('Admin/dosen/create') }}">
                                                    <i class="fa fa-plus"></i>
                                                    <span>TAMBAH DATA</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="btn btn-success mx-3" href="#uploadExcell" data-toggle="modal">
                                                    <i class="fa fa-file-excel-o"></i>
                                                    <span>IMPORT EXCEL</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table responsiv">
                                        <table class="table table-bordered table-hover" id="example2">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <center>No</center>
                                                    </th>
                                                    <th>
                                                        <center>NIP/NUP</center>
                                                    </th>
                                                    <th>
                                                        <center>Nama Lengkap</center>
                                                    </th>
                                                    <th>
                                                        <center>Fungsional</center>
                                                    </th>
                                                    <th>
                                                        <center>Status</center>
                                                    </th>
                                                    <th>
                                                        <center>Aksi</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_dosen as $dosen)
                                                    <tr>
                                                        <td>
                                                            <center>{{ $loop->iteration }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $dosen->nip }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $dosen->namalengkap() }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $dosen->fungsional }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $dosen->status }}</center>
                                                        </td>
                                                        <td>
                                                            <center>
                                                                <div class="btn-group">
                                                                    <a href="{{ url('Admin/dosen/show', $dosen->id) }}"
                                                                        class="btn btn-info"><i class="fa fa-info"></i></a>

                                                                    <a href="{{ url('Admin/dosen/edit', $dosen->id) }}"
                                                                        class="btn btn-warning"><i
                                                                            class="fa fa-edit"></i></a>

                                                                    <a href="{{ url('Admin/dosen/hapus', $dosen->id) }} "
                                                                        class="btn btn-danger"
                                                                        onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                                            class="fa fa-trash"></i></a>

                                                                </div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </section>
                        <!-- /.Left col -->

                    </div>
                    <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->


            <!-- Modal -->
            <div class="modal fade" id="uploadExcell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ url('Admin/dosen/upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">UPLOAD FILE EXCEL ANDA</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="file" name="dosen" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-primary">UPLOAD</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
