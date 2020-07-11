<?php

class Validacontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cliente();
        $this->vo = new ClienteVO();
    }

    public function existeCorreo() {
        $correo = $_POST["correo"];
        $this->model = new Cliente();
        $boolean = $this->model->validaCorreo($correo);
        if ($boolean) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    public function correo() {
        include_once 'vistas/Recuperar/ingresaCorreo.php';
    }

    public function link() {
        echo 'escribe clave';
    }

    public function recuperaclave() {

        if (!(empty($_POST["correo"]))) {
            $correo = $_POST["correo"];
            $this->model = new Cliente();
            $boolean = $this->model->validaCorreo($correo);
            if ($boolean) {
                $this->vo = new CorreoVO();
                $this->model = new Configuracion();
                $resultado = $this->model->buscarconfiguracion("CORREO");
                foreach ($resultado as &$valor) {
                    switch ($valor->NombreConfiguracion) {
                        case "CLAVE" : {
                                $this->vo->setClave($valor->ValorConfiguracion);
                                break;
                            }
                        case "CORREO": {
                                $this->vo->setUsuario($valor->ValorConfiguracion);
                                break;
                            }
                        case "HOST": {
                                $this->vo->setHost($valor->ValorConfiguracion);
                                break;
                            }
                        case "PORT": {
                                $this->vo->setPort($valor->ValorConfiguracion);
                                break;
                            }
                    }
                }
                $url = 'http://' . $_SERVER["SERVER_NAME"] . '/Agendamiento/?c=valida&a=link';
                $this->model = new Correo();
                $this->vo->setDestinatario($correo);
                $this->vo->setSMTPAuth(true);
                $this->vo->setSMTPSecure('tls');
                $this->vo->setAsunto('Codigo de Seguridad');
                $bean = $this->model->insertarBitacora($correo);
                $html = $this->model->construccionHTML($bean->codigo, $bean->id, $correo, $url, $bean->token);
                $this->vo->setContenidoHTML($html);
                $resultado = $this->model->envioDeCorreo($this->vo);
                if ($resultado) {
                    $_SESSION['idContra'] = $bean->id;
                    $_SESSION['correo'] = $correo;
                    include_once 'vistas/Recuperar/ingresaCodigo.php';
                } else {
                    include_once 'vistas/home/login.php';
                }
            } else {
                echo 'El correo no existe';
                include_once 'vistas/home/login.php';
            }
        } else {
            if (!(empty($_SESSION['idContra'])) && !(empty($_SESSION['correo']))) {
                include_once 'vistas/Recuperar/ingresaCodigo.php';
            } else {
                include_once 'vistas/home/login.php';
            }
        }
    }

    public function codigo() {
        $id = $_POST['numero'];
        $codigo = $_POST['codigo'];
        $correo = $_POST['correo'];
        if (!(empty($id)) && !(empty($id)) && !(empty($correo))) {
            $this->model = new Correo();
            $object = (object) [
                        'id' => $id,
                        'codigo' => $codigo,
                        'correo' => $correo
            ];
            $resultado = $this->model->validaCodigo($object);
            if ($resultado != -1) {
                $arreglo = $resultado[0];
                $correo = $arreglo->correo;
                echo $correo;
            }else{
                 include_once 'vistas/home/login.php';
            }
        }
    }

    public function iniciar() {

        $this->vo->setCliente_pwd($_POST["pws"]);
        $this->vo->setCliente_correo($_POST["email"]);

        $resultado = $this->model->iniciarSesion($this->vo);

        if ($resultado == -1) {
            echo "contraseña y/o usuario Incorrecto";
            include_once 'vistas/home/login.php';
        } else {

            $arreglo = $resultado[0];
            $rol = $arreglo->rol;
            $_SESSION['ROL'] = $rol;
            switch ($rol) {
                case 0://Cliente
                    include_once 'Vistas/Cliente/index.php';
                    break;
                case 1://Administrador
                    include_once 'Vistas/Admin/index.php';
                    break;
                case 2://Empleado
                    include_once 'Vistas/Empleado/index.php';
                    break;
            }
        }
    }

}

?>