<DOCTYPE html>
<html>
<head>
<title>
TablaOrigen
</title>
</head>
<body>
<table>
<tr>
<td>
    ID_ORIGEN
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
$se= "SELECT *FROM origen";
$query=mysqli_query($conexion,$se);
while($v=mysqli_fetch_array($query)){  

?>
<tr>
<td>
<?php
echo $v["id_origen"]
?>
</td>
<td>
<?php
echo $v["Aeroport"]
?>
</td>
<td>
<?php
echo $v["ciudad"]
?>
</td>
</tr>
<?php

}
?>
</table>
</body>
</html>