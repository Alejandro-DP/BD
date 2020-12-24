<DOCTYPE html>
<html>
<head>
<title>
TablaDestinos

</title>
</head>
<body>

<table>
<tr>
<td>
ID DESTINO
</td>
<td>
AEROPUERTO
</td>

<td>
CIUDAD
</td>
</tr>
<?php
include '../BD/conexion.php';
$sentencia ="SELECT *FROM destino";
$query =mysqli_query($conexion,$sentencia);
while ($otra=mysqli_fetch_array($query)){  


?>

<tr>
<td>
<?php echo $otra ["id_destino"]  ?>
</td>
<td>
<?php
echo $otra["aeroport"]
?>
</td>
<td>
<?php
echo $otra["ciudad"]
?>
</td>
</tr>
<?php

}
?>
</table>

</body>
</html>