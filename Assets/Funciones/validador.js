function validaCorreoExitente(elemento) {
    var boolean = 'empieza';
    $.ajax({
        type: "POST",
        url: "/Agendamiento/?c=valida&a=existeCorreo",
        data: {
            correo: elemento
        },
        async: false,
        success: function (response) {
            boolean = response;
        },
        error: function (err) {
            console.error('Se presento un error ->' + err);
        }
    });
    return boolean;
}
function validarCorreo(correo) {
    if (correo.indexOf('@', 0) == -1 || correo.indexOf('.', 0) == -1) {
        return false;
    } else {
        return true;
    }
}

function traerValor() {
    const correo = $('#correo').val();
    const valida = validaCorreoExitente(correo);
    console.log(new Boolean(valida) ==new Boolean(valida))
   
    //console.log(myBool)
    if (valida == true) {
        return true;
    } else {
        return false;
    }
}