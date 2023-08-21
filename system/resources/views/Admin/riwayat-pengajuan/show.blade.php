@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <div class="content-header">
        <div class="container-fluid pt-3 col-md-12">
            <div class="card card-dark card-outline mt-3">
                <div class="card-header">
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ url('Admin/riwayat-pengajuan') }}">
                                    <i class=" fa fa-arrow-left"></i>
                                    <span>Kembali</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-title"><b>DETAIL DATA PENGAJUAN DOSEN</b></div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <dl>
                                    <dt>Fungsional yang diajukan</dt>
                                    <dd>{{ $Berkaspengajuan->fungsional }}</dd>
                                    <dt>Tanggal Pengajuan</dt>
                                    <dd>{{ $Berkaspengajuan->created_at }}</dd>
                                    <dt>TMT Fungsional Terakhir</dt>
                                    <dd>{{ $Berkaspengajuan->dosen->tmtfungsional }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Bukti Online Publikasi Penelitian</dt>
                                    <dd>{{ $Berkaspengajuan->link_bukti }}</dd>
                                    <dt>Link Karya Ilmiah Yang Telah Dipublikasi</dt>
                                    <dd>{{ $Berkaspengajuan->linkkarya }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-12">
                                <dl>
                                    <dt>Catatan</dt>
                                    <dd> {{ $Berkaspengajuan->deskripsi }} </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 style="text-align: center">KELENGKAPAN BERKAS</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <table class="table table-dataTable table-striped" data-sort>
                                <thead>
                                    <th width="30px">No</th>
                                    <th>Nama File</th>
                                    <th width="100px">File</th>
                                    {{-- <th width="50px">Kelengkapan</th> --}}
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> SK Pengantar dari Jurusan <a href="" style="text-decoration: none"
                                                class="text-danger"></a> </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        <td>
                                            <div class="modal fade" id="modal-lg">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">SK Pengantar dari Jurusan</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->sk_pengantar)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->sk_pengantar") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 2 </td>
                                        <td>SK Pengangkatan Dosen Tetap/PNS<a href="" style="text-decoration: none"
                                                class="text-danger"></a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg2"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        <td>
                                            <div class="modal fade" id="modal-lg2">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">SK Pengangkatan Dosen Tetap/PNS
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->fcsk_pengangkatan)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->fcsk_pengangkatan") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 3 </td>
                                        <td>Ijazah <a href="" style="text-decoration: none" class="text-danger"></a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg3"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg3">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Ijazah</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->fc_ijazah)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->fc_ijazah") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 4 </td>
                                        <td>Transkip S-1/D-4, S-2 serta S-3<a href="" style="text-decoration: none"
                                                class="text-danger"></a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg4"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg4">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Transkip S-1/D-4, S-2 serta S-3
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->transkip)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->transkip") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 5 </td>
                                        <td>Dokumen DUPAK</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg14"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg14">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Dokumen DUPAK
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->dupak)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->dupak") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 6 </td>
                                        <td>Pernyataan Keabsahan Karya Ilmiah</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg5"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg5">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Pernyataan Keabsahan Karya Ilmiah
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->spabsahkarim)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->spabsahkarim") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 7 </td>
                                        <td> Hasil Validasi Karya Ilmiah </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg6"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg6">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hasil Validasi Karya Ilmiah
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->hasil_validasi)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->hasil_validasi") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 8 </td>
                                        <td>SK Jabatan Fungsional </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg7"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg7">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">SK Jabatan Fungsional
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->skfungsional)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->skfungsional") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 9 </td>
                                        <td>SK Pangkat Terakhir </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg8"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg8">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">SK Pangkat Terakhir
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->skpangter)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->skpangter") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 10 </td>
                                        <td>NIDN dari laman forlap.dikti.go.id </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg9"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg9">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">NIDN dari laman
                                                                forlap.dikti.go.id
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->nidn)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->nidn") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 11 </td>
                                        <td> SK Penyesuaian Ruang </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg10"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg10">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">SK Penyesuaian Ruang
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->skruangan)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->skruangan") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 12 </td>
                                        <td> SK Golongan </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg11"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg11">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">SK Golongan
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->skgol)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->skgol") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 13 </td>
                                        <td> Hasil Penilaian Peer Review </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg12"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg12">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hasil Penilaian Peer Review
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->nilaipeer)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->nilaipeer") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 14 </td>
                                        <td> Sasaran Kinerja/(SKP) </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg14"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg14">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Sasaran Kinerja/(SKP)
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->skp)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->skp") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 15 </td>
                                        <td> Karya Ilmiah (Jurnal/Prosiding/Majalah/Buku) </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg15"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg15">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Karya Ilmiah
                                                                (Jurnal/Prosiding/Majalah/Buku)
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->karyailmiah)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->karyailmiah") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 16 </td>
                                        <td> Surat Pernyataan
                                            Melaksanakan Kegiatan Pendidikan </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg16"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg16">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Surat Pernyataan
                                                                Melaksanakan Kegiatan Pendidikan
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->sp_pendidikan)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->sp_pendidikan") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 17 </td>
                                        <td> Surat Pernyataan
                                            Melaksanakan Kegiatan Pengajaran </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg17"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg17">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Surat Pernyataan
                                                                Melaksanakan Kegiatan Pengajaran
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->sp_penelitian)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->sp_penelitian") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 18 </td>
                                        <td> Surat Pernyataan
                                            Melaksanakan Kegiatan Pengabdian </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg18"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg18">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Surat Pernyataan
                                                                Melaksanakan Kegiatan Pengabdian
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->sp_pengabdian)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->sp_pengabdian") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 19 </td>
                                        <td> Surat Pernyataan
                                            Melaksanakan Kegiatan Penunjang </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-lg19"><i class="fa fa-download"></i>
                                                Unduh
                                            </button>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="modal-lg19">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Surat Pernyataan
                                                                Melaksanakan Kegiatan Penunjang
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @empty($Berkaspengajuan->sp_penunjang)
                                                                <p>File Belum Di Upload</p>
                                                            @else
                                                                <embed style="width: 100%; height: 400px"
                                                                    src="{{ url("public/$Berkaspengajuan->sp_penunjang") }}"
                                                                    type="application/pdf">
                                                            @endempty
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <div class="col-md-12">
							@csrf
							@if ($Berkaspengajuan->status == 2)
								<form action="{{ url('Admin/pengajuan/pengajuan-masuk/deskripsi', $Berkaspengajuan->id) }}" method="post">
									@csrf
									<div class="form-group">
										<label for="deskripsi" class="control-label">Keterangan</label>
										<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
									</div>
									<button class="btn btn-info"><i class="fa fa-save"></i><b>
											Simpan</b></button>
								</form>
							@endif
						</div> --}}
                            {{-- <div class="row no-print">
							<div class="col-12">
								@csrf
								@if ($Berkaspengajuan->status == 2)
									<div class="btn-group float-right">
										<form action="{{ url('Admin/pengajuan/pengajuan-masuk/setuju', $Berkaspengajuan->id) }}" method="post">
											@csrf
											@method('PUT')
											<button class="btn btn-dark"><i class="fa fa-check"></i> <b>
													Disetuju</b></button>
										</form>
										<form action="{{ url('Admin/pengajuan/pengajuan-masuk/ditolak', $Berkaspengajuan->id) }}" method="post">
											@csrf
											@method('PUT')

											<button class="btn btn-danger"><b>X Ditolak </b></button>
										</form>
									</div>
								@endif
							</div>
						</div> --}}
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </div>
    </div>
@endsection
