@extends('Layout2.base')
@section('title', 'SIPAKPOL')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="col-md-12 text-center">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2> " Welcome {{ auth()->user()->nama }}, {{ auth()->user()->gelar_belakang }} " To </h2>
                <h4> Sistem Informasi Pengajuan Angka Kredit Dosen Politap </h4>
                <h3> ( S I P A K P O L ) </h3>
                <br>
                <button style="background-color: rgb(13, 148, 169); color: white; width: 460px; height: 60px; border: none;">
                    <h5> Pengajuan Angka Kredit Periode Ke-3 Telah Dibuka!</h5>
                </button>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
