<?php
$nombr = $_POST['user'];
$contr = $_POST['pass'];
require_once '../BD/conexion.php';
$consulta="SELECT *FROM usuarios WHERE nombre='$nombr' AND  contrasena='$contr'";
$query = mysqli_query($conexion,$consulta);



$fias=mysqli_num_rows($query);

if ($fias>0){
session_start();
$_SESSION['login']="Administrador";
echo "Bienvenido $nombr";
}
else{
	echo "<script>
          alert('No tienes acceso al sistema');
	</script>";
}
?>