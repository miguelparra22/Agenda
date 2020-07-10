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
        $sentencia = "UPDATE $this->tabla SET ClienteNombre=:nombre, CorreoCliente=:correo,TELEFONO_CLIENT =:telefono, PasswordCliente=:pwd WHERE IdCliente=:id";
        $claveIncriptada = $this->hash($this->ClienteVO->getCliente_pwd());
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute(array(
                    ':nombre' => $this->ClienteVO->getCliente_nombre(),
                    ':pwd' => $claveIncriptada,
                    ':correo' => $this->ClienteVO->getCliente_correo(),
                    ':telefono' => $this->ClienteVO->getCliente_telefono(),
                    ':id' => $this->ClienteVO->getCliente_id()
        ));
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

        $correo = $this->ClienteVO->getCliente_correo();
        $pws = $claveIncriptada;

        $sentencia = "SELECT FK_ROL as rol FROM empleado 
        WHERE CorreoEmpleado='$correo' AND PasswordEmpleado='$pws' 
        UNION
        SELECT '0' as rol FROM $this->tabla  WHERE CorreoCliente='$correo' AND PasswordCliente='$pws'";

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            return $resultado = $resultado->fetchAll(PDO::FETCH_OBJ);
        } else {
            return -1;
        }
    }

    public function validaCorreo($correo) {
      
        $sentencia = "SELECT FK_ROL as rol FROM empleado 
        WHERE CorreoEmpleado='$correo'
        UNION
        SELECT '0' as rol FROM $this->tabla  WHERE CorreoCliente='$correo' ";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        if ($resultado->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
       
    }

}

?>