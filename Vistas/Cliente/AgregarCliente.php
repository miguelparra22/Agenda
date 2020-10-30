<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="/Agendamiento/Assets/sweetalert/dist/sweetalert2.css">
    <script src="/Agendamiento/Assets/sweetalert/dist/sweetalert2.js"></script>

    <title>Registro</title>
</head>

<body>

    <!------- Animación inicial--------->
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

    <section class="main-header2">
        <!-----Navegación---------->
        <nav class="nav navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <img src="/Agendamiento/Assets/Imagenes/djlogo.png" alt="D'JANE" width="100" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link navl" href="#servicio">Inicio
                            <!--span class="sr-only">(current)</span-->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navl" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navl" href="#">Servicio</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="login()" href="#" class="btn btn-outline-primary">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="box">
            <h3>Ingresa tus datos</h3>
            <form action="/Agendamiento/?c=valida&a=agregar" method="POST" onsubmit="return validarcliente()">
                <div>
                    <input id="nombre" type="text" name="usuario_nombre" required
                        onkeypress="return soloLetras(event)" />
                    <label>Nombre completo</label>
                </div>
                <div>
                    <input id="telefono" type="number" name="usuario_telefono" onkeypress="return soloNum(event)"
                        required>
                    <label>Teléfono</label>
                </div>

                <div>
                    <input id="pass" type="password" name="usuario_pwd" required>
                    <label>Contraseña</label>

                    <div id="seguridad" class="contenedor_seguridad">
                    </div>

                    <div id="msg" class="msg" ></div>
                </div>
                <div>
                    <input id="correo" type="text" name="usuario_correo" required>
                    <label>Correo</label>
                </div>

                <input type="submit" name="guardar" value="GUARDAR" class="btn btn-outline-pimary">


            </form>
        </div>

    </section>



</body>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
<script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
<script src="/Agendamiento/Assets/Funciones/validaciones.js"></script>

</html>