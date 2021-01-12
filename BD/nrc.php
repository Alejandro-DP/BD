<?php
$n=$_POST["nombre"];
$e=$_POST["edad"];
$t=$_POST["tel"];
$c=$_POST["correo"];
if(empty($n ||$e ||$t ||$c)){
    echo "<script>
    alert('no dejes campos vacios');
    </script>";
}
else{   
include '../BD/conexion.php';
$query="INSERT INTO cliente VALUES(NULL,'$n','$e','$t','$c')";
$my=mysqli_query($conexion,$query);
if(!$my){
    echo "
    <script>
    alert('Ocurrio algun error al registrar cliente');
    location.href='../VistasTablas/Nc.php';
    </script>;
    ";
}
else{
    echo "
    <script>
    alert('Registro Correcto');
    location.href='../VistasTablas/Nc.php';
    </script>;
    ";
}


}
?>