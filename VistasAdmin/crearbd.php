<!DOCTYPE html>
<html>
<head lang="es">
	<link  rel="icon" href="../Recursos/favicon.ico">
	<title>
		NuevaBD
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5,minimum-scale=0.86">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
<div class="content-registro">
  <form class="inn" action="../BD/creacionbd.php" method="post" >
    <div>
      <input class="form-control" type="text" name="nombre" placeholder="Nombre de la base de datos">
    </div>
    <div>
    <select  class="form-select" name="seleccion">
     
      <option value="#">armscii8_bin</option>
      <option value="#">armscii8_general_ci</option>
      <option value="#">armscii8_general_nopad_ci</option>
      <option value="#">armscii8_nopad_bin</option>
      

    </select>
    </div>
    <div class="btn-group">
    <input class="btn btn-success" type="submit" name="enviar" value="Crear">
    </div>
  </form>

</div>
<div  class="menu">
  <h5 class = "icon-dat">
    bases de datos
  </h5>
  <div class="data-bases">
      <?php
    require '../BD/conexion.php';
    $sentenciasql="SHOW DATABASES";
    $s="SHOW TABLES IN Air";
    $consulta=mysqli_query($conexion,$sentenciasql);

    while($otra=mysqli_fetch_row($consulta)){
    $dom = new DOMDocument('1.0', 'utf-8');
    $element = $dom->createElement('li',"{$otra[0]}");

    // Insertamos el nuevo elemento como raíz (hijo del documento)
    $dom->appendChild($element);
    echo $dom->saveXML();
    }



    ?>
  
    <div class="tables">
    <tr>

    </tr>
    </div>
  </div>
</div>

<div class="button-flo" onclick="togle()">
    <img class="opc"src="../Recursos/more.png" >
  </div>
  <div class="col-md-4 col-md-offset-1" id="opciones">
    <li><a href="../VistasAdmin/crearbd.php">Crear Base De Datos</a></li>
    <li><a href="Importar.php">Importar</a></li>
    <li ><a href="#">Exportar</a></li>
    <li><a href="UserView.php">Cuentas de Usuario</a></li>
    <li><a href="../VistasAdmin/DashboardAdmin.php">Bases de Datos</a></li>    
  </div>
</div>
  <script src="../js/app.js">  
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>