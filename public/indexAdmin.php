<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\usuarios;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyecto09</title>
  </head>
  <body>
    <form action="formularioActualizar.php">
      <input type="submit" value="Actualizar">
    </form>
    <br>
    <form action="formularioBorrar.php">
      <input type="submit" value="Borrar">
    </form>
    <br>
    <br>
     <a href="logout.php">Log Out</a>
  </body>
</html>
