<?php

class EspecialidadController{
     private $model;
     private $vo;

     public function __CONSTRUCT(){
         $this->model = new EspecialidadModel();
         $this->vo =  new EspecialidadVO();
     }


    function agregar(){
        $this->vo->setEspecialiad_nombre($_POST["nombre"]);
        $this->vo->setEspecialidad_descripcion($_POST["descripcion"]);
        
        if($this->model->agregar($this->vo)){
            echo "<script>alert('Ingreso correctamente')</script>";
            include_once 'Vistas/Header.php';
            include_once 'Vistas/Especialidad/Agregar.php';
            include_once 'Vistas/Footer.php';

           
        }else{
            echo "fallo";
        }
    }
}

?>