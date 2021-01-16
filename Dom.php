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
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/dash.css">

    <title>Document</title>

</head>
<body>
<div >
<?php
    include './BD/conexion.php';
    $qw="SELECT *FROM usuarios";
    $qy=mysqli_query($conexion,$qw);
    while($ftr=mysqli_fetch_array($qy)){
      //hay que modificar la propiedad de css usuariose lo intente pero el resultado es el que ves
    echo"
    <table class='usuariose'>
      <thead>
        <tr>
          <th> <img src='./Recursos/user-img.png' heigth='80' width='80'> </th>
        </tr>
        <tr>
          <th scope='col'>Nombre</th>
        <th scope='col'>$ftr[nombre]</th>
        </tr>
      </thead>
        <tbody>
          <tr>
            <td>Id</td>
              <td>$ftr[id]</td>
          </tr>
          <tr>
            <td>Apellido Paterno</td>
              <td>$ftr[apellidop]</td>
          </tr>
          <tr>
            <td>Apellido Materno</td>
              <td>$ftr[apellidom]</td>
          </tr>
          <tr>
            <td>Tipo De Usuario</td>
              <td>$ftr[id_cargoo]</td>
          </tr>
        </tbody>
      </table>
    ";
  }
  ?>
   <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

