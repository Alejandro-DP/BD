<!DOCTYPE html>
<html>
<head>
<title>
TablaClientes
</title>
</head>
<body>

<table>
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







</body>
</html>