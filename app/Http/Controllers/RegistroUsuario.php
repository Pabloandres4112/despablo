<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistroUsuario extends Controller
{
    public function registro(){
        return view('auth.registro');
    }
    public function store(Request $request ){

        $request -> request ->add(['cedula'=>Str::slug($request  -> cedula)]);

        $this -> validate($request ,[
            'name' =>'required|min:3|max:50',
            'cedula'=> 'required|numeric|min:11',
            'direccion'=> 'required',
            'telefono'=> 'required|numeric|min:11',
            'password' =>'required|confirmed|min:6'
        ]);

        User::create([
            'name' =>$request ->name ,
            'cedula'=> $request ->cedula,
            'direccion'=> $request ->direccion,
            'telefono'=>$request -> telefono,
            'password' => Hash::make($request->password)
        ]);
        auth()->attempt($request->only('cedula','password'));
        return redirect()->route('Post.index');
    }
}
