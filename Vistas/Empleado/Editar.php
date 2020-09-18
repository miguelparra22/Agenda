<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />

    <title>Editar</title>
</head>

<body>


    <!---------Animación------------>
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

    <style>
    .cont1 {
        width: 90%;
        height: 500px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 100px;
        margin: auto;
    }

    .contbtn1 {
        width: 90%;
    }
    </style>



    <section id="main">

        <!-------------Menú------------------->
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
                        <a class="nav-link" href="?c=valida&a=iniciar" onclick=""><i class="fa fa-home"></i> Inicio</a>
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

                    <li class="nav-item">
                        <a href="/Agendamiento/Vistas/Home/home.php" class="btn btn-outline-danger"><i
                                class="fa fa-close"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <h2 class="text-center p-4">Actualizar datos del empleado</h2>

        <div class="container">
            <div class="cont1">
                <h3 class="p-3">Aquí puedes actualizar los datos de los usuarios</h3>
                  <form action="?c=Empleado&a=Editar" method="post">
                      <div class="p-3">
                        <input name="NOMBREMPLEADO" value="<?= $resultado->getNombre_Empleado() ?>" type="text" class="form-control">
                      </div>
                      <div class="p-3">
                      <input name="CORREOEMPLEADO" value="<?= $resultado->getCorreo_Empleado() ?>" type="text" class="form-control">
                      </div>
                      <div class="p-3">
                      <input name="especialidad" value="<?= $resultado->getEspecialidad_Empleado() ?>" type="text" class="form-control">
                      </div>

                      <div class="p-3">
                      <input name="ID_EMPLEADO" type="hidden" value="<?= $resultado->getId_Empleado() ?>" type="text" class="form-control">
                      </div>

                      <div class="p-3">
                      <button type="submit" class="btn btn-block btn-warning">Editar</button>
                      </div>
                  </form>
            </div>

        </div>


        

    </section>

    <footer class="footer p-3 bg-dark color-white">
        <i class="fa fa-facebook m-2"></i>
        <i class="fa fa-youtube m-2"></i>
        <i class="fa fa-instagram m-2"></i>
    </footer>









    <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
    <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
    <script src="/Agendamiento/Assets/Funciones/validaciones.js"></script>
</body>

</html>