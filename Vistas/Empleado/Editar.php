<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>





 <form action="?c=Empleado&a=Editar" method="post">
 
 <input name="NOMBREMPLEADO" value="<?= $resultado->getNombre_Empleado() ?>" type="text">
 <input name="CORREOEMPLEADO" value="<?= $resultado->getCorreo_Empleado() ?>" type="text">
 <input name="especialidad" value="<?= $resultado->getEspecialidad_Empleado() ?>" type="text">
 <input name="ID_EMPLEADO" type="hidden" value="<?= $resultado->getId_Empleado() ?>" type="text">
 <button type="submit">Editar</button>
 </form>
    
</body>
</html>