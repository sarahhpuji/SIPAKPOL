<x-module.pegawai-unitkerja>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
        <li class="breadcrumb-item">Pegawai</li>
        <li class="breadcrumb-item">Unit-Kerja</li>
        <li class="breadcrumb-item">Pengajuan SK</li>
        <li class="breadcrumb-item active">Detail</li>
    </ul>
    <x-template.button.back-button url="pegawai/unit-kerja/pengajuan-sk" />
    <div class="card mt-2">
        <div class="card-header">
            <div class="card-title">
                Surat Masuk
            </div>
        </div>
        <div class="card-body">
            @csrf
            <div class="col-md-6">
                <dl>
                    <dt>Nama Pengaju</dt>
                    <dd>{{ $sk_pangkat->judul_pengajuan }}</dd>
                    <dt></dt>
                    <dd></dd>
                </dl>
            </div>
            <div class="col-md-6">
                <dl>
                    <dt>Tanggal Pengajuan</dt>
                    <dd>{{ $sk_pangkat->tanggal }}</dd>
                </dl>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Kelengkapan Surat
                </div>
            </div>
            <div class="card-body">
                <div class="row">
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
                                    <td> Berkas Persyaratan Umum<a href="" style="text-decoration: none"
                                            class="text-danger">*</a> </td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-toggle="modal"
                                            data-target="#modal-lg"><i class="fa fa-info"></i>
                                            Lihat
                                        </button>
                                    <td>
                                        <div class="modal fade" id="modal-lg">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Berkas Persyaratan Umum</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <embed style="width: 100%; height: 400px"
                                                            src="{{ url("public/$sk_pangkat->berkas_sarat_umum") }}"
                                                            type="application/pdf">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Berkas Persyaratan Khusus Reguler<a href="" style="text-decoration: none"
                                            class="text-danger">*</a> </td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-toggle="modal"
                                            data-target="#modal-lg11"><i class="fa fa-info"></i>
                                            Lihat
                                        </button>
                                    <td>
                                        <div class="modal fade" id="modal-lg11">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Berkas Persyaratan Khusus Reguler</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <embed style="width: 100%; height: 400px"
                                                            src="{{ url("public/$sk_pangkat->berkas_sarat_khusus_reguler") }}"
                                                            type="application/pdf">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> Berkas Sarat Struktural <a href="" style="text-decoration: none"
                                            class="text-danger">*</a> </td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-toggle="modal"
                                            data-target="#modal-lg12"><i class="fa fa-info"></i>
                                            Lihat
                                        </button>
                                    </td>
                                    <td>
                                        <div class="modal fade" id="modal-lg12">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"> Berkas Sarat Struktural </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <embed style="width: 100%; height: 400px"
                                                            src="{{ url("public/$sk_pangkat->berkas_sarat_struktural") }}"
                                                            type="application/pdf">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td>Berkas Kenaikan Fungsional<a href="" style="text-decoration: none"
                                            class="text-danger">*</a> </td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-toggle="modal"
                                            data-target="#modal-lg13"><i class="fa fa-info"></i>
                                            Lihat
                                        </button>
                                    </td>
                                    <td>
                                        <div class="modal fade" id="modal-lg13">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Berkas Kenaikan Fungsional</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <embed style="width: 100%; height: 400px"
                                                            src="{{ url("public/$sk_pangkat->berkas_kenaikan_fungsional") }}"
                                                            type="application/pdf">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Berkas Kenaikan Penyesuaian Ijazah </td>
                                    <td>
                                        <button type="button" class="btn btn-dark" data-toggle="modal"
                                            data-target="#modal-lg14"><i class="fa fa-info"></i>
                                            Lihat
                                        </button>
                                    </td>
                                    <td>
                                        <div class="modal fade" id="modal-lg14">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Berkas Kenaikan Penyesuaian Ijazah</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <embed style="width: 100%; height: 400px"
                                                            src="{{ url("public/$sk_pangkat->berkas_kenaikan_penyesuaian_ijazah") }}"
                                                            type="application/pdf">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control"></textarea>
                            </div>
                            {{-- <div class="form-group">
                                    <label for="" class="control-label">Deskripsi</label>
                                    <input type="text" class="form-control" name="linkkarya">
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.pegawai-unitkerja>