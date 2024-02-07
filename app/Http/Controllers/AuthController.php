<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('authentikasi.login');
    }

    public function loginHandle(Request $request){
        if(auth()->attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->route('barang.index');
        }

        return back();
    }

    public function register(){
        return view('authentikasi.register');
    }
    public function registerHandle(Request $request){
        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'tlp' => $request->tlp
        ]);

        return redirect()->route('login-form');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login-form');
    }
}
