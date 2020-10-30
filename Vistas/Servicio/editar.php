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

    <title>Editar empleado</title>
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

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
                            </div>
    <?php
    
     $rol = $_SESSION['ROL'];
      if($rol == 1){
        include_once 'Vistas/Home/MenuAdmin.php';
      }else if($rol == 2){
         include_once 'Vistas/Home/MenuEmpleado.php';
      }
    ?>

        <div class="text-center p-3">
            <h1>Actualizar datos del servicio</h1>
        </div>

        <!---------as------------------------>



        <div class="container">
            <div class="form-group bg-light p-5 ">

                <form action="?c=Servicio&a=editar" method="post">
                    <div class="form-group">
                        NOMBRE SERVICIO
                        <input type="text" class="form-control" name="NOMSERVi"
                            value="<?= $resultado->getNombreServicio() ?>" />
                    </div>
                    <div class="form-group">
                        DESCRIPCION SERVICIO
                        <input class="form-control" name="DESCSERVI"
                            value="<?= $resultado->getDescripcionServicio() ?>" />
                    </div>
                    <?php if($_SESSION['ROL'] == 2){?>
                    <div class="form-group">
                        CANTIDAD SERVICIO
                        <input class="form-control" name="CANTSERVI" value="<?= $resultado->getCantidadServicio() ?>" />
                    </div>
                    <?php }else{ ?>
                    <div style="display:none" class="form-group">
                        CANTIDAD SERVICIO
                        <input class="form-control" name="CANTSERVI" value="" />
                    </div>
                    <?php }?>
                    <?php if($_SESSION['ROL'] == 1){?>
                    <div class="form-group">
                        PRECIO SERVICIO
                        <input class="form-control" name="PRECIOSERVICIO"
                            value="<?= $resultado->getPrecioServicio() ?>" />
                    </div>
                    <?php } else {?>
                    <div style="display:none" class="form-group ">
                        PRECIO SERVICIO
                        <input class="form-control" name="PRECIOSERVICIO" value="" />
                    </div>
                    <?php }?>
                    <div class="form-group">
                        TIEMPO LIMITE SERVICIO
                        <input class="form-control" name="TIEMPOLIMITE" value="<?= $resultado->getTiempo_Limite() ?>" />
                    </div>
                    <div>
                        <input type="hidden" class="form-control" name="ID_SERVICIO"
                            value="<?= $resultado->getId_Servicio() ?>" />
                        <input type="submit" class="btn btn-block btn-outline-warning" name="guardar" value="EDITAR" />
                    </div>

                </form>

            </div>
        </div>






        <footer class="footer p-3 bg-dark color-white">
            <i class="fa fa-facebook m-2"></i>
            <i class="fa fa-youtube m-2"></i>
            <i class="fa fa-instagram m-2"></i>
        </footer>


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


    </section>


</body>

</html>