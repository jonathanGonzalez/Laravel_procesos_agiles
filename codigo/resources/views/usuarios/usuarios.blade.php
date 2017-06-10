@extends('layouts.app')

@section('usuariosActive')
  active
@stop

@section('contenido')
<div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    En esta sección puedes gestionar tus <strong>vehículos</strong>.
</div>

{!! Form::open(['route' => 'usuarios.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Correo', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
    </div>
    {!! Form::submit('Crear nuevo usuario', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
<p>
</p>

<div class="row">
  <table class="table" border="0">
  <tr>
    <th>Nombre</th>
    <th>Correo</th>    
    <th></th>
  </tr>
  @foreach($list as $usuario)
  <tr>
    <td>{{ $usuario->name }}</td>
    <td>{{ $usuario->email }}</td>
    <th><a href="{!! route('usuarios.edit', $usuario->id) !!}" class="btn btn-primary">Editar usuario</span></th>
    <th>{!! Form::open([
        'method' => 'DELETE',
        'route' => ['usuarios.destroy', $usuario->id]
        ]) !!}
        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </th>
  </tr>
  @endforeach
  </table>
</div>

@stop