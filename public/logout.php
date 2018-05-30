<?php
// Se crea la sesion
@session_start();
// Se termina la sesion
session_destroy();

header("Location: index.php");
?>
