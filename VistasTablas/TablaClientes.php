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
    </div>
    <!--              DataTables                           -->
              <div>
                          <form method="POST">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead> 
                                      <tr>
                                              <?php
                                              require '../BD/conexion.php';
                                              $cons="SHOW COLUMNS FROM cliente FROM Air";
                                              $query=mysqli_query($conexion,$cons);
                                              while($fields=mysqli_fetch_row($query)){
                                              echo "
                                            
                                              <th> '$fields[0]' </th>
                                              "  ;
                                                }
                                              ?>
                                              <th>  Seleccion Eliminar     </th>
                                              <th>  Seleccion Modificar </th>
                                        </tr>
                                    </thead>
                                          <tbody>
                                                <?php
                                                require '../BD/conexion.php';
                                                $c="SELECT *FROM cliente";
                                                $q=mysqli_query($conexion,$c);
                                                while($i=mysqli_fetch_array($q)){
                                                  echo "
                                                  <tr>
                                                  <td>
                                                  $i[Id_cliente]
                                                  </td>
                                                  <td>
                                                  $i[Nom_clien]
                                                  </td>
                                                  <td>
                                                  $i[Edad]
                                                  </td>
                                                  <td>
                                                  $i[tel_cliente]
                                                  </td>
                                                  <td>
                                                  $i[email]
                                                  </td>
                                                  <td>
                                                  <input type='checkbox' name='eliminar[]' value='$i[Id_cliente]'/>  
                                                  </td>
                                                  <td>
                                                  <input type='checkbox' name='modificar[]' value='$i[Id_cliente]'/>
                                                  </td>
                                                  </tr>
                                                  ";
                                                      }
                                                  ?>
                                        </tbody> 
                                          <tfoot>
                                                        <tr>
                                                        <th><input type="submit" name="Agregar" value="Agregar" onclick="window.open('../VistasTablas/Nc.php')" class="btn btn-primary"/></th>
                                                        <th><input type="submit" name="modi" value="Modificar"  class="btn btn-warning"/></th>
                                                        <th><input type="submit" name="borrar" value="Eliminar"  class="btn btn-danger"/></th>
                                                        </tr>
                                          </tfoot>
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
                                                              $sem="DELETE FROM cliente WHERE Id_cliente=$i";
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
                                        
                              </table>
                          </form> 
                </div>
      
      <!--                Toggle de opciiones de la Base de Datos                           --->
      <div class="opciones-toggle" onclick = "opc()">
      <?php
      require '../BD/conexion.php';
      $consulta=mysqli_query($conexion,"SHOW TABLES IN Air");
      while($op=mysqli_fetch_row($consulta)){
      
       echo '<a class="t-opc" href="../VistasTablas/' . htmlspecialchars($op[0]) . '.php" />'.($op[0])."\n";
      }
      ?>
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

<script type="text/javascript" >$(document).ready(function() {
    $('#example').DataTable();
} );</script>
  <script src="../js/app.js"></script>
  <script src="../Dash/jquery/jquery.min.js"></script>
  <script src="../Dash/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../DT/DataTables-1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="../DT/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>