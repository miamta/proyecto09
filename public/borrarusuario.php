<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar</title>
  </head>
  <body>
    <?php

    $t=new Usuarios();


    $id=$_POST["id"];
    $nombre=$_POST["nombre"];

    // Usamos las funciones de usuarios
    $resultado=$t->borrarusuarios($id,$nombre);
    $listar=$t->listarusuarios();
    echo "<br>";
    echo "Usuario borrado";
    // foreach ($listar as $fila) {

      // echo "<b>Nombre: </b>".$fila['nombre']."<br>";
      // echo "<b>Apellidos: </b>".$fila['apellidos']."<br>";
      // echo "<b>Edad: </b>".$fila['edad']."<br>";
      // echo "<b>Curso: </b>".$fila['curso']."<br>";
      // echo "<b>Puntuacion: </b>".$fila['puntuacion']."<br>";
      // echo "<b>Correo: </b>".$fila['correo']."<br>";
      // echo "<br>";
      // echo "<hr
    ?>
    <!--Enlaces  -->
    <br>
    <form action="formularioinsertar.php">
      <input type="submit" value="Insertar">
    </form>
      <br>
    <form action="formularioactualizar.php">
      <input type="submit" value="Actualizar">
    </form>
    <br>
  </body>
</html>
