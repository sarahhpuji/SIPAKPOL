@extends('Layout2.base')
@section('title', 'SIPAKPOL')
@section('content')
    <section class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>DATA PENGAJUAN</b></h5>

                </div>
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
                                                <a href="{{ url('Dosen/pengajuan/add') }}"
                                                    class="btn btn-success float-right">
                                                    <i class="fa fa-plus"> Tambah Data Pengajuan</i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10px">
                                                    <center>No.</center>
                                                </th>
                                                <th width="100px">
                                                    <center>Aksi</center>
                                                </th>
                                                <th>
                                                    <center>Fungsional Pengajuan</center>
                                                </th>
                                                <th>
                                                    <center>Tanggal Pengajuan</center>
                                                </th>
                                                <th width="200px">
                                                    <center>Status</center>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($list_item as $Berkaspengajuan)
                                                @if ($Berkaspengajuan->status == 2)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                                    class="btn btn-info">
                                                                    <i class="fa fa-info"></i></a>

                                                                <a href="{{ url('Dosen/pengajuan/hapus', $Berkaspengajuan->id) }}"
                                                                    class="btn btn-danger"
                                                                    onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <p style="text-align: center">{{ $Berkaspengajuan->fungsional }}
                                                            </p>
                                                        </td>

                                                        <td>
                                                            <p style="text-align: center">{{ $Berkaspengajuan->created_at }}
                                                            </p>
                                                        </td>

                                                        <td style="color: rgb(94, 139, 207)">
                                                            <p style="text-align: center">Pengajuan Diproses</p>
                                                        </td>

                                                    </tr>
                                                @endif
                                                @if ($Berkaspengajuan->status == 1)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                                    class="btn btn-info">
                                                                    <i class="fa fa-info"></i></a>

                                                                <a href="{{ url('Dosen/pengajuan/hapus', $Berkaspengajuan->id) }}"
                                                                    class="btn btn-danger"
                                                                    onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <p style="text-align: center">{{ $Berkaspengajuan->fungsional }}
                                                            </p>
                                                        </td>

                                                        <td>
                                                            <p style="text-align: center">
                                                                {{ $Berkaspengajuan->created_at }}</p>
                                                        </td>

                                                        <td style="color: rgb(255, 187, 0)">
                                                            <p style="text-align: center">Lengkapi Pengajuan</p>
                                                        </td>
                                                    </tr>
                                                @endif
                                                @if ($Berkaspengajuan->status == 3)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                                    class="btn btn-info">
                                                                    <i class="fa fa-info"></i></a>

                                                                <a href="{{ url('Dosen/pengajuan/hapus', $Berkaspengajuan->id) }}"
                                                                    class="btn btn-danger"
                                                                    onclick="return confirm('Yakin menghapus data ini?!')"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <p style="text-align: center">
                                                                {{ $Berkaspengajuan->fungsional }}</p>
                                                        </td>

                                                        <td>
                                                            <p style="text-align: center">
                                                                {{ $Berkaspengajuan->created_at }}</p>
                                                        </td>

                                                        <td style="color: rgb(18, 112, 19)">
                                                            <p style="text-align: center">Pengajuan Diterima</p>
                                                        </td>
                                                    </tr>
                                                @endif
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
    </section>
@endsection

{{-- @section('sidebar')

    @foreach ($list_item as $Berkaspengajuan)
        @if ($Berkaspengajuan->status == 3)
            <span class="badge badge-danger right"> New </span>
        @else
        @endif
        @if ($Berkaspengajuan->status == 4)
            <span class="badge badge-danger right"> New </span>
        @else
        @endif
    @endforeach
@endsection --}}
