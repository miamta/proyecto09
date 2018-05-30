  <?php
  require_once __DIR__.'/../../vendor/autoload.php';

  use Daw\models\Sesiones;

  if(isset($_POST['nombre'])){
    $Iniciosesion=new Sesiones($_POST['nombre']);
  }else{
    $Inicisesion=new Sesiones(null);
  }

  if ($Iniciosesion->getUser()=='admin') {
    header("location:../indexadmin.php");
  }
      echo "Sesion Iniciada: ".$Iniciosesion->getUser()."<br>";
  ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Ahorcado</title>
  </head>
  <body id="fondo">
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript" src="ahorcado.js"> </script>




    <h1>Ahorcado</h1>
    <form class="" action="Front.html" method="post">

Inserta Letra: <input type="text" id="letraUsuario" value="">   <button type="button" onclick="comprobarletra()" id="boton"> Enviar </button>

<br>
<br>
  Comprobacion: <input type="text" id="cuadro" value="" size="20" readonly>
<br>
<br>
  Resultado: <input type="text" id="cuadro2" value="" size="20" readonly> <br>
<br>
<br>
 Palabra Final: <input type="text" id="cuadro3" value="" size="20" readonly>

    </form>

<br>
  <!-- Boton para cerrar sesion -->
   <a href="../logout.php">Cerrar Sesión</a>
  </form>

  </body>
</html>
