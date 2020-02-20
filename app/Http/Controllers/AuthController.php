<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use Alert;

class AuthController extends Controller
{
   public function login()
   {
       return view('masuk');
   }
   public function postLogin(Request $request)
   {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard')->with('success', 'Welcome');
        }
        return redirect('/login')->with('warning','kata sandi atau email salah');
   }

   public function logout(){
       Auth::logout();
       return redirect('/login')->with('info','bye');
   }
}
