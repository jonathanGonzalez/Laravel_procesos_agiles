<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parqueo;

class IndexController extends Controller
{
    public function index()
    {
        $parqueos = Parqueo::all();
        return view('index/index', ['list' => $parqueos]);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Parqueo::create($input);
        return redirect('/');
    }
    public function LeerParqueos()
    {
        $parqueos = Parqueo::all();
        return view('index/index', ['list' => $parqueos]);
    }
}

