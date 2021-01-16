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
      
<div class="importarbd-bd">
  <h6 class="text-center"> Importar Base De Datos  </h6>
    <form class="inn" action="../BD/nuevabd.php" method="post" >
      <div>  
        <input class="form-control" type="text" name="nombre" placeholder="Nombre de la base de datos">
      </div>
      <div>
        <input type="file" name="archivo"/>
      </div>
      <div class="btn-group">
        <input class="btn btn-success" type="submit" name="enviar" value="Importar">
      </div>
  </form>

</div>



      <!-- Menu lateral-->
      <div class=" wrapper navbar-nav bg-white sidebar sidebar-dark accordion"> 
        <h5 class = "icon-dat">Bases De Datos</h5>
        <div class="data-bases">
        <?php
          require '../BD/conexion.php';
          $sentenciasql="SHOW DATABASES";
          $s="SHOW TABLES IN Air";
          $consulta=mysqli_query($conexion,$sentenciasql);
          while($otra=mysqli_fetch_row($consulta)){
            $dom = new DOMDocument('1.0', 'utf-8');
                echo '<li class="acord"  />' .($otra[0])."\n";  
            echo $dom->saveXML();
            }
        ?>
        </div>
      </div>
    <!-- boton flotante -->
      <div class="button-flo " onclick="togle()">
        <img class="opc"src="../Recursos/more.png" >
      </div>

      <div class="col-md-4 col-md-offset-1" id="opciones">
        <li><a href="Importar.php">Importar</a></li>
        <li ><a href="#">Exportar</a></li>
        <li><a href="UserView.php">Cuentas de Usuario</a></li>
      </div>
  </div>

  
  <script src="../js/app.js"></script>
  <script src="../Dash/jquery/jquery.min.js"></script>
  <script src="../Dash/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>