<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <title>Iniciar Sesion</title>
</head>
<body>
    <section>
         

    <section class="container-fluid contendorlogin" style="border: 1px solid black;">

<div class="col-md-4 col-sm-4 col-xs-12 m-auto ">

    <div class="caja-m">
        <div class="text-center p-2">
            <img src="/Agendamiento/Assets/Imagenes/DjBlanco.png" alt="D'JANE" width="100" height="40">
        </div>
        <form method="POST" action="/Agendamiento/?c=valida&a=iniciar"> 
            <div>
                <input type="text" name="email" required>
                <label>Correo Electronico</label>
            </div>


            <div>

                <input name="pws" type="password" id="exampleInputPassword1" required>
                <label>Contraseña</label>

            </div>

            <div class="text-center p-3">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        </form>
    </div>

</div>


</section>
        

    <footer class="footer2 p-3 text-center text-white">
       
        <p class="p-1 text-center text-white">
            D'Jane 2020
        </p>
        
        <i class="fa fa-facebook p-2"></i>
        <i class="fa fa-instagram p-2"></i>
        <i class="fa fa-twitter p-2"></i>
    </footer>
</body>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</html>