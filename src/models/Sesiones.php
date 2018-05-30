<?php
namespace Daw\models;
?>

<?php

class Sesiones extends Usuarios
{
	private $usuarios=null;

  function __construct($nombre)
  {
    session_start();
		if(isset($_SESSION["nombre"])){
			$this->usuarios=$_SESSION["nombre"];
		}else {
			if ($nombre!=null) {
				$_SESSION["nombre"]=$nombre;
				$this->usuarios=$_SESSION["nombre"];
			}
  	}
  }


  public function getUsuario(){
	return $this->usuarios;
  }

  // Funcion para añadir usuario
  public function addUsuario($usuario){
	$_SESSION['nombre']=$usuario;
	$this->usuarios=$usuario;
  }


  // Funcion para cerrar sesion
  public function logout(){
    $_SESSION=[];
	  session_destroy();
  }
}
  ?>
