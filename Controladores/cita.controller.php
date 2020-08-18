<?php

class Citacontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cita();
        $this->vo = new CitaVO();
    }

    public function mostrar() {
        $this->model = new Configuracion();
        $resultado = $this->model->buscarconfiguracion("HORA");

        foreach ($resultado as &$valor) {
            switch ($valor->NombreConfiguracion) {
                case "HORAENTRADA" : {
                        $entrada = $valor->ValorConfiguracion;

                        $_SESSION['entrada'] = $entrada;
                        break;
                    }
                case "HORASALIDA": {
                        $salida = $valor->ValorConfiguracion;
                        $_SESSION['salida'] = $salida;
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
        $empleados = $this->model->consultaUnicaEmpleados($servicio);
        echo json_encode($empleados);
    }

}

?>