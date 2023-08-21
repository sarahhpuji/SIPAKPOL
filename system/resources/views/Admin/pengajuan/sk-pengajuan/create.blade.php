@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <div class="card-title">
                                Tambah SK Fungsional Dosen
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('Admin/pengajuan/sk-pengajuan') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Nama Dosen<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <select name="id_dosen" class="form-control">
                                                @foreach ($list_dosen as $dosen)
                                                    <option value="{{ $dosen->id }}">{{ $dosen->nama }},
                                                        {{ $dosen->gelar_belakang }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">File SK<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="file" class="form-control" name="filesk" id="filesk"
                                                accept="application/pdf,application/vnd.ms-excel">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary float-right"><i class="fa fa-upload"></i> Kirim </button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection
