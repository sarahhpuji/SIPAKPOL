<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Skpengajuan;
use App\Models\Templatee;
use App\Models\Berkaspengajuan;
use Illuminate\Http\Request;

class Admindashboard extends Controller
{
    public function index()
    {
        $jumlah_pengajuanmasuk = Berkaspengajuan::all()->where('status',2)->count();
        $jumlah_pengajuanditerima = Berkaspengajuan::all()->where('status',3)->count();
        $jumlah_pengajuanditolak = Berkaspengajuan::all()->where('status',4)->count();
        $jumlah_dosen = Dosen::all()->count();
        $jumlah_template = Templatee::all()->count();
        $jumlah_skdosen = Skpengajuan::all()->count();

        return view('Admin.dashboard')
            ->with('jumlah_pengajuanmasuk', $jumlah_pengajuanmasuk)
            ->with('jumlah_pengajuanditerima', $jumlah_pengajuanditerima)
            ->with('jumlah_pengajuanditolak', $jumlah_pengajuanditolak)
            ->with('jumlah_dosen', $jumlah_dosen)
            ->with('jumlah_template', $jumlah_template)
            ->with('jumlah_skdosen', $jumlah_skdosen);
    }

    // public function index(){
    //     return view('Admin.dashboard');
    // }
}