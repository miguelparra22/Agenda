<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />

    <title>Inicio</title>

    <!-- Custom fonts for this template-->
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <title>DJANE</title>
</head>

<body>

<?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
                include_once "Vistas/Home/MenuAdmin.php";
            }else if($rol == 2){
                include_once "Vistas/Home/MenuEmpleado.php";
            }else if($rol == 0){
              include_once "Vistas/Home/MenuCliente.php";
          }
        
        ?>
    

    <div class="box">
      <form action="/Agendamiento/?c=valida&a=recuperaclave" method="POST">



        <h3>Cambia tu contraseña</h3>
        <div>
          <input name="correo" type="text" required>
          <label>Ingresar correo electronico</label>
        </div>

        <button type="submit" class="btn btn-block btn-primary">Enviar codigo</button>




      </form>
    </div>
    

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea salir?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Si desea salir de D'JANE seleccione "Salir" para cerrar sesión.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                    <a class="btn btn-primary" href="?c=valida&a=cerrar">Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>

 
</body>
 <!-- Bootstrap core JavaScript-->
 <script src="/Agendamiento/Assets/vendor/jquery/jquery.min.js"></script>
                    <script src="/Agendamiento/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="/Agendamiento/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="/Agendamiento/Assets/js/sb-admin-2.min.js"></script>

                    <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
                    <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
                    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
                    <script src="/Agendamiento/Assets/vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
</html>