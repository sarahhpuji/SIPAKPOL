@extends('Layout2.base')
@section('title', 'SIPAKPOL')
@section('content')

    <section class="content-header">
        <div class="container">
            <div class="card card-dark card-outline">
                <div class="card-header text-center">
                    <h5>Persyaratan Administrasi bertanda(<a href="" style="text-decoration: none"
                            class="text-danger">*</a>) wajib
                        diisi</h5>

                </div>

                <div class="card-body">
                    <form action="{{ url('Dosen/pengajuan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Fungsional yang diajukan<a href=""
                                            style="text-decoration: none" class="text-danger">*</a></label>
                                    <select class="form-control @error('fungsional') is-invalid @enderror" name="fungsional"
                                        id="fungsional">
                                        <option disabled selected>-Pilih Fungsional-</option>

                                        <option value="Asisten Ahli">Asisten Ahli</option>
                                        <option value="Lektor 200">Lektor 200</option>
                                        <option value="Lektor 300">Lektor 300</option>
                                    </select>

                                    @error('fungsional')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">SK Pengantar dari Jurusan<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="sk_pengantar" id="sk_pengantar"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">SK Pengangkatan Dosen Tetap/PNS<a
                                            href="" style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="fcsk_pengangkatan"
                                        id="fcsk_pengangkatan" accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Ijazah<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="fc_ijazah" id="fc_ijazah"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Transkip S-1/D-4, S-2 serta S-3<a
                                            href="" style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="transkip" id="transkip"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Dokumen DUPAK<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="dupak" accept=".pdf">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Pernyataan Keabsahan Karya Ilmiah<a
                                            href="" style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="spabsahkarim" id="spabsahkarim"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Hasil Validasi Karya Ilmiah<a
                                            href="" style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="hasil_validasi" id="hasil_validasi"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">SK Jabatan Fungsional<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control " name="skfungsional" id="skfungsional"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">SK Pangkat Terakhir<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="skpangter" id="skpangter"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">NIDN dari laman
                                        forlap.dikti.go.id<a href="" style="text-decoration: none"
                                            class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="nidn" id="nidn"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">SK Penyesuaian Ruang<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="skruangan" id="skruangan"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">SK Golongan<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="skgol" id="skgol"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Bukti Online Publikasi Penelitian<a
                                            href="" style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="text" class="form-control" name="link_bukti" id="link_bukti">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Hasil Penilaian Peer Review<a
                                            href="" style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="nilaipeer" id="nilaipeer"
                                        accept=".pdf">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Link Karya Ilmiah Yang Telah Dipublikasi<a
                                            href="" style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="text" class="form-control" name="linkkarya" id="linkkarya">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Sasaran Kinerja/(SKP)<a href=""
                                            style="text-decoration: none" class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="skp" id="skp"
                                        accept=".pdf">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Karya Ilmiah
                                        (Jurnal/Prosiding/Majalah/Buku)<a href="" style="text-decoration: none"
                                            class="text-danger"></a></label>
                                    <input type="file" class="form-control" name="karyailmiah" id="karyailmiah"
                                        accept=".pdf">
                                </div>
                            </div>
                        </div>
                        <div class="card card-dark card-outline">
                            <div class="card-header text-center">
                                <div class="card-header text-center">
                                    <h5>Lampiran Pendukung DUPAK<a href="" style="text-decoration: none"
                                            class="text-danger"></a></h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Surat Pernyataan
                                                    Melaksanakan Kegiatan Pendidikan<a href=""
                                                        style="text-decoration: none" class="text-danger"></a></label>
                                                <input type="file" class="form-control" name="sp_pendidikan"
                                                    id="sp_pendidikan" accept=".pdf">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Surat Pernyataan
                                                    Melaksanakan Kegiatan Pengajaran<a href=""
                                                        style="text-decoration: none" class="text-danger"></a></label>
                                                <input type="file" class="form-control" name="sp_penelitian"
                                                    id="sp_penelitian" accept=".pdf">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Surat Pernyataan
                                                    Melaksanakan Kegiatan Pengabdian <a href=""
                                                        style="text-decoration: none" class="text-danger"></a></label>
                                                <input type="file" class="form-control" name="sp_pengabdian"
                                                    id="sp_pengabdian" accept=".pdf">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Surat Pernyataan
                                                    Melaksanakan Kegiatan Penunjang<a href=""
                                                        style="text-decoration: none" class="text-danger"></a></label>
                                                <input type="file" class="form-control" name="sp_penunjang"
                                                    id="sp_penunjang" accept=".pdf">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary float-right"><i class="fa fa-save"></i> SIMPAN
                        </button>
                    </form>
                </div>
            </div>
    </section>
@endsection
