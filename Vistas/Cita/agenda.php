<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/Agendamiento/Assets/css/fullcalendar.css">
        <link rel="stylesheet" href="/Agendamiento/Assets/css/select2.min.css">
        <script src="/Agendamiento/Assets/jquery.min.js"></script>
        <script src="/Agendamiento/Assets/moment.min.js"></script>
        <script src="/Agendamiento/Assets/js/fullcalendar.js"></script>
        <script src="/Agendamiento/Assets/js/es.js"></script>
        <script src="/Agendamiento/Assets/Bootstrap/js/popper.min.js"></script>
        <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
        <script src="/Agendamiento/Assets/js/select2.min.js"></script>
        <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
        <link rel="stylesheet" href="/Agendamiento/Assets/css/acordion.css" >
        <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
        <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <section id="main">

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
                            <a class="nav-link" href="#"><i class="fa fa-home"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a id="citas_cliente" class="nav-link" onclick="abrirM(this.id)" href="#"><i class="fa fa-calendar"></i> Citas</a>
                        </li>
                        <li class="nav-item">
                            <a  id="team_cliente" class="nav-link" onclick="abrirM(this.id)" href="#"><i class="fa fa-users"></i> Equipo D'Jane</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="abrirM(this.id)" href="#"><i class="fa fa-wrench"></i> Configuración</a>
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




            <div class="p-5">
                <div class="container">
                    <div id="calendario">
                    </div>
                </div>
            </div>




            <script>
                $(document).ready(function () {
                    $('#calendario').fullCalendar({
                        defaultView: 'agendaWeek',
                        selectable: true,
                        minTime: "<?php print_r($entrada) ?>",
                        maxTime: "<?php print_r($salida) ?>",
                        columnFormat: "dddd D/M",
                        timeFormat: 'hh:mm ',
                        allDaySlot: false,
                        firstDay: (new Date().getDay()),
                        header: {
                            left: 'today',
                            center: 'title',
                            right: 'agendaWeek, agendaDay'
                        }, customButtons: {
                            mibutton: {
                                text: 'boton 1',
                                click: function () {
                                    alert('a')
                                }
                            }
                        },
                        Click: function () {
                            $('#agendaModal').modal();
                        },
                        eventSources: [{
                                events: [
<?php print_r($array) ?>
                                ]
                            }],
                        eventClick: function (calEvent, jsEvent, view) {
                         alert('hola');
                        }, select: function (start, end, jsEvent) {
                            endtime = $.fullCalendar.moment(end).format('h:mm');
                            starttime = $.fullCalendar.moment(start).format('dddd, MMMM Do YYYY, h:mm');
                            var mywhen = starttime + ' - ' + endtime;
                            start = moment(start).format();
                            end = moment(end).format();
                            $('#inicioFecha').val(start);
                            $('#agendaModal').modal();
                        },
                    });
                });
                function getlength(number) {
                    return number.toString().length;
                }
            </script>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg"id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tituloEvent">Agenda tu Cita </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <select multiple  class="form-control" name="" id="servicios" onchange="buscarServicios()">

                            </select>
                            <div class="col-md-12">  <hr> </div>
                            <div id="contenedor">

                            </div>
                            <div class="col-md-12"><hr></div>
                            <div class="col-md-12">
                                <div><label>Descripción</label></div>
                                <textarea class="form-control" id="descripcion"></textarea>
                            </div>
                            <div class="col-md-4">
                                <div><label>Tiempo Total (Minutos)</label></div>
                                <input class="form-control"id="tiempoTotal"  name="tiempoTotal" readonly disabled>
                                <div><label>Costos Totales (Pesos $)</label></div>
                                <input class="form-control"id="costoTotal"  name="costoTotal" readonly disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="inicioFecha">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" id="guardarCita" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>


    <footer class="footer1 p-3 text-center text-white">
        <div class="text-center">
            <img src="/Agendamiento/Assets/Imagenes/djlogodorado.png" alt="D'JANE" width="100" height="40">
        </div>


    </footer>
        <script src="/Agendamiento/Assets/Funciones/cita.js"></script>
    </body>
</html>