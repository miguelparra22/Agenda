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
    <script>
        function load() {
            var elemento = document.getElementById("waitDiv");


            setTimeout(function() {
                elemento.style.display = "none";
            }, 1000);
        }
        window.onload = load;
    </script>


    <section class="container-fluid contendorlogin">

        <div class="col-md-4 col-sm-10 col-xs-12 m-auto ">

            <div class="caja-m">
                <div class="text-center p-2">
                    <img src="/Agendamiento/Assets/Imagenes/djlogo.png" alt="D'JANE" width="100" height="40">
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
                        <!--div>
                        <a href="">Registrarse</a>
                        </div-->
                        
                        <a href="/Agendamiento/?c=valida&a=correo">¿Olvidaste tu contraseña?</a>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"> Ingresar</button>
                </form>
            </div>

        </div>


    </section>



</body>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</html>