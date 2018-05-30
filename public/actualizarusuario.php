<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>
    <?php

    $t=new Usuarios();

    // Recogemos los valores del formulario
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["edad"];
    $curso=$_POST["curso"];
    $puntuacion=$_POST["puntuacion"];
    $correo=$_POST["correo"];

    // Usamos las funciones de usuarios
    $resultado=$t->actualizarusuarios($id,$nombre,$apellidos,$edad,$curso,$puntuacion,$correo);
    $listar=$t->listarusuarios();

    foreach ($listar as $fila) {
      echo "<b>Nombre: </b>".$fila['nombre']."<br>";
      echo "<b>Apellidos: </b>".$fila['apellidos']."<br>";
      echo "<b>Edad: </b>".$fila['edad']."<br>";
      echo "<b>Curso: </b>".$fila['curso']."<br>";
      echo "<b>Puntuacion: </b>".$fila['puntuacion']."<br>";
      echo "<b>Correo: </b>".$fila['correo']."<br>";
      echo "<br>";
      echo "<hr>";
  }
    ?>
    <!-- Links  -->
    <br>
    <form action="formularioborrar.php">
      <input type="submit" value="Borrar">
    </form>
      <br>
    <form action="formularioinsertar.php">
      <input type="submit" value="Insertar">
    </form>

  </body>
</html>
