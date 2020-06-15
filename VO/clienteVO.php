<?php 


class ClienteVO {

    private $cliente_id;
    private $cliente_nombre;
    private $cliente_pwd;
    private $cliente_correo;

    function getCliente_id() {
        return $this->cliente_id;
    }

    function getCliente_nombre() {
        return $this->cliente_nombre;
    }

    function getCliente_pwd() {
        return $this->cliente_pwd;
    }

    function getCliente_correo() {
        return $this->cliente_correo;
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function setCliente_nombre($cliente_nombre) {
        $this->cliente_nombre = $cliente_nombre;
    }

    function setCliente_pwd($cliente_pwd) {
        $this->cliente_pwd = $cliente_pwd;
    }

    function setCliente_correo($cliente_correo) {
        $this->cliente_correo = $cliente_correo;
    }


}




?>