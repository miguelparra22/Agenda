<?php           
($_SESSION['ROL']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="Assets/Diseño/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/Agendamiento/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Agendamiento/Assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/Agendamiento/Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   

   
    <title>Inicio</title>
</head>

<body>
    <?php
            $rol = $_SESSION['ROL'];

            if($rol == 1){
                include_once "Vistas/Home/MenuAdmin.php";
            }else if($rol == 2){
                include_once "Vistas/Home/MenuEmpleado.php";
            }
        
        ?>

    <section id="main">
        <div class="container">
            <h1 class="text-center">Bienvenido <?php print($_SESSION['NOMBRE']) ?></h1>
            <div class="ttable">
                <h4>Estas son las citas del día de hoy</h4>
                <table class="table  table-bordered table-striped">
                    <thead class="table-primary">
                        <th>Nombre del cliente</th>
                        <th>Hora</th>
                        <th>Servicio</th>
                    </thead>
                    <tbody>

                        <?php
                    foreach ($ResultadoLista as $busqueda => $value) {  ?>
                        <tr>
                            <td><?php print_r($this->Cita->CambiarIdxNom("cliente","ClienteNombre","IDCLIENTE","$value->FKIDCLIENTE")[0]->ClienteNombre) ?>
                            </td>
                            <td><?php print_r(date("h:i:s A", strtotime($value->HORAPACTADA))) ?> </td>
                            <?php $IdServicio = $this->Cita->CambiarIdxNom("agenda","FK_IDSERVICIO","FK_IDCITA","$value->IDCITA")[0]->FK_IDSERVICIO?>
                            <td><?php print_r($this->Cita->CambiarIdxNom("servicio","NombreServicio","ID_SERVICIO","$IdServicio")[0]->NombreServicio) ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            </div>
            <footer class="footer p-3 bg-dark color-white">
                <i class="fa fa-facebook m-2"></i>
                <i class="fa fa-youtube m-2"></i>
                <i class="fa fa-instagram m-2"></i>
            </footer>
    </section>


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


    </div>
<
   
    <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
    <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/popper.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>
    <script>
    $(window).on('load', function() {
        notificacion();
                    setInterval(notificacion, 3000);

                });
    </script>
  

</body>

</html>