<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'nip' => ['required'],
            'password' => ['required'],

        ]);


        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect ('Admin/dashboard') ;
        }

        if (Auth::guard('dosen')->attempt($credentials)) {
            return redirect ('Dosen/dashboard') ;
        }

        // $this = $request->validate([
        //     'remember' => ['remember'],
        // ]);

        // Check if the "remember" checkbox is checked
        // $remember = $request->has('remember');

        // if ($this->attemptLogin($request, $remember)) {
        //     return $this->sendLoginResponse($request);
        // }

        // return $this->sendFailedLoginResponse($request);

        // $req_remember = request('remember');
        // $remember = (isset($req_remember)) ? true : false;
        // if(auth()->attempt($credentials, $remember)) {
        //     $user = auth()->user();
        //     return $this->manageRedirect($user);
        // } else {
        //     return view('welcome', ['message' => 'Login Gagal']);
        // }

        return back()->with('danger', 'Login gagal !');
    }

    public function logout()
    {

        Auth::guard('admin')->logout();
        Auth::guard('dosen')->logout();
		Auth::logout();

        return redirect('/');
    }

}
