<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parqueo;

class IndexController extends Controller
{
    public function index()
    {
        return view('index/index');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Parqueo::create($input);
        return redirect('/');
    }
}

