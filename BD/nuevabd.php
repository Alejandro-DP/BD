<?php
require '../BD/conexion.php';

$nombre=$_POST["nombre"];
$bd=$_POST["bd"];

if (empty($nombre) || empty($bd)){
echo "

<script>
alert('no puedes dejar campos vacios');
location.href='../VistasAdmin/Importar.php';
</script>;
";
}

else{
    $query="CREATE DATABASE $nombre";
    $query2=mysqli_query($conexion,$query);
    if(!$query2){
        echo "
        <script>
        alert('error al crear la bd');

        </script>;
        ";
    }
    else {

        echo "

        <script>
        alert('Base de datos creada');
        location.href='../VistasAdmin/Importar.php';
        </script>;
        
        "
        ;
    
    



}

/*
$usarbd="USE 'bd'";
$consi=mysqli_query($conexion,$usarbd);
$imp="SOURCE '$bd'";
$seti=mysqli_query($conexion,$imp);
if (!$seti){
    echo "fallo";
}
else{
    echo "bien";
}*/





}




?>