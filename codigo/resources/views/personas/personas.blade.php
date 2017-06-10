@extends('layouts.app')

@section('personasActive')
  active
@stop

@section('contenido')

{!! Form::open(['route' => 'personas.store']) !!}
    <div class="form-group">
        {!! Form::label('nombre_lbl', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellidos_lbl', 'Apellidos', ['class' => 'control-label']) !!}
        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cedula_lbl', 'Número Cédula', ['class' => 'control-label']) !!}
        {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefono_lbl', 'Teléfono', ['class' => 'control-label']) !!}
        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('correo_lbl', 'Correo', ['class' => 'control-label']) !!}
        {!! Form::text('correo', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Crear un nuevo cliente', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

<div class="row">
  <div style="height:50px;" class="col-md-12">
  </div>
<div>

<div class="row">
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

@stop