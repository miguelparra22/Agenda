<?php


class EmpleadoController{

  private $model;
  private $vo;

  public function __CONSTRUCT(){
      $this->model = new EmpleadoModel();
      $this->vo =  new EmpleadoVo();
  }


   function LlamarAgregar(){
     
     require_once 'Vistas/Header.php';
     require_once 'Vistas/Empleado/Agregar.php';
     require_once 'Vistas/Footer.php';
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
       
       
       
       
       
       include_once 'Vistas/Header.php';
       include_once 'Vistas/Home/MenuAdmin.php';
       echo "
       <div class='alert alert-success alert-dismissible fade show' role='alert'>
           <strong>Perfecto!</strong> Registro exitoso.
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
           </button>
      </div>";
       include_once 'Vistas/Empleado/Agregar.php';
       include_once 'Vistas/Footer.php';
        
    }else{

      include_once 'Vistas/Header.php';
       include_once 'Vistas/Home/MenuAdmin.php';
       echo "
       <div class='alert alert-danger alert-dismissible fade show' role='alert'>
           <strong>Error</strong> No se pudo registrar.
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
           </button>
      </div>";
       include_once 'Vistas/Empleado/Agregar.php';
       include_once 'Vistas/Footer.php';
      include_once 'Vistas/Empleado/Agregar.php';
      
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

function consultaUnica(){

  $id = $_POST["id_empleado"];
  $resultado = $this->model->consultaUnica($id);

  if (!is_object($resultado)) {
    include_once 'Vistas/header.php';
    include_once 'Vistas/exception/noExiste.php';
    include_once 'Vistas/footer.php';
   
} else {
    echo ($id);
    include_once 'Vistas/header.php';
    include_once 'Vistas/Empleado/editar.php';
    include_once 'Vistas/footer.php';
}


}


public function editar() {
  $vo = array($_POST["ID_EMPLEADO"],$_POST["NOMBREMPLEADO"], $_POST["CORREOEMPLEADO"]);
  if ($this->model->actualizar($vo)) {
      echo 'El Servicio se actualizo correctamente.';
      include_once 'Vistas/header.php';
      include_once 'Vistas/Empleado/lista.php';
      include_once 'Vistas/footer.php';
  } else {
      include_once 'Vistas/header.php';
      include_once 'Vistas/exception/noExiste.php';
      include_once 'Vistas/footer.php';
  }
}



}



?>