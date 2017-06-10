@extends('layouts.app')

@section('usuariosActive')
  active
@stop

@section('contenido')

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
  </tr>
  @endforeach
  </table>
</div>

@stop