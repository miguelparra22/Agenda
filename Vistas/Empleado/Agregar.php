<body>



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

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    </div>

    <section id="main">

        <!------navBar----------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/Agendamiento/Assets/Imagenes/djlogo.png" width="120" height="40"
                    class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="?c=valida&a=iniciar" onclick=""><i class="fa fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a id="citas" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-calendar"></i>
                            Mis citas</a>
                    </li>
                    <li class="nav-item">
                        <a id="team" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-users"></i>
                            Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a id="con" class="nav-link" href="#" onclick="abrirM(this.id)" href="#"><i
                                class="fa fa-wrench"></i> Configuración</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="/Agendamiento/Vistas/Home/home.php" class="btn btn-outline-danger"><i
                                class="fa fa-close"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="box">

            <form action="./?c=empleado&a=agregar" id="formulario" method="POST">
                <h3>¡Agrega un nuevo integrate a tu equipo!</h3>
                <div>
                    <input type="text" name="nombre" required>
                    <label>Nombre del empleado</label>
                </div>
                <div>
                    <input type="text" id="correo" name="correo" required>
                    <label>Correo del empleado</label>
                </div>
                <div>
                    <input type="password" name="pass" required>
                    <label>Contraseña del empleado</label>
                </div>

                <div>

                    <input type="text" name="especialidad" required>
                    <label>Especialidad del empleado</label>

                </div>
                <input type="hidden" name="estado" value="1">
                <input type="hidden" name="rol" value="2">


                <input type="button" class="btn btn-primary" onclick="traerValor()" value="Guardar" name="guardar">

                <div class="text-center p-3">
                    <a href="?c=Empleado&a=LlamarInicioAdmin"><i class="fa fa-home"></i> Regresar al inicio</a>
                </div>
            </form>

        </div>
    </section>
    <script src="/Agendamiento/Assets/Funciones/validador.js"></script>


    </html>