<?php

class CitaVO {

    private $idcita;
    private $horapactada;
    private $horatermina;
    private $fkidcliente;
    private $descripcion;
    private $fkidestado;
    private $fkidempelado;
    private $idservicio;

    function getIdcita() {
        return $this->idcita;
    }

    function getHorapactada() {
        return $this->horapactada;
    }

    function getHoratermina() {
        return $this->horatermina;
    }

    function getFkidcliente() {
        return $this->fkidcliente;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFkidestado() {
        return $this->fkidestado;
    }

    function getFkidempelado() {
        return $this->fkidempelado;
    }

    function getIdservicio() {
        return $this->idservicio;
    }

    function setIdcita($idcita) {
        $this->idcita = $idcita;
    }

    function setHorapactada($horapactada) {
        $this->horapactada = $horapactada;
    }

    function setHoratermina($horatermina) {
        $this->horatermina = $horatermina;
    }

    function setFkidcliente($fkidcliente) {
        $this->fkidcliente = $fkidcliente;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFkidestado($fkidestado) {
        $this->fkidestado = $fkidestado;
    }

    function setFkidempelado($fkidempelado) {
        $this->fkidempelado = $fkidempelado;
    }

    function setIdservicio($idservicio) {
        $this->idservicio = $idservicio;
    }

}

?>