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
  location.href='../VistasTablas/cliente.php';
  </script>";
}
else{
  $q=mysqli_query($conexion,"UPDATE cliente SET Nom_clien='$nom',Edad='$edad',tel_cliente='$tel',email='$correo' WHERE Id_cliente='$id'");
  if($q){
    echo "<script>
    alert('modificado con exito');
    location.href='../VistasTablas/cliente.php';
    </script>";
  }
}



?>