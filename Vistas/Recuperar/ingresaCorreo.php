<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="Assets/Diseño/estilos.css">
  <link rel="stylesheet" href="Assets/Diseño/normalize.css">
  <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>DJANE</title>
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
          <a class="nav-link navl" href="/Agendamiento/?c=cliente&a=llamar">Registrarse</a>
        </li>
        <li class="nav-item">
          <a href="/Agendamiento/Vistas/Home/Login.php" class="btn btn-outline-primary">Iniciar sesión</a>
        </li>
      </ul>
    </div>
  </nav>

  <section>
    

    <div class="box">
      <form action="/Agendamiento/?c=valida&a=recuperaclave" method="POST">



        <h3>Recuperar tu contraseña</h3>
        <div>
          <input name="correo" type="text" required>
          <label>Ingresar correo electronico</label>
        </div>

        <button type="submit" class="btn btn-block btn-primary">Enviar codigo</button>




      </form>
    </div>
    

  </section>

 
</body>
<script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
<script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</html>