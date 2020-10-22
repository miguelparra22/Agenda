<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamiento</title>
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
    <link rel="stylesheet" href="/Agendamiento/Assets/css/acordion.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/sweetalert/dist/sweetalert2.css">
    <script src="/Agendamiento/Assets/sweetalert/dist/sweetalert2.js"></script>


    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>

<body>
    <!---------------------Animación ----------------------->
    <style>
    #accordionSidebar {
        transition: 1s;
    }
    </style>
    <!-----Animacion---->
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
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="/Agendamiento/Assets/Imagenes/DjBlanco.png" alt="D'jane" width="100px" height="50px">
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Citas</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Acciones de cita</h6>
                        <a class="collapse-item" href="?c=Cita&a=mostrar">Reservar cita</a>
                        <a class="collapse-item" href="?c=Cita&a=lista">Cancelar cita</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Configuración</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="?c=Cliente&a=llamarEditar">Actualizar mis datos</a>
                        <a class="collapse-item" href="?c=Cliente&a=VerEmpleados">Consultar Empleado</a>
                        <a class="collapse-item" href="#">Cambiar contraseña</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Redes sociales
            </div>


            <li class="nav-item">
                <a class="nav-link" onclick="instagram()">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" onclick="facebook()">
                    <i class="fab fa-facebook"></i>
                    <span>Facebook</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" onclick="youtube()">
                    <i class="fab fa-youtube"></i>
                    <span>Youtube</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" onclick="youtube()">
                    <i class="fab fa-whatsapp"></i>
                    <span>whatsapp</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->

                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php print ($_SESSION['NOMBRE']);?></span>
                            </a>
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle dropdown-item" data-toggle="modal"
                                data-target="#logoutModal" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <!-- Dropdown - Alerts -->

                        </li>



                    </ul>

                </nav>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div>
                        <h1 class="h3 mb-0 text-gray-800 text-center">Agende su cita</h1>

                    </div>


                    <div class="container-fluid">

                        <!-- Page Heading -->

                        <p class="mb-4">En el siguiente calendario podrás agendar tu cita.</a></p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Elija una fecha</h6>
                            </div>
                            <div>
                                <div class="p-5">
                                    <div>
                                        <div>
                                            <div id="calendario">
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                    $(document).ready(function() {
                                        $('#calendario').fullCalendar({
                                            defaultView: 'agendaDay',
                                            selectable: true,
                                            minTime: "<?php print_r($entrada) ?>",
                                            maxTime: "<?php print_r($salida) ?>",
                                            columnFormat: "dddd D/M",
                                            timeFormat: 'hh:mm ',
                                            allDaySlot: false,
                                            firstDay: (new Date().getDay()),
                                            header: {
                                                left: 'today',
                                                center: 'title',
                                                right: ' month, agendaWeek, agendaDay'
                                            },
                                            customButtons: {
                                                mibutton: {
                                                    text: 'boton 1',
                                                    click: function() {
                                                        alert('a')
                                                    }
                                                }
                                            },
                                            Click: function() {
                                               
                                            },
                                            eventSources: [{
                                                events: [<?php print_r($array) ?>]
                                            }],
                                            eventClick: function(calEvent, jsEvent, view) {
                                                Swal.fire({
                                                    title: calEvent.title,
                                                    text: 'servicios x cita',
                                                    footer:calEvent.start._i.replace('T',
                                                            ' ') + ' - ' + calEvent.end._i
                                                        .replace('T', ' '),

                                                    confirmButtonText: 'Cerrar'
                                                })
                                            }
                                            <?php if ($lugar == 1): ?>,
                                            select: function(start, end, jsEvent) {
                                                endtime = $.fullCalendar.moment(end).format('h:mm');
                                                starttime = $.fullCalendar.moment(start).format(
                                                    'dddd, MMMM Do YYYY, h:mm');
                                                var mywhen = starttime + ' - ' + endtime;
                                                start = moment(start).format();
                                                end = moment(end).format();
                                                $('#inicioFecha').val(start);
                                                $('#fechamostrar').val(start.replace("T", " "));
                                                $('#agendaModal').modal();
                                            }
                                            <?php endif; ?>
                                        })
                                    });

                                    function getlength(number) {
                                        return number.toString().length;
                                    }
                                    </script>
                                </div>

                            </div>
                            <!-- End of Main Content -->

                            <!-- Footer -->
                            <footer class="sticky-footer bg-white">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                        <span>Copyright &copy; D'JANE 2020</span>
                                    </div>
                                </div>
                            </footer>
                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea salir?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Si desea salir de D'JANE seleccione "Salir" para cerrar sesión.
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-dismiss="modal">Cancelar</button>
                                    <a class="btn btn-primary" href="?c=Valida&a=cerrar">Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>




                        <footer class="footer1 p-3 text-center text-white">
                            <div class="text-center">
                                <img src="/Agendamiento/Assets/Imagenes/djlogodorado.png" alt="D'JANE" width="100"
                                    height="40">
                            </div>


                        </footer>
                        <script src="/Agendamiento/Assets/Funciones/cita.js"></script>
</body>
<script src="/Agendamiento/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/Agendamiento/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/Agendamiento/Assets/js/sb-admin-2.min.js"></script>

</html>