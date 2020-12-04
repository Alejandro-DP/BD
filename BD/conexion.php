<?php
$host='localhost';
$user = 'root';
$password='';
$db='Air';

$conexion=mysqli_connect($host,$user,$password,$db);
if (!$conexion){
	die("Ocurrio algun error al conectar a la base de datos , favor de contactar al administrador".mysqli_connect_error());
}






?>