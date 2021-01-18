<!DOCTYPE html>
<html>
<head lang="es">
<link  rel="icon" href="../Recursos/logo.ico">
	<title>
		Cargos
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
    <a class="logodb" href="../VistasAdmin/DashboardAdmin.php"><img src="../Recursos/thelogo.png"></a>
      
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
      <div class="t-cli ">
      <form method="POST"> 
                              <table id="tabla">
                                    <thead> 
                                      <tr>
                                              <?php
                                              require '../BD/conexion.php';
                                              $cons="SHOW COLUMNS FROM cargo FROM Air";
                                              $query=mysqli_query($conexion,$cons);
                                              while($fields=mysqli_fetch_row($query)){
                                              echo "
                                            
                                              <th> '$fields[0]' </th>
                                              "  ;
                                                }
                                              ?>
                                              <th>   Seleccion    </th>
                                        </tr>
                                    </thead>
                                          <tbody>
                                                <?php
                                                require '../BD/conexion.php';
                                                $c="SELECT *FROM cargo";
                                                $q=mysqli_query($conexion,$c);
                                                while($i=mysqli_fetch_array($q)){
                                                  echo "
                                                  <tr>
                                                  <td>
                                                  $i[id_cargo]
                                                  </td>
                                                  <td>
                                                  $i[descripcion]
                                                  </td>
                                                  <td>
                                                  <input type='checkbox' name='eliminar[]' value='$i[id_cargo]'/>  
                                                  </td>
                                                  </tr>
                                                  ";
                                                      }
                                                  ?>
                                        </tbody> 
                                          <tfoot>
                                                        <tr>
                                                        <th><input type="submit" name="Agregar" value="Agregar" onclick="window.open('#')" class="btn btn-primary"/></th>
                                                        <!--<th><input type="submit" name="modi" value="Modificar"  class="btn btn-warning"/></th>-->
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
                                                              $sem="DELETE FROM cargo WHERE id_cargo=$i";
                                                              $quer=mysqli_query($conexion,$sem);
                                                              echo "<script>
                                                              alert('Elemento Eliminado Con Exito');
                                                              location.href='../VistasTablas/cargo.php';
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
                                                             // include '../BD/pdcliente.php';
                                                              /*include '../BD/conexion.php';
                                                              
                                                              echo "
                                                             <div class='miform'>
                                                             <form method='POST' action='cliente.php'>
                                                             <div class='form-group'>
                                                               <label for='nombre'>Nombre</label>
                                                               <input type='text' class='form-control' name='nom' aria-describedby='emailHelp' placeholder='Ingresa Nombre'>
                                                             </div>
                                                             <div class='form-group'>
                                                               <label for='Edad'>Edad</label>
                                                               <input type='text' class='form-control' name='edad' placeholder='Ingresa Edad'>
                                                             </div>
                                                             <div class='form-group'>
                                                               <label for='Telefono'>Telefono</label>
                                                               <input type='text' class='form-control' name='tel' placeholder='Ingresa Telefono'>
                                                             </div>
                                                             <div class='form-group'>
                                                             <label for='Correo'>Correo</label>
                                                             <input type='text' class='form-control' name='correo' placeholder='Ingresa Correo'>
                                                           </div>
                                                             
                                                             <button type='submit' class='btn btn-warning'>Submit</button>
                                                           </form>
                                                             </div>
                                                             
                                                             ";
                                                            */
                                                            }
                                                          }
                                                        }
                                                                  
                                                        ?>
                                        
                              </table>
                          </form> 
                          
      </div>
      <!--modificar datos-->
        <div class='miform'>
                  <form method='POST' action='../BD/pdcargo.php'>
                  <h6 class="text-center">Modificar Datos</h6>

                  <label>Selecciona id de Cargo:</label>
                  <select name="id">
                      <?php
                     require '../BD/conexion.php';
                     $j=mysqli_query($conexion,"select *from cargo");
                     while($fr=mysqli_fetch_row($j)){
                      echo "
                      <option value='$fr[0]'>$fr[0]</option>
                ";
                     }
                      ?>
                      </select>
                        <div class='form-group'>
                          <input type='text' class='form-control' name='nom' aria-describedby='emailHelp' placeholder='Ingresa Cargo'>
                          </div>
                                                              
                <button type='submit' class='btn btn-warning'>Modificar</button>
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