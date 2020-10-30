<?php
$Servicio;
          $this->Servicio = new ServicioController();
          ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Servicios</title>
</head>


<style>
#accordionSidebar {
    transition: 1s;
}
</style>
<!-------Animación------>

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

<!------Contenedor menú-------->


<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
</div>
<section id="main">
    <?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
                include_once "Vistas/Home/MenuAdmin.php";
            }else if($rol == 2){
                include_once "Vistas/Home/MenuEmpleado.php";
            }
        
        ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div>
            <h1 class="h3 mb-0 text-gray-800 text-center">Servicios D'JANE</h1>

        </div>


        <div class="container-fluid">

            <!-- Page Heading -->

            <p class="mb-4">En la siguiente aparecen los servicios que están disponibles en el establecimiento.</a></p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                
                <div class="card-body">
                    <div class="table-responsive">

                        <div class="table-responsive">
                            <h4>Servicios</h4>

                            <div class="container cont1">

                                <div class="">
                                    <h2>Servicios</h2>
                                    <p>Busque por medio del filtro los servicios disponibles.</p>
                                </div>

                                <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
                                <br>
                                <div>
                                    <form id="Form1" action="" method="POST">
                                        <ul class="list-group" id="myList">
                                            <?php
                                                $contador = 0;
                                                 foreach($resultado as $busqueda => $value){ 
                                                 $contador ++;
                                            ?>


                                            <form id="Form<?php print_r($contador)?>" action="" method="POST">
                                                <li class="list-group-item">

                                                    <div class="row">
                                                        <div class="col-md-10 col-sm-9">
                                                            <?php print_r($value->NombreServicio) ?>
                                                            <input type="hidden" name="servicio_ID"
                                                                value="<?php print_r($value->ID_SERVICIO) ?>">
                                                        </div>
                                                        <div class="col-md-2 col-sm-3">
                                                            <input type="button" class="Editar btn btn-info text-white"
                                                                name="Editar"
                                                                onclick="$('#Form<?php print_r($contador)?>').attr('action','?c=Servicio&a=consultaUnica');$('#Form<?php print_r($contador)?>').submit();"
                                                                value="...">
                                                        </div>
                                                        <!--div class="col-md-1 col-sm-3">
                                                            <input type="button" class="Eliminar btn btn-danger"
                                                                name="eliminar"
                                                                onclick="$('#Form<?php ($contador)?>').attr('action', '?c=Servicio&a=eliminar');$('#Form<?php print_r($contador)?>').submit();"
                                                                value="Eliminar">
                                                        </div-->

                                                    </div>

                                                </li>
                                            </form>

                                            <?php }?>

                                        </ul>

                                    </form>
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

                            <div class="container p-5">
                                <form action="?c=Servicio&a=LlamarAgregar" method="POST">
                                    <input type="submit" class="btn btn-primary btn-block" name="Agregar"
                                        value="Agregar un nuevo servicio">
                                </form>
                            </div>


                            <script>
                            $('.Editar').click(function() {
                                $('#Form1').attr('action', '?c=Servicio&a=consultaUnica');
                            });
                            $('.Eliminar').click(function() {
                                $('#Form1').attr('action', '?c=Servicio&a=eliminar');
                            });
                            </script>

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
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="?c=valida&a=cerrar">Salir</a>
                            </div>
                        </div>
                    </div>
                </div>





</section>

<script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
<script src="/Agendamiento/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/Agendamiento/Assets/js/sb-admin-2.min.js"></script>

<script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
<script src="/Agendamiento/Assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.js">
</script>

<!-- Page level custom scripts -->
<script src="/Agendamiento/Assets/js/datatables-demo.js"></script>