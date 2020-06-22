<?php 


class CitaVO {

    private $id_cita;
    private $horapactada;
    private $fk_idCliente;
    private $descripcion;
    private $fk_idEstado;
    private $fk_horario;
    private $fk_servicio;
    
    function getId_cita() {
        return $this->id_cita;
    }

    function getHorapactada() {
        return $this->horapactada;
    }

    function getFk_idCliente() {
        return $this->fk_idCliente;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFk_idEstado() {
        return $this->fk_idEstado;
    }

    function getFk_horario() {
        return $this->fk_horario;
    }

    function getFk_servicio() {
        return $this->fk_servicio;
    }

    function setId_cita($id_cita) {
        $this->id_cita = $id_cita;
    }

    function setHorapactada($horapactada) {
        $this->horapactada = $horapactada;
    }

    function setFk_idCliente($fk_idCliente) {
        $this->fk_idCliente = $fk_idCliente;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFk_idEstado($fk_idEstado) {
        $this->fk_idEstado = $fk_idEstado;
    }

    function setFk_horario($fk_horario) {
        $this->fk_horario = $fk_horario;
    }

    function setFk_servicio($fk_servicio) {
        $this->fk_servicio = $fk_servicio;
    }


}
?>