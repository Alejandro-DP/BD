<?php
include '../BD/conexion.php';
$id=$_POST['id'];
$nom=$_POST['nom'];
$edad=$_POST['edad'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];

if(empty($nom)||empty($edad)||empty($tel)||empty($correo)){
  echo "<script>
  alert('No rellenaste todos los campos');
  location.href='../VistasTablas/horarios.php';
  </script>";
}
else{
  $q=mysqli_query($conexion,"UPDATE horarios SET hora='$nom',fecha='$edad',id_origen='$tel',id_destino='$correo' WHERE id_horario='$id'");
  if($q){
    echo "<script>
    alert('modificado con exito');
    location.href='../VistasTablas/horarios.php';
    </script>";
  }
}



?>