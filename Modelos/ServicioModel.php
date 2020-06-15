<?php


require 'autoload.php';

class Servicio extends Conexion implements Idatabase {

    private $PDO;
    private $ServicioVO;
    private $tabla;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "servicio";
    }

    public function actualizar($vo) {
        $this->ServicioVO;
        $sentancia = "UPDATE $this->tabla SET NombreServicio='$vo[1]', DescripcionServicio='$vo[2]', CantidadServicio='$vo[3]', FK_IDEMPLEADO='$vo[4]' WHERE ID_SERVICIO='$vo[0]';";
        $resultado = $this->PDO->prepare($sentancia);
        return $resultado->execute();
    }

    public function agregar($vo) {
       /* $this->UsuarioVO = $vo;
        $sentencia = "INSERT INTO $this->tabla VALUES (null,:NombreServicio,:DescripcionServicio,:FK_IDEMPLEADO,:,null)";

        //preparar sentencia
        $resultado = $this->PDO->prepare($sentencia);
        //obtener datos del VO para agregarlo a la sentencia decaurdo al alias
        //ejecutar sentencia
        return $resultado->execute(array(
                    ':nombre' => $this->UsuarioVO->getUsuario_nombre(),
                    ':pwd' => $this->UsuarioVO->getUsuario_pwd(),
                    ':estado' => $this->UsuarioVO->getUsuario_estado(),
                    ':rol' => $this->UsuarioVO->getUsuario_rol(),
        ));*/
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

            $this->ServicioVO = new ServicioVO();
            $this->ServicioVO->setNombreServicio($arreglo->NombreServicio);
            $this->ServicioVO->setDescripcionServicio($arreglo->DescripcionServicio);
            $this->ServicioVO->setCantidadServicio($arreglo->CantidadServicio);
            $this->ServicioVO->setId_Empleado($arreglo->FK_IDEMPLEADO);

            return $arreglo;
        }
    }

    public function eliminar($id) {
        $sentencia = "DELETE FROM $this->tabla WHERE ID_SERVICIO='$id'";
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
