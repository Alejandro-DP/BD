<!DOCTYPE html>
<html>
<head lang="es">
	<link  rel="icon" href="../Recursos/favicon.ico">
	<title>
		Usuarios
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5,minimum-scale=0.86">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	  <link href="css/simple-sidebar.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
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
<div class="col-md-4 col-md-offset-1" id="user-content">
    user
</div>
<div  class="menu">
  <div class="button-flo" onclick="togle()">
    <p class="opc"> +</p>
  </div>
  <div class="col-md-4 col-md-offset-1" id="opciones">
    
      <li>Importar</li>
      <li>Exportar</li>
      <li>Cuentas de Usuario</li>
      <li>Bases de Datos</li>
    
  </div>
</div>

  <script src="../js/app.js">  
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>