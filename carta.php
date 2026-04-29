<?php
//cargar el archivo json
$json = file_get_contents('carta.json');

/*echo '<pre><code>';
print_r($json);
echo '</code></pre>'; */
//convertir en array php
$arrayPlatos = json_decode($json, true);

/* // comprobar si bien echo
 echo '<pre><code>';
print_r($arrayPlatos);
echo '</code></pre>'; */

function cartaPlatos($array, $plato)
{
  //global $arrayPlatos;
  foreach ($array[$plato] as $elemento) {
    if ($elemento['activo']) {
      echo "<li id='lista'>
      <h3>{$elemento['nombre']}</h3>
      <p>Ingredientes: {$elemento['ingredientes']}</p>
      <p>Alérgenos: {$elemento['alergenos']}</p>
      <p>Precio: {$elemento['precio']}</p>
      </li>";
    }
  }
}
?>

<!------------- HTML ------>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Restaurante La fonte</title>
</head>


<body>
  <h1>Restaurante La fonte</h1>
  <a class="navindexcarta" href="index.php">Volver a menú principal</a>
  <main>
    <div class="carta-grid">
      <div class="carta-categoria">
        <h2>Primeros</h2>
        <?php cartaPlatos($arrayPlatos, 'primero') ?>
      </div>

      <div class="carta-categoria">
        <h2>Segundos</h2>
        <?php cartaPlatos($arrayPlatos, 'segundo') ?>
      </div>

      <div class="carta-categoria">
        <h2>Postres</h2>
        <?php cartaPlatos($arrayPlatos, 'postre') ?>
      </div>

      <div class="carta-categoria">
        <h2>Bebidas</h2>
        <?php cartaPlatos($arrayPlatos, 'bebida') ?>
      </div>
    </div>
  </main>
</body>

</html>