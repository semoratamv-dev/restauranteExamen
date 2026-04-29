<?php
include('header.php');
//capturamos valores de la URL (por GET)
$nombre = $_GET['nombre'];
$ingredientes = $_GET['ingredientes'];
$alergenos = $_GET['alergenos'];
$precio = $_GET['precio'];
$categoria = $_GET['categoria'];
$activo = 1; //x defecto
// cargamos 📃 JSON
$json = file_get_contents('carta.json');
// decodificamos 📃JSON a 🧨Array PHP
$arrayPlatos = json_decode($json, true);

/*revisamos si se ha cargado bien el JSON mostrando el 🧨Array PHP con print_r
echo '<pre>';
print_r($arrayPlatos);
echo '</pre>';
*/

// Agrega el nuevo plato
array_push($arrayPlatos[$categoria], [
  'nombre' => $nombre,
  'ingredientes' => $ingredientes,
  'alergenos' => $alergenos,
  'precio' => $precio,
  'activo' => 1 // Cambiado a "Activo" para coincidir con tu JSON
]);

/* 
// revisamos que el plato haya sido añadido al 🧨Array con print_r
echo '<pre>';
print_r($arrayPlatos);
echo '</pre>';
*/
// codificamos el 🧨Array a JSON
$newJson = json_encode($arrayPlatos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
// guardamos el 📃 JSON
file_put_contents('carta.json', $newJson);

echo "<h2>El plato ha sido añadido correctamente</h2>";

?>