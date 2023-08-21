@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card mt-4">
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
                            <div class="card-title">Tambah Data Dosen</div>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('Admin/dosen/create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">NIP/NUP<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="text" name="nip"
                                                class="form-control @error('nip') is-invalid @enderror">
                                            @error('nip')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Nama Lengkap<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror">
                                            @error('nama')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Gelar Depan</label>
                                            <input type="text" name="gelar_depan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Gelar Belakang<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="text" name="gelar_belakang"
                                                class="form-control @error('gelar_belakang') is-invalid @enderror">
                                            @error('gelar_belakang')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Unit Kerja<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <select name="unit_kerja"
                                                class="form-control @error('unitkerja') is-invalid @enderror">
                                                <option value="">Pilih Unit Kerja</option>
                                                <option value="Teknologi Informasi">Tenaga Pengajar Teknologi Informasi
                                                </option>
                                                <option value="Teknologi Listrik">Tenaga Pengajar Teknologi Listrik</option>
                                                <option value="Teknologi Rekayasa Kontruksi Jalan & Jembatan">Tenaga
                                                    Pengajar Teknologi Rekayasa Kontruksi Jalan & Jembatan</option>
                                                <option value="Pemeliharaan Mesin">Tenaga Pengajar Pemeliharaan Mesin
                                                </option>
                                                <option value="Teknologi Pertambangan">Tenaga Pengajar Teknologi
                                                    Pertambangan</option>
                                                <option value="Pengelolahan Hasil Perkebunan">Tenaga Pengajar Teknologi
                                                    Hasil Perkebunan</option>
                                                <option value="Teknologi Pertambangan">Tenaga Pengajar Teknologi Produksi
                                                    Tanaman Perkebunan
                                                </option>
                                                <option value="Teknologi Pertambangan">Tenaga Pengajar Agroindustri</option>
                                            </select>
                                            @error('unit_kerja')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Status<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="name" name="status"
                                                class="form-control @error('status') is-invalid @enderror">
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Golongan<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="text" name="golongan"
                                                class="form-control @error('golongan') is-invalid @enderror">
                                            @error('golongan')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Golongan TMT<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="date" name="gol_tmt"
                                                class="form-control @error('gol_tmt') is-invalid @enderror">
                                            @error('gol_tmt')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Pengangkatan Pertama<a
                                                    href="" style="text-decoration: none"
                                                    class="text-danger">*</a></label>
                                            <input type="text" name="skpengper"
                                                class="form-control @error('skpengper') is-invalid @enderror">
                                            @error('skpengper')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Pengangkatan Terakhir<a
                                                    href="" style="text-decoration: none"
                                                    class="text-danger">*</a></label>
                                            <input type="text" name="skpengter"
                                                class="form-control @error('skpengter') is-invalid @enderror">
                                            @error('skpengter')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Golongan</label>
                                            <input type="text" name="skgol" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">SK Penyesuaian Masa Kerja</label>
                                            <input type="text" name="skmasakerja" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Struktural</label>
                                            <input type="text" name="struktural" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Fungsional</label>
                                            <input type="text" name="fungsional" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">TMT Fungsional</label>
                                            <input type="date" name="tmtfungsional" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Ijazah<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="text" name="ijazah"
                                                class="form-control @error('ijazah') is-invalid @enderror">
                                            @error('ijazah')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Jurusan<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="text" name="jurusan"
                                                class="form-control @error('jurusan') is-invalid @enderror">
                                            @error('jurusan')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Asal Perguruan Tinggi<a
                                                    href="" style="text-decoration: none"
                                                    class="text-danger">*</a></label>
                                            <input type="text" name="asalpt"
                                                class="form-control @error('asalpt') is-invalid @enderror">
                                            @error('asalpt')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tahun Lulus<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="date" name="tahunlulus"
                                                class="form-control @error('tahunlulus') is-invalid @enderror">
                                            @error('tahunlulus')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tempat Lahir<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="text" name="tempatlahir"
                                                class="form-control @error('tempatlahir') is-invalid @enderror">
                                            @error('tempatlahir')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Tanggal Lahir<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="date" name="tanggallahir"
                                                class="form-control @error('tanggallahir') is-invalid @enderror">
                                            @error('tanggallahir')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">Jenis Kelamin<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <select name="jeniskelamin"
                                                class="form-control  @error('jeniskelamin') is-invalid @enderror">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('jeniskelamin')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="" class="control-label">PASSWORD<a href=""
                                                    style="text-decoration: none" class="text-danger">*</a></label>
                                            <input type="password" name="password"
                                                class="form-control  @error('password') is-invalid @enderror">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
                    <!-- /.card -->

                </div>
                <!-- /.Left col -->

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
