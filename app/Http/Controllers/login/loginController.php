<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('auth/login');
    }

    public function login2(){
        return view('auth/login-2');
    }

    public function autentikasi(Request $request){

        $credentials = $request->validate([
            // 'email' => 'required|email:dns',
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/soal2');
        }

    return back()->with('loginError', 'Login Failed');
        // dd('berhasil login!');

    }
}
