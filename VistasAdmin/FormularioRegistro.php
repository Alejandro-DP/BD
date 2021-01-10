<!--<!DOCTYPE html>
<html>
<head>
  <title>
    NuevoUsuario
  </title>
</head>
<body>
<form action="../BD/NuevoRegistro.php" method="POST">
  <input type="text" name="nombre" placeholder="nombre">
  <input type="text" name="apellidom" placeholder="Apellido Materno">
  <input type="text" name="apellidop" placeholder="Apellido Paterno">
  <input type="password" name="contra" placeholder="Contraseña">
  <select name="seleccion">
    <option value="1">Adminstrador</option>
    <option value="2">Programador</option>
  </select>
  <input type="submit" name="enviar" value="Registrar">
  
</form>


</body>
</html>-->
<!DOCTYPE html>
<html>
<head lang="es">
	<link  rel="icon" href="../Recursos/favicon.ico">
	<title>
		Usuarios
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5,minimum-scale=0.86">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	  <link href="css/simple-sidebar.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
</head>
<body>
	
<div class="user-var">
  <div class="logodb">
    <img src="../Recursos/thelogo.png">
  </div>
  <div class="user">
    <div class="img">
     <img src="../Recursos/perfildeusuario.jpg" class="user-logo" >
    </div>
   
    <p class="text-right" id="name">
    <?php 
     session_start();
     $nom=$_SESSION['login']  ;    
     echo "  Bienvenido $nom   ";
  ?>
    </p>
  </div>
</div>
<div class="card-body" id="user-content">

</div>
<div  class="menu">
  
</div>
<div class="button-flo" onclick="togle()">
    <img class="opc"src="../Recursos/more.png" >
  </div>
  <div class="col-md-4 col-md-offset-1" id="opciones">
    
      <li><a href="#">Importar</a></li>
      <li ><a href="#">Exportar</a></li>
      <li><a href="UserView.php">Cuentas de Usuario</a></li>
      <li><a>Bases de Datos</a></li>
    
  </div>
</div>

  <script src="../js/app.js">  
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>