<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\User;

class RegistroUsuario extends Controller
{
    public function registro(){
        return view('auth.registro');
    }
    public function store(Request $request ){

        // $request -> request ->add(['cedula'=>Str::slug($request  -> cedula)]);

        $this -> validate($request ,[
            'name' =>'required|min:3|max:50',
            'cedula'=> 'required|numeric|min:0|max:11',
            'direccion'=> 'required',
            'telefono'=> 'required|numeric|min:0|max:10',
        ]);

        User::create([
            'name' =>$request ->name ,
            'cedula'=> $request ->cedula,
            'direccion'=> $request ->direccion,
            'telefono'=>$request -> telefono,
        ]);
    }
}
