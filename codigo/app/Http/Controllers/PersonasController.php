<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Session;

class PersonasController extends Controller
{
    public function personas()
    {        
        $personas = Persona::all();
        return view('personas/personas', ['list' => $personas]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Persona::create($input);
        return redirect('personas/personas');
    }
    public function edit($id)
    {           
        try
        {
            $persona = Persona::findOrFail($id);
            return view('personas/edit', ['data' => $persona]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El usuario para la actualización de datos no fué encontrado");
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        try
        {
            $persona = Persona::findOrFail($id);
            $input = $request->all();
            $persona->fill($input)->save();
            Session::flash('flash_message', 'Cliente modificado correctamente!');
            return redirect('personas/personas');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "el cliente con id:($id) no fue encontrado ");
            return redirect()->back();
        }
    }
    public function destroy(Request $request, $id)
    {           
        try
        {
            $persona = Persona::findOrFail($id);
            $persona->delete();
            return redirect()->back();
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "Ocurrió un erro, intente nuevamente o comuniquese con el administrador del sistema");
            return redirect()->back();
        }
    }
}
