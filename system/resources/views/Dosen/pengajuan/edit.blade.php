@extends('Layout2.base')
@section('title', 'SIPAKPOL')
@section('content')


    <section class="content-header">
        <a href="{{ url('Dosen/pengajuan') }}" class="btn btn-xs btn-primary">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>

        <div class="container mt-2">
            <div class="card card-dark card-outline">
                <div class="card-header text-center">
                    <h5><b>DATA PENGAJUAN</b></h5>
                    <p>Sebelum menekan tombol kirim, pastikan semua field pengajuan sudah terisi dengan benar</p>
                </div>
                <div class="card-body">
                    <div class="col-md-12">

                        <div class="row">
                            {{-- <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header text-center card-outline card-dark">
                                            <b>Jenis Fungsional</b>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                @empty($Berkaspengajuan->fungsional)
                                                    <form action="{{ url('Dosen/pengajuan', $Berkaspengajuan->id) }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" name="fungsional" id="fungsional"
                                                            class="form-control">
                                                        <br>
                                                        <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                            File belum di Upload</button>
                                                        <br>
                                                        <button class="btn btn-primary float-right"> SIMPAN</button>
                                                    </form>
                                                @else
                                                    <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                        File sudah di Upload</button>
                                                @endempty
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>SK Pengantar dari Jurusan</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->sk_pengantar)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    {{-- @method('PUT') --}}
                                                    <input type="file" class="form-control" name="sk_pengantar"
                                                        id="sk_pengantar" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty
                                        </div>
                                        {{-- <form action="{{ url('Dosen/pengajuan', $Berkaspengajuan->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="form-group">
                                                        @empty($Berkaspengajuan->sk_pengantar)
                                                            <input type="file" class="form-control" name="sk_pengantar"
                                                                value="{{ $Berkaspengajuan->sk_pengantar }}" id="sk_pengantar"
                                                                accept=".pdf" required>
                                                            <br>
                                                            <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                                File belum di Upload</button>
                                                        @else
                                                            <button type="button"
                                                                class=" btn btn-block btn-outline-success btn-sm">
                                                                File sudah di Upload</button>
                                                        @endempty
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </div>
                                            </form> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>SK Pengangkatan Dosen Tetap</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->fcsk_pengangkatan)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="fcsk_pengangkatan"
                                                        id="fcsk_pengangkatan" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Ijazah</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->fc_ijazah)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="fc_ijazah" id="fc_ijazah"
                                                        accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Transkip S-1/D-4, S-2 serta S-3</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->transkip)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="transkip" id="transkip"
                                                        accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Pernyataan Keabsahan Karya Ilmiah</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->spabsahkarim)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="spabsahkarim"
                                                        id="spabsahkarim" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Hasil Validasi Karya Ilmiah</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->hasil_validasi)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="hasil_validasi"
                                                        id="hasil_validasi" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>SK Jabatan Fungsional</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->skfungsional)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="skfungsional"
                                                        id="skfungsional" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>SK Pangkat Terakhir</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->skpangter)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="skpangter"
                                                        id="skpangter" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>NIDN dari laman forlap.dikti.go.id</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->nidn)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="nidn" id="nidn"
                                                        accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>SK Penyesuaian Ruang</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->skruangan)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="skruangan"
                                                        id="skruangan" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>SK Golongan</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->skgol)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="skgol" id="skgol"
                                                        accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Bukti Online Publikasi Penelitian</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->link_bukti)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" name="link_bukti" id="link_bukti"
                                                        class="form-control">
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty
                                            {{-- @empty($Berkaspengajuan->link_bukti)
                                                    <input type="text" name="link_bukti" id=""
                                                        class="form-control">
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di upload</button>
                                                @else
                                                    <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                        File sudah di Upload</button>
                                                @endempty --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Hasil Penilaian Peer Review</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->nilaipeer)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="nilaipeer"
                                                        id="nilaipeer" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Link Karya Ilmiah Yang Telah Dipublikasi</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->linkkarya)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" name="linkkarya" id="linkkarya"
                                                        class="form-control">
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                            {{-- @empty($Berkaspengajuan->linkkarya)
                                                    <input type="text" name="linkkarya" id=""
                                                        class="form-control">
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di upload</button>
                                                @else
                                                    <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                        File sudah di Upload</button>
                                                @endempty --}}
                                            {{-- <input type="text" name="linkkarya" id=""
                                                    value="{{ $Berkaspengajuan->linkkarya }}" class="form-control">
                                                <br>
                                                <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                    File belum di upload</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Dokumen DUPAK</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->dupak)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="dupak" id="dupak"
                                                        accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Sasaran Kinerja/(SKP)</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->skp)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="skp" id="skp"
                                                        accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center card-outline card-dark">
                                        <b>Karya Ilmiah (Jurnal/Prosiding/Majalah/Buku)</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @empty($Berkaspengajuan->karyailmiah)
                                                <form action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="file" class="form-control" name="karyailmiah"
                                                        id="karyailmiah" accept=".pdf" required>
                                                    <br>
                                                    <button type="button" class=" btn btn-block btn-outline-danger btn-sm">
                                                        File belum di Upload</button>
                                                    <br>
                                                    <button class="btn btn-primary float-right"> SIMPAN</button>
                                                </form>
                                            @else
                                                <button type="button" class=" btn btn-block btn-outline-success btn-sm">
                                                    File sudah di Upload</button>
                                            @endempty
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <div class="col-md-12">
                                <div class="card-header">
                                    <h5>
                                        <center>Lampiran Pendukung Dupak</center>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header text-center card-outline card-dark">
                                                    <b>Surat Pernyataan
                                                        Melaksanakan Kegiatan Pendidikan</b>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        @empty($Berkaspengajuan->sp_pendidikan)
                                                            <form
                                                                action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="file" class="form-control"
                                                                    name="sp_pendidikan" id="sp_pendidikan" accept=".pdf"
                                                                    required>
                                                                <br>
                                                                <button type="button"
                                                                    class=" btn btn-block btn-outline-danger btn-sm">
                                                                    File belum di Upload</button>
                                                                <br>
                                                                <button class="btn btn-primary float-right">
                                                                    SIMPAN</button>
                                                            </form>
                                                        @else
                                                            <button type="button"
                                                                class=" btn btn-block btn-outline-success btn-sm">
                                                                File sudah di Upload</button>
                                                        @endempty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header text-center card-outline card-dark">
                                                    <b>Surat Pernyataan
                                                        Melaksanakan Kegiatan Pengajaran</b>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        @empty($Berkaspengajuan->sp_penelitian)
                                                            <form
                                                                action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="file" class="form-control"
                                                                    name="sp_penelitian" id="sp_penelitian" accept=".pdf"
                                                                    required>
                                                                <br>
                                                                <button type="button"
                                                                    class=" btn btn-block btn-outline-danger btn-sm">
                                                                    File belum di Upload</button>
                                                                <br>
                                                                <button class="btn btn-primary float-right">
                                                                    SIMPAN</button>
                                                            </form>
                                                        @else
                                                            <button type="button"
                                                                class=" btn btn-block btn-outline-success btn-sm">
                                                                File sudah di Upload</button>
                                                        @endempty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header text-center card-outline card-dark">
                                                    <b>Surat Pernyataan
                                                        Melaksanakan Kegiatan Pengabdian</b>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        @empty($Berkaspengajuan->sp_pengabdian)
                                                            <form
                                                                action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="file" class="form-control"
                                                                    name="sp_pengabdian" id="sp_pengabdian" accept=".pdf"
                                                                    required>
                                                                <br>
                                                                <button type="button"
                                                                    class=" btn btn-block btn-outline-danger btn-sm">
                                                                    File belum di Upload</button>
                                                                <br>
                                                                <button class="btn btn-primary float-right">
                                                                    SIMPAN</button>
                                                            </form>
                                                        @else
                                                            <button type="button"
                                                                class=" btn btn-block btn-outline-success btn-sm">
                                                                File sudah di Upload</button>
                                                        @endempty
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header text-center card-outline card-dark">
                                                    <b>Surat Pernyataan
                                                        Melaksanakan Kegiatan Penunjang</b>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        @empty($Berkaspengajuan->sp_penunjang)
                                                            <form
                                                                action="{{ url('Dosen/pengajuan/edit', $Berkaspengajuan->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="file" class="form-control"
                                                                    name="sp_penunjang" id="sp_penunjang" accept=".pdf"
                                                                    required>
                                                                <br>
                                                                <button type="button"
                                                                    class=" btn btn-block btn-outline-danger btn-sm">
                                                                    File belum di Upload</button>
                                                                <br>
                                                                <button class="btn btn-primary float-right">
                                                                    SIMPAN</button>
                                                            </form>
                                                        @else
                                                            <button type="button"
                                                                class=" btn btn-block btn-outline-success btn-sm">
                                                                File sudah di Upload</button>
                                                        @endempty
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <form action="{{ url('Dosen/pengajuan/kirim', $Berkaspengajuan->id) }}" method="post">
                            @csrf

                            <button class="btn btn-success float-right"><i class="fa fa-upload"></i><b>
                                    KIRIM</b></button>
                        </form>
                    </div>
                </div>
    </section>
@endsection
