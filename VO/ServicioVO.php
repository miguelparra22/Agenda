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
    private $Id_Empleado;
    
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

    function getId_Empleado(){
        return $this->Id_Empleado;
    }

    function setId_Servicio($Id_Servicio){
        $this->Id_servicio = $Id_Servicio;
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

    function setId_Empleado($Id_Empleado){
        $this->Id_Empleado = $Id_Empleado;
    }
}
