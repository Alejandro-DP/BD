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
<thead>
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


<script>
 $(document).ready(function () {
            var table = $('#tabla').DataTable({
                "pageLength": 10,
                "autoWidth": true,
                'colReorder': {
                    'allowReorder': false
                },
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ ",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "1",
                        "sLast": "...",
                        "sNext": ">",
                        "sPrevious": "<"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }

            });

        });
        
</script>
</body>
</html>