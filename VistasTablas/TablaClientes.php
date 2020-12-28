<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title></title>
</head>
<body>
<table id="table" class="table table-striped table-hover table-bordered" style="width:100%">
<tr>
<td>
ID CLIENTE
</td>
<td>
NOMBRE
</td>
<td>
EDAD
</td>
<td>
TELEFONO
</td>

<td>
CORREO ELECTRONICO
</td>
</tr>
<?php

require '../BD/conexion.php';
$query ="SELECT *FROM cliente";
$consulta2=mysqli_query($conexion,$query);
while ($consulta=mysqli_fetch_array($consulta2)){
    
?>

<tr>
<td>
<?php echo $consulta["Id_cliente"] ?>
</td>
<td>
<?php echo $consulta["Nom_clien"] ?>
</td>
<td>
<?php echo $consulta["Edad"] ?>
</td>
<td>
<?php echo $consulta ["tel_cliente"]?>
</td>
<td>
<?php echo $consulta["email"]?>
</td>
</tr>
<?php
}
?>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>