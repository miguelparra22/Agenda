<?php

class Cita extends Conexion implements Idatabase {

    private $PDO;
    private $CitaVO;
    private $tabla;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "citas";
        $this->CitaVO = new CitaVO();
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

        if (!(empty($id))) {
            $this->tabla = "servicio";
            $sentencia = "SELECT * FROM $this->tabla WHERE ID_SERVICIO in($id)";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function consultaUnicaEmpleados($id, $fechaInicio) {

        if (!(empty($id))) {
            $this->tabla = "empleado";
            $sentencia = "SELECT * FROM $this->tabla em INNER JOIN servicio_empleado se ON em.ID_EMPLEADO=se.ID_EMPLEADO "
                    . " INNER JOIN servicio s ON se.ID_SERVICIO=s.ID_SERVICIO WHERE em.FK_ROL<> 1 AND s.ID_SERVICIO='$id' ";
            $resultado = $this->PDO->prepare($sentencia);

            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
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