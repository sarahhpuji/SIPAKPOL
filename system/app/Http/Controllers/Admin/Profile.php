<?php

namespace App\Http\Controllers\Admin;



use App\Imports\DosenImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;




class Profile extends Controller
{
    function index(){

        $data['admin'] = Auth::guard('admin')->user();
        return view('Admin.profile', $data);
    }

    function update(Admin $admin, Request $request){

        if ($request->password == null) {
           
            if ($request->foto == null) {
                $admin->nip = $request->nip;
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $admin->update();

                return back()->with('success', 'Profile telah diupdate !');
            } else {
                $hapusFotoLama = $admin->handleDelete();
                if($hapusFotoLama){
                    $admin->nip = $request->nip;
                    $admin->nama = $request->nama;
                    $admin->email = $request->email;
                    $admin->handleUpload();
                    $admin->update();
    
                    return back()->with('success', 'Profile telah diupdate !');
                    
                }else{
                    return back()->with('danger', 'Gagal mengupload foto !');
                }
            }
            
        }else{
            if ($request->foto == null) {
                $admin->nip = $request->nip;
                $admin->nama = $request->nama;
                $admin->email = $request->email;
                $admin->password = encrypt($request->password);
                $admin->update();

                return back()->with('success', 'Profile telah diupdate !');
            } else {
                $hapusFotoLama = $admin->handleDelete();
                if($hapusFotoLama){
                    $admin->nip = $request->nip;
                    $admin->nama = $request->nama;
                    $admin->email = $request->email;
                    $admin->password = encrypt($request->password);
                    $admin->handleUpload();
                    $admin->update();
    
                    return back()->with('success', 'Profile telah diupdate !');
                    
                }else{
                    return back()->with('danger', 'Gagal mengupload foto !');
                }
            }
        }

    }
}