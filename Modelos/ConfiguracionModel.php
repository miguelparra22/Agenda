<?php

class Configuracion extends Conexion{

    private $PDO;
    private $ConfiguracionVO;
    private $tabla;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "configuracion";
    }

    public function buscarconfiguracion($idConfiguracion){
        $sentencia = "SELECT * FROM $this->tabla WHERE IdConfiguracion= '$idConfiguracion';";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado = $resultado->fetchAll(PDO::FETCH_OBJ); 
    }
}
?>