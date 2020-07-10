<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <title>D'JANE</title>
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

    <nav class="nav navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/Agendamiento/Assets/Imagenes/djlogo.png" alt="D'JANE" width="100" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link navl" href="Vistas/Cliente/Agregarcliente.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a href="/Agendamiento/Vistas/Home/Login.php" class="btn btn-outline-primary">Iniciar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="main-header ">
        <div class="background-overlay text-white p-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center justify-content-center align-self-center">

                    </div>
                    <div class="col-md-6">
                        <div class="formulario">
                            <div class="sbForm">

                                <h4 class="text-center">Ingrese informacion</h4>
                                <p class="text-center">
                                    Ingrese los siguientes datos para iniciar con su registro.
                                </p>
                                <form>
                                    <div class="form-group">
                                        <div>
                                            <label>Nombre</label>
                                        </div>
                                        <input type="text" name="" id="" class="form-control" placeholder="Ingrese su nombre completo">
                                        <div>
                                            <label>Correo Electronico</label>
                                        </div>
                                        <input type="email" name="" id="" class="form-control" placeholder="Ingrese su correo Electronico">

                                        <div>
                                            <label>Telefono</label>
                                        </div>
                                        <input type="text" name="" id="" class="form-control" placeholder="Ingrese su número de telefono">

                                        <div class="btn">
                                            <button>Ingresar</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>




    <div class="container">
        <div class="row">
            <div id="servicio" class="col-md-12 text-center p-5">
                <h2>Nuestros Servicios</h2>
                <p>Los mejores servicios están en DJANE</p>

            </div>
        </div>
    </div>


    <div class="container-fluid bg-light">

    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <!------------------------Primer sección del carrosel--------------------------->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/Agendamiento/Assets/Imagenes/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo del servicio</h5>
                                    <p class="card-text">Descripcion del servicio</p>
                                    <p class="card-text">Precio del servicio</p>
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
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
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
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
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------Segunda sección del carrosel--------------------------->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/Agendamiento/Assets/Imagenes/Barber.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo del servicio</h5>
                                    <p class="card-text">Descripcion del servicio</p>
                                    <p class="card-text">Precio del servicio</p>
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
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
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
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
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!------------------------Tercera sección del carrosel--------------------------->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/Agendamiento/Assets/Imagenes/Manicure.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo del servicio</h5>
                                    <p class="card-text">Descripcion del servicio</p>
                                    <p class="card-text">Precio del servicio</p>
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/Agendamiento/Assets/Imagenes/Manicure.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo del servicio</h5>
                                    <p class="card-text">Descripcion del servicio</p>
                                    <p class="card-text">Precio del servicio</p>
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="/Agendamiento/Assets/Imagenes/Manicure.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo del servicio</h5>
                                    <p class="card-text">Descripcion del servicio</p>
                                    <p class="card-text">Precio del servicio</p>
                                    <a href="#" class="text-info"><span>Reservar </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev  " href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only text-black">Next</span>
        </a>


    </div>


    <hr>


    <div class="container-fluid bg-primary">
        <div class="col-md-12 p-5 text-center">



            <div class="contenedortexto">
                <ul class="ul">
                    <li>
                        <p class="p">Siguenos en redes</p>
                    </li>
                    <li>
                        <p class="p">Productos de Calidad</p>
                    </li>
                    <li>
                        <p class="p">Registrate en D'Jane</p>
                    </li>
                </ul>
            </div>

            <button class="btnredes" onclick="openNav()">Nuestras redes sociales</button>
        </div>

    </div>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div class="text-center">
                <img src="/Agendamiento/Assets/Imagenes/djlogodorado.png" alt="D'JANE" width="100" height="40">
            </div>

            <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fa fa-youtube"></i> Youtube</a>
            <a href="#"><i class="fa fa-whatsapp"></i> Whatsapp</a>
        </div>
    </div>



    <section class="p-5">

    </section>



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
        <i class="fa fa-facebook p-2"></i>
        <i class="fa fa-instagram p-2"></i>
        <i class="fa fa-twitter p-2"></i>
    </footer>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


</body>
<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }


    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</html>