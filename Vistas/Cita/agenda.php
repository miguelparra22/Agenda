<?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
            $Controller = "Empleado";
            $Funcion = "admin";
            }else if($rol == 2){
                $Controller = "Empleado";
            $Funcion = "home";
            }else if($rol == 0){
            $Controller = "cliente";
            $Funcion = "home";
            }
        
        ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamiento</title>
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
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/sweetalert/dist/sweetalert2.css">
    <script src="/Agendamiento/Assets/sweetalert/dist/sweetalert2.js"></script>


    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>

<body>
<?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
                include_once "Vistas/Home/MenuAdmin.php";
            }else if($rol == 2){
                include_once "Vistas/Home/MenuEmpleado.php";
            }else if($rol == 0){
              include_once "Vistas/Home/MenuCliente.php";
          }
        
        ?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div>
                        <h1 class="h3 mb-0 text-gray-800 text-center">Agende su cita</h1>

                    </div>


                    <div class="container-fluid">

                        <!-- Page Heading -->

                        <p class="mb-4">En el siguiente calendario podrás agendar tu cita.</a></p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Elija una fecha</h6>
                            </div>
                            <div>
                                <div class="p-5">
                                    <div>
                                        <div>
                                            <div id="calendario">
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                    $(document).ready(function() {
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
                                            },
                                            customButtons: {
                                                mibutton: {
                                                    text: 'boton 1',
                                                    click: function() {
                                                        alert('a')
                                                    }
                                                }
                                            },
                                            Click: function() {
                                                $('#agendaModal').modal();
                                            },
                                            eventSources: [{
                                                events: [<?php print_r($array) ?>]
                                            }],
                                            eventClick: function(calEvent, jsEvent, view) {
                                                Swal.fire({
                                                    title: calEvent.title,
                                                    text: calEvent.start._i.replace('T',
                                                            ' ') + ' - ' + calEvent.end._i
                                                        .replace('T', ' '),

                                                    confirmButtonText: 'Cerrar'
                                                })
                                            }
                                            <?php if ($lugar == 1): ?>,
                                            select: function(start, end, jsEvent) {
                                                endtime = $.fullCalendar.moment(end).format('h:mm');
                                                starttime = $.fullCalendar.moment(start).format(
                                                    'dddd, MMMM Do YYYY, h:mm');
                                                var mywhen = starttime + ' - ' + endtime;
                                                start = moment(start).format();
                                                end = moment(end).format();
                                                $('#inicioFecha').val(start);
                                                $('#fechamostrar').val(start.replace("T", " "));
                                                $('#agendaModal').modal();
                                            }
                                            <?php endif; ?>
                                        })
                                    });

                                    function getlength(number) {
                                        return number.toString().length;
                                    }
                                    </script>
                                </div>

                            </div>
                            
                            

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea salir?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Si desea salir de D'JANE seleccione "Salir" para cerrar sesión.
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button"
                                        data-dismiss="modal">Cancelar</button>
                                    <a class="btn btn-primary" href="?c=Valida&a=cerrar">Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="agendaModal" tabindex="-1" role="dialog"
                        aria-labelledby="agendaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tituloEvent">Agenda tu Cita </h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <select multiple class="form-control" name="" id="servicios"
                                        onchange="buscarServicios()">

                                    </select>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div id="contenedor">

                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <div><label>Descripción</label></div>
                                        <textarea class="form-control" id="descripcion"></textarea>
                                    </div>
                                    <div style="position: absolute; right: 0;" class="col-md-5">
                                        <div><label>Fecha y Hora de Cita</label></div>
                                        <input class="form-control" id="fechamostrar" name="fechamostrar" readonly
                                            disabled>
                                    </div>
                                    <div class="col-md-5">
                                        <div><label>Tiempo Total (Minutos)</label></div>
                                        <input class="form-control" id="tiempoTotal" name="tiempoTotal" readonly
                                            disabled>
                                        <div><label>Costos Totales (Pesos $)</label></div>
                                        <input class="form-control" id="costoTotal" name="costoTotal" readonly disabled>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" id="inicioFecha">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" id="guardarCita" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </div>



                        
                        <script src="/Agendamiento/Assets/Funciones/cita.js"></script>
</body>
<script src="/Agendamiento/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/Agendamiento/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/Agendamiento/Assets/js/sb-admin-2.min.js"></script>

</html>