
 <!--nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/Agendamiento/Assets/Imagenes/Icono.png" width="30" height="30"
                    class="d-inline-block align-top" alt="" loading="lazy">
                D'JANE
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" onclick="abrirM(this.id)" href="?c=valida&a=iniciar">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="abrirM(this.id)" id="citas" href="#">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a id="team" class="nav-link" href="#" onclick="abrirM(this.id)"><i class="fa fa-users"></i>
                            Equipo</a>
                    </li>
                </ul>
            </div>

           
        </nav-->


<div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon">
                        <img src="/Agendamiento/Assets/Imagenes/DjBlanco.png" alt="D'jane" width="100px" height="50px">
                    </div>

                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="?c=valida&a=iniciar">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Inicio</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-calendar"></i>
                        <span>Citas</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Acciones de cita</h6>
                            <a class="collapse-item" href="?c=Cita&a=mis">Historial cita</a>
                            <a class="collapse-item" href="?c=Cita&a=lista">Cancelar citas</a>
                           
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Configuración</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                        <!--a class="nav-link dropdown-toggle" href="#"   id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cambiar Contraseña</span>
                            </a-->
                            <a class="collapse-item" href="?c=empleado&a=empleado">Actualizar mis datos</a>
                            <a class="collapse-item" href="#" onclick="window.location.href='?c=valida&a=correoCambiar'">Cambiar contraseña</a>
                            <a class="collapse-item" href="?c=Servicio&a=lista">Servicios</a>
 
                        </div>
                    </div>
                </li>
               
                <!-- Divider -->
                

                <!-- Heading -->
               
      


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter" id='cantidadAlerts'></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="alerts">
                                
                            </div>
                        </li>


                       



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php print ($_SESSION['NOMBRE']);?></span>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle dropdown-item" data-toggle="modal"
                                data-target="#logoutModal" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <!-- Dropdown - Alerts -->

                        </li>



                    </ul>

                </nav>