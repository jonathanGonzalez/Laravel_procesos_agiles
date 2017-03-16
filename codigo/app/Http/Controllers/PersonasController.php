<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function personas()
    {
        return view('personas/personas');
    }
}
