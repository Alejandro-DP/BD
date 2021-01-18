<?php
include '../BD/conexion.php';
$id=$_POST['id'];
$nom=$_POST['nom'];
$edad=$_POST['dir'];
$tel=$_POST['tel'];


if(empty($nom)||empty($edad)||empty($tel)){
  echo "<script>
  alert('No rellenaste todos los campos');
  location.href='../VistasTablas/compañia.php';
  </script>";
}
else{
  $q=mysqli_query($conexion,"UPDATE compañia SET nom_aer='$nom',dirac='$edad',tel='$tel' WHERE id_aerolinea='$id'");
  if($q){
    echo "<script>
    alert('modificado con exito');
    location.href='../VistasTablas/compañia.php';
    </script>";
  }
}



?>