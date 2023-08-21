<?php

namespace App\Http\Controllers\Admin;



use App\Imports\DosenImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;




class Admindosen extends Controller
{
    function index(){

        $data['list_dosen'] = Dosen::all();
        return view('Admin.dosen.index', $data);
    }
    function create(){
        return view('Admin.dosen.create');
    }

    public function upload(Request $request){

        $file = $request->file('dosen');
        Excel::import(new DosenImport, $file);

        return back()->with('massage', 'User Imported Successfully');
    }
    public function aksicreate(Request $request){
        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'gelar_belakang' => 'required',
            'unit_kerja' => 'required',
            'status' => 'required',
            'golongan' => 'required',
            'gol_tmt' => 'required',
            'skpengper' => 'required',
            'skpengter' => 'required',
            'ijazah' => 'required',
            'jurusan' => 'required',
            'asalpt' => 'required',
            'tahunlulus' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'jeniskelamin' => 'required',
            'password' => 'required',

        ];
        $messsages = [
            'required_without_all' => ':attribute wajib di isi ketika yang lain kosong',
            'required' => ' :attribute wajib di isi',
            'unique' => ' Nomor surat sudah ada',
            'max' => ' :attribute terlalu besar',
        ];
        $this->validate( $request, $rules, $messsages);

        $dosen = new dosen;
        $dosen->nip = request('nip');
        $dosen->nama = request('nama');
        $dosen->gelar_depan = request('gelar_depan');
        $dosen->gelar_belakang = request('gelar_belakang');
        $dosen->unit_kerja = request('unit_kerja');
        $dosen->status = request('status');
        $dosen->golongan = request('golongan');
        $dosen->gol_tmt = request('gol_tmt');
        $dosen->skpengper = request('skpengper');
        $dosen->skpengter = request('skpengter');
        $dosen->skgol = request('skgol');
        $dosen->skmasakerja = request('skmasakerja');
        $dosen->struktural = request('struktural');
        $dosen->fungsional = request('fungsional');
        $dosen->tmtfungsional = request('tmtfungsional');
        $dosen->ijazah = request('ijazah');
        $dosen->jurusan = request('jurusan');
        $dosen->asalpt = request('asalpt');
        $dosen->tahunlulus = request('tahunlulus');
        $dosen->tempatlahir = request('tempatlahir');
        $dosen->tanggallahir = request('tanggallahir');
        $dosen->jeniskelamin = request('jeniskelamin');
        $dosen->password = bcrypt(request('password'));



        $dosen->save();

        return redirect('Admin/dosen')->with('success', 'Data Dosen Berhasil Disimpan');

        }


        function show($dosen){
            $data['list']= Dosen::find($dosen);
            return view('Admin.dosen.show', $data);

        }

        function edit(Dosen $dosen){
            $data['list']= $dosen;
            return view('Admin.dosen.edit', $data);

        }

        public function update($list){

        $list = Dosen::find($list);
        $list->nip = request('nip');
         $list->nama = request('nama');
         $list->gelar_depan = request('gelar_depan');
         $list->gelar_belakang = request('gelar_belakang');
         $list->unit_kerja = request('unit_kerja');
         $list->status = request('status');
         $list->golongan = request('golongan');
         $list->gol_tmt = request('gol_tmt');
         $list->skpengper = request('skpengper');
         $list->skpengter = request('skpengter');
         $list->skgol = request('skgol');
         $list->skmasakerja = request('skmasakerja');
         $list->struktural = request('struktural');
         $list->fungsional = request('fungsional');
         $list->fungsional = request('fungsional');
         $list->ijazah = request('ijazah');
         $list->jurusan = request('jurusan');
         $list->asalpt = request('asalpt');
         $list->tahunlulus = request('tahunlulus');
         $list->tempatlahir = request('tempatlahir');
         $list->tanggallahir = request('tanggallahir');

        $list->save();

            return redirect('Admin/dosen')->with('success', 'Data Dosen Berhasil Diperbarui');

           }

        function hapus(Dosen $dosen){
            $dosen->delete();
            return back()->with('success', 'Data berhasil dihapus !');
        }
}