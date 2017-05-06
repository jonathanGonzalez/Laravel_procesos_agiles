<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use Session;

class VehiculosController extends Controller
{
    //
    public function vehiculo()
    {   
        $vehiculos = Vehiculo::all();        
        return view('vehiculos/vehiculos', ['list' => $vehiculos]);
    }
    public function informes()
    {
        return view('vehiculos/vehiculos');
    }        
    public function store(Request $request)
    {
            $input = $request->all();
            Vehiculo::create($input);
            return redirect('/');
    }
    public function edit($id)
    {           
        try
        {
            $vehiculo = Vehiculo::findOrFail($id);
            return view('vehiculos/edit', ['data' => $vehiculo]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El vehiculo con id: ($id) no pudo ser actualizado");
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        try
        {
            $vehiculo = Vehiculo::findOrFail($id);
            $input = $request->all();
            $vehiculo->fill($input)->save();
            Session::flash('flash_message', 'vehiculo editado correctamente');
            return redirect('vehiculos/vehiculos');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "el vehiculo con id: ($id) no fue encontrado!");
            return redirect()->back();
        }
    }   
    
}
