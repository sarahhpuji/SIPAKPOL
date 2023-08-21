@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline">
                <div class="card-header align-items-center">
                    <h5><b>RIWAYAT PENGAJUAN</b></h5>
                </div>
                <div class="card-body">
                    <div class="table responsiv">
                        <table class="table table-bordered table-hover" id="example2">
                            <thead>
                                <tr>
                                    <th width="25px">
                                        <center>No</center>
                                    </th>
                                    <th width="50px">
                                        <center>Aksi</center>
                                    </th>
                                    <th>
                                        <center>Nama Pengusul</center>
                                    </th>
                                    <th width="175px">
                                        <center>Unit Kerja</center>
                                    </th>
                                    <th width="150px">
                                        <center>Status Pengajuan</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($list_pengajuan as $Berkaspengajuan)
                                    @if ($Berkaspengajuan->status == 3)
                                        <tr>
                                            <td style="text-align: center">
                                                {{ $no++ }}
                                            </td>
                                            <td style="text-align: center">
                                                <div class="btn-group">
                                                    <a href="{{ url('Admin/riwayat-pengajuan', $Berkaspengajuan->id) }}"
                                                        class="btn btn-info">
                                                        <i class="fa fa-info"> lihat </i></a>
                                                </div>
                                            </td>
                                            <td style="text-align: center">{{ $Berkaspengajuan->dosen->gelar_depan }}
                                                {{ $Berkaspengajuan->dosen->nama }},
                                                {{ $Berkaspengajuan->dosen->gelar_belakang }}</td>
                                            <td style="text-align: center">{{ $Berkaspengajuan->dosen->unit_kerja }}</td>
                                            <td style="color: rgb(60, 255, 0)">
                                                <p style="text-align: center">Pengajuan Diterima</p>
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($Berkaspengajuan->status == 4)
                                        <tr>
                                            <td style="text-align: center">
                                                {{ $no++ }}
                                            </td>
                                            <td style="text-align: center">
                                                <div class="btn-group">
                                                    <a href="{{ url('Admin/riwayat-pengajuan', $Berkaspengajuan->id) }}"
                                                        class="btn btn-info">
                                                        <i class="fa fa-info"> lihat </i></a>
                                                </div>
                                            </td>
                                            <td style="text-align: center">{{ $Berkaspengajuan->dosen->gelar_depan }}
                                                {{ $Berkaspengajuan->dosen->nama }},
                                                {{ $Berkaspengajuan->dosen->gelar_belakang }}</td>
                                            <td style="text-align: center">{{ $Berkaspengajuan->dosen->unit_kerja }}</td>
                                            <td style="color: rgb(255, 0, 0)">
                                                <p style="text-align: center">Pengajuan Ditolak</p>

                                            </td>
                                        </tr>
                                    @endif
                                    {{-- @if ($Berkaspengajuan->status == 3)
                                        <tr>
                                            <td>
                                                {{ $no++ }}
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('Admin/pengajuan/pengajuan-masuk', $Berkaspengajuan->id) }}"
                                                        class="btn btn-info">
                                                        <i class="fa fa-info"> lihat </i></a>
                                                </div>
                                            </td>
                                            <td>{{ $Berkaspengajuan->dosen->nama }}</td>
                                            <td>{{ $Berkaspengajuan->fungsional }}</td>
                                        </tr>
                                    @endif --}}
                                @endforeach
                                {{-- @foreach ($list_sk as $Skpengajuan)
									<tr>
										<td style="text-align: center">
											{{ $no++ }}
										</td>
										<td style="text-align: center">
											<div class="btn-group">
												<a href="{{ url('Admin/riwayat-pengajuan/detail-sk', $Skpengajuan->id) }}" class="btn btn-info">
													<i class="fa fa-info"> lihat </i></a>
											</div>
										</td>
										<td style="text-align: center">{{ $Skpengajuan->dosen->gelar_depan }}
											{{ $Skpengajuan->dosen->nama }}, {{ $Skpengajuan->dosen->gelar_belakang }}</td>
										<td style="text-align: center">{{ $Skpengajuan->dosen->unit_kerja }}</td>
										<td style="color: blue">
											<p style="text-align: center">SK Dosen</p>

										</td>
									</tr>
								@endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->



        </section>
    </div>
    </div>
    </div>
@endsection
