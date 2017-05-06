@extends('layouts.app')

@section('informesActive')

active

@stop
@section('contenido')

{!! Form::open(['url' => 'informes/reportes', 'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('fecha_inicial_lbl', 'Fecha Inicial reporte', ['class' => 'control-label']) !!}
        {!! Form::text('fechaI', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fecha_final_lbl', 'Fecha final reporte', ['class' => 'control-label']) !!}
        {!! Form::text('fechaF', null, ['class' => 'form-control']) !!}
    </div>    
        {!! Form::submit('consultar registros', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}


@stop