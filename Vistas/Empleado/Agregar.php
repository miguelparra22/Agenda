<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <title>Agregar D'Jane</title>
</head>

<body>

    <nav class="nav navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/Agendamiento/Assets/Imagenes/djlogo.png" alt="D'JANE" width="100" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link navl" href="#servicio">Servicio
                        <!--span class="sr-only">(current)</span--></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navl" href="Vistas/Producto/index_producto.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navl" href="Vistas/Cliente/Agregarcliente.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a href="/Agendamiento/Vistas/Home/Login.php" class="btn btn-outline-primary">Iniciar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="box">

            <form action="../../?c=empleado&a=agregar" method="POST">

                <div>
                    <input type="text" name="nombre" required>
                    <label>Nombre del empleado</label>
                </div>
                <div>
                    <input type="text" name="correo" required>
                    <label>Correo del empleado</label>
                </div>
                <div>
                    <input type="password" name="pass" required>
                    <label>Contraseña del empleado</label>
                </div>

                <div>
                    <select name="especialidad" id="">
                        <option selected disabled>Especialidad del empleado</option>
                        <option value="1">Estilista</option>
                    </select>

                </div>



                








                <input type="hidden" name="estado" value="1">
                <input type="hidden" name="rol" value="2">


                <input type="submit" value="guardar" name="guardar">


            </form>

        </div>
       
    </section>

   


</body>

<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</html>