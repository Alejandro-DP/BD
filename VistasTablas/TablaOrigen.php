<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
    <link rel="stylesheet" href="../DT/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">
    <title></title>
</head>
<body>

	
<div class="user-var">
  <div class="logodb">
    <img src="../Recursos/thelogo.png">
    
  </div>
  <div class="user">
    <div class="img">
     <img src="../Recursos/perfildeusuario.jpg" class="user-logo" >
    </div>
   
    <p class="text-right" id="name">
    <?php 
     session_start();
     $nom=$_SESSION['login']  ;    
     echo "  Bienvenido $nom   ";
  ?>
    </p>
  </div>
</div>

<form method="POST">
<div class="contenedor" >
    <table class="tabla-bd">
      <thead >
      
       <tr class="table table-success">
      <!--  <th scope="col">Eliminar Bases De Datos</th>
        <th scope="col">Seleccionar</th>
      </tr>-->
      <?php
require '../BD/conexion.php';
$cons="SHOW COLUMNS FROM origen  FROM Air";
$query=mysqli_query($conexion,$cons);
while($fields=mysqli_fetch_row($query)){

echo "

<th> '$fields[0]' </th>

"  ;
}

?>
<th> Seleccion Eliminar </th>
<th> Seleccion Modificar <th>
</tr>
  </thead>
  <tbody>
    <?php
     require '../BD/conexion.php';
    $c="SELECT *FROM origen";
    $q=mysqli_query($conexion,$c);
    while($i=mysqli_fetch_array($q)){
      echo "
      <tr>
      <td>
      $i[id_origen]
      </td>
      <td>
      $i[Aeroport]
      </td>
      <td>
      $i[ciudad]
      </td>
      <td>
      <input type='checkbox' name='eliminar[]' value='$i[id_origen]'/>  
      </td>
      <td>
      <input type='checkbox' name='modificar[]' value='$i[id_origen]'/>
      </td>
      </tr>
      ";
    }
    ?>
    <tr><td><input type="submit" name="Agregar" value="Agregar" onclick="window.open('../VistasTablas/Nc.php')" class="btn btn-primary"/></td>
    <td><input type="submit" name="modi" value="Modificar"  class="btn btn-warning"/></td>
    <td><input type="submit" name="borrar" value="Eliminar"  class="btn btn-danger"/></td>
    </tr>

    <?php
     if(isset($_POST['borrar'])){
       if(empty($_POST["eliminar"])){
         echo "<script>
         alert('no seleccionaste ningun campo');
         
         </script>";
       }
       else{
         
         foreach ($_POST["eliminar"] as $i) {
          include '../BD/conexion.php';
           $sem="DELETE FROM origen WHERE id_origen=$i";
           $quer=mysqli_query($conexion,$sem);
           echo "<script>
           alert('Elemento Eliminado Con Exito');
           location.href='../VistasTablas/TablaClientes.php';
           </script>";  
         }
       }
     }
    ?>

<?php
     if(isset($_POST['modi'])){
       if(empty($_POST["modificar"])){
         echo "<script>
         alert('no seleccionaste ningun campo');
         
         </script>";
       }
       else{
         
         foreach ($_POST["modificar"] as $i) {
           include '../BD/conexion.php';
           echo "<script>
           var nn=prompt('Nuevo Nombre');
           var ne=prompt('Nueva Edad');
           var nt=prompt('Nuevo Telefono');
           var nc=prompt('Nuevo Correo');
           </script>";
           $nom="<script>document.write(nn)</script>";
           $ed="<script>document.write(ne)</script>";
           $tel="<script>document.write(nt)</script>";
           $corr="<script>document.write(nc)</script>";

         }
       }
     }
    ?>
  </tbody>
  </table>
  </form> 
</div>
<div  class="menu">
<h5 class = "icon-dat">
    bases de datos
</h5>
<div class="data-bases">
  <?php
require '../BD/conexion.php';
$sentenciasql="SHOW DATABASES";
$s="SHOW TABLES IN Air";
$consulta=mysqli_query($conexion,$sentenciasql);

while($otra=mysqli_fetch_row($consulta)){
$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->createElement('li',"{$otra[0]}");

// Insertamos el nuevo elemento como raíz (hijo del documento)
$dom->appendChild($element);
echo $dom->saveXML();
}



?>
  
  <div class="tables">
    <tr>

    </tr>
  </div>
</div>
  <div class="button-flo" onclick="togle()">
    <img class="opc"src="../Recursos/more.png" >
  </div>
  <div class="col-md-4 col-md-offset-1" id="opciones">
    
      <li><a>Importar</a></li>
      <li ><a href="#">Exportar</a></li>
      <li><a href="UserView.php">Cuentas de Usuario</a></li>
      <li><a>Bases de Datos</a></li>
    
  </div>
</div>


<script src="../js/jquery.js"></script>
<script src="../js/app.js"> 
<script src="../js/bootstrap.min.js"></script>
<script src="../DT/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
<script src="../DT/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script src="../js/dt.js"></script>
</body>
</html>