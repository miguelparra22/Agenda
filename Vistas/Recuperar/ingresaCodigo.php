


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Agendamiento/?c=valida&a=codigo" method="post">
    <p>Escribe el codigo que enviamos a tu correo</p>
    <input autocomplete="off" name="codigo" type="text">
    
   <input type="hidden" name="numero" value="<?php print ($_SESSION['idContra']);?>">
   <input type="hidden" name="correo" value="<?php print ($_SESSION['correo']);?>">
   <input type="submit" value="Validar" >
    </form>
</body>
</html>