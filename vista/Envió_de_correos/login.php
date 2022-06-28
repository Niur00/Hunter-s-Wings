<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hunters Wings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="../HunterWings.html">Hunters Wings</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/HuntersWings/HunterWings.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/HuntersWings/preguntas.html">Preguntas</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="/HuntersWings/pie/quienessomos.html">¿Quienes somos?</a>
      </li>    
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/HuntersWings/pie/Contacto.html">Contactanos</a>
      </li>  
    </ul>
  </div>  
</nav>
<br>

<center>
<div class="container">
    <form action="return false" onsubmit="return false">
      <div class="form-group">
        <label for="email">Correo Electrónico:</label>
        <div  class="col-md-5 text-center">
          <input type="email" class="form-control" placeholder="Ingrese Correo" id="email">
        </div>
      </div>

      <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div  class="col-md-5 text-center">
          <input type="password" class="form-control" placeholder="Ingrese contraseña" id="pwd">
        </div>
      </div>
        <button type="submit" onclick="login()" class="btn btn-primary">Ingresar</button>
      </form> 
  </div>
</center>

<script src="configuracion/js/login.js"></script>
</body>
</html>

