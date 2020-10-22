<?php

use PHPMailer\PHPMailer\PHPMailer;

class Correo extends Conexion {

    private $PDO;
    private $CorreoVO;
    private $tabla;

    const SALT = "AgendamientoAgendamiento";

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
            $mail->IsHTML(true);
            $mail->SMTPOptions = array('ssl' => ['verify_peer' => false, 'verify_depth' => 3, 'allow_self_signed' => false],);
            if ($mail->send()) {
                return true;
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo;
                return false;
            }
        } catch (Exception $exc) {
            echo 'holis ' . $exc;
        }
    }

    public function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTVUWXYZ';
        $max = strlen($pattern) - 1;
        for ($i = 0; $i < $longitud; $i++)
            $key .= $pattern{mt_rand(0, $max)};
        return $key;
    }

    public function insertarBitacora($correo) {

        $codigo = $this->generarCodigo(6);
        $token = $this->generarToken(20);
        $sentencia = "INSERT INTO recuperacion_clave VALUES (null,:correo,:codigo,:token, LOCALTIME(),0)";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->bindParam(":correo", $correo, PDO::PARAM_STR);
        $resultado->bindParam(":codigo", $codigo, PDO::PARAM_STR);
        $resultado->bindParam(":token", $token, PDO::PARAM_STR);

        if ($resultado->execute()) {
            $lastInsertId = $this->PDO->lastInsertId();
            $object = (object) [
                        'id' => $lastInsertId,
                        'codigo' => $codigo,
                        'token' => $token
            ];
            return $object;
        } else {
            //Pueden haber errores, como clave duplicada
            $lastInsertId = 0;
        }
    }

    public function generarToken($longitu) {
        $token = bin2hex(random_bytes($longitu));
        return $token;
    }

    public function construccionHTML($codigo, $idBuscar, $correo, $contexto, $token) {
        $url = $contexto . '&id=' . $idBuscar . '&correo=' . $correo . '&token=' . $token;
        $html = '';
        $html .= '<h3>Tu Código de verificacion</h3><br>';
        $html .= '<h2>' . $codigo . '</h2>';
        $html .= '<h4>O puedes ingresar con el siguiente ';
        $html .= '<a href=' . $url . '>Link</a> </h4>';
        return $html;
    }

    public function construccionHTMLConfirmacion($fecha, $empleadosServicio, $hasta) {
        $html = '';
        $html .= '<h3>Datos de tu cita</h3><br>';
        $html .= '<h2>Fecha: ' . $fecha.str_replace("T"," ","T") . ' - ' . $hasta . '</h2>';
        $html .= '<h2>Tus servicios</h2>';
        $html .= '<table>';
        $html .= '  <tr>';
        $html .= '      <th>Servicio</th>';
        $html .= '      <th>Empleado</th>';
        $html .= '  </tr>';
      
        foreach ($empleadosServicio as $busqueda => $value) {
            $html .= '  <tr>';
            $html .= '      <td>' . $value["NOMBRESERVICIO"] . '</td>';
            $html .= '      <td>' .  $value["NOMBRE"]. '</td>';
            $html .= '  </tr>';
        }
        $html .= '</table>';
        return $html;
    }

    public function validaCodigo($vo) {
        $id = $vo->id;
        $codigo = $vo->codigo;
        $correo = $vo->correo;

        $sentencia = "SELECT * FROM recuperacion_clave 
        WHERE id='$id' AND codigo='$codigo' AND correo='$correo' AND verificado=0";

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $this->verificado($id);
            return $resultado = $resultado->fetchAll(PDO::FETCH_OBJ);
        } else {
            return -1;
        }
    }

    public function verificado($id) {

        $sentencia = "UPDATE recuperacion_clave SET verificado=1 WHERE id=:id";
        $resultado = $this->PDO->prepare($sentencia);
        return $resultado->execute(array(
                    ':id' => $id,
        ));
    }

    public function cambioClave($object) {

        $clave = $object->clave;
        $correo = $object->correo;
        $claveIncriptada = $this->hash($clave);

        $resultadoId = $this->idCambiar($correo);
        $arreglo = $resultadoId[0];
        $tabla = $arreglo->tabla;
        switch ($tabla) {
            case 'empleado':
                $sentencia = "UPDATE empleado SET PasswordEmpleado='$claveIncriptada' WHERE CorreoEmpleado='$correo'";
                break;
            case 'cliente':
                $sentencia = "UPDATE cliente SET PasswordCliente='$claveIncriptada' WHERE CorreoCliente='$correo'";
                break;

            default:
                break;
        }

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        if ($resultado->rowCount() > 0) {
            return 1;
        } else {
            return -1;
        }
    }

    function idCambiar($correo) {
        $sentencia = "SELECT 'cliente' as tabla, IDCLIENTE as id FROM cliente WHERE CorreoCliente ='$correo' 
            UNION
            SELECT 'empleado' as tabla, ID_EMPLEADO as id FROM empleado WHERE CorreoEmpleado = '$correo'";

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            return $resultado = $resultado->fetchAll(PDO::FETCH_OBJ);
        } else {
            return -1;
        }
    }

    public function hash($password) {
        return hash('sha512', self::SALT . $password);
    }

}

?>