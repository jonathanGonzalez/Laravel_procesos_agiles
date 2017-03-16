@extends('layouts.app')
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
  <button type="submit" class="btn btn-default">Guardar</button>
</form>

@stop