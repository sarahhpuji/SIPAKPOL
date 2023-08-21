@extends('Layout2.base')
@section('title', 'SIPAKPOL')
@section('content')
    <section class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>TEMPLATE PENGAJUAN</b></h5>
                    {{-- <a href="{{ url('Dosen/pengajuan/add') }}" class="btn btn-success float-right">
                        <i class="fa fa-plus"></i>
                    </a> --}}
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="10px">
                                    <center>No.</center>
                                </th>

                                <th>
                                    <center>Nama File</center>
                                </th>
                                <th width="325px">
                                    <center>Tanggal Upload</center>
                                </th>
                                <th width="100px">
                                    <center>Aksi</center>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($list_temp as $Templatee)
                                <tr>
                                    <td>
                                        <p style="text-align: center">{{ $no++ }}</p>
                                    </td>

                                    <td>
                                        <p style="text-align: center">
                                            {{ $Templatee->jenis_file }}
                                        </p>
                                    </td>

                                    <td>
                                        <p style="text-align: center">
                                            {{ $Templatee->tgl_upload }}
                                        </p>
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="" terget="popup"
                                                onclick="window.open('{{ url("public/$Templatee->file") }}','popup','width=800,height=600'); return false;"><button
                                                    class="btn btn-primary"><i class="fa fa-download"> Unduh
                                                    </i></button></a>
                                            {{-- <a href="{{ url('Dosen/template/delete', $Templatee->id) }}"><button
                                                    class="btn btn-danger"><i class="fa fa-trash">
                                                        Hapus </i></button></a> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
