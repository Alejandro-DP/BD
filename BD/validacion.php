<?php
$nombr = $_POST['user'];
$contr = $_POST['pass'];
require_once '../BD/conexion.php';
$consulta="SELECT *FROM usuarios WHERE nombre='$nombr' AND  contrasena='$contr'";
$query = mysqli_query($conexion,$consulta);

$fias=mysqli_fetch_array($query);

if ($fias['id_cargoo']==1){
session_start();
$_SESSION['login']="Administrador";
echo "admin";
}
else
if ($fias['id_cargoo']==2) {
	echo "Programador";
}


else{
	echo "<script>
          alert('No tienes acceso al sistema');
	</script>";
}
?>