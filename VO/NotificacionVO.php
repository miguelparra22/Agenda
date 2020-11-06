<?php

class NotificacionVO{

    private $idNotificacion;
    private $idCita;
    private $descripcion;
    private $idAplica;
    private $idRol;
    private $estado;
    
    function getIdNotificacion() {
        return $this->idNotificacion;
    }

    function getIdCita() {
        return $this->idCita;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getIdAplica() {
        return $this->idAplica;
    }

    function getIdRol() {
        return $this->idRol;
    }

    function getEstado() {
        return $this->estado;
    }

    function setIdNotificacion($idNotificacion) {
        $this->idNotificacion = $idNotificacion;
    }

    function setIdCita($idCita) {
        $this->idCita = $idCita;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setIdAplica($idAplica) {
        $this->idAplica = $idAplica;
    }

    function setIdRol($idRol) {
        $this->idRol = $idRol;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }



}

?>