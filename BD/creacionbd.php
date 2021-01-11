<?php
include '../BD/conexion.php';
$var=$_POST["nombre"];
if(empty($var)){
    echo "
    <script>
    alert('Escribe un nombre para la bd');
    location.href='../VistasAdmin/crearbd.php';
    </script>;
    ";
}
else{   

$senencia="CREATE DATABASE $var";
$query=mysqli_query($conexion,$senencia);

if($query){

 echo "
 <script>
alert('Base de datos creada con exito');
location.href='../VistasAdmin/DashboardAdmin.php';
 </script>;
 
 ";}
else{
    echo"
    alert('No se puedo crear la bd');
    location.href='../VistasAdmin/DashboardAdmin.php';

 </script>;
 
 "
;
}

}





?>