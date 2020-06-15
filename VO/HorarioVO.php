<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HorarioVO{
//    Definición de los atríbutos
    private $Id_Horario;
    private $HoraInicio;
    private $HoraFinal;
    private $Id_Empleado;
    private $Disponibilidad;
    
    function getId_Horario(){
        return $this->Id_Horario;
    }

    function getHoraInicio(){
        return $this->HoraInicio;
    }

    function getHoraFinal(){
        return $this->HoraFinal;
    }

    function getId_Empleado(){
        return $this->Id_Empleado;
    }

    function getDisponibilidad(){
        return $this->Disponibilidad;
    }

    function setId_Horario($Id_Horario){
        $this->Id_Horario= $Id_Horario;
    }

    function setHoraInicio($HoraInicio){
        $this->HoraInicio = $HoraInicio;
    }
    
    function setHoraFinal($HoraFinal){
        $this->HoraFinal = $HoraFinal;
    }

    function setId_Empleado($Id_Empleado){
        $this->Id_Empleado = $Id_Empleado;
    }

    function setDisponibilidad($Disponibilidad){
        $this->Disponibilidad = $Disponibilidad;
    }
}

