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

<div class="row">
  <table class="table" border="1">
  <tr>
    <th>Nombre</th>
    <th>Correo</th>    
    <th></th>
  </tr>
  @foreach($list as $usuario)
  <tr>
    <td>{{ $usuario->name }}</td>
    <td>{{ $usuario->email }}</td>
    <th><span class="btn btn-primary">registrar salida</span></th>
  </tr>
  @endforeach
  </table>
</div>

@stop