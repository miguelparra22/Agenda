
<?php


require_once "autoload.php";


class EmpleadoModel extends Conexion{
    private $model;
    private $vo;
    private $tabla;
    const SALT = "AgendamientoAgendamiento";

    public function __CONSTRUCT() {
        $this->PDO = parent::__construct();
        $this->tabla = "empleado";
    }

     public function agregar($vo){
         $this->EmpleadoVo = $vo;
         $sentencia = "INSERT INTO $this->tabla VALUES (null,:nombre,:correo,:pass,:especialidad,:estado,:rol)";
         $claveEncriptada = $this->hash($this->EmpleadoVo->getPassword_Empleado());
         $resultado = $this->PDO->prepare($sentencia);
         return $resultado->execute(array(
             ':nombre' => $this->EmpleadoVo->getNombre_Empleado(),
             ':correo' => $this->EmpleadoVo->getCorreo_Empleado(),
             ':pass' => $claveEncriptada,
             ':especialidad' => $this->EmpleadoVo->getEspecialidad_Empleado(),
             ':estado' => $this->EmpleadoVo->getEstado_Empleado(),
             ':rol' => $this->EmpleadoVo->getRol_Empleado()
          
         ));
     }

    

     public function hash($password) {
        return hash('sha512', self::SALT . $password);
    }

    public function verify($password, $hash) {
        return ($hash == self::hash($password));
    }



    
  
}


?>