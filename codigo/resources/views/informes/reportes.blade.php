@extends('layouts.app')

@section('informesActive')
  active
@stop

@section('contenido')

<div class="row">
  <div style="height:50px;" class="col-md-12">
  </div>
<div>

<div class="row">
  <table class="table" border="1">
  <tr>
    <th>Placa</th>
    <th>Cliente</th>
    <th>fecha</th>
    <th>Hora Ingreso</th>
    <th>Hora de salida</th> 
    <th></th>
  </tr>
    @foreach($registrosEntreFechas as $registro)
  <tr>
    <td>{{ $registro->vehiculo_id }}</td>
    <td>{{ $registro->persona_id }}</td>
    <td>{{ $registro->fecha }}</td>
    <td>{{ $registro->hora_entrada }}</td>
    <th>@if($registro->hora_salida === "" or $registro->hora_salida === null  )
          <a href="{!! route('parqueos.edit', $registro->id) !!}" class="btn btn-primary">Registrar Salida</span></th>
        @else
          {{ $registro->hora_salida}}
        @endif
    <th><a href="{!! route('parqueos.edit', $registro->id) !!}" class="btn btn-primary">Editar registros de parqueo</span></th>
  </tr>
  @endforeach
  </table>
</div>

@stop