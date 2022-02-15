<nav class="main-header navbar navbar-expand-lg navbar-light navbar-white border-nav">
            <div class="container-fluid">
                <a href="../admin/panelAdmin.php" class="navbar-brand">
                    <img src="../../src/img/logos/logo.png" alt="JSOL Automotriz Logo" class="brand-image  elevation-5" style="opacity: .8; height:4rem">
                    <span style="font-size: 20px">Sistema Proyectos Ortiz &reg;</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../admin/panelAdmin.php" class="nav-link">| <i class="fa-solid fa-house-user"></i> | </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">1.0 Catálogos</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../admin/crudUsuarios.php" class="dropdown-item">1.1 Usuarios </a></li>
                                <li><a href="#" class="dropdown-item">1.2 Marcas </a></li>
                                <li><a href="#" class="dropdown-item">1.3 Modelos </a></li>
                                <li><a href="#" class="dropdown-item">1.4 Años </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">2.0 Proyecto</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">2.1 Registro Vehículo </a></li>
                                <li><a href="#" class="dropdown-item">2.2 Registro Cliente </a></li>
                                <li><a href="#" class="dropdown-item">2.3 Registro Proyecto </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle disabled" disabled>3.0 Insumos</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">3.1 item </a></li>
                                <li><a href="#" class="dropdown-item">3.2 item </a></li>
                                <li><a href="#" class="dropdown-item">3.3 item </a></li>
                                <li><a href="#" class="dropdown-item">3.4 item </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle disabled" disabled>4.0 Destajos Técnicos</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">4.1 item </a></li>
                                <li><a href="#" class="dropdown-item">4.2 item </a></li>
                                <li><a href="#" class="dropdown-item">4.3 item </a></li>
                                <li><a href="#" class="dropdown-item">4.4 item </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa-solid fa-user"></i>
                        <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header"><?php echo $nomComp ?></span>
                        <div class="dropdown-divider"></div>
                        <a href="../../config/cerrar-sesion.php" class="dropdown-item">
                        <i class="fa-solid fa-xmark"></i> Cerrar Sesión
                            <span class="float-right text-muted text-sm"><i class="fa-solid fa-hand-wave"></i></span>
                        </a>
                        <!-- <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
                    </div>
                </li>
            </ul>
        </nav>