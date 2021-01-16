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
    <link rel="stylesheet" type="text/css" href="./css/wrapper.css">

    <title>Document</title>

</head>
<body>
<div >
<?php
      require './BD/conexion.php';
      $sentenciasql = "SHOW TABLES IN AiR";
      $consulta=mysqli_query($conexion,$sentenciasql);
      while($op=mysqli_fetch_row($consulta)){
      
        echo '<a class="t-opc" href="' . htmlspecialchars($op[0]) . '" />'.($op[0])."\n";

      }
      ?>
   <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

