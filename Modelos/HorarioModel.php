<?php


require 'autoload.php';

class Horario extends Conexion implements Idatabase {

    private $PDO;
    private $HorarioVO;
    private $tabla;
    private $EmpleadoModel;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "Horario";
    }

    public function actualizar($vo) {
        $this->HorarioVO;
        $sentancia = "UPDATE $this->tabla SET Hora_inicio='$vo[1]', Hora_Fin='$vo[2]', FK_EMPLEADO='$vo[3]', Disponibilidad='$vo[4]' WHERE ID_HORARIO='$vo[0]';";
        $resultado = $this->PDO->prepare($sentancia);
        return $resultado->execute();
    }

    public function agregar($vo) {
       $this->HorarioVO = $vo;
        $sentencia = "INSERT INTO $this->tabla VALUES (null,:Hora_inicio,:Hora_Fin,:FK_EMPLEADO,:Disponibilidad)";

        //preparar sentencia
        $resultado = $this->PDO->prepare($sentencia);
        //obtener datos del VO para agregarlo a la sentencia decaurdo al alias
        //ejecutar sentencia
        return $resultado->execute(array(
                    ':Hora_inicio' => $this->HorarioVO->getHoraInicio(),
                    ':Hora_Fin' => $this->HorarioVO->getHoraFinal(),
                    ':FK_EMPLEADO' => $this->HorarioVO->getId_Empleado(),
                    ':Disponibilidad' => $this->HorarioVO->getDisponibilidad(),
        ));
    }

    public function consultaUnica($id) {
        $sentencia = "SELECT * FROM $this->tabla WHERE ID_HORARIO =$id";
        //preparar sentencia

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();


        if ($resultado->rowCount() == 0) {
            return true;
        } else {
            $arreglo = $resultado->fetchAll(PDO::FETCH_OBJ);
            $arreglo = $arreglo[0];
            $resultado2 = $this->ListaEmpleados();
            $this->HorarioVO = new HorarioVO();
            $this->HorarioVO->setId_Horario($arreglo->ID_HORARIO);
            $this->HorarioVO->setHoraInicio($arreglo->Hora_inicio);
            $this->HorarioVO->setHoraFinal($arreglo->Hora_Fin);
            $this->HorarioVO->setId_Empleado($arreglo->FK_EMPLEADO);
            $this->HorarioVO->setDisponibilidad($arreglo->Disponibilidad);
            $this->HorarioVO->setEmpleado($resultado2);
            $arreglo = $this->HorarioVO;
            return $arreglo;
        }
    }

        public function ListaEmpleados() {
        $this->EmpleadoModel = new EmpleadoModel();
        $resultado2 = $this->EmpleadoModel->listar();
        return $resultado2;
        }

        public function CambiarIdEmpleadoxNom($id){
        $this->EmpleadoModel = new EmpleadoModel();
        $resultado2 = $this->EmpleadoModel->consultaUnica($id);
        $arreglo2 = $resultado2->NombreEmpleado;
        return $arreglo2;
    }

    public function eliminar($id) {
        $sentencia = "DELETE FROM $this->tabla WHERE ID_HORARIO='$id'";
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute();
    }

    public function listar() {
        $sentencia = "SELECT * FROM $this->tabla";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

}
