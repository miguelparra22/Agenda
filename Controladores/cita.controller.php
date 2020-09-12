<?php

class Citacontroller {

    private $model;
    private $vo;
    private $lugar;

    public function __CONSTRUCT() { 
        $this->model = new Cita();
        $this->vo = new CitaVO();
        $lugar = 0;
    }

    public function listas() {
        $informacion = $this->model->misServicios($_SESSION['id']);
        echo json_encode($informacion);
    }

    public function buscaEmMasSer() {
        $cita = $_POST["cita"];
        $informacion = $this->model->buscaEmMasSer($cita);
        echo json_encode($informacion);
    }

    public function mostrar() {
        $this->model = new Configuracion();
        $resultado = $this->model->buscarconfiguracion("HORA");

        foreach ($resultado as &$valor) {
            switch ($valor->NombreConfiguracion) {
                case "HORAENTRADA" : {
                        $entrada = $valor->ValorConfiguracion;
                        break;
                    }
                case "HORASALIDA": {
                        $salida = $valor->ValorConfiguracion;
                        break;
                    }
            }
        }
        $this->model = new Cita();
        $citass = $this->model->listar();
        $array = "";
        $count = 1;
        foreach ($citass as &$valor) {
            $fecha = str_replace(" ", "T", $valor->HORAPACTADA);
            if ($_SESSION['id'] == $valor->FKIDCLIENTE) {
                $color = "GREEN";
                $texto = "Tu Cita ";
            } else {
                $texto = "Cita Programada";
                $color = "RED";
            }
            $array .= " {
                                    id: '$count',
                                    title: '$texto',
                                    start: '$fecha',
                                    end: '$valor->HORATERMINA',
                                    allDay: false,
                                    color: '$color',
                                    textColor: 'white'
                                },";
            $count++;
        }
        $lugar = 1;
        require_once 'Vistas/Cita/agenda.php';
    }

    public function mis() {
        $this->model = new Configuracion();
        $resultado = $this->model->buscarconfiguracion("HORA");

        foreach ($resultado as &$valor) {
            switch ($valor->NombreConfiguracion) {
                case "HORAENTRADA" : {
                        $entrada = $valor->ValorConfiguracion;
                        break;
                    }
                case "HORASALIDA": {
                        $salida = $valor->ValorConfiguracion;
                        break;
                    }
            }
        }
        $this->model = new Cita();
        $citass = $this->model->lista($_SESSION['id']);
        $array = "";
        $count = 1;
        foreach ($citass as &$valor) {
            $fecha = str_replace(" ", "T", $valor->HORAPACTADA);
            if ($_SESSION['id'] == $valor->FKIDCLIENTE) {
                $color = "GREEN";
                $texto = "Tu Cita ";
            } else {
                $texto = "Cita Programada";
                $color = "RED";
            }
            $array .= " {
                                    id: '$count',
                                    title: '$texto',
                                    start: '$fecha',
                                    end: '$valor->HORATERMINA',
                                    allDay: false,
                                    color: '$color',
                                    textColor: 'white'
                                },";
            $count++;
        }
        $lugar = 0;
        require_once 'Vistas/Cita/agenda.php';
    }

    public function traerServicios() {
        $this->model = new Servicio();
        $resultado = $this->model->listar();
        $html = " [";
        foreach ($resultado as $busqueda => $value) {
            $html .= "{
            id:   $value->ID_SERVICIO,
            text: '$value->NombreServicio - $value->DescripcionServicio'
        },";
        }
        $html .= "];";
        echo $html;
    }

    function inFoServicios() {
        $valores = $_POST['valor'];
        $citass = $this->model->consultaUnica($valores);
        echo json_encode($citass);
    }

    function empleados() {
        $servicio = $_POST['servicio'];
        $inicio = $_POST['inicio'];
        $empleados = $this->model->consultaUnicaEmpleados($servicio, $inicio);
        echo json_encode($empleados);
    }

    function guardar() {

        $hasta = date("Y-m-j H:i:s", strtotime($_POST['inicioFecha'] . "+ " . $_POST['tiempoTotal'] . " minute"));
        $this->vo->setIdservicio($_POST['serviciosEmpleado']);
        $this->vo->setHoratermina($hasta);
        $this->vo->setHorapactada($_POST['inicioFecha']);
        $this->vo->setDescripcion($_POST['descripcion']);
        $this->vo->setFkidcliente($_SESSION['id']);
        $this->vo->setFkidestado(1);


        $resultado = $this->model->agregar($this->vo);
        if ($resultado) {
            
        } else {
            
        }
    }

}

?>