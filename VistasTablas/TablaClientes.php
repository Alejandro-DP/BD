<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../DT/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">
    <title></title>
</head>
<body>
<table id="tabla" class="table-responssive table-striped table-bordered" style="width:100%">
<thead class="thead-light"> 
    <tr>
        <th>ID CLIENTE</th>
        <th>Nombre</th>
        <th>EDAD</th>
        <th>TELEFONO</th>
        <th>CORREO ELECTRONICO</th>
    </tr>
</thead>
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

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../DT/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
<script src="../DT/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="../js/dt.js"></script>
</body>
</html>