<?php
namespace Daw\models;

class Usuarios extends Db
{

  // insertar usuarios en la base de datos
   public function insertarusuarios($nombre, $apellidos, $edad, $curso, $puntuacion, $correo){

   $insertar="INSERT INTO usuario (nombre, apellidos, edad, curso, puntuacion, correo) VALUES ('$nombre', '$apellidos', $edad, $curso, $puntuacion, '$correo')";
   $resultado= parent::getConexion()->query($insertar);
    }

   // actualizar en la base de datos
   public function actualizarusuarios($id,$nombre, $apellidos, $edad, $curso, $puntuacion, $correo){
   $actualizar="UPDATE usuario SET id=$id,nombre='$nombre',apellidos='$apellidos',edad=$edad,curso=$curso,puntuacion=$puntuacion,correo='.$correo.' WHERE id=$id";
   $resultado= parent::getConexion()->query($actualizar);
    }

   // borrar usuarios de la base de datos
   public function borrarusuarios($id){
   $borrar="DELETE FROM usuario WHERE id=$id";
   $resultado= parent::getConexion()->query($borrar);
   }

   // listar usuarios de la base de datos
         public function listarusuarios(){
           if (parent::getError()==false)
           {
             $listar="SELECT * FROM usuario";
             $resultado= parent::getConexion()->query($listar);
         if (!$resultado) {
           echo "Falló la insercion: (" . parent::getConexion()->errno.")" . parent::getConexion()->error;
           return false;
           }else{
             return $resultado;
           }
           }else{
             return false;
         }
       }

   }

 ?>
