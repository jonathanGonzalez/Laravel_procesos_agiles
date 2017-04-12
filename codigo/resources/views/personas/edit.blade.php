@extends('layouts.app')

@section('personasActive')
  active
@stop

@section('contenido')
{!! Form::model($data, ['method' => 'PUT', 'route' => ['personas.update', $data->id]]) !!}
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
    {!! Form::submit('Actualizar cliente', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop