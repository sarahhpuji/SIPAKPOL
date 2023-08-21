<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Berkaspengajuan;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $data['list_item'] = Berkaspengajuan::all();
        return view('Dosen.dashboard', $data);
    }
}