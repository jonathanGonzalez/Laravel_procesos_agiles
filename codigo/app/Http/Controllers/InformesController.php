<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parqueo;
use Carbon\Carbon;

class InformesController extends Controller
{
    public function informes()
    {
        return view('informes/informes', ['registrosEntreFechas' => ""]);
    }
    public function consultarRegistrosEntreFechas(Request $request)
    {
        $fechaI = $request->input('fechaI');
        $fechaF = $request->input('fechaF');
        
        // el formato del formulario blade es d m y diferente al formato de bd que es "Y m d"
        Carbon::parse($fechaI)->format('Y/m/d');
        Carbon::parse($fechaF)->format('Y/m/d');

        $registros = Parqueo::where('fecha', $fechaI)->get();   
        $registros = Parqueo::where('fecha', '>=', $fechaI)->orWhere('fecha', '<=', $fechaF)->get();
        
        return view('informes/informes', ['registrosEntreFechas' => $registros]);
    } 
    
}
