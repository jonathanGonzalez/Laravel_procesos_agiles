<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformesController extends Controller
{
    //
    public function informes()
    {
        return view('informes/informes');
    }
}
