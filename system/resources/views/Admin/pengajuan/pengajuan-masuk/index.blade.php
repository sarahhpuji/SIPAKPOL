@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>PENGAJUAN MASUK</b></h5>
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
                                        <center>Aksi</center>
                                    </th>
                                    <th>
                                        <center>Nama Pengusul</center>
                                    </th>
                                    <th>
                                        <center>Fungsional Pengajuan</center>
                                    </th>
                                    <th>
                                        <center>TMT Fungsional Terakhir</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($list_pengajuan as $Berkaspengajuan)
                                    @if ($Berkaspengajuan->status == 2)
                                        <tr>
                                            <td style="text-align: center">
                                                {{ $no++ }}
                                            </td>
                                            <td style="text-align: center">
                                                <div class="btn-group">
                                                    <a href="{{ url('Admin/pengajuan/pengajuan-masuk', $Berkaspengajuan->id) }}"
                                                        class="btn btn-info">
                                                        <i class="fa fa-info"> lihat </i></a>
                                                </div>
                                            </td>
                                            <td style="text-align: center">
                                                {{ $Berkaspengajuan->dosen->gelar_depan }}
                                                {{ $Berkaspengajuan->dosen->nama }},
                                                {{ $Berkaspengajuan->dosen->gelar_belakang }}</td>
                                            <td style="text-align: center">{{ $Berkaspengajuan->fungsional }}</td>
                                            <td style="text-align: center">{{ $Berkaspengajuan->dosen->tmtfungsional }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->



        </section>
    </div>

@endsection
