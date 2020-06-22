<?php 

class Validacontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cliente();
        $this->vo = new ClienteVO();
       
    }

    public function llamar() {
        
       
        
    }

    public function iniciar() {
      
        $this->vo->setCliente_pwd($_POST["pws"]);
        $this->vo->setCliente_correo($_POST["email"]);
       
        $resultado = $this->model->iniciarSesion($this->vo);
      
        if ($resultado==-1) {
            echo "contraseña y/o usuario Incorrecto";
            include_once 'vistas/home/login.php';
            
        } else {
         
            $arreglo = $resultado[0];
            $rol = $arreglo->rol;
            $_SESSION['ROL']=$rol;
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