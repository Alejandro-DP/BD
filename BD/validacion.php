<?php
$nombr = $_POST['user'];
$contr = $_POST['pass'];
require_once '../BD/conexion.php';

if (empty($nombr && $contr)){
	echo "
	<script>
    alert('Debes de llenar los campos');
   location.href='../index.php';
	</script>;
	
	";
}
else{   
$consulta="SELECT *FROM usuarios WHERE nombre='$nombr' AND  contrasena='$contr'";
$query = mysqli_query($conexion,$consulta);

$fias=mysqli_fetch_array($query);

if ($fias['id_cargoo']==1){
session_start();
$_SESSION['login']=$nombr;
echo "<script>
location.href='../VistasAdmin/DashboardAdmin.php';
</script>";
}
else
if ($fias['id_cargoo']==2) {
	echo"<script>
      location.href='../VistaProg/Dash.php';
	</script>";
}


else{
	echo "<script>
		  alert('No tienes acceso al sistema');
		  location.href='../index.php';
	</script>";
}
}
?>