<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">

  <title>Rayo carro</title>
  <meta name="description" content="primer aplicacion laravel">
  <meta name="author" content="jga">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!--

  <link rel="stylesheet" href="css/styles.css?v=1.0">
-->

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Parqueadero Rayo Carro</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">            
            <li class="@yield('indexActive')" ><a href="{!! url('index/index'); !!}">Registro Principal <span class="glyphicon glyphicon glyphicon-random" aria-hidden="true"> </span></a></li>            
            <li class="@yield('vehiculosActive')"><a href="{!! url('vehiculos/vehiculos'); !!}">Vehículos <span class="glyphicon glyphicon glyphicon-road" aria-hidden="true"></span></a></li>
            <li class="@yield('personasActive')"><a href="{!! url('personas/personas'); !!}">Clientes <span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            <li class="@yield('informesActive')"><a href="{!! url('informes/informes'); !!}">informes <span class="glyphicon glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a></li>
            <li class="@yield('usuariosActive')"><a href="{!! url('usuarios/usuarios'); !!}">Usuarios y permisos <span class="glyphicon glyphicon glyphicon glyphicon-wrench" aria-hidden="true"></span></a></li>          
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="busqueda general">
            </div>
            <button type="submit" class="btn btn-default">buscar</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>        
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          @yield('contenido')
        </div>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.0.min.js"
        integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
        crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--  <script src="js/scripts.js"></script>-->
    
</body>
</html>