<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Agendamiento/Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="/Agendamiento/Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <title>Editar</title>
</head>

<body>


    <!---------Animación------------>
    <div id="waitDiv" class="loadercont">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="imageloader">
                        <img src="/Agendamiento/Assets/Imagenes/djlogo.png" alt="D'JANE" width="200" height="100">


                    </div>
                    <div class="contenedorload">
                        <div class="lds-grid">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    

    <style>
    .cont1 {
        width: 90%;
        height: 500px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 100px;
        margin: auto;
    }

    .contbtn1 {
        width: 90%;
    }
    </style>



    <section id="main">

        <!-------------Menú------------------>
        <?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
                include_once "Vistas/Home/MenuAdmin.php";
            }else if($rol == 2){
                include_once "Vistas/Home/MenuEmpleado.php";
            }
        
        ?>

        <h2 class="text-center p-4">Actualizar datos del empleado</h2>

        <div class="container">
            <div class="cont1">
                <h3 class="p-3">Aquí puedes actualizar los datos de los usuarios</h3>
                  <form action="?c=Empleado&a=Editar" method="post">
                      <div class="p-3">
                        <input name="NOMBREMPLEADO" value="<?= $resultado->getNombre_Empleado() ?>" type="text" class="form-control">
                      </div>
                      <div class="p-3">
                      <input name="CORREOEMPLEADO" value="<?= $resultado->getCorreo_Empleado() ?>" type="text" class="form-control">
                      </div>
                      <div class="p-3">
                      <input name="especialidad" value="<?= $resultado->getEspecialidad_Empleado() ?>" type="text" class="form-control">
                      </div>
                      <div class="p-3">
                      <?php if($resultado->getEstado_Empleado() == 1){ ?> 
                      <input type="radio" name="Estado" checked value="1">Activo<br>
                      <input type="radio" name="Estado" value="2">Inactivo<br>
                      <?php }else{?>
                      <input type="radio" name="Estado" value="1">Activo<br>
                      <input type="radio" name="Estado" checked value="2">Inactivo<br>
                      <?php }?>
                      </div>
                      <div class="p-3">
                      <input name="ID_EMPLEADO" type="hidden" value="<?= $resultado->getId_Empleado() ?>" type="text" class="form-control">
                      </div>

                      <div class="p-3">
                      <button type="submit" class="btn btn-block btn-warning">Editar</button>
                      </div>
                  </form>
            </div>

        </div>

        


        

    </section>

    <footer class="footer p-3 bg-dark color-white">
        <i class="fa fa-facebook m-2"></i>
        <i class="fa fa-youtube m-2"></i>
        <i class="fa fa-instagram m-2"></i>
    </footer>









    <script src="/Agendamiento/Assets/Funciones/validador.js"></script>
    <script src="/Agendamiento/Assets/Funciones/validaciones.js"></script>
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

    <!-- Page level custom scripts -->
    <script src="/Agendamiento/Assets/js/datatables-demo.js"></script>

</body>

</html>