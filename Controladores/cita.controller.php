<?php

class Citacontroller {

    private $model;
    private $vo;
    private $lugar;

    public function __CONSTRUCT() {
        $this->model = new Cita();
        $this->vo = new CitaVO();
        $lugar = 0;
    }

    public function listas() {
        $role =  $_SESSION['ROL'] ;
       
        $informacion='';
        switch ($role) {
            case 0:
                $informacion = $this->model->misServicios($_SESSION['ID']);
            break;
            case 2:
                $informacion = $this->model->misServiciosEmpleado($_SESSION['ID']);
            break;}
      
        echo json_encode($informacion);
    }

    public function buscaEmMasSer() {
        $role =  $_SESSION['ROL'] ;
        $cita = $_POST["cita"];
        $informacion='';
        
        switch ($role) {
            case 0:
                $informacion = $this->model->buscaEmMasSer($cita);
            break;
            case 2:
                $informacion = $this->model->buscaClienteMasSer($cita);
            break;}
       
        echo json_encode($informacion);
    }

    public function mostrar() {
        $this->model = new Configuracion();
        $resultado = $this->model->buscarconfiguracion("HORA");

        foreach ($resultado as &$valor) {
            switch ($valor->NombreConfiguracion) {
                case "HORAENTRADA" : {
                        $entrada = $valor->ValorConfiguracion;
                        break;
                    }
                case "HORASALIDA": {
                        $salida = $valor->ValorConfiguracion;
                        break;
                    }
            }
        }
        $this->model = new Cita();
        $citass = $this->model->listar();
        $array = "";
        $count = 1;
        foreach ($citass as &$valor) {
            $fecha = str_replace(" ", "T", $valor->HORAPACTADA);
            if ($_SESSION['ID'] == $valor->FKIDCLIENTE) {
                $color = "GREEN";
                $texto = "Tu Cita ";
            } else {
                $texto = "Cita Programada";
                $color = "RED";
            }
            $array .= " {
                                    id: '$count',
                                    title: '$texto',
                                    start: '$fecha',
                                    end: '$valor->HORATERMINA',
                                    allDay: false,
                                    color: '$color',
                                    textColor: 'white'
                                },";
            $count++;
        }
        $lugar = 1;
        require_once 'Vistas/Cita/agenda.php';
    }
    public function empleado(){
        $this->model = new Configuracion();
        $resultado = $this->model->buscarconfiguracion("HORA");

        foreach ($resultado as &$valor) {
            switch ($valor->NombreConfiguracion) {
                case "HORAENTRADA" : {
                        $entrada = $valor->ValorConfiguracion;
                        break;
                    }
                case "HORASALIDA": {
                        $salida = $valor->ValorConfiguracion;
                        break;
                    }
            }
        }
        $this->model = new Cita();
        $citass = $this->model->listarxEmpleado($_SESSION['ID']);
        $array = "";
        $count = 1;
        foreach ($citass as &$valor) {
            $fecha = str_replace(" ", "T", $valor->HORAPACTADA);
            if ($_SESSION['ID'] == $valor->FKIDCLIENTE) {
                $color = "GREEN";
                $texto = "Tu Cita ";
            } else {
                $texto = "Cita Programada";
                $color = "GREEN";
            }
            $array .= " {
                                    id: '$count',
                                    title: '$texto',
                                    start: '$fecha',
                                    end: '$valor->HORATERMINA',
                                    allDay: false,
                                    color: '$color',
                                    textColor: 'white'
                                },";
            $count++;
        }
        $lugar = 1;
        require_once 'Vistas/Cita/Empleado/listaCitas.php';
    }

    public function mis() {
        $this->model = new Configuracion();
        $resultado = $this->model->buscarconfiguracion("HORA");

        foreach ($resultado as &$valor) {
            switch ($valor->NombreConfiguracion) {
                case "HORAENTRADA" : {
                        $entrada = $valor->ValorConfiguracion;
                        break;
                    }
                case "HORASALIDA": {
                        $salida = $valor->ValorConfiguracion;
                        break;
                    }
            }
        }
        $this->model = new Cita();
        $citass = $this->model->lista($_SESSION['ID']);
        $array = "";
        $count = 1;
        foreach ($citass as &$valor) {
            $fecha = str_replace(" ", "T", $valor->HORAPACTADA);
            if ($_SESSION['ID'] == $valor->FKIDCLIENTE) {
                $color = "GREEN";
                $texto = "Tu Cita ";
            } else {
                $texto = "Cita Programada";
                $color = "RED";
            }
            $array .= " {
                                    id: '$count',
                                    title: '$texto',
                                    start: '$fecha',
                                    end: '$valor->HORATERMINA',
                                    allDay: false,
                                    color: '$color',
                                    textColor: 'white'
                                },";
            $count++;
        }
        $lugar = 0;
        require_once 'Vistas/Cita/agenda.php';
    }

    public function traerServicios() {
        $this->model = new Servicio();
        $resultado = $this->model->listar();
        $html = " [";
        foreach ($resultado as $busqueda => $value) {
            $html .= "{
            id:   $value->ID_SERVICIO,
            text: '$value->NombreServicio - $value->DescripcionServicio'
        },";
        }
        $html .= "];";
        echo $html;
    }

    function inFoServicios() {
        $valores = $_POST['valor'];
        $citass = $this->model->consultaUnica($valores);
        echo json_encode($citass);
    }

    function empleados() {
        $servicio = $_POST['servicio'];
        $inicio = $_POST['inicio'];
        $empleados = $this->model->consultaUnicaEmpleados($servicio, $inicio);
        echo json_encode($empleados);
    }

    function guardar() {

        $hasta = date("Y-m-j H:i:s", strtotime($_POST['inicioFecha'] . "+ " . $_POST['tiempoTotal'] . " minute"));
        $this->vo->setIdservicio($_POST['serviciosEmpleado']);
        $this->vo->setHoratermina($hasta);
        $this->vo->setHorapactada($_POST['inicioFecha']);
        $this->vo->setDescripcion($_POST['descripcion']);
        $this->vo->setFkidcliente($_SESSION['ID']);
        $this->vo->setFkidestado(1);
        $resultado = $this->model->agregar($this->vo);
        echo $resultado;
        $informacion = $this->model->buscaEmMasSer($resultado);
        $correo = $this->model->CambiarIdxNom("cliente","CorreoCliente","IDCLIENTE","'".$_SESSION['ID']."'" )[0]->CorreoCliente;
        if ($resultado != 0) {
            if (!(empty($correo))) {
          
                $this->model = new Cliente();
                $boolean = $this->model->validaCorreo($correo);
                if ($boolean) {
                    $this->vo = new CorreoVO();
                    $this->model = new Configuracion();
                    $resultado = $this->model->buscarconfiguracion("CORREO");
                    foreach ($resultado as &$valor) {
                        switch ($valor->NombreConfiguracion) {
                            case "CLAVE" : {
                                    $this->vo->setClave($valor->ValorConfiguracion);
                                    break;
                                }
                            case "CORREO": {
                                    $this->vo->setUsuario($valor->ValorConfiguracion);
                                    break;
                                }
                            case "HOST": {
                                    $this->vo->setHost($valor->ValorConfiguracion);
                                    break;
                                }
                            case "PORT": {
                                    $this->vo->setPort($valor->ValorConfiguracion);
                                    break;
                                }
                        }
                    }
                    $this->model = new Correo();
                    $this->vo->setDestinatario($correo);
                    $this->vo->setSMTPAuth(true);
                    $this->vo->setSMTPSecure('tls');
                    $this->vo->setAsunto('Se ha programado una cita');
                    $html = $this->model->construccionHTMLConfirmacion($_POST['inicioFecha'],$informacion, $hasta);
                    $this->vo->setContenidoHTML($html);
                    $resultado = $this->model->envioDeCorreo($this->vo);
                }
            }
        } else {
            
        }
    }

    function lista() {
        require_once 'Vistas/Cita/listaCitas.php';
    }

    function eliminar() {
        $cita = $_POST['cita'];
        $elimino = $this->model->eliminar($cita);
        echo $elimino;
    }

}

?>