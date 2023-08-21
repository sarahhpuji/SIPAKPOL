<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berkaspengajuan;
use App\Models\Skpengajuan;
use Illuminate\Http\Request;

class RiwayatAdmin extends Controller
{
    function index(){

        $data['list_pengajuan'] = Berkaspengajuan::all();
        $data['list_sk'] = Skpengajuan::all();
        return view('Admin.riwayat-pengajuan.index', $data);
    }

    function show(Berkaspengajuan $Berkaspengajuan)
    {
        $data['Berkaspengajuan'] = $Berkaspengajuan;

        return view('Admin.riwayat-pengajuan.show', $data);
    }

    function view(Skpengajuan $Skpengajuan)
    {
        $data['Skpengajuan'] = $Skpengajuan;

        return view('Admin.riwayat-pengajuan.detail-sk', $data);
    }

}
