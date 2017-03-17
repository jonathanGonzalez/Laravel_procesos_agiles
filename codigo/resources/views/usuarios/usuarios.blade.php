@extends('layouts.app')
@section('contenido')

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
    <label for="exampleInputName2">Correo</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Contraseña</label>
    <input type="text" class="form-control" id="exampleInputName2" >
  </div>
  <div class="form-group">
    <label for="exampleInputName2">Perfil</label>
    <select>
        <option>cliente</option>
        <option>operario parqueader</option>
        <option>administrador</option>
    </select>
  </div>    
  <button type="submit" class="btn btn-default">Registrar Usuario</button>
</form>

<table class="table" border="1">
<tr>
  <th>Nombre</th>
  <th>Apellido</th>
  <th>Correo</th>
  <th>Perfil</th>
  <th></th> 
  <th></th>
</tr>
<tr> 
  <td>Juan</td>
  <td>Osorio C.</td>
  <td>osorio@orayocaro.com</td>  
  <td>Operario parqueadero</td>  
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
<tr>
  <td>Luis</td>
  <td>Pachón H.</td>
  <td>pachon@orayocaro.com</td>  
  <td>Operario parqueadero</td>  
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
<tr>
  <td>Martha</td>
  <td>Aguirre</td>
  <td>aguirre@orayocaro.com</td>  
  <td>Administrador</td>  
  <th><span class="btn btn-primary">Editar</span></th>
  <th><span class="btn btn-primary">Eliminar</span></th>
</tr>
</table>

@stop