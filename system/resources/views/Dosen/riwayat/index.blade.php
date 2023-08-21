@extends('Layout2.base')
@section('title', 'SIPAKPOL')
@section('content')
    <section class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>RIWAYAT PENGAJUAN</b></h5>
                    {{-- <a href="{{ url('Dosen/pengajuan/add') }}" class="btn btn-success float-right">
                        <i class="fa fa-plus"> Tambah Data Pengajuan</i>
                    </a> --}}
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
                                @if ($Berkaspengajuan->status == 3)
                                    <tr>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('Dosen/riwayat', $Berkaspengajuan->id) }}"
                                                    class="btn btn-info">
                                                    <i class="fa fa-info"> lihat </i></a>
                                            </div>
                                        </td>
                                        <td>
                                            <p style="text-align: center">{{ $Berkaspengajuan->fungsional }}</p>
                                        </td>
                                        <td>
                                            <p style="text-align: center">{{ $Berkaspengajuan->created_at }}</p>
                                        </td>

                                        <td><button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                Pengajuan
                                                Diterima </button></td>
                                    </tr>
                                @endif
                                @if ($Berkaspengajuan->status == 4)
                                    <tr>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('Dosen/riwayat', $Berkaspengajuan->id) }}"
                                                    class="btn btn-info">
                                                    <i class="fa fa-info"> lihat </i></a>
                                            </div>
                                        </td>

                                        <td>
                                            <p style="text-align: center">{{ $Berkaspengajuan->fungsional }}</p>
                                        </td>
                                        <td>
                                            <p style="text-align: center">{{ $Berkaspengajuan->created_at }}</p>
                                        </td>
                                        <td><button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                Pengajuan
                                                Ditolak </button></td>
                                    </tr>
                                @endif
                                {{-- <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('Dosen/riwayat', $Berkaspengajuan->id) }}" class="btn btn-info">
                                                <i class="fa fa-info"> lihat </i></a>
                                        </div>
                                    </td>

                                    <td>
                                        <p style="text-align: center">{{ $Berkaspengajuan->fungsional }}</p>
                                    </td>

                                    <td>
                                        <p style="text-align: center">{{ $Berkaspengajuan->created_at }}</p>
                                    </td>

                                    <td>
                                        <button type="button" class=" btn btn-block btn-outline-success btn-sm"> Pengajuan
                                            Diterima </button>
                                    </td>
                                </tr> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card card-info card-outline">
                <div class="card-header align-items-center">
                    <h5><b>SK FUNGSIONAL</b></h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="10px">
                                    <center>No.</center>
                                </th>

                                <th>
                                    <center>Fungsional Pengajuan</center>
                                </th>
                                <th>
                                    <center>Tanggal Pengajuan</center>
                                </th>
                                <th width="200px">
                                    <center>Aksi</center>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                                
                            @endphp
                            @foreach ($list_sk as $Skpengajuan)
                                @if (auth()->user()->id == $Skpengajuan->id_dosen)
                                    <tr>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            <p style="text-align: center">{{ $Skpengajuan->dosen->fungsional }}</p>
                                        </td>
                                        {{-- <td>
                                            <div class="btn-group">


                                            </div>
                                        </td> --}}
                                        <td>
                                            <p style="text-align: center">{{ $Skpengajuan->created_at }}</p>
                                        </td>

                                        <td style="text-align: center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg15"><i class="fa fa-download"></i>
                                                Unduh SK
                                            </button>
                                            <div class="modal fade" id="modal-lg15">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">SK Fungsional
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body center">
                                                            <embed style="width: 100%; height: 400px"
                                                                src="{{ url("public/$Skpengajuan->filesk") }}"
                                                                type="application/pdf">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endif
                            @endforeach
                            {{-- @php
                                $no = 1;
                            @endphp
                            @foreach ($list_sk as $Skpengajuan)
                                <tr>
                                    <td>{{ $no++ }}</td>

                                    <td>
                                        <p style="text-align: center">{{ $Berkaspengajuan->fungsional }}</p>
                                    </td>

                                    <td>
                                        <p style="text-align: center">{{ $Berkaspengajuan->created_at }}</p>
                                    </td>

                                    <td>
                                        <a href="{{ url('public') }}/{{ $Berkaspengajuan->sk_pengantar }}"
                                            download="{{ url('public') }}/{{ $Berkaspengajuan->sk_pengantar }}"
                                            class=" px-4 btn btn-sm btn-primary d-flex align-items-center">
                                            <i class="fa fa-download "></i><span class="px-4 align-item-center">Unduh
                                                SK</span></a>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
