<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function register()
    {
        return view('register'); 
    }

    public function proses_daftar(Request $request) {
        DB::table('users')->insert([
            'name' => $request->name,
            'nim' => $request->nim,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
        return redirect('/');
    }

    public function index()
    {
        if ($user = Auth::user()) { //2
            if ($user->role == 'sekretaris') { //3
                return redirect()->intended('sekre-home'); //4
            } elseif ($user->role == 'user') { 
                return redirect()->intended('home'); //5
            }
        }
        return view('login'); //6
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'nim' => 'required',
                'password' => 'required',
            ]); // 7

        $kredensil = $request->only('nim','password'); //8

            if (Auth::attempt($kredensil)) { //9
                $user = Auth::user();
                if ($user->role == 'sekretaris') { //10
                    return redirect()->intended('sekre-home'); //11
                } elseif ($user->role == 'user') { //12
                    return redirect()->intended('home'); //13
                }
                return redirect()->intended('/'); //14
            }

        return redirect('/')
                ->withInput()
                ->withErrors(['login_gagal' => 'Maaf, NIM atau Password Anda Salah. Harap Masukkan Kembali']); //15
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}