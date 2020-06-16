<?php 


class EspecialidadVO{
     private $especialidad_id;
     private $especialidad_nombre;
     private $especialidad_descripcion;



     function getEspecialidad_id(){
          return $this->especialidad_id;
     }

     function getEspecialidad_nombre(){
         return $this->especialidad_nombre;
     }

     function getEspecialidad_descripcion(){
         return $this->especialidad_descripcion;
     }



     function setEspecialidad_id($especialidad_id){
         $this->especialidad_id = $especialidad_id;
     }

     function setEspecialiad_nombre($especialidad_nombre){
         $this->especialidad_nombre = $especialidad_nombre;
     }

     function setEspecialidad_descripcion($especialidad_descripcion){
         $this->especialidad_descripcion = $especialidad_descripcion;
     }

}







?>