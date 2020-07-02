<?php

require_once "autoload.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="/Agendamiento/Assets/Imagenes/Icono.png" alt="D'JANE" width="40" height="40">
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/">  Incio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Mis datos</a>
                </li>
                <li class="nav-item">
                    <form action="?c=Servicio&a=lista" method="POST">
                    <input class="nav-link" type="submit" name="listar" value="LISTAR">
                    </form>
                   
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" title="Cerrar sesión"><i class="fa fa-close"></i></button>
            </form>
        </div>
    </nav>

    <h1>Bienvenido Administrador</h1>
     

     <div>
     <form action="?c=Servicio&a=lista" method="POST">
    <input class="btn-info" type="submit" name="listar" value="LISTAR">
</form>
     </div>



    </section>
    </div>
</body>

</html>