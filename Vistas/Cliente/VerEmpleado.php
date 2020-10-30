<?php 

require_once "autoload.php";
$Empleado;
$this->Empleado = new EmpleadoModel();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

</head>

<body id="page-top">

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
        <?php
            $rol = $_SESSION['ROL'];

<<<<<<< HEAD
            if($rol == 1){
                include_once "Vistas/Home/MenuAdmin.php";
            }else if($rol == 2){
                include_once "Vistas/Home/MenuEmpleado.php";
            }
        
        ?>
        <!-- End of Topbar -->
=======
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?c=cliente&a=home">
                <div class="sidebar-brand-icon">
                    <img src="/Agendamiento/Assets/Imagenes/DjBlanco.png" alt="D'jane" width="120px" height="50px">
                </div>
>>>>>>> e1679ad035df918bec1854473b234e11df93b4ee

        <!-- Begin Page Content -->
        <div class="container-fluid">

<<<<<<< HEAD
            <!-- Page Heading -->
            <div>
                <h1 class="h3 mb-0 text-gray-800 text-center">Lista de empleados</h1>
=======
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="?c=cliente&a=home">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Configuración</span>
                </a>
                <div id="collapseUtilities" class="collapse active" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Actualizar mis datos</a>
                        <a class="collapse-item active" href="?c=Cliente&a=VerEmpleados">Consultar Empleado</a>
                        <a class="collapse-item" href="utilities-animation.html">Cambiar contraseña</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>
>>>>>>> e1679ad035df918bec1854473b234e11df93b4ee

            </div>


            <div class="container-fluid">

                <!-- Page Heading -->

                <p class="mb-4">En la siguiente tabla puede ver los empleados que siguen activos en D´JANE.</a>
                </p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Citas pendientes</h6>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <div class="p-3">
                                <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
                            </div>
                            <div class="p-3">
                                <ul class="list-group" id="myList">
                                    <?php
                                              $contador = 0;
                                              foreach($resultado as $busqueda => $value){ 
                                              $contador ++;
                                              ?>



                                    <li class="list-group-item">

                                        <div class="row">

                                            <div class="col-md-5 col-sm-4">
                                                <?php print_r($value->NombreEmpleado) ?>

                                            </div>
                                            <div class="col-md-5 col-sm-4">
                                                <?php print_r($value->ESPECIALIDAD)?>
                                            </div>
                                            <div class="col-md-2 col-sm-4">

                                                <input type="submit" value="..." class="btn btn-block btn-light"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Ver más datos sobre este empleado.">



                                            </div>




                                        </div>

                                    </li>


                                    <?php }?>


                                </ul>
                            </div>


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
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current
                            session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myList li").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(
                            value) > -1)
                    });
                });
            });


            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
            </script>

            <!-- Bootstrap core JavaScript-->
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

</body>

</html>