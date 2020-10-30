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

    public function Login(){
        include_once 'Vistas/Home/Login.php';
    }

    public function link() {
        echo 'escribe clave';
    }

    public function llamarlogin(){
        include_once 'vistas/Home/Login.php';
        
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
                echo '
                <script>
                
                Swal.fire({
                    title: "¡Error!",
                    text: "Correo ó contraseña incorrectos",
                    icon: "error",
                    confirmButtonText: "Cool"
                  })
                
                </script>';
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
                    echo "
                    <script>
                     $(window).on('load',function(){   
                    correcto();});
                    </script>";
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
        if(isset($_POST["pws"])&& isset($_POST["email"])){
    if(!(isset($_SESSION['ROL']))){
        $this->vo->setCliente_pwd($_POST["pws"]);
        $this->vo->setCliente_correo($_POST["email"]);

        $resultado = $this->model->iniciarSesion($this->vo);
      
        if ($resultado == -1) {
           
            
            include_once 'vistas/home/login.php';
            echo "
        <script>
         $(window).on('load',function(){   
            alerta();});
        </script>";
        } else {

            $arreglo = $resultado[0];
            $rol = $arreglo->rol;
            $nombre = $arreglo->nombre;
            $Id = $arreglo->ID;
           
            $_SESSION['ROL'] = $rol;
            $_SESSION['NOMBRE'] = $nombre;
            $_SESSION['ID'] = $Id;
            switch ($rol) {
                case 0://Cliente
                  //  $Idcliente = $this->Cita->CambiarIdxNom("cliente","IDCLIENTE","ClienteNombre","'$nombre'")[0]->IDCLIENTE;
                  
                    //$_SESSION['id'] = $Idcliente;
                    $ResultadoLista = $this->Cita->listarCliente($_SESSION['ID'] );
                    include_once 'Vistas/Cliente/index.php';
                    break;
                case 1://Administrador
                   // $IdAdmin = $this->Cita->CambiarIdxNom("empleado","ID_EMPLEADO","NombreEmpleado","'$nombre'")[0]->ID_EMPLEADO;
                    //$_SESSION['id'] = $IdAdmin;
                    $ResultadoLista = $this->Cita->listarAdmin();
                    include_once 'Vistas/Admin/index.php';
                    break;
                case 2://Empleado'
                    //$IdEmpleado = $this->Cita->CambiarIdxNom("empleado","ID_EMPLEADO","NombreEmpleado","'$nombre'")[0]->ID_EMPLEADO;
                    //$_SESSION['id'] = $IdEmpleado;
                    $ResultadoLista = $this->Cita->listarEmpleado($_SESSION['ID']);
                    include_once 'Vistas/Empleado/index.php';
                    break;
            }
        }
        }else{
                    switch ($_SESSION['ROL']) {
                case 0://Cliente
                    $nombre = $_SESSION['NOMBRE'];
                    $Idcliente = $this->Cita->CambiarIdxNom("cliente","IDCLIENTE","ClienteNombre","'$nombre'")[0]->IDCLIENTE;
                    $_SESSION['id'] = $Idcliente;
                    $ResultadoLista = $this->Cita->listarCliente($_SESSION['ID']);
                    include_once 'Vistas/Cliente/index.php';
                    break;
                case 1://Administrador
                    $nombre = $_SESSION['NOMBRE'];
                    $ResultadoLista = $this->Cita->listarAdmin();
                    include_once 'Vistas/Admin/index.php';
                    break;
                case 2://Empleado'
                    $nombre = $_SESSION['NOMBRE'];
                    $IdEmpleado = $this->Cita->CambiarIdxNom("empleado","ID_EMPLEADO","NombreEmpleado","'$nombre'")[0]->ID_EMPLEADO;
                    $_SESSION['id'] = $IdEmpleado;
                    $ResultadoLista = $this->Cita->listarEmpleado($_SESSION['ID']);
                    include_once 'Vistas/Empleado/index.php';
                    break;
            }
        }
    }else{
        include_once 'vistas/home/login.php';
     
    }
}


    public function cerrar(){
       
        include_once 'Vistas/Home/Login.php';
        session_destroy();
    }

    public function agregar() {

        $this->vo->setCliente_nombre($_POST["usuario_nombre"]);
        $this->vo->setCliente_pwd($_POST["usuario_pwd"]);
        $this->vo->setCliente_correo($_POST["usuario_correo"]);
        $this->vo->setCliente_telefono($_POST["usuario_telefono"]);
        if ($this->model->agregar($this->vo)) {
            include_once 'Vistas/Cliente/AgregarCliente.php';
            
            echo "
            <script>
             $(window).on('load',function(){   
                registror();});
            </script>";
            
         
            
        } else {
            include_once 'Vistas/Cliente/AgregarCliente.php';
            echo "
            <script>
             $(window).on('load',function(){   
                errorReg();});
            </script>";
          
        }
    }

}
