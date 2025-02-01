<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller

{
  public function loginkasir(request $request)
  {

  if(Auth:guard('kasir')->attempt([
      'nik' => $request->nis,
      'password' => $request->password
  ]))

  {
     dd('berhasil' ,auth::guard('kasir')->user());
     log::info('berhasil successful');
     //return redirect('/user/dashboard');

  }
  else{
      echo"login gagal";
      //return redirect('/user')->with('warning','nis./password salah');
  }

}

  public function logoutkasir()
  {
    if(auth::guard('kasir')->check())
      auth::guard('kasir')->logout();
      return redirect('/');
  }

}
