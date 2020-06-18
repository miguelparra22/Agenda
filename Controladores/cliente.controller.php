<?php 

class Clientecontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cliente();
        $this->vo = new ClienteVO();
    }

    public function llamar() {
        
        require_once 'Vistas/Cliente/AgregarCliente.php';
        
    }

    public function agregar() {

        $this->vo->setCliente_nombre($_POST["usuario_nombre"]);
        $this->vo->setCliente_pwd($_POST["usuario_pwd"]);
        $this->vo->setCliente_correo($_POST["usuario_correo"]);
        $this->vo->setCliente_telefono($_POST["usuario_telefono"]);
        if ($this->model->agregar($this->vo)) {
            echo "<script>
            alert('Se ha ingresado correctamente');
            </script>";
            
            include_once 'Vistas/Cliente/AgregarCliente.php';
            
        } else {
            echo "falló";
           
            include_once 'views/exeption/noExiste.php';
          
        }
    }

   /* public function iniciarSesion() {
        $this->vo->setCliente_pwd($_POST["usuario_pwd"]);
        $this->vo->setCliente_correo($_POST["usuario_correo"]);
        $resultado = $this->model->iniciarSesion($vo);
        if (!is_object($resultado)) {
            include_once 'views/header.php';
            include_once 'views/exception/noExiste.php';
            include_once 'views/footer.php';
        } else {
            include_once 'views/header.php';
            include_once 'views/usuario/listartodo.php';
            include_once 'views/footer.php';
        }
    }
*/
}
?>