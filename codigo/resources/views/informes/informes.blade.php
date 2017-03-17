@extends('layouts.app')

@section('informesActive')

active

@stop
@section('contenido')

<table class="table" border="1">
<tr>
  <th>Placa</th>
  <th>Cliente</th>
  <th>fecha</th>
  <th>Hora Ingreso</th>
  <th>Hora de salida</th> 
  <th></th>
</tr>
<tr>
  <td>cgf545</td>
  <td><a href="{!! url('personas/personas'); !!}">Juan Valdez C.</a></td>
  <td>28/03/2017</td>
  <td>11:45</td>
  <td>SIN REGISTRAR</td> 
  <th><span class="btn btn-primary">generar informe</span></th>
</tr>
<tr>
  <td>ffr548</td>
  <td><a href="{!! url('personas/personas'); !!}">Juan Pablo S.</a></td>
  <td>28/03/2017</td>
  <td>11:00</td>
  <td>11:25</td> 
  <th><span class="btn btn-primary">generar informe</span></th>
</tr>
</table>

@stop