@extends('layouts.app')

@section('vehiculosActive')
    active
@stop

@section('contenido')
<h1>Agregar vehículo</h1>
<p></p>
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

<div class="row">
  <table class="table" border="0">
  <tr>
    <th>Marca</th>
    <th>Placa</th>
    <th>Color</th>    
    <th></th>
  </tr>
  @foreach($list as $vehiculo)
  <tr>
    <td>{{ $vehiculo->marca }}</td>    
    <td>{{ $vehiculo->placa }}</td>
    <td>{{ $vehiculo->color }}</td>    
    <th><a href="{!! route('vehiculos.edit', $vehiculo->id) !!}" class="btn btn-primary">Editar vehiculo</span></th>
  </tr>
  @endforeach
  </table>
</div>
@stop
