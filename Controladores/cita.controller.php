<?php 

class Citacontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cita();
        $this->vo = new CitaVO();
    }

}?>