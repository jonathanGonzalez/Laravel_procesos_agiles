
@extends('layouts.app')
@section('vehiculosActive')
    active
@stop
@section('contenido')
<h1>Agregar vehículo</h1>
<hr>
{!! Form::open(['route' => 'vehiculos.store']) !!}

<div class="form-group">
 {!! Form::label('marca_lbl', 'Marca', ['class' => 'control-label']) !!}
 {!! Form::text('marca', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('placa_lbl', 'Placa', ['class' => 'control-label']) !!}
 {!! Form::text('placa', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('name_lbl', 'Color', ['class' => 'control-label']) !!}
 {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Agregar vehiculo', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
