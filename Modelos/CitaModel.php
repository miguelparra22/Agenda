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
            foreach ($vo->getIdservicio() as $key => $value) {
                $sentenciaAgenda = "INSERT into agenda values(null,:FK_IDEMPLEADO,:FK_IDCITA,:FK_IDSERVICIO)";
                $resultadoAgenda = $this->PDO->prepare($sentenciaAgenda);
                $resultadoAgenda->bindParam(":FK_IDEMPLEADO", $value, PDO::PARAM_STR);
                $resultadoAgenda->bindParam(":FK_IDCITA", $cita, PDO::PARAM_STR);
                $resultadoAgenda->bindParam(":FK_IDSERVICIO", $key, PDO::PARAM_STR);
                $resultadoAgenda->execute();
                $modelos  = new Notificacion();
                $vo = new NotificacionVO();
                $vo->setIdCita($cita);
                $vo->setDescripcion('Cita Programada');
                $vo->setIdAplica($value);
                $vo->setIdRol(2);
                $modelos->agregar($vo);
                
            }
            return $lastInsertId;
        }else{
            return 0;
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

    public function misServicios($id, $key) {
        $no='no';
        $sql="";
        $otro ='SELECT *FROM (';
        if($key != $no && !is_null($key)){
            $sql=" SELECT * FROM $this->tabla c WHERE (c.FKIDESTADO=2 AND IDCITA=$key) UNION ";
        }
        if (!(empty($id))) {
            $sentencia =$otro. $sql." SELECT * FROM $this->tabla c "
                    . " WHERE c.FKIDESTADO <> 2 AND c.FKIDCLIENTE='$id' ) as tablaa "

                    . " ORDER BY HORAPACTADA DESC ";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    public function misServiciosEmpleado($id) {
        if (!(empty($id))) {
            $sentencia = "select * FROM $this->tabla c inner join agenda a on c.IDCITA=a.FK_IDCITA "
                    . " WHERE c.FKIDESTADO <> 2 AND a.FK_IDEMPLEADO='$id' "
                    . " ORDER BY c.HORAPACTADA DESC ";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function buscaEmMasSer($id) {
        if (!(empty($id))) {
            $sentencia = " select e.NombreEmpleado as NOMBRE,s.NombreServicio as NOMBRESERVICIO 
            FROM agenda  a inner join empleado e on a.FK_IDEMPLEADO=e.ID_EMPLEADO 
           inner join servicio s ON s.ID_SERVICIO = a.FK_IDSERVICIO 
            WHERE a.FK_IDCITA ='$id'";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    public function buscaClienteMasSer($id) {
        if (!(empty($id))) {
            $sentencia = " select cte.ClienteNombre as NOMBRE,s.NombreServicio as NOMBRESERVICIO 
            FROM agenda  a inner join citas c on c.IDCITA=a.FK_IDCITA INNER JOIN cliente cte on cte.IDCLIENTE=c.FKIDCLIENTE 
            inner join servicio s ON s.ID_SERVICIO = a.FK_IDSERVICIO 
            WHERE a.FK_IDCITA ='$id'";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function eliminar($id) {
        if (!(empty($id))) {
            $cliente = $this->CambiarIdxNom("citas","FKIDCLIENTE","IDCITA","'".$id."'" )[0]->FKIDCLIENTE;;
            $sentencia = " UPDATE citas SET FKIDESTADO = '2' WHERE IDCITA = '$id'";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            $modelos  = new Notificacion();
            $vo = new NotificacionVO();
            $vo->setIdCita($id);
            $vo->setDescripcion('Cita Cancelada');
            $vo->setIdAplica($cliente);
            $vo->setIdRol(0);
            $modelos->agregar($vo);
            return $resultado->rowCount();
        }
        
    }

    public function listar() {
        $hoy = date("Y-m-j");
        $hasta = date("Y-m-j", strtotime($hoy . "+ 7 days"));
        $sentencia = "SELECT * FROM $this->tabla WHERE HORAPACTADA BETWEEN '$hoy' and '$hasta' and FKIDESTADO <> 2 ";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }
    public function listarxEmpleado($empleado) {
        $hoy = date("Y-m-j");
        $hoy = date("Y-m-j", strtotime($hoy . "- 1 days"));
        $hasta = date("Y-m-j", strtotime($hoy . "+ 7 days"));
        $sentencia = "SELECT * FROM citas c INNER JOIN agenda a on c.IDCITA=a.FK_IDCITA WHERE c.HORAPACTADA BETWEEN '$hoy' and '$hasta' and c.FKIDESTADO <> 2 and a.FK_IDEMPLEADO='$empleado' ";
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
    $Valor = $this->CambiarIdxNom("agenda", "FK_IDCITA", "FK_IDEMPLEADO", "$IdEmpleado");
    if (!empty($Valor)) {
        $IdCita = $this->CambiarIdxNom("agenda", "FK_IDCITA", "FK_IDEMPLEADO", "$IdEmpleado")[0]->FK_IDCITA;
        $sentencia = "SELECT * FROM $this->tabla WHERE DATE(HORAPACTADA) = DATE(NOW()) AND IDCITA = $IdCita";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        $resultadofinal = $resultado->fetchAll(PDO::FETCH_OBJ);
    }else{
        $resultadofinal = array();
    }
        return $resultadofinal;
    }
    public function empleadoCliente(){
       
            $sentencia = "select * FROM $this->tabla c "
                    . " WHERE c.FKIDESTADO <> 2  ORDER BY c.HORAPACTADA DESC ";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        
    }
    public function buscaClienteMasSerEmpleado($id){
        if (!(empty($id))) {
            $sentencia = " select cte.ClienteNombre as NOMBRE, CONCAT(s.NombreServicio,' -> ', e.NombreEmpleado)as NOMBRESERVICIO
            FROM agenda  a inner join citas c on c.IDCITA=a.FK_IDCITA INNER JOIN cliente cte on cte.IDCLIENTE=c.FKIDCLIENTE 
            inner join servicio s ON s.ID_SERVICIO = a.FK_IDSERVICIO inner join empleado e on a.FK_IDEMPLEADO=e.ID_EMPLEADO 
            WHERE a.FK_IDCITA ='$id'";
            $resultado = $this->PDO->prepare($sentencia);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }

}

?>