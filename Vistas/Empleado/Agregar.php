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
                                                    onkeypress="return soloLetras(event)" class="form-control"
                                                    placeholder="Ingrese la especialidad del empleado" required>

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
                                                        <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que
                                                            desea
                                                            salir?
                                                        </h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Si desea salir de D'JANE seleccione "Salir"
                                                        para
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