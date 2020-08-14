<?php

class Citacontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cita();
        $this->vo = new CitaVO();
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

}

?>