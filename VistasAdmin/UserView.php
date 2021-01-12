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
    <div class="img" onclick="togle2()">
     <img src="../Recursos/perfildeusuario.jpg" class="user-logo">
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
<div class="content-session" id="session-btn" > 
    <div>
      <button class="btn btn-danger" id="boton" onclick="location='../BD/cs.php'"> Cerrar Sesion   </buton>
    </div>

</div>
<div >
  <?php
  include '../BD/conexion.php';
  $qw="SELECT *FROM usuarios WHERE id=1";
  $qy=mysqli_query($conexion,$qw);
  while($ftr=mysqli_fetch_array($qy)){
    echo"
    <table class='usuariose'>
  <thead>
    <tr>
      <th> <img src='../Recursos/user-img.png' heigth='80' width='80'> </th>
    </tr>
      <th scope='col'>Nombre</th>
      <th scope='col'>$ftr[nombre]</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>Id</th>
      <td>$ftr[id]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Paterno</th>
      <td>$ftr[apellidop]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Materno</th>
      <td>$ftr[apellidom]</td>
    </tr>
    <tr>
      <th scope='row'>Tipo De Usuario</th>
      <td>$ftr[id_cargoo]</td>
    </tr>
  </tbody>
</table>
    ";
  }
  ?>
</div>
<div >
  <?php
  include '../BD/conexion.php';
  $qw="SELECT *FROM usuarios WHERE id=2";
  $qy=mysqli_query($conexion,$qw);
  while($ftr=mysqli_fetch_array($qy)){
    echo"
    <table class='usuariose2'>
  <thead>
    <tr>
      <th> <img src='../Recursos/user-img.png' heigth='80' width='80'> </th>
    </tr>
      <th scope='col'>Nombre</th>
      <th scope='col'>$ftr[nombre]</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>Id</th>
      <td>$ftr[id]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Paterno</th>
      <td>$ftr[apellidop]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Materno</th>
      <td>$ftr[apellidom]</td>
    </tr>
    <tr>
      <th scope='row'>Tipo De Usuario</th>
      <td>$ftr[id_cargoo]</td>
    </tr>
  </tbody>
</table>
    ";
  }
  ?>
</div>
<div >
  <?php
  include '../BD/conexion.php';
  $qw="SELECT *FROM usuarios WHERE id=3";
  $qy=mysqli_query($conexion,$qw);
  while($ftr=mysqli_fetch_array($qy)){
    echo"
    <table class='usuariose3'>
  <thead>
    <tr>
      <th> <img src='../Recursos/user-img.png' heigth='80' width='80'> </th>
    </tr>
      <th scope='col'>Nombre</th>
      <th scope='col'>$ftr[nombre]</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>Id</th>
      <td>$ftr[id]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Paterno</th>
      <td>$ftr[apellidop]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Materno</th>
      <td>$ftr[apellidom]</td>
    </tr>
    <tr>
      <th scope='row'>Tipo De Usuario</th>
      <td>$ftr[id_cargoo]</td>
    </tr>
  </tbody>
</table>
    ";
  }
  ?>
</div>
<div >
  <?php
  include '../BD/conexion.php';
  $qw="SELECT *FROM usuarios WHERE id=4";
  $qy=mysqli_query($conexion,$qw);
  while($ftr=mysqli_fetch_array($qy)){
    echo"
    <table class='usuariose4'>
  <thead>
    <tr>
      <th> <img src='../Recursos/user-img.png' heigth='80' width='80'> </th>
    </tr>
      <th scope='col'>Nombre</th>
      <th scope='col'>$ftr[nombre]</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>Id</th>
      <td>$ftr[id]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Paterno</th>
      <td>$ftr[apellidop]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Materno</th>
      <td>$ftr[apellidom]</td>
    </tr>
    <tr>
      <th scope='row'>Tipo De Usuario</th>
      <td>$ftr[id_cargoo]</td>
    </tr>
  </tbody>
</table>
    ";
  }
  ?>
</div>
<div >
  <?php
  include '../BD/conexion.php';
  $qw="SELECT *FROM usuarios WHERE id=5";
  $qy=mysqli_query($conexion,$qw);
  while($ftr=mysqli_fetch_array($qy)){
    echo"
    <table class='usuariose5'>
  <thead>
    <tr>
      <th> <img src='../Recursos/user-img.png' heigth='80' width='80'> </th>
    </tr>
      <th scope='col'>Nombre</th>
      <th scope='col'>$ftr[nombre]</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>Id</th>
      <td>$ftr[id]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Paterno</th>
      <td>$ftr[apellidop]</td>
    </tr>
    <tr>
      <th scope='row'>Apellido Materno</th>
      <td>$ftr[apellidom]</td>
    </tr>
    <tr>
      <th scope='row'>Tipo De Usuario</th>
      <td>$ftr[id_cargoo]</td>
    </tr>
  </tbody>
</table>
    ";
  }
  ?>
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
-
    </tr>
  </div>
</div>
  <div class="button-flo" onclick="togle()">
    <img class="opc"src="../Recursos/more.png" >
  </div>
  <div class="col-md-4 col-md-offset-1" id="opciones">
    
      <li><a href="Importar.php">Importar</a></li>
      <li ><a href="#">Exportar</a></li>
      <li><a href="UserView.php">Cuentas de Usuario</a></li>
      
    
  </div>
</div>


  <script src="../js/app.js">  

  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>