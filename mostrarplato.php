<?php 
include('header.php');

// cargamos 📃 JSON
$json = file_get_contents('carta.json');
// decodificamos 📃JSON a 🧨Array PHP
$arrayPlatos = json_decode($json, true);

/*  //revisamos si se ha cargado bien el JSON mostrando el 🧨Array PHP con print_r
echo '<pre>';
print_r($arrayPlatos);
echo '</pre>';  */


//ocultar platos en la carta

// Nombre del plato que deseas desactivar y la categoría correspondiente
$nombre=$_GET['nombre'];

// Declaracion función para buscar la categoría por el nombre del plato
function buscarCategoriaPorNombre($menu,$nom)
{
  
   foreach ($menu as $categoria => $platos) {
    foreach ($platos as $plato) {
      if ($plato['nombre'] === $nom && $plato["activo"] === 0) {
        return $categoria; // Retornar la categoría si se encuentra el plato activo
      }
    }
  }
  return null; // Retornar null si no se encuentra el plato
}

// Usar la función para buscar la categoría

$categoria = buscarCategoriaPorNombre($arrayPlatos, $nombre);

if ($categoria) {
  echo "categoria: '$categoria'";
  echo "El plato '$nombre' se encuentra en la categoría: '$categoria'.\n";
} else {
  echo "El plato '$nombre' no se encontró o no está activo.\n";
}

// Verificar si la categoría existe
if (isset($arrayPlatos[$categoria])) {
  // Recorrer el array dentro de la categoría seleccionada
  foreach ($arrayPlatos[$categoria] as &$plato) { // Usar referencia para modificar el valor directamente
    if ($plato["nombre"] === $nombre) {
      // Cambiar "activo" a 0
      $plato["activo"] = 1;
      break; // Salir del bucle una vez encontrado y actualizado
    }
  }
}
/* 
// Filtrar el menu para no mostrar los elementos con "activo" igual a 0
foreach ($arrayPlatos as $categoria => $platos) {
  $arrayPlatos[$categoria] = 
  array_filter($platos, function ($plato) {
    return $plato['activo'] === 1; // Solo incluir los que están activos
  });
} */

/* // Mostrar el array resultante
echo '<pre>';
print_r($arrayPlatos);
echo '</pre>'; */

// codificamos el 🧨Array a JSON
$newJson = json_encode($arrayPlatos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
// guardamos el 📃 JSON
file_put_contents('carta.json', $newJson);
?>