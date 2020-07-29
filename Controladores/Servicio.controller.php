<?php

class ServicioController {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Servicio();
        $this->vo = new ServicioVO();
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
        $this->vo->setNombreServicio($_POST["NOMSERVi"]);
        $this->vo->setDescripcionServicio($_POST["DESCSERVI"]);
        $this->vo->setCantidadServicio($_POST["CANTSERVI"]);
        $this->vo->setPrecioServicio($_POST["PRECIOSERVICIO"]);
        $this->vo->setId_Empleado($_POST["EMPLEADO"]);
        if ($this->model->agregar($this->vo)) {
            echo "ingresó correctamente";
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
        $vo = array($_POST["ID_SERVICIO"],$_POST["NOMSERVi"], $_POST["DESCSERVI"], $_POST["CANTSERVI"], $_POST["PRECIOSERVICIO"], $_POST["EMPLEADO"]);
        if ($this->model->actualizar($vo)) {
            echo 'El Servicio se actualizo correctamente.';
            include_once 'Vistas/header.php';
            include_once 'Vistas/Servicio/listartodo.php';
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

    public function llamar() {
        $resultado = $this->model->ListaEmpleados();
        include_once 'Vistas/header.php';
        include_once 'Vistas/servicio/agregar.php';
        include_once 'Vistas/footer.php';
    }

    public function idxnombre($id){
        $resultado = $this->model->CambiarIdEmpleadoxNom($id);
        return $resultado;
    }

}

?>