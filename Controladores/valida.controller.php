<?php

class Validacontroller {

    private $model;
    private $vo;
    private $Cita;

    public function __CONSTRUCT() {
        $this->model = new Cliente();
        $this->vo = new ClienteVO();
        $this->Cita = new Cita();
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
        return $boolean;
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
        if (!(empty($_POST['correo']))) {
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
                    echo '<script> var correo = "' . $arreglo->correo . '";</script>';
                    include_once 'vistas/Recuperar/ingresaClave.php';
                } else {
                    echo 'Error';
                    include_once 'vistas/home/login.php';
                }
            }
        } else {
            // echo $exc->getTraceAsString();
            include_once 'vistas/Recuperar/ingresaCorreo.php';
        }
    }

    public function cambio() {
        if (!(empty($_POST['correo']))) {
            $correo = $_POST['correo'];
            $clave1 = $_POST['psw1'];
            $clave2 = $_POST['psw2'];
            if ($clave1 == $clave2) {
                $this->model = new Correo();
                $object = (object) [
                            'clave' => $clave1,
                            'correo' => $correo
                ];
                $resultado = $this->model->cambioClave($object);
                if ($resultado == 1) {
                    include_once 'vistas/home/login.php';
                    session_destroy();
                } else if ($resultado == -1) {
                    echo 'Fallo';
                    echo '<script> var correo = "' . $correo . '";</script>';
                    include_once 'vistas/Recuperar/ingresaClave.php';
                }
            } else {
                echo 'las claves no coinciden';
                echo '<script> var correo = "' . $correo . '";</script>';
                include_once 'vistas/Recuperar/ingresaClave.php';
            }
        } else {
            include_once 'vistas/Recuperar/ingresaCorreo.php';
        }
    }

    public function iniciar() {

        $this->vo->setCliente_pwd($_POST["pws"]);
        $this->vo->setCliente_correo($_POST["email"]);

        $resultado = $this->model->iniciarSesion($this->vo);

        if ($resultado == -1) {
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Ups!</strong> Contraseña y/o usuario Incorrecto.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>";
            
            include_once 'vistas/home/login.php';
        } else {

            $arreglo = $resultado[0];
            $rol = $arreglo->rol;
            $nombre = $arreglo->nombre;
            $_SESSION['ROL'] = $rol;
            $_SESSION['NOMBRE'] = $nombre;
            switch ($rol) {
                case 0://Cliente
                    $Idcliente = $this->Cita->CambiarIdxNom("cliente","IDCLIENTE","ClienteNombre","'$nombre'")[0]->IDCLIENTE;
                    $_SESSION['id'] = $Idcliente;
                    $ResultadoLista = $this->Cita->listarCliente($Idcliente);
                    include_once 'Vistas/Cliente/index.php';
                    break;
                case 1://Administrador
                    $ResultadoLista = $this->Cita->listarAdmin();
                    include_once 'Vistas/Admin/index.php';
                    break;
                case 2://Empleado'
                    $IdEmpleado = $this->Cita->CambiarIdxNom("empleado","ID_EMPLEADO","NombreEmpleado","'$nombre'")[0]->ID_EMPLEADO;
                    $_SESSION['id'] = $IdEmpleado;
                    $ResultadoLista = $this->Cita->listarCliente($IdEmpleado);
                    include_once 'Vistas/Empleado/index.php';
                    break;
            }
        }
    }

}
