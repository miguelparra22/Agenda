<?php

class ServicioController {

    private $model;
    private $vo;
    private $Citas;
    public function __CONSTRUCT() {
        $this->model = new Servicio();
        $this->vo = new ServicioVO();
        $this->Citas = new Cita();
    }

    /* Llama la vista formulario */

    public function index() {

        include_once 'Vistas/header.php';
        include_once 'Vistas/usuario/index.php';
        include_once 'Vistas/footer.php';
    }

    public function vistaConsulta() {
        include_once 'Vistas/header.php';
        include_once 'Vistas/usuario/consulta.php';
        include_once 'Vistas/footer.php';
    }

    public function agregar() {
        $this->vo->setNombreServicio($_POST["NOMSERVI"]);
        $this->vo->setDescripcionServicio($_POST["DESCSERVI"]);
        $this->vo->setCantidadServicio($_POST["CANTSERVI"]);
        $this->vo->setPrecioServicio($_POST["PRECIOSERVICIO"]);
        $this->vo->setTiempo_Limite($_POST["TIEMPO_LIMITE"]);
        if ($this->model->agregar($this->vo)) {
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
            
            include_once 'Vistas/header.php';
            include_once 'Vistas/servicio/listartodo.php';
            include_once 'Vistas/footer.php';
        } else {
            echo "falló";
            include_once 'Vistas/header.php';
            include_once 'Vistas/exeption/noExiste.php';
            include_once 'Vistas/footer.php';
        }
    }

    public function consultaUnica() {
        $id = $_POST["servicio_ID"];
        $resultado = $this->model->consultaUnica($id);

        if (!is_object($resultado)) {
            include_once 'Vistas/header.php';
            include_once 'Vistas/exception/noExiste.php';
            include_once 'Vistas/footer.php';
        } else {
            include_once 'Vistas/header.php';
            include_once 'Vistas/Servicio/editar.php';
            include_once 'Vistas/footer.php';
        }
    }

    public function editar() {
        $vo = array($_POST["ID_SERVICIO"],$_POST["NOMSERVi"], $_POST["DESCSERVI"], $_POST["CANTSERVI"], $_POST["PRECIOSERVICIO"],$_POST["TIEMPOLIMITE"]);
        if ($this->model->actualizar($vo)) {
            echo 'El Servicio se actualizo correctamente.';
            include_once 'Vistas/header.php';
            include_once 'Vistas/Servicio/lista.php';
            include_once 'Vistas/footer.php';
        } else {
            include_once 'Vistas/header.php';
            include_once 'Vistas/exception/noExiste.php';
            include_once 'Vistas/footer.php';
        }
    }

    public function eliminar() {
        $id = $_POST["servicio_ID"];
        try{
        $resultado = $this->model->eliminar($id);
        if ($resultado) {
        echo 'Registro eliminado';
            include_once 'Vistas/header.php';
            include_once 'Vistas/servicio/listartodo.php';
            include_once 'Vistas/footer.php';
        } else {
            echo 'Falló';
        }
        }catch(Exception $e){
            if(strpos($e, "Integrity constraint violation")){
                echo 'Falló, El Registro se encuentra relacionado';
            }
        }

    }

    public function lista() {
        $resultado = $this->model->listar();
        if (!is_array($resultado)) {
            include_once 'Vistas/header.php';
            include_once 'Vistas/exception/noExiste.php';
            include_once 'Vistas/footer.php';
        } else {
            include_once 'Vistas/header.php';
            include_once 'Vistas/Home/MenuAdmin.php';
            include_once 'Vistas/servicio/lista.php';
            include_once 'Vistas/footer.php';
        }
    }

    public function LlamarAgregar() {
        $resultado = $this->model->ListaEmpleados();
        include_once 'Vistas/header.php';
        include_once 'Vistas/Home/MenuAdmin.php';
        include_once 'Vistas/Servicio/agregar.php';
        include_once 'Vistas/footer.php';
    }

    public function idxnombre($id){
        $resultado = $this->model->CambiarIdEmpleadoxNom($id);
        return $resultado;
    }

}
