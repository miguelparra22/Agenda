
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
    <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Equipo</title>
</head>

<body>

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/Agendamiento/Assets/Imagenes/djlogo.png" width="120" height="40" class="d-inline-block align-top" alt="" loading="lazy">
                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#" onclick=""><i class="fa fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="citas" class="nav-link" href="#" onclick="abrirM(this.id)" ><i class="fa fa-calendar"></i> Mis citas</a>
                    </li>
                    <li class="nav-item">
                        <a id="team" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-users"></i> Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a id="con" class="nav-link" href="#" onclick="abrirM(this.id)" href="#"><i class="fa fa-wrench"></i> Configuración</a>
                    </li>
                    <!--li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li-->
                </ul>
            </div>
   
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="/Agendamiento/Vistas/Home/home.php" class="btn btn-outline-danger"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
            </div>
        </nav>


        
       <div class="container">
       <h2 class="text-center">EQUIPO D'JANE</h2>
       <div class="table-responsive">
        <table class="table  table-bordered table-striped">
            <thead class="table-primary">
                <th>ID</th>
                <th>Nombre Empleado</th>
                <th>Correo Empleado</th>
                <th>Especialidad</th>
            </thead>
            <tbody>
                <?php  foreach($resultado as $busqueda => $value){ ?>
                <tr>
                    <td><a href="#"><?php print_r($value->ID_EMPLEADO) ?></a></td>
                    <td><?php print_r($value->NombreEmpleado) ?></td>
                    <td><?php print_r($value->CorreoEmpleado) ?></td>
                    <td><?php print_r($value->ESPECIALIDAD) ?></td>
                </tr>

                <?php }?>
            </tbody>

        </table>
        </div>
       </div>

       
        
    </section>
    

    <footer class="footer p-3 bg-dark color-white">
            <i class="fa fa-facebook m-2"></i>
            <i class="fa fa-youtube m-2"></i>
            <i class="fa fa-instagram m-2"></i>
        </footer>
        
   

</body>

<script src="/Agendamiento/Assets/Funciones/funciones.js"></script>

</html>