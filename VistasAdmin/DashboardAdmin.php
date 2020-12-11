<!DOCTYPE html>
<html>
<head lang="es">
	<link  rel="icon" href="../Recursos/favicon.ico">
	<title>
		Dashboard
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5,minimum-scale=0.86">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	  <link href="css/simple-sidebar.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
</head>
<body>
	
 <div class="d-flex" id="wrapper">

  
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><center><img src="../Recursos/admin.png" height="80" width="80"></center>
      <?php 
     session_start();
     $nom=$_SESSION['login']  ;    
     echo "<center>  Bienvenido $nom    </center>";
               ?>
       </div>
      <div class="list-group list-group-flush">
        <a href="../VistasAdmin/DashboardAdmin.php" class="list-group-item list-group-item-action bg-light">Inicio</a>
        <a href="../VistasUsuarios/ListaUsuarios.php" class="list-group-item list-group-item-action bg-light"
        >Usuarios</a>
        <a href="../VistasAdmin/FormularioUsuarios.php" class="list-group-item list-group-item-action bg-light">Nuevo Registro</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Modificar Registros</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Asignar Re-Asignar Grupos</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Borrar Registros</a>
        <a href="../index.php" class="btn btn-danger">Cerrar Sesion</a>
        
      </div>
    </div>

    <div id="page-content-wrapper">


        

      <div class="container-fluid">
        <center><h1 class="mt-4"><img src="../Recursos/logo.png" height="150" width="150"></h1></center>
        <center><h2>Objetivo:</h2></center>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.
        </p>
        <center><h2>Mision:</h2></center>
        <p>Make sure to keep all page content within the #page-content-wrapper. The top navbar is optional, and just for demonstration. Just create an element with the  ID which will toggle the menu when clicked.</p>
        <center><h2>Vision:</h2></center>
        <p>Make sure to keep all page content within the #page-content-wrapper. The top navbar is optional, and just for demonstration. Just create an element with the  ID which will toggle the menu when clicked.</p>
      </div>
    </div>
 </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



 


</body>
</html>