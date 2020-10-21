<?php

require_once 'autoload.php';


if (!isset($_GET['c'])) {
    $controller = new HomeController;
    call_user_func(array($controller, "Index"));
} else {
    echo $_GET['c'];
    if(!isset($_SESSION) && !($_GET['c']=="valida")) 
{ 
    session_start(['name'=>'DJANE']);
    header('Location: /Agendamiento/Vistas/Home/Login.php?erro=1');
    exit;
} 
 
        $controller = $_GET['c'];
        $accion = isset($_GET['a']) ? $_GET['a'] : "Index";

        //require_once "controllers/$controller.controller.php";
        //UpperCase Words coloca una mayuscula al iniciar la palabra
        $controller = ucwords($controller) . "Controller";
        //instaciamos el controlador
        $controller = new $controller;
        //llamamos al metodo guardado en accion del controlador
        call_user_func(array($controller, $accion));
   
}
?>