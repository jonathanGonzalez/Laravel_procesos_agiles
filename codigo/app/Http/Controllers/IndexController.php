<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parqueo;
use App\Persona;
use App\Vehiculo;
Use Session;

class IndexController extends Controller
{
    public function index()
    {
        $parqueos = Parqueo::all();
        //$vehiculos = Vehiculo::all()->placa;
        $vehiculos = Vehiculo::pluck('placa', 'id');
        $clientes = Persona::pluck('cedula','id');
        $fecha = new \DateTime();
        $fecha = $fecha->format('Y-m-d');
        $hora = date("H:i:s");
        return view('index/index', ['list' => $parqueos, 'fecha' =>$fecha, 'hora' =>$hora, 'vehiculos' => $vehiculos, 'clientes' => $clientes]);
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
    public function edit($id)
    {           
        try
        {
            $parqueo = Parqueo::findOrFail($id);
            return view('index/edit', ['data' => $parqueo]);
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "no se encontró el registro!");
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        try
        {
            $parqueo = Parqueo::findOrFail($id);
            $input = $request->all();
            $parqueo->fill($input)->save();
            Session::flash('flash_message', 'El usuario fue actualizado correctamente!');
            return redirect('index/index');
        }
        catch(ModelNotFoundException $e)
        {
            Session::flash('flash_message', "El usuario con id:($id) no fué encontrado!");
            return redirect()->back();
        }
    }
}

