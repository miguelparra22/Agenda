<?php
class Cita extends Conexion implements Idatabase {

private $PDO;
private $CitaVO;
private $tabla;


public function __CONSTRUCT() {
    $this->PDO = parent::__construct();
    $this->tabla = "cita";
}

public function actualizar($vo) {
   
}


public function agregar($vo) {

    $this->ClienteVO = $vo;
    $sentencia = "INSERT INTO $this->tabla VALUES (null,:nombre,:correo,:telefono,:pwd)";
    $claveIncriptada = $this->hash($this->ClienteVO->getCliente_pwd());
    $resultado = $this->PDO->prepare($sentencia);
    return $resultado->execute(array(
                ':nombre' => $this->ClienteVO->getCliente_nombre(),
                ':pwd' => $claveIncriptada,
                ':correo' => $this->ClienteVO->getCliente_correo(),
                ':telefono' => $this->ClienteVO->getCliente_telefono(),
    ));
}

public function consultaUnica($id) {

   
}

public function eliminar($id) {
    
}

public function listar() {
   
}

}
?>