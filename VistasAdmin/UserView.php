<!DOCTYPE html>
<html>
<head lang="es">
	<link  rel="icon" href="../Recursos/favicon.ico">
	<title>
		NuevaBD
	</title>
  <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5,minimum-scale=0.86">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/sb-admin-2.min.css">
	  <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
</head>
<body id="page-top ">
  <div class=" navbar navbar-expand  bg-success topbar  static-top shadow"">
    <div class="logodb">
      <img src="../Recursos/thelogo.png">
      
    </div>

    <div class="user nav-item dropdown no-arrow ">
      
    
      <p class="text-right" id="name">
      <?php 
      session_start();
      $nom=$_SESSION['login'];    
      echo "  Bienvenido $nom   ";
    ?>
      </p>
      <div class="img" onclick="togle2()">
      <img src="../Recursos/perfildeusuario.jpg" class="user-logo">
      </div>
    </div>
    
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in "aria-labelledby="userDropdown" id="session-btn" > 
    <div>
      <button class="btn btn-danger" id="boton" onclick="location='../BD/cs.php'"> Cerrar Sesion   </buton>
    </div>
    </div>
  </div>
  <!--code-->
 <!--  <table class='usuariose'>-->
            <div  >
              <?php
                include '../BD/conexion.php';
                $qw="SELECT usuarios.id,usuarios.nombre as Nombre,usuarios.apellidop as Apellido,cargo.descripcion as puesto from usuarios INNER JOIN cargo on cargo.id_cargo=usuarios.id_cargoo";
                $qy=mysqli_query($conexion,$qw);
                while($ftr=mysqli_fetch_array($qy)){
                  //hay que modificar la propiedad de css usuariose lo intente pero el resultado es el que ves
                echo"
                <table class='usuariose'>
                  <thead>
                    <tr>
                      <th> <img src='../Recursos/user-img.png' heigth='80' width='80'> </th>
                    </tr>
                    
                  </thead>
                    <tbody>
                      <tr>
                        <td>Id : </td>
                          <td>$ftr[id]</td>
                      </tr>
                      <tr>
                        <td>Apellido Paterno :</td>
                          <td>$ftr[Nombre]</td>
                      </tr>
                      <tr>
                        <td>Apellido Materno :</td>
                          <td>$ftr[Apellido]</td>
                      </tr>
                      <tr>
                        <td>Tipo De Usuario :</td>
                          <td>$ftr[puesto]</td>
                      </tr>
                    </tbody>
                  </table>
                ";
              }
              ?>
            </div>
                  <!-- Menu lateral-->
      
        




    <!-- boton flotante -->
      <div class="button-flo " onclick="togle()">
        <img class="opc"src="../Recursos/more.png" >
      </div>

      <div class="col-md-4 col-md-offset-1" id="opciones">
      <li><a href="FormularioRegistro.php">Crear Usuario</a></li>
        <li><a href="Importar.php">Importar</a></li>
        <li ><a href="#">Exportar</a></li>
        <li><a href="UserView.php">Cuentas de Usuario</a></li>
      </div>
  </div>

  
  <script src="../js/app.js"></script>
  <script src="../Dash/jquery/jquery.min.js"></script>
  <script src="../Dash/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>