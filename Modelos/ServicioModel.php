<?php


require 'autoload.php';

class Servicio extends Conexion implements Idatabase {

    private $PDO;
    private $ServicioVO;
    private $EmpleadoModel;
    private $tabla;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "servicio";
    }

    public function actualizar($vo) {
        $this->ServicioVO;
        $sentancia = "UPDATE $this->tabla SET NombreServicio='$vo[1]', DescripcionServicio='$vo[2]', CantidadServicio='$vo[3]',Precio_Servicio = '$vo[4]',TIEMPO_LIMITE = '$vo[5]' WHERE ID_SERVICIO='$vo[0]';";
        $resultado = $this->PDO->prepare($sentancia);
        return $resultado->execute();
    }

    public function agregar($vo) {
        $this->ServicioVO = $vo;
        $sentencia = "INSERT INTO $this->tabla VALUES (null,:NombreServicio,:DescripcionServicio,:CantidadServicio,:Precio_Servicio,:TIEMPO_LIMITE)";

        //preparar sentencia
        $resultado = $this->PDO->prepare($sentencia);
        //obtener datos del VO para agregarlo a la sentencia decaurdo al alias
        //ejecutar sentencia
        return $resultado->execute(array(
                    ':NombreServicio' => $this->ServicioVO->getNombreServicio(),
                    ':DescripcionServicio' => $this->ServicioVO->getDescripcionServicio(),
                    ':CantidadServicio' => $this->ServicioVO->getCantidadServicio(),
                    ':Precio_Servicio' => $this->ServicioVO->getPrecioServicio(),
                    ':TIEMPO_LIMITE' => $this->ServicioVO->getTiempo_Limite(),
        ));
    }

    public function consultaUnica($id) {
        $sentencia = "SELECT * FROM $this->tabla WHERE ID_SERVICIO =$id";
        //preparar sentencia

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();


        if ($resultado->rowCount() == 0) {
            return true;
        } else {
            $arreglo = $resultado->fetchAll(PDO::FETCH_OBJ);
            $arreglo = $arreglo[0];
            //$resultado2 = $this->ListaEmpleados();
            $this->ServicioVO = new ServicioVO();
            $this->ServicioVO->setId_Servicio($arreglo->ID_SERVICIO);
            $this->ServicioVO->setNombreServicio($arreglo->NombreServicio);
            $this->ServicioVO->setDescripcionServicio($arreglo->DescripcionServicio);
            $this->ServicioVO->setCantidadServicio($arreglo->CantidadServicio);
            $this->ServicioVO->setPrecioServicio($arreglo->Precio_Servicio);
            $this->ServicioVO->setTiempo_Limite($arreglo->TIEMPO_LIMITE);
            //$this->ServicioVO->setId_Empleado($arreglo->FK_IDEMPLEADO);
            //$this->ServicioVO->setEmpleado($resultado2);
            $arreglo = $this->ServicioVO;
            return $arreglo;
        }
    }

    public function eliminar($id) {
        $sentencia = "DELETE FROM $this->tabla WHERE ID_SERVICIO='$id'";
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute();
    }

    public function CambiarIdEmpleadoxNom($id){
        $this->EmpleadoModel = new EmpleadoModel();
        $resultado2 = $this->EmpleadoModel->consultaUnica($id);
        $arreglo2 = $resultado2->NombreEmpleado;
        return $arreglo2;
    }

    public function ListaEmpleados() {
        $this->EmpleadoModel = new EmpleadoModel();
        $resultado2 = $this->EmpleadoModel->listaEmpleado($_SESSION['ID']);
        return $resultado2;
    }

    public function listar() {
        $sentencia = "SELECT * FROM $this->tabla";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

}
