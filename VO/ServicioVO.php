<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ServicioVO{
//    Definición de los atríbutos
    private $Id_Servicio;
    private $NombreServicio;
    private $DescripcionServicio;
    private $CantidadServicio;
    private $PrecioServicio;
    private $Id_Empleado;
    private $Empleado;
    private $Tiempo_Limite;

    
    function getId_Servicio(){
    return $this->Id_Servicio;
    }

    function getNombreServicio(){
        return $this->NombreServicio;
    }

    function getDescripcionServicio(){
        return $this->DescripcionServicio;
    }

    function getCantidadServicio(){
        return $this->CantidadServicio;
    }

    function getPrecioServicio(){
        return $this->PrecioServicio;
    }

    function getId_Empleado(){
        return $this->Id_Empleado;
    }

    function getEmpleado(){
        return $this->Empleado;
    }

    function getTiempo_Limite(){
        return $this->Tiempo_Limite;
    }

    function setId_Servicio($Id_Servicio){
    $this->Id_Servicio = $Id_Servicio;
    }

    function setNombreServicio($NombreServicio){
        $this->NombreServicio = $NombreServicio;
    }
    
    function setDescripcionServicio($DescripcionServicio){
        $this->DescripcionServicio = $DescripcionServicio;
    }

    function setCantidadServicio($CantidadServicio){
        $this->CantidadServicio = $CantidadServicio;
    }

    function setPrecioServicio($PrecioServicio){
        $this->PrecioServicio = $PrecioServicio;
    }

    function setId_Empleado($Id_Empleado){
        $this->Id_Empleado = $Id_Empleado;
    }

    function setEmpleado($Empleado){
        $this->Empleado = $Empleado;
    }

    function setTiempo_Limite($Tiempo_Limite){
        $this->Tiempo_Limite = $Tiempo_Limite;
    }
}
