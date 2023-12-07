<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
    return view('auth.login');
    }
    public function store(Request $request){
        $this -> validate($request,[
            'cedula' => 'required',
            'password'=> 'required',
        ]);
        if (!auth()->attempt($request->only('cedula','password'))) {
            return back()-> with('mensaje','Error en la autenticación, algo no coincide');
        }
        return redirect()->route('Post.index');
    }
}



