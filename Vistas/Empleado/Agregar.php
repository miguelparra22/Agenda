

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
                <input type="hidden" name="rol" value="1">


                <input type="button" onclick="traerValor()" value="guardar" name="guardar">

                <div class="text-center p-3">
                    <a href="?c=Empleado&a=LlamarInicioAdmin"><i class="fa fa-home"></i> Regresar al inicio</a>
                </div>
            </form>

        </div>
    </section>
        <script src="/Agendamiento/Assets/Funciones/validador.js"></script>


</html>