@extends('layouts.app')

@section('indexActive')

active

@stop

@section('contenido')
<!--<div class="row">
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
    <button type="submit" class="btn btn-default">Registrar Ingreso</button>
  </form>
</div>

<div class="row">
  <div style="height:50px;" class="col-md-12">
  </div>
<div>-->

{!! Form::open(['route' => 'parqueos.store']) !!}

<div class="form-group">
 {!! Form::label('fecha_lbl', 'Fecha:', ['class' => 'control-label']) !!}
 {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('hora_lbl', 'Hora:', ['class' => 'control-label']) !!}
 {!! Form::text('hora', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('tipo_lbl', 'Tipo(Entrada o salida)', ['class' => 'control-label']) !!}
 {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('persona_lbl', 'Cliente', ['class' => 'control-label']) !!}
 {!! Form::text('persona_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('vehiculo_lbl', 'Vehiculo', ['class' => 'control-label']) !!}
 {!! Form::text('vehiculo_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('usuario_lbl', 'usuario', ['class' => 'control-label']) !!}
 {!! Form::text('usuario_id', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

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
  @foreach($list as $registro)
  <tr>
    <td>{{ $registro->vehiculo_id }}</td>
    <td><a href="{!! url('personas/personas'); !!}">{{ $registro->persona_id }}</a></td>
    <td>{{ $registro->fecha }}</td>
    <td>{{ $registro->hora }}</td>
    <td>SIN REGISTRAR</td> 
    <th><span class="btn btn-primary">registrar salida</span></th>
  </tr>
  @endforeach
  </table>
</div>

@stop