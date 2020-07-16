<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inicio</title>
</head>
<body>
<!--nav class="menu">
        <a href="#first"><i class="fa fa-home" title="Inicio"></i></a>
        <a href="#second"><i class="fa fa-calendar" title="Agendar cita"></i></a>
        <a href="#third"><i class="fa fa-list-ul" title="Servicios y productos"></i></a>
        <a href="#fourth"><i class="fa fa-address-card" title="Actualizar datos"></i></a>
        <a href="#"><i class="fa fa-window-close" title="Cerrar sesión"></i></a>
    </nav-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/Agendamiento/Assets/Imagenes/Icono.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            D'JANE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Empleados</a>
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
    <style>

.card{
    width:18rem;
    transition: 0.5s;
    cursor: pointer;
}

.card:hover{
    width: 20rem;
}
 </style>



<section class="container">
    <h1 class="text-center">Bienvenido <?php print ($_SESSION['NOMBRE']);?></h1>
    <div class="row">
        <div class="col-md-12  background-overlay">

            <div class="row">
            <div class="col-md-4">
                    <div class="card m-5">
                    <img src="/Agendamiento/Assets/Imagenes/Barber.jpg" class="card-img-top" alt="...">
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                    <img src="/Agendamiento/Assets/Imagenes/Barber.jpg" class="card-img-top" alt="...">
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5" >
                    <img src="/Agendamiento/Assets/Imagenes/Barber.jpg" class="card-img-top" alt="...">
                        
                    </div>
                </div>
               
            </div>

        </div>
    </div>
</section>



 <footer class="footer p-3 bg-dark color-white">
        <i class="fa fa-facebook m-2"></i>
        <i class="fa fa-youtube m-2"></i>
         <i class="fa fa-instagram m-2"></i>
 </footer>
    </div>
    <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</body>
</html>