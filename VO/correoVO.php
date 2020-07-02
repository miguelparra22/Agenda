<?php

class CorreoVO {

    private $asunto;
    private $contenidoHTML;
    private $usuario;
    private $clave;
    private $destinatario;
    private $host;
    private $port;
    private $direccionRespuesta;
    private $SMTPAuth;
    private $SMTPSecure;
    private $SMTPDebug;
    
    function getAsunto() {
        return $this->asunto;
    }

    function getContenidoHTML() {
        return $this->contenidoHTML;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getDestinatario() {
        return $this->destinatario;
    }

    function getHost() {
        return $this->host;
    }

    function getPort() {
        return $this->port;
    }

    function getDireccionRespuesta() {
        return $this->direccionRespuesta;
    }

    function getSMTPAuth() {
        return $this->SMTPAuth;
    }

    function getSMTPSecure() {
        return $this->SMTPSecure;
    }

    function getSMTPDebug() {
        return $this->SMTPDebug;
    }

    function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    function setContenidoHTML($contenido) {
        $this->contenidoHTML = $contenido;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setDestinatario($destinatario) {
        $this->destinatario = $destinatario;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function setPort($port) {
        $this->port = $port;
    }

    function setDireccionRespuesta($direccionRespuesta) {
        $this->direccionRespuesta = $direccionRespuesta;
    }

    function setSMTPAuth($SMTPAuth) {
        $this->SMTPAuth = $SMTPAuth;
    }

    function setSMTPSecure($SMTPSecure) {
        $this->SMTPSecure = $SMTPSecure;
    }

    function setSMTPDebug($SMTPDebug) {
        $this->SMTPDebug = $SMTPDebug;
    }



}

?>