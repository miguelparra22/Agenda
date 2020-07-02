<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../composer/vendor/autoload.php';

class Correo extends Conexion implements Idatabase {

    private $PDO;
    private $CorreoVO;
    private $tabla;

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "correo";
    }

    public function envioDeCorreo($vo) {
        $this->CorreoVO = $vo;
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = $this->CorreoVO->getSMTPDebug();
            $mail->isSMTP();
            $mail->Host = $this->CorreoVO->getHost();
            $mail->SMTPAuth = $this->CorreoVO->getSMTPAuth();
            $mail->Username = $this->CorreoVO->getUsuario();
            $mail->Password = $this->CorreoVO->getClave();
            $mail->SMTPSecure = $this->CorreoVO->getSMTPSecure();
            $mail->Port = $this->CorreoVO->getPort();
            $mail->setFrom($this->CorreoVO->getUsuario(), 'Administrador ');
            $mail->addAddress($this->CorreoVO->getDestinatario(), 'Querido Usuario');
            $mail->Subject = $this->CorreoVO->getAsunto();
            $mail->msgHTML($this->CorreoVO->getContenidoHTML(), __DIR__);
            $mail->SMTPOptions = array('ssl' => ['verify_peer' => false, 'verify_depth' => 3, 'allow_self_signed' => false],);
            if ($mail->send()) {
                return true;
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo;
                return false;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
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

    public function consultaUnica($id) {
        
    }

    public function eliminar($id) {
        
    }

    public function listar() {
        
    }

}

?>