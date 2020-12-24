<DOCTYPE html>
<html>
<head>
<title>
TablaPasajes
</title>
</head>
<body>
<table>
<tr>
<td>
ID PASAJE
</td>
<td>
CLASE
</td>
<td>
ASIENTO
</td>

<td>
PRECIO
</td>
<td>
ID CLIENTE
</td>
<td>
ID VUELO
</td>
</tr>

<?php
include '../BD/conexion.php';
$sent="SELECT *FROM pasaje";
$query=mysqli_query($conexion,$sent);
while($q=mysqli_fetch_array($query)){

?>
<tr>
<td>
<?php   echo $q["id_pasaje"]      ?>
</td>
<td>
<?php   echo $q["Clase"]      ?>

</td>
<td>
<?php    echo $q["Asiento"]       ?>
</td>
<td>
<?php    echo $q["Precio"]   ?>
</td>
<td>

<?php   echo $q["id_cliente"]   ?>

</td>
<td>
<?php   echo $q["id_vuelo"]    ?>
</td>
</tr>
<?php

}
?>
</table>
</body>
</html>