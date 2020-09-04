<?php
require_once "autoload.php";
$Empleado;
$this->Empleado = new EmpleadoModel();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/ssets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Equipo</title>
</head>

<body>

    <!------------Animación---------------------->
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

    <!----------------Menu-------------------------->

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <section id="main">

        <!------navBar----------------------------------------->
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

                    <li class="nav-item">
                        <a href="/Agendamiento/Vistas/Home/home.php" class="btn btn-outline-danger"><i
                                class="fa fa-close"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <style>
        .cont1 {
            width: 90%;
            height: 500px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 100px;
        }

        .contbtn1 {
            width: 90%;
        }
        </style>




        <form action="" id="form1" methoD="POST">

            <div class="container cont1">

                <div class="p-3">
                    <h2>Equipo D'JANE</h2>
                    <p>Busque por medio del filtro un usuario en especifico y click en el nombre si desea más:</p>
                </div>

                <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
                <br>
                <ul class="list-group" id="myList">
                    <?php
 $contador = 0;
 foreach($resultado as $busqueda => $value){ 
 $contador ++;
?>
                    <li class="list-group-item">

                        <div class="row">

                        <?php print_r($value->Id_Empleado) ?>
                            <div class="col-md-11 col-sm-9">
                                <?php print_r($value->NombreEmpleado) ?>

                             

                                <input type="text" name="id_empleado" value="">
                            </div>
                            <div class="col-md-1 col-sm-3">
                                
                                <input type="button" class="btn btn-block btn-light" name="Editar" data-toggle="tooltip"
                                    data-placement="top" title="Ver más sobre este usuario."
                                    onclick="$('#Form<?php print_r($contador)?>').attr('action','?c=Empleado&a=consultaUnica');$('#Form<?php print_r($contador)?>').submit();"
                                    value="...">

                            </div>

                        </div>

                    </li>


                    <?php }?>
                </ul>
            </div>





            <div class="container">

                <a href="?c=Empleado&a=LlamarAgregar" class="btn btn-block btn-outline-info"><i
                        class="fa fa-user-plus"></i>
                    Agregar un nuevo
                    empleado</a>

            </div>

        </form>


        <script>
        $('#example').tooltip(options);

        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myList li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        </script>

    </section>

    <script>
    $('.Editar').click(function() {
        $('#Form1').attr('action', '?c=Empleado&a=consultaUnica');
    });
    </script>


    <footer class="footer p-3 bg-dark color-white">
        <i class="fa fa-facebook m-2"></i>
        <i class="fa fa-youtube m-2"></i>
        <i class="fa fa-instagram m-2"></i>
    </footer>



</body>

<script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</html>