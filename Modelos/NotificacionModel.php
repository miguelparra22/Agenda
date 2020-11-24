<?php 
class Notificacion extends Conexion {
    private $PDO;
    private $NotificacionVO;
    private $tabla;

    public function __CONSTRUCT(){
        $this->PDO=parent::__construct();
        $this->tabla ='notificacion';
    }

    public function listar(){}
    
    public function agregar($vo){
        $this->NotificacionVO = $vo;
        $sentencia = "INSERT INTO $this->tabla VALUES (NULL, :idCita, NOW() ,:descripcion, :idAplica, :idRol, 0);";
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute(array(
                    ':idCita' => $this->NotificacionVO->getIdCita(),
                    ':descripcion' => $this->NotificacionVO->getDescripcion(),
                    ':idAplica' => $this->NotificacionVO->getIdAplica(),
                    ':idRol' => $this->NotificacionVO->getIdRol(),
        ));

    }
    public function consultaUnica($id, $rol){
        $sentencia = "SELECT * FROM $this->tabla WHERE idAplica=:idAplica AND idRol=:idRol  ORDER BY fechaCreacion DESC ";

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute(array(
            ':idAplica' => $id,
            ':idRol' => $rol,
            
));
        if ($resultado->rowCount() == 0) {
            return true;
        } else {
            $arreglo = $resultado->fetchAll(PDO::FETCH_OBJ);
            return $arreglo;
        }
    }
    
    public function eliminar($id){}


    public function actualizar($vo){
        $this->NotificacionVO = $vo;
        $sentencia ="UPDATE $this->tabla SET estado = '1' WHERE idAplica=:idAplica AND idRol=:idRol ";
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute(array(
            ':idAplica' => $this->NotificacionVO->getIdAplica(),
            ':idRol' => $this->NotificacionVO->getIdRol(),
            
));
    }

}
?>