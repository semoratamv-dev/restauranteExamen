<?php 
// Inicia la sesión
session_start();
$_SESSION['usuario'] = $usuario;
//$_SESSION['usuario']='Bilbo';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesesion.css">
  <title>Inicio Sesion</title>
</head>
<body>
  <h1>Restaurante La fonte</h1>
  <h2>👌 La Sesión se ha iniciado correctamente</h2>
<p>Ahora puedes acceder al apartado privado</p>

if ($_SESSION){
  echo "<h2>👌 La Sesión se ha iniciado correctamente</h2>";
<a href="modificarplatos.php">Ir a modificaciones </a>
}else{
  echo "<h2>👌 La Sesión no se ha iniciado correctamente</h2>"
<a href="index.php">Vover a inicio </a>
}


</body>
</html>




