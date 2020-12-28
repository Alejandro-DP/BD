<DOCTYPE html>
<html>
<head>
<title>
TablaHorarios
</title>
</head>
<body>
<table>
<tr>
<td>
ID HORARIO
</td>
<td>
HORA
</td>
<td>
FECHA
</td>
<td>
ID ORIGEN
</td>
<td>
ID DESTINO
</td>
</tr>
<?php
include '../BD/conexion.php';
$sentencia= "SELECT *FROM horarios";
$query= mysqli_query($conexion,$sentencia);
while ($otra=mysqli_fetch_array($query)){ 


?>
<tr>
<td>
<?php
echo $otra["id_horario"]
?>
</td>
<td>
<?php
echo $otra["hora"]
?>
</td>
<td>
<?php
echo $otra ["fecha"]
?>
</td>
<td>
<?php
echo $otra["id_origen"]
?>
</td>
<td>
<?php
echo $otra["id_destino"]
?>
</td>
</tr>
<?php

}
?>
</table>
</body>
</html>