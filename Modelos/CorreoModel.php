<?php

use PHPMailer\PHPMailer\PHPMailer;



class Correo extends Conexion implements Idatabase {

    private $PDO;
    private $CorreoVO;
    private $tabla;
    private $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVUWXYZ';

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "correo";
    }

    public function envioDeCorreo($vo) {
        $this->CorreoVO = $vo;
      
        $mail = new PHPMailer(true);
        try {
       
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
            $mail->IsHTML (true);
            $mail->SMTPOptions = array('ssl' => ['verify_peer' => false, 'verify_depth' => 3, 'allow_self_signed' => false],);
            if ($mail->send()) {
                return true;
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo;
                return false;
            
              
            }
        } catch (Exception $exc) {
            echo 'holis '.$exc;
           
         
        }
    }
    public function generarCodigo($longitud){
        $key = '';
        $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTVUWXYZ';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }
    public function insertarBitacora($correo){
        
        $codigo = $this->generarCodigo(6);
        $token = $this->generarToken(20);
        $sentencia = "INSERT INTO recuperacion_clave VALUES (null,:correo,:codigo,:token, LOCALTIME())";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado -> bindParam(":correo", $correo, PDO::PARAM_STR);
        $resultado -> bindParam(":codigo", $codigo, PDO::PARAM_STR);
        $resultado -> bindParam(":token", $token, PDO::PARAM_STR);
    
        if ($resultado -> execute()) {
            $lastInsertId = $this->PDO->lastInsertId();
            $object = (object) [
                'id' => $lastInsertId,
                'codigo' => $codigo,
                'token' => $token
              ];
            return  $object;
        }else{
            //Pueden haber errores, como clave duplicada
             $lastInsertId = 0;
          
        }  
    }
    public function generarToken($longitu){
        $token = bin2hex(random_bytes($longitu));
        return $token;
    }
    public function construccionHTML($codigo, $idBuscar, $correo, $contexto, $token){
        $url = $contexto .'&id='.$idBuscar.'&correo='.$correo.'&token='.$token;
        $html ='';
        $html .='<h3>Tu Código de verificacion</h3><br>';
        $html .= '<h2>'.$codigo.'</h2>';
        $html .= '<h4>O puedes ingresar con el siguiente ';
        $html .= '<a href=' . $url . '>Link</a> </h4>';
        return $html;

    }

    public function actualizar($vo) {
        
    }

    public function agregar($vo) {

 
    }

    public function consultaUnica($id) {
        
    }

    public function eliminar($id) {
        
    }

    public function listar() {
        
    }

}

?>