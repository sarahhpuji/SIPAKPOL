<?php

namespace App\Http\Controllers\Dosen;


use App\Http\Controllers\Controller;
use App\Models\Berkaspengajuan;
use App\Models\Dosen;
use Illuminate\Support\Facades\Auth;

class Riwayat extends Controller
{
    public function index(){
        $data['list_sk'] = auth()->user()->Skpengajuan;
        $data['list_item'] = Berkaspengajuan::get();
        return view ('Dosen.riwayat.index', $data);
    }

    function show(Berkaspengajuan $Berkaspengajuan)
    {
        $data['Berkaspengajuan'] = $Berkaspengajuan;

        return view('Dosen/riwayat/show', $data);
    }
}