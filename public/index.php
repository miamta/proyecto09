<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proyecto09</title>
  </head>
  <body>
    <?php
    //Ejemplo de uso de modelos
    $t=new Usuarios();
    // $t->insertarUsuario("Julio","Cesar Juanito",20,1,150,"pepelacome.com");
    // echo "<br>";
    // $t->actualizarUsuario(2,"pepa","rodriguez",20,1,150,"pepelacome.com");
    // echo "<br>";
    // $t->borrarUsuario(3,"Francis","rodriguez",20,1,150,"pepelacome.com");
    ?>

    <!--Botones  -->

    <br>
      <form action="formularioInsertar.php">
      <input type="submit" value="Insertar Usuario">
    </form>

    <br>

    <form action="accesousuarios.php">
      <input type="submit" value="Acceso Usuarios">
    </form>
  </body>
  </body>
</html>
