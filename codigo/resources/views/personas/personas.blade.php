@extends('layouts.app')
@section('contenido')

Personas

<form class="form">
  <div class="form-group">
    <label for="exampleInputName2">Nombre</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Apellidos</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">cedula</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Telefono</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>    
  <button type="submit" class="btn btn-default">Guardar</button>
</form>

@stop