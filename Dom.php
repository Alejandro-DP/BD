<?php
require './BD/conexion.php';
$sentenciasql="SHOW DATABASES";
$s="SHOW TABLES IN Air";
$consulta=mysqli_query($conexion,$sentenciasql);





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>

</head>
<body>
<div >
  <?php
  include './BD/conexion.php';
  $qw="SELECT *FROM usuarios ";
  $qy=mysqli_query($conexion,$qw);
  while($ftr=mysqli_fetch_array($qy)){
    echo"
    <table class='usuariose5'>
  <thead>
    <tr>
      <th> <img src='./Recursos/user-img.png' heigth='80' width='80'> </th>
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

        

 </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

