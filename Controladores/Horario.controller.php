<?php

class HorarioController {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Horario();
        $this->vo = new HorarioVO();
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

        $this->vo->setHoraInicio($_POST["HORAINICIO"]);
        $this->vo->setHoraFinal($_POST["HORAFIN"]);
        $this->vo->setId_Empleado($_POST["EMPLEADO"]);
        $this->vo->setDisponibilidad($_POST["DISPONI"]);

        if ($this->model->agregar($this->vo)) {
            echo "ingresó correctamente";
            include_once 'Vistas/header.php';
            include_once 'Vistas/Horario/listartodo.php';
            include_once 'Vistas/footer.php';
        } else {
            echo "falló";
            include_once 'Vistas/header.php';
            include_once 'Vistas/exeption/noExiste.php';
            include_once 'Vistas/footer.php';
        }
    }

    public function consultaUnica() {
        $id = $_POST["ID_HORARIO"];
        $resultado = $this->model->consultaUnica($id);
        if (!is_object($resultado)) {
            include_once 'Vistas/header.php';
            include_once 'Vistas/exception/noExiste.php';
            include_once 'Vistas/footer.php';
        } else {
            include_once 'Vistas/header.php';
            include_once 'Vistas/Horario/editar.php';
            include_once 'Vistas/footer.php';
        }
    }

    public function editar() {
        $vo = array($_POST["ID_HORARIO"],$_POST["HORAINICIO"], $_POST["HORAFIN"], $_POST["EMPLEADO"], $_POST["DISPONI"]);
        if ($this->model->actualizar($vo)) {
            echo 'El Horario se actualizo correctamente.';
            include_once 'Vistas/header.php';
            include_once 'Vistas/Horario/listartodo.php';
            include_once 'Vistas/footer.php';
        } else {
            include_once 'Vistas/header.php';
            include_once 'Vistas/exception/noExiste.php';
            include_once 'Vistas/footer.php';
        }
    }

    public function eliminar() {
        $id = $_POST["ID_HORARIO"];
                try{
        $resultado = $this->model->eliminar($id);
        if ($resultado) {
            include_once 'Vistas/header.php';
            include_once 'Vistas/Horario/listartodo.php';
            include_once 'Vistas/footer.php';
        } else {
            echo 'Usuario eliminado';
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
            include_once 'Vistas/Horario/lista.php';
            include_once 'Vistas/footer.php';
        }
    }
        public function llamar() {
        $resultado = $this->model->ListaEmpleados();
        include_once 'Vistas/header.php';
        include_once 'Vistas/Horario/agregar.php';
        include_once 'Vistas/footer.php';
    }
        public function idxnombre($id){
        $resultado = $this->model->CambiarIdEmpleadoxNom($id);
        return $resultado;
    }

}

?>