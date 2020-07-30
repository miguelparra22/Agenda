<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/css/fullcalendar.css">
    <script src="/Agendamiento/Assets/jquery.min.js"></script>
    <script src="/Agendamiento/Assets/moment.min.js"></script>
    <script src="/Agendamiento/Assets/js/fullcalendar.js"></script>
    <script src="/Agendamiento/Assets/js/es.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/popper.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
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
      minTime: "08:00:00",
      maxTime: "18:00:00",
      allDaySlot: false,
        header:{
            left:'today',
            center:'title',
            
            right:'agendaWeek, agendaDay'

        },customButtons:{
            mibutton:{
                text:'boton 1',
                click: function(){
                    alert('a')
                }
            }
        },
        Click:function(){
            $('#agendaModal').modal();
        },
       eventSources:[{
        events:[
            {
                id:'1',
                title:'evento 1',
                descripcion:'esto es un evento',
                start:'2020-07-23T12:30:00',
                allDay:false,
                color:'RED',
                textColor:'black'
            }
        ]
       }],
       eventClick:function(calEvent,jsEvent,view){
           $('#tituloEvent').text(calEvent.title); 
           $('#descripcionEvent').text(calEvent.descripcion); 
           $('#agendaModal').modal();
       },select: function(start, end, jsEvent) {  
                endtime = $.fullCalendar.moment(end).format('h:mm');
                starttime = $.fullCalendar.moment(start).format('dddd, MMMM Do YYYY, h:mm');
                var mywhen = starttime + ' - ' + endtime;
                start = moment(start).format();
                end = moment(end).format();
                console.log(start,end)
                $('#agendaModal').modal();
           },
    });
   
});
</script>
<!-- Modal -->
<div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloEvent">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="descripcionEvent"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>