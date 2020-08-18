<?php

class Cita extends Conexion implements Idatabase {

    private $PDO;
    private $CitaVO;
    private $tabla;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "citas";
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

    public function CambiarIdxNom($tabla, $CampoObtener, $campofiltro, $valorfiltro) {
        $sentencia = "SELECT $CampoObtener FROM $tabla WHERE $campofiltro = $valorfiltro";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        $resultado = $resultado->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultaUnica($id) {
        
    }

    public function eliminar($id) {
        
    }

    public function listar() {
        $hoy = date("Y-m-j");
        $hasta = date("Y-m-j", strtotime($hoy . "+ 7 days"));
        $sentencia = "SELECT * FROM $this->tabla WHERE HORAPACTADA BETWEEN '$hoy' and '$hasta'";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

    public function listarAdmin() {
        $sentencia = "SELECT * FROM $this->tabla WHERE DATE(HORAPACTADA) = DATE(NOW())";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

    public function listarCliente($IdCliente) {
        $sentencia = "SELECT * FROM $this->tabla WHERE DATE(HORAPACTADA) = DATE(NOW()) AND FKIDCLIENTE = $IdCliente";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

    public function listarEmpleado($IdEmpleado) {
        $IdCita = $this->CambiarIdxNom("agenda", "FK_IDCITA", "FK_IDEMPLEADO", "$IdEmpleado")[0]->FK_IDCITA;
        $sentencia = "SELECT * FROM $this->tabla WHERE DATE(HORAPACTADA) = DATE(NOW()) AND IDCITA = $IdCita";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

}

?>