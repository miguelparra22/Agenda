<?php 


/* Cargar Conexion */


require_once 'Modelos/DB/db.php';
require_once 'Modelos/database/Idatabase.php';

/**Cargo VO */

require_once 'VO/clienteVO.php';
require_once 'VO/ServicioVO.php';
/**Carga Modelos */


require_once 'Modelos/ClienteModel.php';
require_once 'Modelos/ServicioModel.php';

/**Carga de Controladores */

require_once 'Controladores/Cliente.controller.php';
require_once 'Controladores/Servicio.controller.php';
require_Once 'Controladores/Home.controller.php';


?>