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
    </head>
    <body>
        <div class="container">
            <div id="calendario">
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#calendario').fullCalendar({
                    defaultView: 'agendaWeek',
                    selectable: true,
                    minTime: "<?php print_r($_SESSION['entrada']) ?>",
                    maxTime: "<?php print_r($_SESSION['salida']) ?>",
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
                        $('#tituloEvent').text(calEvent.title);
                        $('#descripcionEvent').text(calEvent.descripcion);
                        $('#agendaModal').modal();
                    }, select: function (start, end, jsEvent) {
                        endtime = $.fullCalendar.moment(end).format('h:mm');
                        starttime = $.fullCalendar.moment(start).format('dddd, MMMM Do YYYY, h:mm');
                        var mywhen = starttime + ' - ' + endtime;
                        start = moment(start).format();
                        end = moment(end).format();
                        console.log(start, end)
                        $('#agendaModal').modal();
                    },
                });
            });
            function getlength(number) {
                return number.toString().length;
            }
        </script>
        <!-- Modal -->
        <div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloEvent">Servicios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <select multiple  class="form-control" name="" id="servicios">

                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="/Agendamiento/Assets/Funciones/cita.js"></script>
    </body>
</html>