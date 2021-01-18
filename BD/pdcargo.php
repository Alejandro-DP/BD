<?php
include '../BD/conexion.php';
$id=$_POST['id'];
$nom=$_POST['nom'];


if(!$nom){
  echo "<script>
  alert('No rellenaste todos los campos');
  location.href='../VistasTablas/cargo.php';
  </script>";
}
else{
  $q=mysqli_query($conexion,"UPDATE cargo SET descripcion='$nom' WHERE id_cargo='$id'");
  if($q){
    echo "<script>
    alert('modificado con exito');
    location.href='../VistasTablas/cargo.php';
    </script>";
  }
}



?>