<?php
include '../BD/conexion.php';
$id=$_POST['id'];
$nom=$_POST['nom'];
$edad=$_POST['edad'];


if(empty($nom)||empty($edad)){
  echo "<script>
  alert('No rellenaste todos los campos');
  location.href='../VistasTablas/destino.php';
  </script>";
}
else{
  $q=mysqli_query($conexion,"UPDATE destino SET aeroport='$nom',ciudad='$edad' WHERE id_destino='$id'");
  if($q){
    echo "<script>
    alert('modificado con exito');
    location.href='../VistasTablas/destino.php';
    </script>";
  }
}



?>