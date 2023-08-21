@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card mt-4">
                        <div class="card-header">
                            {{-- <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="btn btn-primary" href="{{ url('Admin/template') }}">
                                            <i class=" fa fa-arrow-left"></i>
                                            <span>Kembali</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="card-title">Tambah Template Pengajuan</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('Admin/template') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Nama File<a href=""
                                                            style="text-decoration: none" class="text-danger">*</a></label>
                                                    <select class="form-control @error('jenis_file') is-invalid @enderror"
                                                        name="jenis_file" id="jenis_file">
                                                        <option disabled selected>-Pilih File-</option>
                                                        <option value="Dokumen DUPAK">Dokumen DUPAK</option>
                                                        <option value="Pernyataan Keabsahan Karya Ilmiah">Pernyataan
                                                            Keabsahan Karya Ilmiah
                                                        </option>
                                                        <option value="Form Permohonan Validasi">Form Permohonan Validasi
                                                        </option>
                                                        <option
                                                            value="Penilaian Peer
                                                        Review">
                                                            Penilaian Peer
                                                            Review</option>
                                                    </select>
                                                    @error('jenis_file')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">File<a href=""
                                                            style="text-decoration: none" class="text-danger">*</a></label>
                                                    <input type="file"
                                                        class="form-control @error('file') is-invalid @enderror"
                                                        name="file" id="file" accept=".docx, .xls, .xlsx">
                                                    @error('file')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Tanggal Upload</label>
                                                    <input type="date" class="form-control" name="tgl_upload"
                                                        id="tgl_upload">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <button class="btn btn-primary float-right"><i class="fa fa-upload"></i> Kirim </button>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->

            </div>
        </div><!-- /.container-fluid -->

    </section>
@endsection
