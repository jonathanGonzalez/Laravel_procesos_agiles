<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //
    public function usuarios()
    {
        return view('usuarios/usuarios');
    }
}
