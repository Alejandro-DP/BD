<!DOCTYPE html>
<html>
<head lang="es">
	<link  rel="icon" href="../Recursos/favicon.ico">
	<title>
		NuevaBD
	</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5,minimum-scale=0.86">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/dash.css">
  <link rel="stylesheet" href="../css/sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
    
</head>
<body id="page-top ">
  <div class=" navbar navbar-expand  bg-success topbar  static-top shadow">
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
    <!--              DataTables                           -->
    <div>
      <form method="POST" class="taba" >
        <table id="tabla" >
          <thead class="thead-dark">
              <th>Bases De Datos</th>
              <th>Seleccion</th>   
          </thead>
            <tbody>
            <?php
              include '../BD/conexion.php';
                $sentencia=mysqli_query($conexion,"SHOW DATABASES");
                  while($fr=mysqli_fetch_row($sentencia)){
                    echo "
                      <tr>
                      <td>$fr[0]</td>
                      <td><input type='checkbox' name='eliminar[]' value='$fr[0]'/></td>
                      </tr>
                    ";
                    }
            ?>
            </tbody>
              <tfoot>
                <tr>
                  <th><input type="submit" name="borrar" value="Eliminar Seleccion(es)" class="btn btn-danger"></th>
                </tr>
              </tfoot>
              <?php
                if(isset($_POST['borrar'])){
                if(empty($_POST["eliminar"])){
                echo "<script>
                alert('no seleccionaste ningun campo');  
                location.href='../VistasAdmin/DashboardAdmin.php';
                </script>";
                  }
                    else{
                      foreach ($_POST["eliminar"] as $fr) {
                        include '../BD/conexion.php';
                          $sem="DROP DATABASE $fr";
                          $quer=mysqli_query($conexion,$sem);
                          echo "<script>
                          alert('Base de datos borrada con exito');
                          location.href='../VistasAdmin/DashboardAdmin.php';
                          </script>";  
                          }
                        }
                  }
              ?>
          </table>
        </form>
      </div>

        <div class="content-bdn">
        <h6 class="text-center">Crear Base De Datos</h6>
        <form class="inn" action="../BD/creacionbd.php" method="post">
        <div class="form-group">
        <input class="form-control" type="text" name="nombre" placeholder="Nombre de la base de datos">
        </div>
        <select class="form-select form-select-sm" name="seleccion">
          <option value="#">armscii8_bin</option>
          <option value="#">armscii8_general_ci</option>
          <option value="#">armscii8_general_nopad_ci</option>
          <option value="#">armscii8_nopad_bin</option>
        </select>
        <div class="btn-group">
          <input class="btn btn-success " type="submit" name="enviar" value="Crear">
        </div>
        </form>
        </div>
      </div>
      <!--                Toggle de opciiones de la Base de Datos                           --->
      <div class="opciones-toggle" onclick = "opc()">
<<<<<<< HEAD
    <div class="dd"> 
      
    </div>
=======
      <?php
      require '../BD/conexion.php';
      $consulta=mysqli_query($conexion,"SHOW TABLES IN Air");
      while($op=mysqli_fetch_row($consulta)){
      
       echo '<a class="t-opc" href="../VistasTablas/' . htmlspecialchars($op[0]) . '.php" />'.($op[0])."\n";
      }
      ?>
>>>>>>> 09dd672f9d90b1a6fdfffc814ec0cc2c8ba1a960
      </div>
      <!-- Menu lateral-->
      <div class=" wrapper navbar-nav bg-white sidebar "> 
        <h5 class = "icon-dat">Bases De Datos</h5>
        <div class="data-bases">
        <?php
          require '../BD/conexion.php';
          $sentenciasql="SHOW DATABASES";
          $consulta=mysqli_query($conexion,$sentenciasql);
          while($otra=mysqli_fetch_row($consulta)){
                echo '<li class="acord" id ="'.htmlspecialchars($otra[0]).'" />' .($otra[0])."\n";  
            }
        ?>
        </div>
      </div>
    <!-- boton flotante -->
      <div class="button-flo " onclick="togle()">
        <img class="opc"src="../Recursos/more.png" >
      </div>

      <div class="col-md-4 col-md-offset-1" id="opciones">
      <li><a href="FormularioRegistro.php">Crear Usuario</a></li>
        <li><a href="Importar.php">Importar</a></li>
        <li ><a href="exportarbd.php">Exportar</a></li>
        <li><a href="UserView.php">Cuentas de Usuario</a></li>
      </div>
  </div>

  
  <script src="../js/app.js"></script>
  <script src="../Dash/jquery/jquery.min.js"></script>
  <script src="../Dash/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../DT/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="../DT/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
  <script src="../js/dt.js"></script>
</body>
</html>