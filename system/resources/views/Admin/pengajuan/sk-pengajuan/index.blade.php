@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>SK FUNGSIONAL</b></h5>
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
                                                <a class="btn btn-success"
                                                    href="{{ url('Admin/pengajuan/sk-pengajuan/create') }}">
                                                    <i class="fa fa-plus"></i>
                                                    <span>TAMBAH SK</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table responsiv">
                                        <table class="table table-bordered table-hover" id="example2">
                                            <thead>
                                                <tr>
                                                    <th width="25px">
                                                        <center>No</center>
                                                    </th>
                                                    <th width="75px">
                                                        <center>Aksi</center>
                                                    </th>
                                                    <th>
                                                        <center>Nama Dosen</center>
                                                    </th>
                                                    <th width="200px">
                                                        <center>Tanggal Upload </center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_sk as $Skpengajuan)
                                                    <tr>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        <td style="text-align: center">
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td style="text-align: center">
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal" data-target="#modal-lg"><i
                                                                        class="fa fa-info"></i>
                                                                    Lihat
                                                                </button>
                                                                <div class="modal fade" id="modal-lg">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">SK Fungsional Dosen
                                                                                </h4>
                                                                                <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                @empty($Skpengajuan->filesk)
                                                                                    <p>File Belum Di Upload</p>
                                                                                @else
                                                                                    <embed style="width: 100%; height: 400px"
                                                                                        src="{{ url("public/$Skpengajuan->filesk") }}"
                                                                                        type="application/pdf">
                                                                                @endempty
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="text-align: center">
                                                            {{ $Skpengajuan->dosen->gelar_depan }}
                                                            {{ $Skpengajuan->dosen->nama }},
                                                            {{ $Skpengajuan->dosen->gelar_belakang }}</td>
                                                        <td style="text-align: center">{{ $Skpengajuan->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
