<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="/Agendamiento/Assets/Imagenes/djlogodorado.png" width="120" height="40" class="d-inline-block align-top" alt="" loading="lazy">

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="#" onclick=""><i class="fa fa-home"></i> Inicio</a>
            </li>
            <li class="nav-item">
                <a id="citas" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-calendar"></i> Mis citas</a>
            </li>
            <li class="nav-item">
                <a id="team" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-users"></i> Equipo</a>
            </li>
            <li class="nav-item">
                <a id="con" class="nav-link" href="#" onclick="abrirM(this.id)" href="#"><i class="fa fa-wrench"></i> Configuración</a>
            </li>
        </ul>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-close"></i>
            </button>
        </ul>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cerrar sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Está seguro de que desea cerrar sesión?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-danger" onclick="InicioAdmin()">Cerrar sesión</button>
            </div>
        </div>
    </div>
</div>
</form>
</div>