<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroUsuario extends Controller
{
    public function registro(){
        return view('auth.registro');
    }
}
