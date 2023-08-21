@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>TEMPLATE PENGAJUAN</b></h5>
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
                                                <a class="btn btn-success" href="{{ url('Admin/template/create') }}">
                                                    <i class="fa fa-plus"></i>
                                                    <span>TAMBAH TEMPLATE</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10px">
                                                    <center>No.</center>
                                                </th>
                                                <th width="125px">
                                                    <center>Aksi</center>
                                                </th>
                                                <th>
                                                    <center>Nama File</center>
                                                </th>
                                                <th>
                                                    <center>Tanggal Upload</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($list_format as $Templatee)
                                                <tr>
                                                    <td style="text-align: center">{{ $no++ }}</td>
                                                    <td style="text-align: center">
                                                        <div class="btn-group">
                                                            {{-- <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#modal-lg33"><i
                                                                    class="fa fa-info"></i>
                                                                Lihat
                                                            </button>
                                                            <div class="modal fade" id="modal-lg33">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">File Template
                                                                            </h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <embed style="width: 100%; height: 400px"
                                                                                src="{{ url("public/$Templatee->file") }}"
                                                                                type="application/pdf">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            {{-- <a href="" terget="popup"
                                                                onclick="window.open('{{ url("public/$Templatee->file") }}','popup','width=800,height=600'); return false;"><button
                                                                    class="btn btn-primary"><i class="fa fa-info">
                                                                    </i></button></a> --}}
                                                            <a href="{{ url('Admin/template/hapus', $Templatee->id) }}"
                                                                class="btn btn-danger"
                                                                onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                                    class="fa fa-trash"> Hapus </i></a>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center">
                                                        {{ $Templatee->jenis_file }}
                                                    </td>

                                                    <td style="text-align: center">
                                                        {{ $Templatee->tgl_upload }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
