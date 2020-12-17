<?php

require_once '../BD/conexion.php';
//recibiendo parametros de html 
$nombre=$_POST['nombre'];
$apellidom=$_POST['apellidom'];
$apellidop=$_POST['apellidop'];
$contraseña=$_POST['contra'];
$cargo =$_POST['aqui se haria del select'];

$Insertar="INSERT INTO usuarios VALUES ('$nombre','$apellidom','$apellidop','$contraseña','$cargo')";


?>


