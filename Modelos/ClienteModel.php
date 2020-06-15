<?php

class Cliente extends Conexion implements Idatabase {

    private $PDO;
    private $ClienteVO;
    private $tabla;

    const SALT = "AgendamientoAgendamiento";

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "cliente";
    }

    public function actualizar($vo) {
        $this->ClienteVO = $vo;
        $sentencia = "UPDATE $this->tabla SET ClienteNombre=:nombre, CorreoCliente=:correo, Password=:pwd WHERE IdCliente=:id";
        $claveIncriptada = $this->hash($this->ClienteVO->getCliente_pwd());
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute(array(
                    ':nombre' => $this->ClienteVO->getCliente_nombre(),
                    ':pwd' => $claveIncriptada,
                    ':correo' => $this->ClienteVO->getCliente_correo(),
                    ':id' => $this->ClienteVO->getCliente_id(),
        ));
    }

    public function agregar($vo) {

        $this->ClienteVO = $vo;
        $sentencia = "INSERT INTO $this->tabla VALUES (null,:nombre,:correo,:pwd)";
        $claveIncriptada = $this->hash($this->ClienteVO->getCliente_pwd());
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute(array(
                    ':nombre' => $this->ClienteVO->getCliente_nombre(),
                    ':pwd' => $claveIncriptada,
                    ':correo' => $this->ClienteVO->getCliente_correo(),
        ));
    }

    public function consultaUnica($id) {

        $sentencia = "SELECT * FROM $this->tabla WHERE IdCliente=:id";

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute(
                array(
                    ':id' => $id,
        ));

        if ($resultado->rowCount() == 0) {
            return true;
        } else {
            $arreglo = $resultado->fetchAll(PDO::FETCH_OBJ);
            $arreglo = $arreglo[0];

            $this->ClienteVO = new ClienteVO();
            $this->ClienteVO->setCliente_nombre($arreglo->ClienteNombre);
            $this->ClienteVO->setCliente_pwd($arreglo->Password);
            $this->ClienteVO->setCliente_correo($arreglo->CorreoCliente);


            return $arreglo;
        }
    }

    public function eliminar($id) {
        
    }

    public function listar() {
        $sentencia = "SELECT * FROM $this->tabla";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

    public function hash($password) {
        return hash('sha512', self::SALT . $password);
    }

    public function verify($password, $hash) {
        return ($hash == self::hash($password));
    }

    public function iniciarSesion($vo) {
        $this->ClienteVO = $vo;
        $claveIncriptada = $this->hash($this->ClienteVO->getCliente_pwd());
        $sentencia = "SELECT * FROM $this->tabla WHERE CorreoCliente=:correo AND Password=:pwd";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute(
                array(
                    ':correo' => $this->ClienteVO->getCliente_correo(),
                    ':pwd' => $claveIncriptada,
        ));
        if ($resultado->rowCount() > 0) {
            return $resultado;
        } else {
            return 0;
        }
    }

}





?>