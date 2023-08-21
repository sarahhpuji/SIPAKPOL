@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="btn btn-primary" href="{{ url('Admin/dosen') }}">
                                            <i class=" fa fa-arrow-left"></i>
                                            <span>Kembali</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-title">Edit Data Dosen</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('Admin/dosen/edit', $list->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">NIP/NUP</label>
                                            <input type="text" name="nip" value="{{ $list->nip }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Nama Lengkap</label>
                                            <input type="text" name="nama" value="{{ $list->nama }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Gelar Depan</label>
                                            <input type="text" name="gelar_depan" value="{{ $list->gelar_depan }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Gelar Belakang</label>
                                            <input type="text" name="gelar_belakang" value="{{ $list->gelar_belakang }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Unit Kerja</label>
                                            <input type="text" name="unit_kerja" value="{{ $list->unit_kerja }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Status</label>
                                            <input type="name" name="status" value="{{ $list->status }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Golongan</label>
                                            <input type="text" name="golongan" value="{{ $list->golongan }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Golongan TMT</label>
                                            <input type="date" name="gol_tmt" value="{{ $list->gol_tmt }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Pengangkatan Pertama</label>
                                            <input type="text" name="skpengper" value="{{ $list->skpengper }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Pengangkatan Terakhir</label>
                                            <input type="text" name="skpengter" value="{{ $list->skpengter }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Golongan</label>
                                            <input type="text" name="skgol" value="{{ $list->skgol }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Penyesuaian Masa Kerja</label>
                                            <input type="text" name="skmasakerja" value="{{ $list->skmasakerja }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Struktural</label>
                                            <input type="text" name="struktural" value="{{ $list->struktural }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Fungsional</label>
                                            <input type="text" name="fungsional" value="{{ $list->fungsional }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">TMT Fungsional</label>
                                            <input type="date" name="tmtfungsional" value="{{ $list->tmtfungsional }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Ijazah</label>
                                            <input type="text" name="ijazah" value="{{ $list->ijazah }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Jurusan</label>
                                            <input type="text" class="form-control" name="jurusan"
                                                value="{{ $list->jurusan }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Asal Perguruan Tinggi</label>
                                            <input type="text" name="asalpt" value="{{ $list->asalpt }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tahun Lulus</label>
                                            <input type="date" name="tahunlulus" value="{{ $list->tahunlulus }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tempat Lahir</label>
                                            <input type="text" name="tempatlahir" value="{{ $list->tempatlahir }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggallahir" value="{{ $list->tanggallahir }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">PASSWORD</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary float-right">
                                            <i class="fa fa-save"></i> SIMPAN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
