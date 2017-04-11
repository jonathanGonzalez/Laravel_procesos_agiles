@extends('layouts.app')

@section('usuariosActive')

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
    <label for="exampleInputName2">Correo</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Contraseña</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Perfil</label>
    <select>
        <option>cliente</option>
        <option>operario parqueader</option>
        <option>administrador</option>
    </select>
  </div>    
  <button type="submit" class="btn btn-default">Registrar Usuario</button>
</form>

<div class="row">
  <div style="height:50px;" class="col-md-12">
  </div>
<div>-->

{!! Form::open(['route' => 'usuarios.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Correo', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Crear nuevo usuario', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
<p>
</p>

<table class="table" border="1">
<tr>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Correo</th>
  <th>Perfil</th>
  <th></th> 
  <th></th>
</tr>
<tr> 
  <td>Juan</td>
  <td>Osorio C.</td>
  <td>osorio@orayocaro.com</td>  
  <td>Operario parqueadero</td>  
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
<tr>
  <td>Luis</td>
  <td>Pachón H.</td>
  <td>pachon@orayocaro.com</td>  
  <td>Operario parqueadero</td>  
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
<tr>
  <td>Martha</td>
  <td>Aguirre</td>
  <td>aguirre@orayocaro.com</td>  
  <td>Administrador</td>  
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
</table>

@stop