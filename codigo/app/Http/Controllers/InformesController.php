<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parqueo;

class InformesController extends Controller
{
    public function informes()
    {
        $parqueos = Parqueo::all();
        return view('informes/informes', ['list' => $parqueos]);
    }
    public function reportes(Request $request)
    {
        echo "111111111111111";
    }   
}
