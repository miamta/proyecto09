<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario borrar</title>
  </head>
  <body>
    <h3>Borrar Usuario:</h3>
    <form action="borrarusuario.php" method="post">
        Id:<br>
        <input type="text" name="id">
        <br>
      	Nombre:<br>
      	<input type="text" name="nombre">
        <br>
      	<input type="submit" value="Borrar">
        <br>
    	</form>
      <br>

      <form action="formularioinsertar.php">
        <input type="submit" value="Insertar">
      </form>
        <br>
      <form action="formularioactualizar.php">
        <input type="submit" value="Actualizar">
      </form>
      <br>
      <form action="Index.php">
        <input type="submit" value="Inicio">
      </form>
        <br>
      <br>
    </body>
  </html>
