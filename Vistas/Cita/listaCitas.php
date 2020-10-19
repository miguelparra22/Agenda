<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/Agendamiento/Assets/css/fullcalendar.css">
        <link rel="stylesheet" href="/Agendamiento/Assets/css/select2.min.css">
        <script src="/Agendamiento/Assets/jquery.min.js"></script>
        <script src="/Agendamiento/Assets/moment.min.js"></script>
        <script src="/Agendamiento/Assets/js/fullcalendar.js"></script>
        <script src="/Agendamiento/Assets/js/es.js"></script>
        <script src="/Agendamiento/Assets/Bootstrap/js/popper.min.js"></script>
        <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
        <script src="/Agendamiento/Assets/js/select2.min.js"></script>
        <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
        <link rel="stylesheet" href="/Agendamiento/Assets/css/acordion.css" >
        <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
        <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
        <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/Agendamiento/Assets/css/dataTables.bootstrap4.min.css" >
        <link rel="stylesheet" href="/Agendamiento/Assets/sweetalert/dist/sweetalert2.css">
        <script src="/Agendamiento/Assets/sweetalert/dist/sweetalert2.js"></script>
        <script src="/Agendamiento/Assets/js/dataTables.bootstrap4.min.js"></script>
        <script src="/Agendamiento/Assets/js/jquery.dataTables.min.js"></script>

    </head>
    <body >

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
        <section id="main">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="/Agendamiento/Assets/Imagenes/Icono.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    D'JANE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a id="citas_cliente" class="nav-link" onclick="abrirM(this.id)" href="#"><i class="fa fa-calendar"></i> Citas</a>
                        </li>
                        <li class="nav-item">
                            <a  id="team_cliente" class="nav-link" onclick="abrirM(this.id)" href="#"><i class="fa fa-users"></i> Equipo D'Jane</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="abrirM(this.id)" href="#"><i class="fa fa-wrench"></i> Configuración</a>
                        </li>
                        <!--li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li-->
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="/Agendamiento/Vistas/Home/home.php" class="btn btn-outline-danger"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>



            <div class="p-5">
                <div class="container">
                    <h1 class="text-center">Lista de citas</h1>

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="tablee" class="table  table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Fecha y Hora Inicio</th>
                                        <th>Fecha y Hora Fin</th>
                                        <th>Descripci&oacute;n</th>
                                        <th>Servicios -> <?php
                                            $role = $_SESSION['ROL'];
                                            switch ($role) {
                                                case 0:
                                                    echo "Empleado";
                                                    break;
                                                case 2:
                                                    echo "Cliente";
                                                    break;
                                            }
                                            ?></th>

                                        <th>Tiempo Faltante</th>
                                        <th>Cancelar</th>
                                    </tr>
                                </thead>
                                <tbody id="bodtys">

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>






            <footer class="footer1 p-3 text-center text-white">
                <div class="text-center">
                    <img src="/Agendamiento/Assets/Imagenes/djlogodorado.png" alt="D'JANE" width="100" height="40">
                </div>
                <p class="p-2 text-center text-white">
                    D'Jane 2020
                </p>
                <p class="p-2 text-center text-white">
                    Siguenos en nuestras redes sociales
                </p>
                <i class="fa fa-facebook p-2 iconr"  onclick="facebook()"></i>
                <i class="fa fa-instagram p-2 iconr" onclick="instagram()"></i>
                <i class="fa fa-youtube-play p-2 iconr"  onclick="youtube()"></i>
            </footer>
        </section>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        </div>



        <script src="/Agendamiento/Assets/Funciones/cita.js">

        </script>
        <script>
            $(window).on('load', function () {
                buscarListas();
                setInterval(buscarListas, 3000);
            
            });
        </script>
    </body>
</html>
