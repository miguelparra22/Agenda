<?php

session_start();

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

    <title>Editar empleado</title>
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

    <!------Contenedor menú-------->


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>

    <section id="main">

        <!-----------Menú-------------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/Agendamiento/Assets/Imagenes/djlogo.png" width="120" height="40"
                    class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#" onclick=""><i class="fa fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="citas" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-calendar"></i>
                            Mis citas</a>
                    </li>
                    <li class="nav-item">
                        <a id="team" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-users"></i>
                            Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a id="con" class="nav-link" href="#" onclick="abrirM(this.id)" href="#"><i
                                class="fa fa-wrench"></i> Configuración</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                        data-target="#exampleModal">
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

        <div class="text-center p-3">
            <h1>Actualizar datos del servicio</h1>
        </div>

        <!--------------------------------->



        <div class="container">
            <div class="form-group bg-light p-5 ">

                <form action="?c=Servicio&a=editar" method="post">
                    <div class="form-group text-primary">
                        NOMBRE SERVICIO
                        <input type="text" class="form-control" name="NOMSERVi"
                            value="<?= $resultado->getNombreServicio() ?>" />
                    </div>
                    <div class="form-group text-primary">
                        DESCRIPCION SERVICIO
                        <input class="form-control" name="DESCSERVI"
                            value="<?= $resultado->getDescripcionServicio() ?>" />
                    </div>
                    <?php if($_SESSION['ROL'] == 2){?>
                    <div class="form-group text-primary">
                        CANTIDAD SERVICIO
                        <input class="form-control" name="CANTSERVI" value="<?= $resultado->getCantidadServicio() ?>" />
                    </div>
                    <?php }else{ ?>
                    <div style="display:none" class="form-group text-primary">
                        CANTIDAD SERVICIO
                        <input class="form-control" name="CANTSERVI" value="" />
                    </div>
                    <?php }?>
                    <?php if($_SESSION['ROL'] == 1){?>
                    <div class="form-group text-primary">
                        PRECIO SERVICIO
                        <input class="form-control text-primary" name="PRECIOSERVICIO"
                            value="<?= $resultado->getPrecioServicio() ?>" />
                    </div>
                    <?php } else {?>
                    <div style="display:none" class="form-group text-primary">
                        PRECIO SERVICIO
                        <input class="form-control" name="PRECIOSERVICIO" value="" />
                    </div>
                    <?php }?>
                    <div class="form-group text-primary">
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





    </section>


</body>

</html>