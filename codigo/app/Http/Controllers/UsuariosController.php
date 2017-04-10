<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    //
    public function usuarios()
    {
        return view('usuarios/usuarios');
    }
    public function create(Request $request)
    {
        return view('usuarios/usuarios');
    }
    public function store(Request $request)
    {
            //echo "si funcion store en clase UsuariosController";
            $input = $request->all();
            User::create($input);
            return redirect('/');
    }
}
