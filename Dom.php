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
           <!-- Menu lateral-->
           <div class="menu"> 
        <h5 class = "icon-dat">Bases De Datos</h5>
        <div class="data-bases">
        <?php
          require './BD/conexion.php';
          $sentenciasql="SHOW DATABASES";
          $consulta=mysqli_query($conexion,$sentenciasql);
          while($otra=mysqli_fetch_row($consulta)){
            echo '<li class="acord" onclick="'.htmlspecialchars($op[0]).'" id ="'.htmlspecialchars($otra[0]).'" />' .($otra[0])."\n";  
          }
        ?>
        </div>
 
      </div>

  
   <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

