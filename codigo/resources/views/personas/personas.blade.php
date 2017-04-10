@extends('layouts.app')

@section('personasActive')

active

@stop

@section('contenido')

<!--<form class="form">
  <div class="form-group">
    <label for="exampleInputName2">Nombre</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Apellidos</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">cedula</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Telefono</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>    
  <button type="submit" class="btn btn-default">Registrar Cliente</button>
</form>-->

{!! Form::open(['route' => 'personas.store']) !!}
    <div class="form-group">
        {!! Form::label('nombre_lbl', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellidos_lbl', 'Apellidos', ['class' => 'control-label']) !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cedula_lbl', 'Número Cédula', ['class' => 'control-label']) !!}
        {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefono_lbl', 'Teléfono', ['class' => 'control-label']) !!}
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('correo_lbl', 'Correo', ['class' => 'control-label']) !!}
        {!! Form::text('correo', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Create New User', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

<div class="row">
  <div style="height:50px;" class="col-md-12">
  </div>
<div>

<table class="table" border="1">
<tr>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Cédula</th>
  <th>Telefono</th>
  <th></th> 
  <th></th>
</tr>
<tr> 
  <td>Juan</td>
  <td>Valdez C.</td>
  <td>5445580254</td>
  <td>878455545</td> 
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
<tr>
  <td>Juan Pablo</td>
  <td>Segundo C.</td>
  <td>00000000112</td>
  <td>878455545</td> 
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
</table>

@stop