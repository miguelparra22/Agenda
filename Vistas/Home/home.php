<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--------Bootstrap------------>
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <!----------Estilos, normalize , iconos------------>
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <title>D'JANE</title>
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
                    <a class="nav-link navl" href="#servicio">Servicio
                        <!--span class="sr-only">(current)</span--></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navl" href="Vistas/Producto/index_producto.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navl" onclick="registro()" href="#">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a onclick="login()" href="/Agendamiento/Vistas/Home/Login.php" class="btn btn-outline-primary">Iniciar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <!----Encabezado video----------->
    <header>
        <section class="main-header">
            <video autoplay muted loop id="myVideo">
                <source src="/Agendamiento/Assets/Imagenes/video4.mp4" type="video/mp4">
            </video>

            <div class="cont">
                <div class="row">

                    <div class="image-responsive">
                        <img src="/Agendamiento/Assets/Imagenes/DjBlanco.png" alt="">
                        <h1>Bienvenidos</h1>
                        <p>Ahora agenda una cita de manera virtual con nosotros.</p>
                        <button class="btn btn-light" onclick="login()"> Agendar</button>
                        <button class="btn btn-outline-light"> Ver Servicios</button>
                    </div>

                </div>
            </div>
        </section>

    </header>

    <hr>

    <!----quienes somos--------->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3">
                        <h2>¿Quienés somos?</h2>
                    </div>
                    <div class="p-3">
                        Somos una empresa con más de 15 años de antiguedad, somos los mejores en asesoramiento de
                        imagen,
                        contamos con el mejor equipo de profesionales, dispuestos a atender las necesidades de nuestros
                        clientes.
                        <br>
                        <b>Somos D'Jane.</b>


                    </div>
                    <div>
                        <button class="btn btn-block btn-primary" onclick="openNav()"><i class="fa fa-instagram"></i>
                            Nuestras redes sociales</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9684777002117!2d-74.16189098474926!3d4.599669243804881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ef01bbf1483%3A0xedcd1a5dcec40548!2sD&#39;%20Jane%20Sal%C3%B3n%20de%20Belleza!5e0!3m2!1ses-419!2sco!4v1598379933082!5m2!1ses-419!2sco"
                            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>



    <!-----Servicios-------------->

    <section>
        <div class="container">
            <div class="row">
                <div id="servicio" class="col-md-12 text-center p-5">
                    <h2>Nuestros Servicios</h2>
                    <p>En D'JANE encuentras variedad de servicios, que se ajustan a tus necesidades.</p>

                </div>
            </div>
        </div>

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a onclick="llamarlogin()" class="text-info"><span></span> Reservar </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a onclick="llamarlogin()" class="text-info"><span>Reservar </span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a onclick="llamarlogin()" class="text-info"><span>Reservar </span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/Barber.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a onclick="llamarlogin()" class="text-info"><span>Reservar </span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/Barber.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a onclick="llamarlogin()" class="text-info"><span>Reservar </span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/Barber.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a onclick="llamarlogin()" class="text-info"><span>Reservar </span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/Manicure.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a href="#" onclick="llamarlogin()" class="text-info"><span>Reservar </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/Manicure.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a href="#" onclick="llamarlogin()" class="text-info"><span>Reservar </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/Agendamiento/Assets/Imagenes/Manicure.jpg" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del servicio</h5>
                                        <p class="card-text">Descripcion del servicio</p>
                                        <p class="card-text">Precio del servicio</p>
                                        <a href="#" class="text-info" onclick="llamarlogin()"><span>Reservar </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>



    </section>
    <hr>

    <!-----Nos pueden encontrar----->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bg-dark text-center text-white">
                    <div class="p-3">
                        <h2>¿Dónde nos pueden encontrar?</h2>
                    </div>
                    <div class="container p-3">
                        Nos encontramos ubicados en el barrio de villa del rio, en la localidad septima de bosa.

                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9684777002117!2d-74.16189098474926!3d4.599669243804881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ef01bbf1483%3A0xedcd1a5dcec40548!2sD&#39;%20Jane%20Sal%C3%B3n%20de%20Belleza!5e0!3m2!1ses-419!2sco!4v1598379933082!5m2!1ses-419!2sco"
                                width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        </div>
    </section>
    <hr>

    <!----quienes somos--------->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3">
                        <h2>Nuestros productos</h2>
                    </div>
                    <div class="p-3">
                        También manejamos un amplio catálogo de productos.
                        <br>
                        Pregunta por ellos.
                        <div>
                        <button class="btn btn-success"><i class="fa fa-whatsapp"></i> Contactanos</button>
                        </div>
                      
                    </div>

                </div>
                <div class="col-md-6 bg-primary">
                    <div class="card m-auto" style="width: 18rem;">
                        <img src="/Agendamiento/Assets/Imagenes/salon2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <hr>
    <!-----------Foooter-------------->
    <footer class="footer1 p-3 text-center text-white">
        <div class="text-center">
            <img src="/Agendamiento/Assets/Imagenes/djlogodorado.png" alt="D'JANE" width="100" height="40">
        </div>
        <p class="p-2 text-center text-white">
            D'Jane 2020
        </p>
        <p class="p-2 text-center text-white">
            Siguenos en nuestras redes sociales
        </p>
        <i class="fa fa-facebook p-2 iconr" onclick="facebook()"></i>
        <i class="fa fa-instagram p-2 iconr" onclick="instagram()"></i>
        <i class="fa fa-youtube-play p-2 iconr" onclick="youtube()"></i>
    </footer>

    <!----------Boton top------------------------>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


    <!-----------------------Contenedor redes sociales------------------------------------->
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="cerrarNav()">&times;</a>
        <div class="overlay-content">
            <div class="text-center">
                <img src="/Agendamiento/Assets/Imagenes/djlogodorado.png" alt="D'JANE" width="100" height="40">
            </div>

            <a href="#" onclick="instagram()"><i class="fa fa-instagram"></i> Instagram</a>
            <a href="#" onclick="facebook()"> <i class="fa fa-facebook"></i> Facebook</a>
            <!--a href="#"><i class="fa fa-twitter"></i> Twitter</a-->
            <a href="#" onclick="youtube()"><i class="fa fa-youtube"></i> Youtube</a>
        </div>
    </div>

</body>

<!---script----->
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
<script src="/Agendamiento/Assets/Funciones/funciones.js"></script>

</html>