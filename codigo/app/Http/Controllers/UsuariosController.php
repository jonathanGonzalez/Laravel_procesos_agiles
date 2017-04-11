<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    //
    public function usuarios()
    {
        $usuario = User::all();
        return view('usuarios/usuarios', ['list' => $usuario]);
    }
        public function store(Request $request)
    {
            //echo "si funcion store en clase UsuariosController";
            $input = $request->all();
            User::create($input);
            return redirect('/');
    }
}
