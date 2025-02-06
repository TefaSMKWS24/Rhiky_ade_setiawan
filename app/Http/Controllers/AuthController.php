<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginkasir(Request $request)
    {
        if(Auth::guard('kasir')->attempt([
                                    'kode_kasir' => $request->nis,
                                    'password' => $request->password]))
        {
            dd('Berhasil: '.Auth::guard('kasir')->user());
            Log::info('Login successful');
            //return redirect('/user/dashboard');
        }
        else{
            echo "Login Gagal";
            //return redirect('/user')->with('warning', 'NIS / Password Salah!');
        }
    }
    public function logoutkasir()
    {
        if(Auth::guard('kasir')->check()){
            Auth::guard('kasir')->logout();
            return redirect('/');
        }
    }

    public function loginadmin(Request $request)
    {
        if(Auth::guard('admin')->attempt([
                                    'nik' => $request->nis,
                                    'password' => $request->password]))
        {
            dd('Berhasil: '.Auth::guard('admin')->user());
            Log::info('Login successful');
            //return redirect('/user/dashboard');
        }
        else{
            echo "Login Gagal";
            //return redirect('/user')->with('warning', 'NIS / Password Salah!');
        }
    }
    public function logoutadmin()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return redirect('/');
        }
    }
}
