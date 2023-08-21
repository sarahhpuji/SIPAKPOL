<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\Templatee;
use Illuminate\Http\Request;

class Template extends Controller
{
    function index()
    {
        $data['list_temp'] = Templatee::all();
        return view ('Dosen.template.index', $data);
    }

    function destroy(Templatee $Templatee)
    {
        $Templatee->delete();
        return redirect('Dosen/template')->with('Success','Data Template Berhasil Dihapus');
    }
}