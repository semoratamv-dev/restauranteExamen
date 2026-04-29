<?php
session_start();

// Si la sesión usuario no existe o no es igual a Bilbo
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'Bilbo') {
    // Redirigir a index
    header("Location: no_puedes_pasar.php");
    // Detener el script por completo
    exit();
}

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
<a href="index.php">⬅ Volver </a>
<h2>Estas en una zona super secreta y privada</h2>
<p>Los papeles de Super Secretos</p>

<img src="img/secret.webp" alt="">
</body>
</html>




