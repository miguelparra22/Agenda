$(window).on('load',function(){

    $.ajax({
        type: "POST",
        url: "/Agendamiento/?c=cita&a=traerServicios",
        data: {
        },
        async: false,
        success: function (response) {
            var objData=eval(response);
            $('#servicios').select2({
                placeholder: 'Seleccione Servicios',
                data: objData
            });
            $('.select2').width('100%');
        },
        error: function (err) {
            console.error('Se presento un error ->' + err);
        }
    });


   

});