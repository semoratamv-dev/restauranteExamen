<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#8b0000">
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/png" href="favicon.png">
  <title>Restaurante Italiano</title>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('sw.js')
          .then(reg => console.log('Service Worker registered', reg))
          .catch(err => console.log('Service Worker registration failed', err));
      });
    }
  </script>
</head>

<header>
  <h1>Restaurante La fonte</h1>
  <img src="./imagenes/icon-512.png" alt="Logo" width="100" height="100">

</header>

<body>