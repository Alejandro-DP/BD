<!DOCTYPE html>
<html>
<head>
  <title>
    NuevoUsuario
  </title>
</head>
<body>
<form action="../BD/NuevoRegistro.php" method="POST">
  <input type="text" name="nombre" placeholder="nombre">
  <input type="text" name="apellidom" placeholder="Apellido Materno">
  <input type="text" name="apellidop" placeholder="Apellido Paterno">
  <input type="password" name="contra" placeholder="Contraseña">
  <select name="seleccion">
    <option value="1">Adminstrador</option>
    <option value="2">Programador</option>
  </select>
  <input type="submit" name="enviar" value="Registrar">
  
</form>


</body>
</html>