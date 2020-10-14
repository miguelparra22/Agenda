<?php

require_once "autoload.php";
$Citas;
$this->Citas = new Cita();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title>Inicio</title>
</head>

<body>
    <div id="waitDiv" class="loadercont">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="imageloader">
                        <img src="/Agendamiento/Assets/Imagenes/djlogo.png" alt="D'JANE" width="200" height="100">


                    </div>
                    <div class="contenedorload">
                        <div class="lds-grid">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    </div>
    <section id="main">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/Agendamiento/Assets/Imagenes/djlogo.png" width="120" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="?c=valida&a=iniciar" onclick=""><i class="fa fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="citas" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-calendar"></i> Mis citas</a>
                    </li>
                    <li class="nav-item">
                        <a id="team" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-users"></i> Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a id="con" class="nav-link" href="#" onclick="abrirM(this.id)" href="#"><i class="fa fa-wrench"></i> Configuración</a>
                    </li>
                </li-->
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-close"></i>
                    </button>
                </ul>
            </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cerrar sesión</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Está seguro de que desea cerrar sesión?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Cerrar sesión</button>
                    </div>
                </div>
            </div>
        </div>



        <section class="container">
            <h1 class="text-center">Bienvenido <?php print($_SESSION['NOMBRE']); ?></h1>


            <div class="table-responsive">
                <h4>Estas son las citas del día de hoy</h4>
                <table class="table  table-bordered table-striped">
                    <thead class="table-primary">
                        <th>Nombre del cliente</th>
                        <th>Hora</th>
                        <th>Servicio</th>
                        <th>Nombre del encargado</th>
                    </thead>
                    <tbody>
                    <?php  foreach ($ResultadoLista as $busqueda => $value) {  ?>
                        <tr>            
                            <td><?php print_r($this->Cita->CambiarIdxNom("cliente","ClienteNombre","IDCLIENTE","$value->FKIDLCIENTE")[0]->ClienteNombre) ?></td>
                            <td><?php print_r(date("h:i:s A", strtotime($value->HORAPACTADA))) ?> </td>
                            <?php $IdServicio = $this->Cita->CambiarIdxNom("cita_servicio","ID_SERVICIO","ID_CITA","$value->IDCITA")[0]->ID_SERVICIO?>
                            <td><?php print_r($this->Cita->CambiarIdxNom("servicio","NombreServicio","ID_SERVICIO","$IdServicio")[0]->NombreServicio) ?></td>
                            <?php $IdEmpleado = $this->Cita->CambiarIdxNom("agenda","FK_IDEMPLEADO","FK_IDCITA","$value->IDCITA")[0]->FK_IDEMPLEADO?>
                            <td><?php print_r($this->Cita->CambiarIdxNom("empleado","NombreEmpleado","ID_EMPLEADO","$IdEmpleado")[0]->NombreEmpleado)?></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>


        </section>


        <footer class="footer p-3 bg-dark color-white">
            <i class="fa fa-facebook m-2"></i>
            <i class="fa fa-youtube m-2"></i>
            <i class="fa fa-instagram m-2"></i>
        </footer>




        <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
        <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
        <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
</body>

</html>