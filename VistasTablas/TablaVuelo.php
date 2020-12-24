<DOCTYPE html>
<html>
<head>
<title>
TablaVuelo
</title>
</head>
<body>
<table>
<tr>
<td>
ID VUELO
</td>
<td>
DISPONIBLE
</td>
<td>

ID COMPAÑIA
</td>

<td>
ID HORARIO
</td>
</tr>
<?php

include '../BD/conexion.php';
$sent ="SELECT *FROM vuelo";
$query=mysqli_query($conexion,$sent);
while ($d=mysqli_fetch_array($query)){     

?>
<tr>
<td>
<?php  echo $d["id_vuelo"]  ?>
</td>
<td>
<?php  echo $d["Disponib"]   ?>

</td>
<td>
<?php
echo $d["id_compañia"]
?>

</td>
<td>
<?php
echo $d["id_horario"]
?>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>