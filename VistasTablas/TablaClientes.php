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


<form method="POST">
<table id="tabla" class="table-responssive table-striped table-bordered" style="width:100%">
<thead class="thead-light"> 
    <tr>
        <th>ID CLIENTE</th>
        <th>Nombre</th>
        <th>EDAD</th>
        <th>TELEFONO</th>
        <th>CORREO ELECTRONICO</th>
        <th>SELECCIONAR</th>
    </tr>
</thead>
<?php

require '../BD/conexion.php';
$query ="SELECT *FROM cliente";
$consulta2=mysqli_query($conexion,$query);
while ($consulta=mysqli_fetch_array($consulta2)){
    

echo '<tr>
<td>' .$consulta['Id_cliente']. '</td>
<td>'  .$consulta['Nom_clien'].'</td>
<td>'.$consulta['Edad'].'</td>
<td>'.$consulta['tel_cliente'].'</td>
<td>'.$consulta['email'].'</td>
<td><input type="checkbox" name="eliminar[]" value"  '.$consulta['Id_cliente'].'"/> </td>
</tr>';
/*
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
<?php*/
}
?>
</table>

<input type="submit" name="borrar" value="Eliminar" onclick="reload()" class="btn btn-danger"/>

<?php
require '../BD/conexion.php';
if(isset($_POST['borrar'])){
    if(empty($_POST['eliminar'])){
        echo "<script>
        alert('no se selecciono valor');
        
        </script>";
    }
    else {
        foreach ($_POST['eliminar'] as $id_borrar) {
            $borrar=$conexion->query("DELETE FROM cliente WHERE Id_cliente='$id_borrar'");
        }
    }
}

?>


</form>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../DT/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
<script src="../DT/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="../js/dt.js"></script>
</body>
</html>