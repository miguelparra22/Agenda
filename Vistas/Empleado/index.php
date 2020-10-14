<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/Diseño/estilos.css">
    <link rel="stylesheet" href="Assets/Diseño/normalize.css">
    <link rel="icon" type="image/png" href="/Agendamiento/Assets/Imagenes/Icono.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inicio</title>
</head>

<body>


    <section id="main">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/Agendamiento/Assets/Imagenes/Icono.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            D'JANE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" onclick="abrirM(this.id)"  href="?c=valida&a=iniciar">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="abrirM(this.id)" id="citas" href="#">Citas</a>
                </li>
                
                <!--li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li-->
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="/Agendamiento/Vistas/Home/home.php" class="btn btn-outline-danger"><i class="fa fa-close"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    
        <div class="container">
            <h1 class="text-center">Bienvenido <?php print($_SESSION['NOMBRE']); ?></h1>
            <div class="ttable">
                <h4>Estas son las citas del día de hoy</h4>
                <table class="table  table-bordered table-striped">
                    <thead class="table-primary">
                        <th>Nombre del cliente</th>
                        <th>Hora</th>
                        <th>Servicio</th>
                    </thead>
                    <tbody>
                  
                    <?php  foreach ($ResultadoLista as $busqueda => $value) {  ?>
                        <tr>            
                            <td><?php print_r($this->Cita->CambiarIdxNom("cliente","ClienteNombre","IDCLIENTE","$value->FKIDLCIENTE")[0]->ClienteNombre) ?></td>
                            <td><?php print_r(date("h:i:s A", strtotime($value->HORAPACTADA))) ?> </td>
                            <?php $IdServicio = $this->Cita->CambiarIdxNom("cita_servicio","ID_SERVICIO","ID_CITA","$value->IDCITA")[0]->ID_SERVICIO?>
                            <td><?php print_r($this->Cita->CambiarIdxNom("servicio","NombreServicio","ID_SERVICIO","$IdServicio")[0]->NombreServicio) ?></td>
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





    </div>
    <script src="/Agendamiento/Assets/Funciones/funciones.js"></script>
    <script src="/Agendamiento/Assets/jquery-3.5.1.min.js"></script>
    <script src="/Agendamiento/Assets/Bootstrap/js/bootstrap.js"></script>

</body>

</html>