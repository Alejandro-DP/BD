<!DOCTYPE html>
<html>
<head lang="es">
	<link  rel="icon" href="../Recursos/favicon.ico">
	<title>
		NuevaBD
	</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5,minimum-scale=0.86">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/sb-admin-2.min.css">
	  <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
</head>
<body id="page-top ">
  <div class=" navbar navbar-expand  bg-success topbar  static-top shadow"">
    <div class="logodb">
      <img src="../Recursos/thelogo.png">
      
    </div>

    <div class="user nav-item dropdown no-arrow ">
      
    
      <p class="text-right" id="name">
      <?php 
      session_start();
      $nom=$_SESSION['login'];    
      echo "  Bienvenido $nom   ";
    ?>
      </p>
      <div class="img" onclick="togle2()">
      <img src="../Recursos/perfildeusuario.jpg" class="user-logo">
      </div>
    </div>
    
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in "aria-labelledby="userDropdown" id="session-btn" > 
    <div>
      <button class="btn btn-danger" id="boton" onclick="location='../BD/cs.php'"> Cerrar Sesion   </buton>
    </div>
    </div>
    </div>

<div class="content-registro">
  <form class="inn" action="../BD/NuevoRegistro.php" method="post" >
    <div>
      <input class="form-control" type="text" name="nombre" placeholder="nombre">
    </div>
    <div>
      <input class="form-control" type="text" name="apellidom" placeholder="Apellido Materno">
    </div>
    <div>
      <input class="form-control" type="text" name="apellidop" placeholder="Apellido Paterno">
    </div>
    <div>
      <input class="form-control" type="password" name="contra" placeholder="Contraseña">
    </div>
    <div>
      <select  class="form-select" name="seleccion">
        <option value="1">Adminstrador</option>
        <option value="2">Programador</option>
      </select>
    </div>
    <div class="btn-group">
    <input class="btn btn-success" type="submit" name="enviar" value="Registrar">
    </div>
  </form>
</div>



    <!-- boton flotante -->
      <div class="button-flo " onclick="togle()">
        <img class="opc"src="../Recursos/more.png" >
      </div>

      <div class="col-md-4 col-md-offset-1" id="opciones">
      <li><a href="FormularioRegistro.php">Crear Usuario</a></li>
        <li><a href="Importar.php">Importar</a></li>
        <li ><a href="exportarbd.php">Exportar</a></li>
        <li><a href="UserView.php">Cuentas de Usuario</a></li>
      </div>
  </div>

  
  <script src="../js/app.js"></script>
  <script src="../Dash/jquery/jquery.min.js"></script>
  <script src="../Dash/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>