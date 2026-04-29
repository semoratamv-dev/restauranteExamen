<?php 
include('header.php') ?>

<nav class="navindex">
  <!-- <a  class="navindexitem" href="aniadirplato.php"  target="_blank">Añadir nuevo plato</a>
    <a class="navindexitem" href="ocultarplato.php" target="_blank">Ocultar plato</a> -->

  <!-- <a class="navindexitem" href="carta.php" target="_blank">Mostrar carta</a> -->
  <a class="navindexitem" href="validacion.php" >Cerrar sesión</a>
</nav>
</header>

<body>
  <div id="formularios" >
    <!--añadir carta a plato      -->
    <form action="aniadirPlato.php" method="get" target="_blank">
      <label for="nombre">Nombre del Plato:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="ingredientes">Ingredientes:</label>
    <input type="text" id="ingredientes" name="ingredientes" required>

    <label for="alergenos">Alérgenos:</label>
    <input type="text" id="alergenos" name="alergenos" required>

    <label for="precio">Precio:</label>
    <input type="text" id="precio" name="precio" required>

    <label for="categoria">Categoría:</label>
    <select id="categoria" name="categoria" required>
        <option value="primero">Primero</option>
        <option value="segundo">Segundo</option>
        <option value="postre">Postre</option>
        <option value="bebida">Bebida</option>
    </select>
    <input type="submit" value="Añadir Plato">
    <input type="reset" Value="Borrar datos">
    </form>


    <!--ocultar plato  de carta    -->
    <form action="ocultarplato.php" method="get" target="_blank">
      <label>Plato a ocultar de la carta</label>
      <input type="text" placeholder="Nombre del plato" name="nombre">
      <br><br>
      <input type="submit" value="Ocultar Plato" >
      <input type="reset" Value="Borrar datos">
    </form>

     <!--mostrar plato  de carta    -->
    <form action="mostrarplato.php" method="get" target="_blank">
      <label>Plato a mostrar en la carta</label>
      <input type="text" placeholder="Nombre del plato" name="nombre">
      <br><br>
      <input type="submit" value="Mostrarr Plato" >
      <input type="reset" Value="Borrar datos">
    </form>
  </div>

</body>

</html>