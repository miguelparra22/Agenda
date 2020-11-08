<?php

class Notificacioncontroller {

    private $model;
    private $vo;
    public function __CONSTRUCT() {
        $this->vo = new NotificacionVO();
        $this->model = new Notificacion();
    }

    function notificacion(){
        $notificacion = $this->model->consultaUnica($_SESSION['ID'] , $_SESSION['ROL']);
        echo json_encode($notificacion);
    }



                   
}



                    ?>