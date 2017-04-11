<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

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
        return redirect('/');
    }
}
