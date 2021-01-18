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
  <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
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
              <div >
                          <form method="POST"> 
                              <table id="tabla">
                                    <thead> 
                                      <tr>
                                              <?php
                                              require '../BD/conexion.php';
                                              $cons="SHOW COLUMNS FROM destino FROM Air";
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
                                                $c="SELECT *FROM destino";
                                                $q=mysqli_query($conexion,$c);
                                                while($i=mysqli_fetch_array($q)){
                                                  echo "
                                                  <tr>
                                                  <td>
                                                  $i[id_destino]
                                                  </td>
                                                  <td>
                                                  $i[aeroport]
                                                  </td>
                                                  <td>
                                                  $i[ciudad]
                                                  </td>
                                                  <td>
                                                  <input type='checkbox' name='eliminar[]' value='$i[id_destino]'/>  
                                                  </td>
                                                  <td>
                                                  <input type='checkbox' name='modificar[]' value='$i[id_destino]'/>
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
      
      <!-- Menu lateral-->
      
    <!-- boton flotante -->
      <div class="button-flo " onclick="togle()">
        <img class="opc"src="../Recursos/more.png" >
      </div>

      <div class="col-md-4 col-md-offset-1" id="opciones">
      <li><a href="../VistasAdmin/FormularioRegistro.php">Crear Usuario</a></li>
      <li><a href="../VistasAdmin/Importar.php">Importar</a></li>
        <li ><a href="../VistasAdmin/exportarbd.php">Exportar</a></li>
        <li><a href="../VistasAdmin/UserView.php">Cuentas de Usuario</a></li>
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