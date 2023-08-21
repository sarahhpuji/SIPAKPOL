@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 float-right">
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
                            <div class="card-title">Lihat Data Dosen</div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>NIP/NUP</dt>
                                                <dd>{{ $list->nip }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Nama Lengkap</dt>
                                                <dd>{{ $list->namalengkap() }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Tempat Tanggal Lahir</dt>
                                                <dd>{{ $list->tempatlahir }}, {{ $list->tanggallahir }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Jenis Kelamin</dt>
                                                <dd>{{ $list->jeniskelamin }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Unit Kerja</dt>
                                                <dd>{{ $list->unit_kerja }}
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Status</dt>
                                                <dd>{{ $list->status }}
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Golongan</dt>
                                                <dd>{{ $list->golongan }}
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Golongan TMT</dt>
                                                <dd>{{ $list->gol_tmt }}
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>SK Pengangkatan Pertama</dt>
                                                <dd>{{ $list->skpengper }}
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>SK Pengangkatan Terakhir</dt>
                                                <dd>{{ $list->skpengter }}
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>SK Penyesuaian Masa Kerja</dt>
                                                <dd>{{ $list->skmasakerja }}
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Struktural</dt>
                                                <dd>{{ $list->struktural }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Fungsional</dt>
                                                <dd>{{ $list->fungsional }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>TMT Fungsional</dt>
                                                <dd>{{ $list->tmtfungsional }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Ijazah</dt>
                                                <dd>{{ $list->ijazah }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Jurusan</dt>
                                                <dd>{{ $list->jurusan }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Asal Perguruan Tinggi</dt>
                                                <dd>{{ $list->asalpt }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <dl>
                                                <dt>Tahun Lulus</dt>
                                                <dd>{{ $list->tahunlulus }}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
