<?php

require_once 'autoload.php';

if (!isset($_GET['c'])) {
    $controller = new HomeController;
    call_user_func(array($controller, "Index"));
} else {
    if (empty($_SESSION['id'])) {
        echo 'Su sesion Expiró';
        $controller = new HomeController;
        call_user_func(array($controller, "Index"));
    } else {
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
}
?>