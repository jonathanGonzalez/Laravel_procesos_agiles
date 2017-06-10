@extends('layouts.app')

@section('indexActive')
  active
@stop

@section('contenido')
<h1>Editar Registro</h1>
<p></p>
<hr>
{!! Form::model($data, ['method' => 'PUT', 'route' => ['parqueos.update', $data->id]]) !!}
<div class="form-group">
 {!! Form::label('fecha_lbl', 'Fecha:', ['class' => 'control-label']) !!}
 {!! Form::text('fecha', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::label('hora_lbl', 'Hora de entrada:', ['class' => 'control-label']) !!}
 {!! Form::text('hora_entrada', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::label('hora_salida_lbl', 'Hora de salida:', ['class' => 'control-label']) !!}
 {!! Form::text('hora_salida', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('persona_lbl', 'Cliente', ['class' => 'control-label']) !!}
 {!! Form::text('persona_id', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::label('vehiculo_lbl', 'Vehiculo', ['class' => 'control-label']) !!}
 {!! Form::text('vehiculo_id', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::label('usuario_lbl', 'usuario', ['class' => 'control-label']) !!}
 {!! Form::text('usuario_id', null, ['class' => 'form-control', 'required']) !!}
</div>
{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop