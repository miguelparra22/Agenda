<?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
            $Controller = "Empleado";
            $Funcion = "admin";
            }else if($rol == 2){
                $Controller = "Empleado";
            $Funcion = "home";
            }else if($rol == 0){
            $Controller = "cliente";
            $Funcion = "home";
            }
        
        ?>

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
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/sweetalert/dist/sweetalert2.css">
    <script src="/Agendamiento/Assets/sweetalert/dist/sweetalert2.js"></script>
    <script src="/Agendamiento/Assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="/Agendamiento/Assets/js/jquery.dataTables.min.js"></script>

    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>

<body>

   
<?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
                include_once "Vistas/Home/MenuAdmin.php";
            }else if($rol == 2){
                include_once "Vistas/Home/MenuEmpleado.php";
            }else if($rol == 0){
              include_once "Vistas/Home/MenuCliente.php";
          }
        
        ?>
    

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div>
                        <h1 class="h3 mb-0 text-gray-800 text-center">Cancelar cita </h1>

                    </div>


                    <div class="container-fluid">

                        <!-- Page Heading -->

                        <p class="mb-4">En la siguiente tabla podrás ver las citas que están vencidas y tambien las puedes cancelar.</a></p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Elija una fecha</h6>
                            </div>
                            <div>
                                <div class="p-5">
                                    <div>
                                        <div class="table-responsive">

                                            <div class="p-2">
                                                <div>
                                                    

                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table id="tablee"
                                                                class="table  table-bordered table-striped">
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


                                        </div>
                                    </div>

                                    <script>
                                   

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

                </div>




                <script src="/Agendamiento/Assets/Funciones/cita.js">

                </script>
                <script>
                $(window).on('load', function() {
                    buscarListas();
                    setInterval(buscarListas, 3000);

                });
                </script>
<input type='hidden' value ='<?= empty ($_GET['key']) ? 'no': $_GET['key']?>' id='noti'>
                <script src="/Agendamiento/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="/Agendamiento/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="/Agendamiento/Assets/js/sb-admin-2.min.js"></script>
                <script src="/Agendamiento/Assets/Funciones/cita.js"></script>
</body>

</html>