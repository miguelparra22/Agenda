<?php 

class Clientecontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cliente();
        $this->vo = new ClienteVO();
    }

    public function llamar() {
        
        require_once 'Vistas/Cliente/Agregar.php';
        
    }

    public function agregar() {

        $this->vo->setCliente_nombre($_POST["usuario_nombre"]);
        $this->vo->setCliente_pwd($_POST["usuario_pwd"]);
        $this->vo->setCliente_correo($_POST["usuario_correo"]);
        $this->vo->setCliente_telefono($_POST["usuario_telefono"]);
        if ($this->model->agregar($this->vo)) {
            include_once 'Vistas/Cliente/Agregar.php';
            
            echo "<div class='alert success'>
            <span class='closebtn'>&times;</span>  
            <strong>Exito!</strong> Se registro correctamente.
          </div>
          
          <script>
          var close = document.getElementsByClassName('closebtn');
           var i;

              for (i = 0; i < close.length; i++) {
              close[i].onclick = function(){
              var div = this.parentElement;
              div.style.opacity = '0';
              setTimeout(function(){ div.style.display = 'none'; }, 600);
            }
          }
          </script>";
            
         
            
        } else {
            include_once 'Vistas/Cliente/Agregar.php';
            echo "<div class='alert'>
            <span class='closebtn'>&times;</span>  
            <strong>Error</strong> No se pudo registrar.
           </div>
          
           <script>
           var close = document.getElementsByClassName('closebtn');
           var i;

              for (i = 0; i < close.length; i++) {
              close[i].onclick = function(){
              var div = this.parentElement;
              div.style.opacity = '0';
              setTimeout(function(){ div.style.display = 'none'; }, 600);
            }
          }
          </script>";
          
        }
    }

    function VerEmpleados(){
      require_once 'Vistas/Cliente/VerEmpleado.php';
    }

    
}