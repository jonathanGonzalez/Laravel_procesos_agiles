@extends('layouts.app')

@section('informesActive')
active
@stop

@section('contenido')
<div class="row">    
    {{ Form::open(array('action' => 'InformesController@consultarRegistrosEntreFechas', 'method' => 'get')) }}
        <div class="form-group">
            {!! Form::label('fecha_inicial_lbl', 'Fecha Inicial reporte', ['class' => 'control-label']) !!}
            {!! Form::date('fechaI', \Carbon\Carbon::now()) !!}
        </div>
        <div class="form-group">
            {!! Form::label('fecha_final_lbl', 'Fecha final reporte', ['class' => 'control-label']) !!}
            {!! Form::date('fechaF', \Carbon\Carbon::now()) !!}
        </div>    
            {!! Form::submit('consultar registros', ['class' => 'btn btn-primary']) !!}    
    {!! Form::close() !!}
</div>
<div class="row">
    <div style="height:50px;" class="col-md-12">
    </div>
    <div class="col-xs-12 col-md-12"> 
        @if($registrosEntreFechas === "" or $registrosEntreFechas === null)
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                Puedes buscar registros <strong>entre dos fechas</strong>
            </div>                    
        @else
            <table class="table" border="0">
                <tr>
                    <th>Placa</th>
                    <th>Cliente</th>
                    <th>fecha</th>
                    <th>Hora Ingreso</th>
                    <th>Hora de salida</th> 
                    <th></th>
                </tr>
                @foreach($registrosEntreFechas as $registro)
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
        @endif        
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