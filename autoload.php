<?php 

/*Composer*/
require_once 'Composer/vendor/autoload.php';

/* Cargar Conexion */


require_once 'Modelos/DB/db.php';
require_once 'Modelos/database/Idatabase.php';

/**Cargo VO */

require_once 'VO/clienteVO.php';
require_once 'VO/ServicioVO.php';
require_once 'VO/EspecialidadVO.php';
require_once "Vo/HorarioVO.php";
require_once 'VO/EmpleadoVo.php';
/*require_once 'VO/CitaVO.php';*/
require_once 'VO/CitaVO.php';
require_once 'VO/CorreoVO.php';
/**Carga Modelos */


require_once 'Modelos/ClienteModel.php';
require_once 'Modelos/ServicioModel.php';
require_once 'Modelos/EspecialidadModel.php';
require_once 'Modelos/EmpleadoModel.php';
require_once "Modelos/HorarioModel.php";
/*require_once "Modelos/CitaModel.php";*/

require_once "Modelos/CitaModel.php";
require_once "Modelos/CorreoModel.php";
require_once "Modelos/ConfiguracionModel.php";
/**Carga de Controladores */
require_once 'Controladores/especialidad.controller.php';
require_once 'Controladores/Cliente.controller.php';
require_once 'Controladores/Servicio.controller.php';
require_Once 'Controladores/Home.controller.php';
require_Once 'Controladores/valida.controller.php';
require_once "Controladores/Horario.controller.php";
require_once 'Controladores/empleado.controller.php';
/*require_once 'Controladores/cita.controller.php';*/

?>