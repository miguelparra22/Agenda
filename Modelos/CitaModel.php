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
        $sentencia = "INSERT INTO $this->tabla VALUES (null,:HORAPACTADA,:HORATERMINA,:FKIDCLIENTE,:DESCRIPCION,:FKIDESTADO)";
        $resultado = $this->PDO->prepare($sentencia);
        $horapactada = $vo->getHorapactada();
        $horatermina = $vo->getHoratermina();
        $cliente = $vo->getFkidcliente();
        $estado = $vo->getFkidestado();
        $descripcion = $vo->getDescripcion();
        $resultado->bindParam(":HORAPACTADA", $horapactada, PDO::PARAM_STR);
        $resultado->bindParam(":HORATERMINA", $horatermina, PDO::PARAM_STR);
        $resultado->bindParam(":FKIDCLIENTE", $cliente, PDO::PARAM_STR);
        $resultado->bindParam(":FKIDESTADO", $estado, PDO::PARAM_STR);
        $resultado->bindParam(":DESCRIPCION", $descripcion, PDO::PARAM_STR);
        if ($resultado->execute()) {
            $lastInsertId = $this->PDO->lastInsertId();
            $vo->setIdcita($lastInsertId);
            $cita = $vo->getIdcita();
            print_r($vo->getIdservicio());
            foreach ($vo->getIdservicio() as $key => $value) {
                echo($key);
                $sentenciaAgenda = "INSERT into agenda values(null,:FK_IDEMPLEADO,:FK_IDCITA)";
                $resultadoAgenda = $this->PDO->prepare($sentenciaAgenda);
                $resultadoAgenda->bindParam(":FK_IDEMPLEADO", $value, PDO::PARAM_STR);
                $resultadoAgenda->bindParam(":FK_IDCITA", $cita, PDO::PARAM_STR);
                $resultadoAgenda->execute();
            }

            foreach ($vo->getIdservicio() as $key2 => $value2) {
                $sentenciaServicio = "INSERT into cita_servicio values(null,:ID_CITA,:ID_SERVICIO)";
                $resultadoServicio = $this->PDO->prepare($sentenciaServicio);
                $resultadoServicio->bindParam(":ID_CITA", $cita, PDO::PARAM_STR);
                $resultadoServicio->bindParam(":ID_SERVICIO", $key2, PDO::PARAM_STR);
                $resultadoServicio->execute();
            }

            return true;
        }
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

    public function misServicios($id) {

        if (!(empty($id))) {
            $sentencia = "select * FROM $this->tabla c "
                    . " WHERE c.FKIDESTADO <> 2 AND c.FKIDCLIENTE='$id' "
                    . " ORDER BY c.HORAPACTADA ASC ";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function buscaEmMasSer($id) {
        if (!(empty($id))) {
            $sentencia = " select e.NombreEmpleado as NOMBRE,s.NombreServicio as NOMBRESERVICIO "
                    . " FROM agenda  a inner join empleado e on a.FK_IDEMPLEADO=e.ID_EMPLEADO "
                    . " inner join cita_servicio cs ON cs.ID_CITA=a.FK_IDCITA "
                    . " inner join servicio s ON s.ID_SERVICIO = cs.ID_SERVICIO "
                    . " WHERE cs.ID_CITA='$id' and a.FK_IDCITA ='$id'";
        echo    $sentencia;
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
        $sentencia = "SELECT * FROM $this->tabla WHERE HORAPACTADA BETWEEN '$hoy' and '$hasta' and FKIDESTADO <> 2 ";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

    public function lista($cliente) {
        $hoy = date("Y-m-j");
        $hasta = date("Y-m-j", strtotime($hoy . "+ 7 days"));
        $sentencia = "SELECT * FROM $this->tabla WHERE HORAPACTADA BETWEEN '$hoy' and '$hasta' AND FKIDCLIENTE='$cliente' and FKIDESTADO <> 2";
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