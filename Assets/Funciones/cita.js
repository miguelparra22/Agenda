$(window).on('load', function () {
    $.ajax({
        type: "POST",
        url: "/Agendamiento/?c=cita&a=traerServicios",
        data: {
        },
        async: false,
        success: function (response) {
            var objData = eval(response);
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
function buscarServicios() {
    var costo = 0;
    var tiempo = 0;
    $('#contenedor').empty();
    var html = '';
    var valores = $('#servicios').val();
    if (valores !== null && valores !== 'null') {
        var enviar = "";
        for (var i = 0; i < valores.length; i++) {
            if (i == (valores.length - 1)) {
                enviar += "'" + valores[i] + "'";
            } else {
                enviar += "'" + valores[i] + "',";
            }
        }

        $.ajax({
            type: "POST",
            url: "/Agendamiento/?c=cita&a=inFoServicios",
            data: {
                valor: enviar
            },
            async: false,
            success: function (response) {
                var contar = 1;

                var objData = eval(response);
                for (var item in objData) {
                    costo += parseInt(objData[item]["Precio_Servicio"]);
                    tiempo += parseInt(objData[item]["TIEMPO_LIMITE"]);
                    html += '<div class="col-md-12"> <h5 id="' + contar + '" class="accordion " >' + objData[item]['NombreServicio'] + '</h5></div>';
                    html += '<div class="panel" id="panel' + contar + '">';
                    html += ' <table class="table ">';
                    html += '    <tr class="titulo_tablas">';
                    html += '       <th>Empleado</th>';
                    html += '       <th>Duración (Minutos)</th>';
                    html += '       <th>Costo (Pesos $)</th>';
                    html += '    </tr> ';
                    html += '    <tr class="titulo_tablas">';
                    html += '       <td>' + traerEmpleadoCita(objData[item]['ID_SERVICIO']) + '</td>';
                    html += '       <td>' + objData[item]["TIEMPO_LIMITE"] + '</td>';
                    html += '       <td>' + objData[item]["Precio_Servicio"] + '</td>';
                    html += '    </tr> ';
                    html += '    </table> ';
                    html += '    </div> ';
                    contar++;
                }

                $('#contenedor').html(html);
                acordion();
            },
            error: function (err) {
                console.error(err);
            }
        });
    } else {
        $('#contenedor').empty();
    }
    $('#costoTotal').val(formatMiles(costo));
    $('#tiempoTotal').val(tiempo);
}
function acordion() {
    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var idPanel = this.id;
            var panel = document.getElementById("panel" + idPanel);
            if (panel.style.display === "block") {
                panel.style.display = "none";
                panel.classList.toggle("panel");
            } else {
                panel.style.display = "block";
                panel.classList.remove("panel");
            }
        });
    }
}

function traerEmpleadoCita(id) {
    var html = '';
    $.ajax({
        type: "POST",
        url: "/Agendamiento/?c=cita&a=empleados",
        data: {
            servicio: id
        },
        async: false,
        success: function (response) {
            var objData = eval(response);
            html += '<select class="form-control">';
            for (var item in objData) {
                html += '<option value="' + objData[item]['ID_EMPLEADO'] + '">' + objData[item]['NombreEmpleado'] + '</option>';
            }
            html += '</select>';
        },
        error: function (err) {
            console.error('Se presento un error ->' + err);
        }
    });
    return html;
}
function formatMiles(costo) {

    var num = costo.toString().replace(/\./g, '');
    if (!isNaN(num)) {
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/, '');

    } else {
        alert('Solo se permiten numeros');
        num = num.replace(/[^\d\.]*/g, '');
    }
    return  num;
}