<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body onload="document.getElementById('correo').value = correo;">
        <p>Para seguir con tu transaccion por favor no recargar esta pagina.</p>

        <form action="/Agendamiento/?c=valida&a=cambio" method="POST" id="Formulario">
            <input type="password" name="psw1" id="">
            <input type="password" name="psw2" id="">
            <input type="hidden" name="correo" id="correo">
            <button type="submit">Cambiar</button>
        </form>

    </body>
</html>