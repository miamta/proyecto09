<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario Actualizar</title>

  </head>
  <body>

    <form action="actualizarusuario.php" method="post">
        Id:<br>
        <input type="text" name="id">
        <br>
      	Nombre:<br>
      	<input type="text" name="nombre">
      	<br>
      	Apellidos:<br>
      	<input type="text" name="apellidos">
      	<br>
        Edad:<br>
        <input type="text" name="edad">
        <br>
        Curso:<br>
        <input type="text" name="curso">
        <br>
        Puntuacion:<br>
        <input type="text" name="puntuacion">
        <br>
        Correo:<br>
        <input type="text" name="correo">
        <br>
        <br>
      	<input type="submit" value="Actualizar">
    	</form>
      <br>

      <!-- Enlaces -->
      <br>
      <form action="formularioborrar.php">
        <input type="submit" value="Borrar">
      </form>
        <br>
      <form action="formularioinsertar.php">
        <input type="submit" value="Insertar">
      </form>
      <br>
      <form action="Index.php">
        <input type="submit" value="Inicio">
      </form>
        <br>

    </body>
  </html>
