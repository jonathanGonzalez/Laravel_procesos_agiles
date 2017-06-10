@extends('layouts.app')

@section('indexActive')
  active
@stop

@section('contenido')
<div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    En el menú de la parte superior encuentras las principales seccciones del <strong>SIGP</strong>.
</div> 

<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    Para registrar un ingreso debe crearse previamente un <strong>cliente</strong> y un <strong>vehículo</strong>.
</div>

<div class="row">
<div class="col-xs-12 col-md-3 text-left">
{!! Form::open(['route' => 'parqueos.store']) !!}
<div class="form-group">
 {!! Form::label('fecha_lbl', 'Fecha:', ['class' => 'control-label']) !!}
 {!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::label('hora_lbl', 'Hora de ingreso:', ['class' => 'control-label']) !!}
 {!! Form::time('hora_entrada', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::label('persona_lbl', 'Cliente', ['class' => 'control-label']) !!}
 {!! Form::select('persona_id', $clientes, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::label('vehiculo_lbl', 'Vehiculo', ['class' => 'control-label']) !!}
 {!! Form::select('vehiculo_id', $vehiculos, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
 {!! Form::hidden('usuario_id', "1", ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Registrar nuevo ingreso', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
</div>
<div class="col-xs-12 col-md-9">
<table class="table" border="0">
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
<p></p>
<div class="row" style="height:300px;">
  
</div>
<div class="row">
  <figure class="snip1543">
    <img src="{{ asset('img/carros.jpg') }}"/>
    <figcaption>
    <h3>SIGP Rayo Carro</h3>
    <p>Sistema de información para la gestión de registros de ingreso y salida de vehículos.</p>
    </figcaption>    
  </figure>
  <figure class="snip1543">
    <img src="{{ asset('img/informes.jpg') }}"/>
    <figcaption>
    <h3>Control</h3>
    <p>Conoce los registros de ingreso y de salida de tu parqueadero </p>
    </figcaption>    
  </figure>
  <figure class="snip1543">
    <img src="{{ asset('img/potencial.jpg') }}"/>
    <figcaption>
    <h3>Gestión de la información</h3>
    <p>Toma mejores desiciones para tu empresa. </p>
    </figcaption>    
  </figure>
</div>
@stop