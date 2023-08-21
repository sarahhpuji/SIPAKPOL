<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berkaspengajuan;
use App\Models\Dosen;
use Illuminate\Http\Request;


class PengajuanMasuk extends Controller
{
    function index(){

        $data['list_pengajuan'] = Berkaspengajuan::all();
        return view('Admin.pengajuan.pengajuan-masuk.index', $data);
    }

    function show(Berkaspengajuan $Berkaspengajuan)
    {
        $data['Berkaspengajuan'] = $Berkaspengajuan;

        return view('Admin.pengajuan.pengajuan-masuk.show', $data);
    }

    function upp(Request $req, $Berkaspengajuan)
    {
        $Berkaspengajuan = Berkaspengajuan::find($Berkaspengajuan);
        if($req->deskripsi != null){
            $Berkaspengajuan->deskripsi = $req->deskripsi;
            $Berkaspengajuan->save();

            return back()-> with('success', 'Deskripsi berhasil disimpan');
        };
    }

    // function upp($id)
    // {
    //     $Berkaspengajuan = Berkaspengajuan::find($id);
    //     $Berkaspengajuan->deskripsi = request('$deskripsi');
    //     $Berkaspengajuan->save();


    // }

    function setuju($id)
    {
        $Berkaspengajuan = Berkaspengajuan::find($id);
        $Berkaspengajuan->status = 3;
        $Berkaspengajuan->save();

        return redirect('Admin/pengajuan/pengajuan-masuk')-> with('success', 'Pengajuan Dosen Disetujui');
        return redirect('Dosen/riwayat')->with('success', 'Pengajuan Anda Disetujui');
    }

    function ditolak($id)
    {
        $Berkaspengajuan= Berkaspengajuan::find($id);
        $Berkaspengajuan->status = 4;
        $Berkaspengajuan->save();

        return redirect('Admin/pengajuan/pengajuan-masuk')->with('danger', 'Pengajuan Dosen Ditolak');
        return redirect('Dosen/riwayat')->with('danger', 'Pengajuan Anda Ditolak');
    }


}