<?php


class EmpleadoController{


    private $model;
     private $vo;

     public function __CONSTRUCT(){
         $this->model = new EmpleadoModel();
         $this->vo =  new EmpleadoVo();
     }

     function agregar(){

        $this->vo->setNombre_Empleado($_POST["nombre"]);
        $this->vo->setCorreo_Empleado($_POST["correo"]);
        $this->vo->setPassword_Empleado($_POST["pass"]);
        $this->vo->setEspecialidad_Empleado($_POST["especialidad"]);
        $this->vo->setEstado_Empleado($_POST["estado"]);
        $this->vo->setRol_Empleado($_POST["rol"]);

        if($this->model->agregar($this->vo)){
            echo "<script>alert('Ingreso correctamente')</script>";
            include_once 'Vistas/Header.php';
            include_once 'Vistas/Empleado/Agregar.php';
            include_once 'Vistas/Footer.php';
        }else{
            echo "fallo";
        }
    }
}



?>