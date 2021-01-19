<?php
include '../BD/conexion.php';
$id=$_POST['id'];
$nom=$_POST['nom'];
$edad=$_POST['edad'];


if(empty($nom)||empty($edad)){
  echo "<script>
  alert('No rellenaste todos los campos');
  location.href='../VistasTablas/origen.php';
  </script>";
}
else{
  $q=mysqli_query($conexion,"UPDATE origen SET Aeroport='$nom',ciudad='$edad' WHERE id_origen='$id'");
  if($q){
    echo "<script>
    alert('modificado con exito');
    location.href='../VistasTablas/origen.php';
    </script>";
  }
}



?>