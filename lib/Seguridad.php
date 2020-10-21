<?php
class Seguridad{
    private $sesion=null;

    function __construct(){
        session_start();
        if(isset($_SESSION['ID'])) $this->$sesion=$_SESSION['ID'];
    }
    public function getSesion(){
        return $sesion;
    }
}

?>