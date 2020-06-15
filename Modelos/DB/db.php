<?php

class Conexion{
    const server = "localhost";
    const user = "root";
    const password = "";
    const bd = "agendamiento";


    public function __construct()
    {
        try{
            $conexion = new PDO('mysql:host='.self::server.';dbname='.self::bd.';chartset=utf8',self::user,self::password);           
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
      
            return $conexion;
        }catch(PDOException $e){
            return "fallo".$e->getMessage();
        }
    }
}







?>