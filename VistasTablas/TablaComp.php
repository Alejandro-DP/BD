<DOCTYPE html>
<html lang=es>
<head>
<title>
TablaCompañias
</title>
<meta charset="UTF-8">
</head>
<body>
<table>
<tr>
<td>
ID AEROLINEA
</td>
<td>
NOMBRE AEROLINEA
</td>
<td>
DIRECCION
</td>
<td>
TELEFONO
</td>
</tr>
<?php
include '../BD/conexion.php';
$consulta= "SELECT *FROM compañia";
$query =mysqli_query($conexion,$consulta);
while ($datos=mysqli_fetch_array($query)){  


?>
<tr>
<td>
<?php
echo $datos ["id_aerolinea"]?>
</td>
<td>
<?php
echo $datos ["nom_aer"]
?>
</td>
<td>
<?php
echo $datos ["dirac"]
?>
<td>
<?php
echo $datos ["tel"]
?>
</td>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>