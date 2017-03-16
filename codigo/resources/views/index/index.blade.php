@extends('layouts.app')
@section('contenido')

<form class="form">
  <div class="form-group">
    <label for="exampleInputName2">fecha</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">hora</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">tipo (entrada o salida)</label>
    <select class="form-control">
        <option class="form-control" value="volvo">Ingreso</option>
        <option class="form-control" value="saab">Salida</option>        
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Placa vehiculo</label>
    <input type="text" class="form-control" id="exampleInputName2" >    
  </div>
  <div class="form-group">
    <label for="exampleInputName2"><Cliente></Cliente></label>
    <select class="form-control">
        <option class="form-control" value="volvo">1053854556</option>
        <option class="form-control" value="saab">1053854556</option>
        <option class="form-control" value="mercedes">1053854556</option>        
    </select>
  </div>  
  <button type="submit" class="btn btn-default">Guardar</button>
</form>

@stop