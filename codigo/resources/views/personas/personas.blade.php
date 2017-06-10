@extends('layouts.app')

@section('personasActive')
  active
@stop

@section('contenido')
<div class="alert alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    En esta sección puedes gestionar tus <strong>clientes</strong>.
</div>

<div class="row center-block">
  <div class="col-xs-12 col-md-6 text-left">
    {!! Form::open(['route' => 'personas.store']) !!}
        <div class="form-group">
            {!! Form::label('nombre_lbl', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellidos_lbl', 'Apellidos', ['class' => 'control-label']) !!}
            {!! Form::text('apellidos', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cedula_lbl', 'Número Cédula', ['class' => 'control-label']) !!}
            {!! Form::text('cedula', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono_lbl', 'Teléfono', ['class' => 'control-label']) !!}
            {!! Form::text('telefono', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('correo_lbl', 'Correo', ['class' => 'control-label']) !!}
            {!! Form::text('correo', null, ['class' => 'form-control', 'required']) !!}
        </div>
        {!! Form::submit('Crear un nuevo cliente', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>
    <div class="col-xs-12 col-md-6">
        <table class="table" border="0">
            <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>teléfono</th>
            <th>Correo</th> 
            <th></th>
            </tr>
            @foreach($list as $persona)
            <tr>
            <td>{{ $persona->nombre }}</td>
            <td>{{ $persona->apellidos }}</td>
            <td>{{ $persona->cedula }}</td>
            <td>{{ $persona->telefono }}</td>
            <td>{{ $persona->correo }}</td>    
            <th><a href="{!! route('personas.edit', $persona->id) !!}" class="btn btn-primary">Editar cliente</span></th>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="row">
  <figure class="snip1543">
    <img src="{{ asset('img/clientes.jpg') }}"/>
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
    <a href="#"></a>
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