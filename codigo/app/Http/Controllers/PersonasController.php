<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonasController extends Controller
{
    public function personas()
    {
        return view('personas/personas');
    }
    public function store(Request $request)
    {
            $input = $request->all();
            Persona::create($input);
            return redirect('/');
    }
}
