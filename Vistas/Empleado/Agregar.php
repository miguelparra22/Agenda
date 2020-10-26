<?php           
($_SESSION['ROL'])
                
 ?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Miguel" content="Miguel">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />

    <title>Inicio</title>

    <!-- Custom fonts for this template-->
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>






<body id="page-top">

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
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-close"></i>
                </button>
            </ul>
        </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                <li class="nav-item active">
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
                            <a class="collapse-item" href="utilities-animation.html">Cambiar contraseña</a>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Equipo</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="?c=Empleado&a=ListaEmpleados">Consultar equipo</a>
                            <a class="collapse-item" href="?c=Empleado&a=LlamarAgregar">Agregar Empleado</a>
                            <div class="collapse-divider"></div>

                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Redes sociales
                </div>

                <!-- Nav Item - Pages Collapse Menu -->


                <!-- Nav Item - Charts -->
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
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
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
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->


                        <div class="container-fluid">

                            <!-- Page Heading -->

                            <p class="mb-4">Llena el siguiente formulario con los datos del nuevo integrante.</a></p>

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Nuevos empleados</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group p-5">




                                        <form action="./?c=empleado&a=agregar" id="formulario" method="POST">
                                            <h3>¡Agrega un nuevo integrate a tu equipo!</h3>
                                            <div class="p-2">
                                                <label for="nombre">Nombre del empleado</label>
                                                <input id="nombre" type="text" name="nombre"
                                                    placeholder="Ingrese el nombre completo del nuevo integrante"
                                                    class="form-control" onkeypress="return soloLetras(event)" required>

                                            </div>
                                            <div class="p-2">
                                                <label for="correo">Correo del empleado</label>
                                                <input type="text" id="correo" name="correo" required
                                                    placeholder="Ingrese el correo del nuevo integrante"
                                                    class="form-control">

                                            </div>
                                            <div class="p-2">
                                                <label for="pass">Contraseña del empleado</label>
                                                <input type="password" name="pass"
                                                    placeholder="Ingrese una contraseña temporal para el nuevo integrante"
                                                    class="form-control" required>

                                            </div>

                                            <div class="p-2"> 
                                                <label>Especialidad del empleado</label>
                                                <input type="text" name="especialidad"
                                                onkeypress="return soloLetras(event)"  class="form-control" placeholder="Ingrese la especialidad del empleado" required>

                                            </div>

                                            <input type="hidden" name="estado" value="1">
                                            <input type="hidden" name="rol" value="2">

                                            <div class="p-2">
                                                <input type="button" class="btn btn-block btn-primary"
                                                    onclick="traerValor()" value="Guardar" name="guardar">
                                            </div>


                                            <div class="text-center p-3">
                                                <a href="?c=Empleado&a=LlamarInicioAdmin"><i class="fa fa-home"></i>
                                                    Regresar al inicio</a>
                                            </div>
                                        </form>


                                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea
                                                salir?
                                            </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Si desea salir de D'JANE seleccione "Salir" para
                                            cerrar
                                            sesión.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-primary" href="?c=valida&a=cerrar">Salir</a>
                                        </div>
                                    </div>
                                </div>




    </section>


    <script src="/Agendamiento/Assets/Funciones/validador.js"></script>
    <script src="/Agendamiento/Assets/Funciones/validaciones.js"></script>
    <script src="/Agendamiento/Assets/vendor/jquery/jquery.min.js"></script>
    <script src="/Agendamiento/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/Agendamiento/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/Agendamiento/Assets/js/sb-admin-2.min.js"></script>

    <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
    <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
    <script src="/Agendamiento/Assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/Agendamiento/Assets/js/datatables-demo.js"></script>



</html>