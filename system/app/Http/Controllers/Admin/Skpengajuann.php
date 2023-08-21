<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Skpengajuan;
use Carbon\Carbon;

class Skpengajuann extends Controller
{
    function index(){
        $data['list_sk'] = Skpengajuan::all();
        return view('Admin.pengajuan.sk-pengajuan.index', $data);
    }

    function create(){
        $data['list_dosen'] = Dosen::all();
        return view('Admin.pengajuan.sk-pengajuan.create', $data);
    }

    public function addsk()
    {
        $waktu = Carbon::now('Asia/Jakarta');
        $skpengajuan = new Skpengajuan();
        $skpengajuan->id_dosen = request('id_dosen');
        $skpengajuan->uploadFileSK('filesk');
        $skpengajuan->created_at = $waktu;
        $skpengajuan->updated_at = $waktu;
        $skpengajuan->save();



        return redirect('Admin/pengajuan/sk-pengajuan')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(){
        $data['list_dosen'] = Skpengajuan::all();
        return view('Admin.pengajuan.sk-pengajuan.show', $data);

    }
}