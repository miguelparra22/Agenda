<?php

class Validacontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cliente();
        $this->vo = new ClienteVO();
    }

    public function correo() {
        include_once 'vistas/Recuperar/ingresaCorreo.php';
    }

    public function recuperaclave() {
        $correo = $_POST["correo"];
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
        $this->model = new Correo();
        $this->vo->setDestinatario($correo);
        $this->vo->setSMTPAuth(true);
        $this->vo->setSMTPSecure('tls');
        $this->vo->setAsunto('Codigo de Seguridad');
        $this->vo->setContenidoHTML('<h1>hola</h1>');
        $resultado = $this->model->envioDeCorreo($this->vo);
        if ($resultado) {
            include_once 'vistas/Recuperar/ingresaClave.php';
        } else {
            include_once 'vistas/home/login.php';
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
            session_start();
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