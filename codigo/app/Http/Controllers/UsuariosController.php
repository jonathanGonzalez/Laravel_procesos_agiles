<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UsuariosController extends Controller
{
    //
    public function usuarios()
    {
        $usuarios = User::all();
        return view('usuarios/usuarios', ['list' => $usuarios]);
    }
    public function store(Request $request)
    {
        //echo "si funcion store en clase UsuariosController";
        $input = $request->all();
        User::create($input);
        return redirect('/');
    }
    public function edit($id)
    {           
        try
        {
            $user = User::findOrFail($id);
            return view('usuarios/edit', ['data' => $user]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found to be
            edited!");
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        try
        {
            $user = User::findOrFail($id);
            $input = $request->all();
            $user->fill($input)->save();
            Session::flash('flash_message', 'User successfully edited!');
            return redirect('usuarios/usuarios');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "The User ($id) could not be found to be
            edited!");
            return redirect()->back();
        }
    }
    public function destroy(Request $request, $id)
    {           
        try
        {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->back();
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "Ocurrió un error, intente nuevamente o comuniquese con el administrador del sistema");
            return redirect()->back();
        }
    }
}
