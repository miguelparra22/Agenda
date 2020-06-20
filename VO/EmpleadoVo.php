<?php

class EmpleadoVo{


    private $Id_Empleado;
    private $Nombre_Empleado;
    private $Correo_Empleado;
    private $Password_Empleado;
    private $Especialidad_Empleado;
    private $Estado_Empleado;
    private $Rol_Empleado;


    function getId_Empleado(){
        return $this->Id_Empleado;
    }

    function getNombre_Empleado(){
        return $this->Nombre_Empleado;
    }

    function getCorreo_Empleado(){
        return $this->Correo_Empleado;
    }

    function getPassword_Empleado(){
        return $this->Password_Empleado;
    }

    function getEspecialidad_Empleado(){
        return $this->Especialidad_Empleado;
    }

    function getEstado_Empleado(){
        return $this->Estado_Empleado;
    }

    function getRol_Empleado(){
        return $this->Rol_Empleado;
    }

    function setId_Empleado($Id_Empleado){
        $this ->Id_Empleado = $Id_Empleado;
    }

    function setNombre_Empleado($Nombre_Empleado){
        $this->Nombre_Empleado = $Nombre_Empleado;
    }


    function setCorreo_Empleado($Correo_Empleado){
        $this->Correo_Empleado = $Correo_Empleado;
    }

    function setPassword_Empleado($Password_Empleado){
        $this->Password_Empleado = $Password_Empleado;
    }

    function setEspecialidad_Empleado($Especialidad_Empleado){
        $this->Especialidad_Empleado = $Especialidad_Empleado;
    }

    function setEstado_Empleado($Estado_Empleado){
        $this->Estado_Empleado = $Estado_Empleado;
    }

    function setRol_Empleado($Rol_Empleado){
        $this->Rol_Empleado = $Rol_Empleado;
    }

}




?>