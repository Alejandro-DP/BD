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
	<link rel="icon" href="Recursos/logo.ico">
	<title>
		PhpMyPirata
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="Viewport" content="width=device-width",initial-scale=1.0>
</head>
<body>
<header>
	
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<table class="table-dark">
	<tr>
		<td>
		    <form action="BD/validacion.php" method="post">
		    	<br>
		    	<center><img src="Recursos/logo.png" height="50" width="100"></center>
		    	<br>
		    	<input class="form-control" type="text" name="user" placeholder="Usuario">
		    	<br>
		    	<input class="form-control" type="password" name="pass" placeholder="Contraseña">
		    	<br>
		    	<center><input class="btn btn-success" type="submit" name="enviar" value="Accesar"></center>
		    	<br>
		    </form>
		</td>
	</tr>
</table>


</center>
<footer>
	
</footer>
</body>
</html>