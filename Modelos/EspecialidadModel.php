<?php 

require_once 'autoload.php';


class EspecialidadModel extends Conexion{
    private $model;
    private $vo;
    private $tabla;


    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "especialidad";
    }

    public function agregar($vo){
         $this->EspecialidadVO = $vo;
         $sentencia = "INSERT INTO $this->tabla VALUES (null,:nombre,:descripcion)";

         $resultado = $this->PDO->prepare($sentencia);
         return $resultado->execute(array(
            ':nombre' => $this->EspecialidadVO->getEspecialidad_nombre(),
            ':descripcion' => $this->EspecialidadVO->getEspecialidad_descripcion()
            
));
    }

}
