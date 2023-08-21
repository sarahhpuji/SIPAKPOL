<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Templatee;

class Template2 extends Controller
{
    function index(){

        $data['list_format'] = Templatee::all();
        return view('Admin.template.index', $data);
    }

    function create(){
        return view('Admin.template.create');
    }

    function store(Request $req){
        $rules = [
            'jenis_file' => 'required',
            'file' => 'required|max:1000|mimes:xls,xlsx,docx',

        ];
        $messsages = [
            'required_without_all' => ':attribute wajib di isi ketika yang lain kosong',
            'required' => ' :attribute wajib di isi',
            'unique' => ' Nomor surat sudah ada',
            'max' => ' :attribute terlalu besar',
        ];
        $this->validate( $req, $rules, $messsages);

        $format = new Templatee;
        $format->jenis_file = $req->jenis_file;
        $format->tgl_upload = $req->tgl_upload;

        $format->uploadformat('file');
        $format->save();

        return redirect('Admin/template')->with('success','Template berhasil dikirim');

    }

    function hapus(Templatee $templatee){
        $templatee->delete();
        return back()->with('success', 'Data berhasil dihapus !');
    }
}