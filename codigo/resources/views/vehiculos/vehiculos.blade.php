@extends('layouts.app')

@section('vehiculosActive')
    active
@stop

@section('contenido')
<div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    En esta sección puedes gestionar los <strong>vehículos</strong> que ingresan a tu parqueadero.
</div>

<div class="row center-block">
  <div class="col-xs-12 col-md-6">
    {!! Form::open(['route' => 'vehiculos.store', 'class' => 'text-left']) !!}

    <div class="form-group">
    {!! Form::label('marca_lbl', 'Marca', ['class' => 'control-label']) !!}
    {!! Form::text('marca', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('placa_lbl', 'Placa', ['class' => 'control-label']) !!}
    {!! Form::text('placa', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('name_lbl', 'Color', ['class' => 'control-label']) !!}
    {!! Form::text('color', null, ['class' => 'form-control', 'required']) !!}
    </div>

    {!! Form::submit('Agregar vehiculo', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
  </div>
  <div class="col-xs-12 col-md-6">
    <table class="table text-center center-block" border="0">
    <tr>
      <th>Marca</th>
      <th>Placa</th>
      <th>Color</th>    
      <th></th>
      <th></th>
    </tr>
    @foreach($list as $vehiculo)
    <tr>
      <td>{{ $vehiculo->marca }}</td>    
      <td>{{ $vehiculo->placa }}</td>
      <td>{{ $vehiculo->color }}</td>    
      <th><a href="{!! route('vehiculos.edit', $vehiculo->id) !!}" class="btn btn-primary">Editar vehiculo</span></th>
      <th>{!! Form::open([
            'method' => 'DELETE',
            'route' => ['vehiculos.destroy', $vehiculo->id]
            ]) !!}
            {!! Form::submit('¿Borrar vehículo?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </th>
    </tr>
    @endforeach
    </table>
  </div>
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
    <img src="{{ asset('img/vehiculos.jpg') }}"/>
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
