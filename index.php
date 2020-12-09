<!--<?php
/*session_start();
if (isset($_SESSION['login'])){
	echo 'Bienvenido '.' '.$_SESSION['login'];
}
*/
?>-->

<!DOCTYPE html>
<html>
<head lang="es">
<!--	<link rel="icon" href="Recursos/logo.ico"> !-->
	<title>
		PhpMyPirata
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<meta charset="utf-8">
	<meta name="Viewport" content="width=device-width",initial-scale=1.0>
</head>
<body class="box">
<header>
	
</header>
<div class="col-md-4 col-md-offset-1" id="pagebg">
	<img src="Recursos/page_background.png"id="img">
</div>
   
	<form action="BD/validacion.php" method="post" class="col-md-4 col-md-offset-1" id="log">
	    <div class="col-md-4 col-md-offset-1" id="">
			<img src="Recursos/thelogo.png"id="logo">
		</div>
	<div class="input-group"id="form">
           
		<input class="form-control" type="text" name="user" placeholder="Usuario">

	   </div> 
	   <div class="input-group"id="form2">
        
	   <input class="form-control" type="password" name="pass" placeholder="Contraseña">

	   </div> 
	   <div class="input-group">
	   		<input class="btn btn-lg btn-primary btn-block" id="btn" type="submit" name="enviar" value="Accesar">
        </div>
	</form>
	


<footer>
	
</footer>
</body>
</html>