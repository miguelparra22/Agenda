<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/navidad.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <!--------Bootstrap------------>
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <title>Servicios</title>
</head>

<body>
    <!------- Animación inicial--------->
    <div id="waitDiv" class="loadercont">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="imageloader">
                        <img src="/Agendamiento/Assets/Imagenes/LogoJaneL2.png" alt="D'JANE" width="400" height="200">


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

                    <div class="tpl-snow">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
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

    <nav class="nav navbar navbar-expand-lg navbar-danger bg-danger">
        <a class="navbar-brand" href="#">
            <img src="/Agendamiento/Assets/Imagenes/LogoDjaneNav.png" alt="D'JANE" width="110" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link navl text-white" href="#" onclick="land()">Inicio
                        <!--span class="sr-only">(current)</span-->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navl text-white" onclick="registro()" href="#">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a onclick="login()" href="/Agendamiento/?c=valida&a=Login" class="btn btn-success">Iniciar
                        sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h3 class="text-center"> Servicios</h3>
        <label>
        
        En D'JANE manejamos una amplia gama de servicios, por eso los divivimos en categorías para
        que puedas ver de una manera más ordenanda nuestros servicios. 
            
        </label>

        <div class="row">

            <div class="col-md-4">

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/Agendamiento/Assets/Imagenes/cejas.jpg" class="card-img-top" alt="..."
                                style="width:300px;height:300px;">

                        </div>
                        <div class="flip-card-back">
                            <img src="/Agendamiento/Assets/Imagenes/LogoDjaneNav.png" alt="logo" height="80px"
                                width="150px">
                            <div class="container">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cejas">
                                    Ver todos los servicios
                                </button>


                            </div>
                        </div>
                    </div>
                </div>




            </div>

            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/Agendamiento/Assets/Imagenes/depilacion.jpg" class="card-img-top" alt="..."
                                style="width:300px;height:300px;">

                        </div>
                        <div class="flip-card-back">
                            <img src="/Agendamiento/Assets/Imagenes/LogoDjaneNav.png" alt="logo" height="80px"
                                width="150px">
                            <div class="container">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#depilacion">
                                    Ver todos los servicios
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/Agendamiento/Assets/Imagenes/cortes.jpg" class="card-img-top" alt="..."
                                style="width:300px;height:300px;">

                        </div>
                        <div class="flip-card-back">
                            <img src="/Agendamiento/Assets/Imagenes/LogoDjaneNav.png" alt="logo" height="80px"
                                width="150px">
                            <div class="container">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#corte">
                                    Ver todos los servicios
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <hr>
            </div>

            <div class="col-md-4">

                <div class="flip-card">

                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/Agendamiento/Assets/Imagenes/tintura.jpg" class="card-img-top" alt="..."
                                style="width:300px;height:300px;">

                        </div>
                        <div class="flip-card-back">
                            <img src="/Agendamiento/Assets/Imagenes/LogoDjaneNav.png" alt="logo" height="80px"
                                width="150px">
                            <div class="container">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#cortedama">
                                    Ver todos los servicios
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="flip-card">

                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/Agendamiento/Assets/Imagenes/uñas.jpg" class="card-img-top" alt="..."
                                style="width:300px;height:300px;">

                        </div>
                        <div class="flip-card-back">
                            <img src="/Agendamiento/Assets/Imagenes/LogoDjaneNav.png" alt="logo" height="80px"
                                width="150px">
                            <div class="container">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#uñas">
                                    Ver todos los servicios
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="flip-card">

                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/Agendamiento/Assets/Imagenes/otros.jpg" class="card-img-top" alt="..."
                                style="width:300px;height:300px;">

                        </div>
                        <div class="flip-card-back">
                            <img src="/Agendamiento/Assets/Imagenes/LogoDjaneNav.png" alt="logo" height="80px"
                                width="150px">
                                <div class="container">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#otros">
                                    Ver todos los servicios
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-8 m-auto p-5">
                <button class="btn btn-outline-success btn-block" onclick="whatsapp()">Más información <i class="fa fa-whatsapp"></i> </button>
            </div>

        </div>
    </div>

    </div>

    <!--- Modales --->


    <!-- Modal -->
    <div class="modal fade" id="cejas" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Servicios cejas y pestañas </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left"> Cejas pigmentadas con depilación.</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$20.000</span>
                                </div>

                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Pestaña punto a punto</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$30.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Pestañas pelo a pelo</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $90.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Retoque de pestañas</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $4.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Cejas pelo a pelo con retoque</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $12.000 - $8.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                    </div>








                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button-->
                    <button type="button" class="btn btn-success btn-block" onclick="login()">Solicitar una cita</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="depilacion" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Depilación </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left"> Cejas.</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$7.000</span>
                                </div>

                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Bigote</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$5.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Axilas</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $10.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Media pierna</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $14.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Bikini parcial</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $10.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Bikini completo</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $19.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Rostro completo</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $20.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Depilación completa</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $55.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                    </div>








                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button-->
                    <button type="button" class="btn btn-success btn-block" onclick="login()">Solicitar una cita</button>
                </div>
            </div>
        </div>
    </div>



    <!---->
    <div class="modal fade" id="corte" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Servicios de corte para Caballeros y niños. </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left"> Corte de caballero.</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$12.000</span>
                                </div>

                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Corte niño</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$10.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Corte barba</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $18.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Depilación cejas y nariz</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $25.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>


                    </div>








                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button-->
                    <button type="button" class="btn btn-success btn-block" onclick="login()">Solicitar una cita</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="cortedama" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Servicios de corte y peinado para damas. </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left"> Corte de dama.</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$15.000</span>
                                </div>

                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Corte niña</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$10.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Corte barba</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $18.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Cepillado cabello corto</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $14.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Cepillado cabello largo</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $10.000 - $20.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Corte y cepillado</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $20.000 - $30.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Peinados</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $13.000 o más</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Tintes</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $45.000 o más</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>








                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button-->
                    <button type="button" class="btn btn-success btn-block" onclick="login()">Solicitar una cita</button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="uñas" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Servicios para uñas. </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left"> Manicure tradicional</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$13.000</span>
                                </div>

                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Manicure semi-permanente</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$35.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Baño acrilico</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $50.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Uñas acrilicas con semi permanente</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $100.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Uñas acrilicas tradicional</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $8.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Pedicure tradicional</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $17.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Pedicure semi-permanente</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $30.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>








                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button-->
                    <button type="button" class="btn btn-success btn-block" onclick="login()">Solicitar una cita</button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="otros" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Otros Servicios . </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left"> Maquillaje</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$30.000</span>
                                </div>

                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Mascarillas</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right">$35.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Mechas</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $15.000 o más</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Repolarización </i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $60.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="text-left">Activación sanquinea, ampolleta y alta frecuencia</i>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-center m-5">...</span>
                                </div>
                                <div class="col-md-4">
                                    <span class="text-right"> $30.000</span>
                                </div>
                            </div>
                            <hr>
                        </div>

                
                    </div>








                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button-->
                    <button type="button" class="btn btn-success btn-block" onclick="login()">Solicitar una cita</button>
                </div>
            </div>
        </div>
    </div>


    <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
    <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>

</body>

</html>