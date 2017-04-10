<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;

class VehiculosController extends Controller
{
    //
    public function vehiculo()
    {   
        return view('vehiculos/vehiculos');
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
    
}
