<?php


class EmpleadoController{

  private $model;
  private $vo;

  public function __CONSTRUCT(){
      $this->model = new EmpleadoModel();
      $this->vo =  new EmpleadoVo();
  }


   function LlamarAgregar(){
     require_once 'Vistas/Empleado/Agregar.php';
   }
   

  function LlamarInicioAdmin(){

    require_once 'Vistas/Admin/index.php';
  }

  function LlamarInicioEmpleado(){
     require_once 'Vistas/Empleado/index.php';
  }

  

  

  function agregar(){

    $this->vo->setNombre_Empleado($_POST["nombre"]);
    $this->vo->setCorreo_Empleado($_POST["correo"]);
    $this->vo->setPassword_Empleado($_POST["pass"]);
    $this->vo->setEspecialidad_Empleado($_POST["especialidad"]);
    $this->vo->setEstado_Empleado($_POST["estado"]);
    $this->vo->setRol_Empleado($_POST["rol"]);

    if($this->model->agregar($this->vo)){
       
       include_once "Agendamiento/Vistas/Empleado/index.php";
       
       
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
        
    }else{
        include_once 'Vistas/Empleado/Agregar.php';
       
        echo "<div class='alert'>
        <span class='closebtn'>&times;</span>  
        <strong>Error</strong> No se registro.
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





  function ListaEmpleados(){
    $resultado = $this->model->listaEmpleado();
    if (!is_array($resultado)) {
      include_once 'Vistas/header.php';
      include_once 'Vistas/exception/noExiste.php';
      include_once 'Vistas/footer.php';
  } else {
      include_once 'Vistas/header.php';
      include_once 'Vistas/empleado/Lista.php';
      include_once 'Vistas/footer.php';
  }


}

  function listar(){
    $resultado = $this->model->listar();
    if (!is_array($resultado)) {
      include_once 'Vistas/header.php';
      include_once 'Vistas/exception/noExiste.php';
      include_once 'Vistas/footer.php';
  } else {
      include_once 'Vistas/header.php';
      include_once 'Vistas/empleado/lista.php';
      include_once 'Vistas/footer.php';
  }


}




}



?>