<?php

class HomeController{
   
    
    private $model;
    public function __CONSTRUCT(){

    }

    public function index(){
        require_once "Vistas/Home/home.php";
    }
}



?>