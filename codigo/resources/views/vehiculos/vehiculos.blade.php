@extends('layouts.app')

@section('vehiculosActive')

active

@stop

@section('contenido')

<form class="form">
  <div class="form-group">
    <label for="exampleInputName2">Placa</label>
    <input name="placa" type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Marca</label>
    <input name="marca" type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Color</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>   
  <button type="submit" class="btn btn-default">Registrar Vehiculo</button>
</form>

<div class="row">
  <div style="height:50px;" class="col-md-12">
  </div>
<div>

<table class="table" border="1">
<tr>
  <th>Placa</th>
  <th>Marca</th>
  <th>Color</th>
  <th></th> 
  <th></th>
</tr>
<tr> 
  <td>cgf545</td>
  <td>Jeep</td>
  <td>Cafe</td>
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
<tr>
  <td>ffr548</td>
  <td>Maserati</td>
  <td>Blanco</td>
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
</table>

@stop