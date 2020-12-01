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