@extends('layouts.app')

@section('usuariosActive')
  active
@stop

@section('contenido')
<h1>Editar Usuario</h1>
<p></p>
<hr>
{!! Form::model($data, ['method' => 'PUT', 'route' => ['usuarios.update', $data->id]]) !!}
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
    {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
<p>
</p>


@stop