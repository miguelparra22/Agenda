
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
             ':rol' => $this->EmpleadoVo->getRol_Empleado(),
          
         ));
     }

     public function listar() {
        $sentencia = "SELECT * FROM $this->tabla";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

    public function listaEmpleado(){
        $sentencia = "SELECT ID_EMPLEADO,NombreEmpleado,CorreoEmpleado,ESPECIALIDAD FROM $this->tabla where FK_ROL = 2";
        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }


    

    /*Función para consultar un empleado en especifico*/

    public function consultaUnica($id){

        /* La consulta se prepara para buscar un id en especifico.*/ 
        $sentencia = "SELECT * FROM  $this->tabla WHERE ID_EMPLEADO = $id";

        $resultado = $this->PDO->prepare($sentencia);
        $resultado->execute();

        if($resultado->rowCount() == 0){
            return true;
        }else{
            $arreglo = $resultado->fetchAll(PDO::FETCH_OBJ);
            $arreglo = $arreglo[0];
            $this->EmpleadoVo = new EmpleadoVO();
            $this->EmpleadoVo->setId_Empleado($arreglo->ID_EMPLEADO);
            $this->EmpleadoVo->setNombre_Empleado($arreglo->NombreEmpleado);
            $this->EmpleadoVo->setCorreo_Empleado($arreglo->CorreoEmpleado);
            $this->EmpleadoVo->setEspecialidad_Empleado($arreglo->ESPECIALIDAD);


            $arreglo = $this->EmpleadoVo;
            return $arreglo;
        }
    }
    

     public function hash($password) {
        return hash('sha512', self::SALT . $password);
    }

    public function verify($password, $hash) {
        return ($hash == self::hash($password));
    }

    public function editar($vo){
        $sentancia = "UPDATE $this->tabla SET NombreEmpleado='$vo[1]', CorreoEmpleado='$vo[2]', Especialidad='$vo[3]' WHERE ID_EMPLEADO='$vo[0]';";
        $resultado = $this->PDO->prepare($sentancia);
        return $resultado->execute();
    }



    
  
}


?>
