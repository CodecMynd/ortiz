<nav class="main-header navbar navbar-expand-lg navbar-light navbar-white border-nav">
    <div class="container-fluid">
        <a href="../admin/panelAdmin.php" class="navbar-brand">
            <img src="../../src/img/logos/logo.png" alt="JSOL Automotriz Logo" class="brand-image  elevation-5" style="opacity: .8; height:4rem">
            <!-- Produccion -->
         <!-- <span style="font-size: 1.5vw" class="title-nav">Sistema Proyectos Ortiz &reg;</span> </a>    -->

        <!-- test -->
        <span style="font-size: 1.5vw" class="title-nav text-red parpadea">Sistema Ortiz Pruebas &reg;</span>  
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="../admin/panelAdmin.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Ir al Inicio">| <i class="fa-solid fa-house-user"></i></a>
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Expandir pantalla completa"><i class="fas fa-expand-arrows-alt"></i></a>
                <?php if ($passUser == 'SIN_PASSWORD') {
                    echo '<a class="nav-link parpadea" data-toggle="dropdown" href="#" >
            <i class="fa-solid fa-user fa-2x" data-toggle="tooltip" data-placement="bottom" title="Ir a mi perfil"></i> |</a>';
                } else {
                    echo '<a class="nav-link" data-toggle="dropdown" href="#">
               <i class="fa-solid fa-user" data-toggle="tooltip" data-placement="bottom" title="Ir a mi perfil"></i> |</a>';
                } ?>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header text-dark"><?php echo $nomComp ?></span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target=".modalMiPass<?php echo $id ?>">
                        <i class="fa-solid fa-user-gear"></i> Mi Perfil
                        <span class="float-right text-muted text-sm"></span>
                    </a>
                    <a href="../../config/cerrar-sesion.php" class="dropdown-item">
                        <i class="fa-solid fa-xmark"></i> Cerrar Sesión
                        <span class="float-right text-muted text-sm"><i class="fa-solid fa-hand-wave"></i></span>
                    </a>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle  <?php if ($passUser == 'SIN_PASSWORD') {
                                                                                                                                                                echo 'disabled';
                                                                                                                                                            } else {
                                                                                                                                                                echo 'text-dark ';
                                                                                                                                                            } ?> ">1.0 Catálogos</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="columns:2; width: 240%">
                        <li><a href="../admin/crudUsuarios.php" class="dropdown-item">1.1 Usuarios </a></li>
                        <li><a href="../admin/crudMarcas.php" class="dropdown-item">1.2 Marcas </a></li>
                        <li><a href="../admin/crudModelos.php" class="dropdown-item">1.3 Modelos </a></li>
                        <li><a href="../admin/crudAnios.php" class="dropdown-item">1.4 Años </a></li>
                        <li><a href="../admin/crudColores.php" class="dropdown-item">1.5 Colores </a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">1.6 Semanas &nbsp;</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../admin/crudSemanas.php" class="dropdown-item">1.6.1 Semanas de Alta</a></li>
                                <li><a href="../admin/crudSemanasCobro.php" class="dropdown-item">1.6.2 Semanas de Cobro </a></li>
                            </ul>
                        </li>
                        <li><a href="../admin/crudAgentes.php" class="dropdown-item">1.7 Agentes</a></li>
                        <li><a href="../admin/crudFormasPago.php" class="dropdown-item">1.8 Formas de Pago</a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">1.9 Técnicos</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../admin/crudTecArmador.php" class="dropdown-item">1.9.1 Técnico Armador</a></li>
                                <li><a href="../admin/crudTecMontador.php" class="dropdown-item">1.9.2 Técnico Montador</a></li>
                            </ul>
                        </li>
                        <li><a href="../admin/crudAsesor.php" class="dropdown-item">1.10 Asesor</a></li>


                        <!-- <?php if ($super == 1) { ?>
                            <li><a href="../admin/crudPermisos.php" class="dropdown-item">1.8 Permisos </a></li>
                        <?php  } ?>  -->
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php if ($passUser == 'SIN_PASSWORD') {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } else {
                                                                                                                                                            echo 'text-dark ';
                                                                                                                                                        } ?> ">2.0 Proyecto</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="min-width: 14rem">
                        <li><a href="../admin/crudVehiculos.php" class="dropdown-item">2.1 Registro Vehículo </a></li>
                        <li><a href="../admin/crudClientes.php" class="dropdown-item">2.2 Registro Cliente </a></li>
                        <!-- <li></li> -->
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.3 Registro Proyecto</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../adds/formProyectos.php" class="dropdown-item">2.3.1 Registro de Proyecto </a></li>
                                <li><a href="../admin/crudProyectos.php" class="dropdown-item">2.3.2 Lista de Proyectos</a></li>
                                <li><a href="../admin/crudVerificacionDiariaVehiculos.php" class="dropdown-item ">2.3.2.2 Estatus para envío de Mensajes</a></li>
                                <li><a href="../admin/crudActividadMinimaDiaria.php" class="dropdown-item ">2.3.4 Actividad Mínima Diaria</a></li>
                                <li><a href="../adds/formAddCapValVenInicial.php" class="dropdown-item">2.3.7 Captura de Valor Venta Inicial </a></li>
                                <li><a href="../update/formUpdateAsignarAgentes.php" class="dropdown-item disabled">2.3.8 Orden de Asignacion de Agentes Servicio </a></li>
                                <li><a href="../admin/crudComprobacionPlacas.php" class="dropdown-item ">2.3.9 Comprobación de Placas </a></li>
                                <li><a href="../admin/crudComprobacionKm.php" class="dropdown-item ">2.3.10 Comprobación de Kilometraje </a></li>
                                <li><a href="../admin/crudComprobacionImagenes.php" class="dropdown-item ">2.3.11 Comprobación 7 Imágenes </a></li>
                                <li><a href="../admin/crudComprobacionClientes.php" class="dropdown-item ">2.3.12 Comprobación INE Clientes </a></li>
                                <li><a href="../admin/crudComprobacionDocuFirm.php" class="dropdown-item ">2.3.13 Comprobación Documentación Firmada Ingreso Vehículo</a></li>
                                <li><a href="../admin/crudComprobacionGarantia.php" class="dropdown-item ">2.3.14 Comprobación de Garantia</a></li>
                                <li><a href="../admin/crudComprobacionAsignarAsesor.php" class="dropdown-item ">2.3.15 Asignación de Asesor</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.4 Solicitud Alta Proyectos</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../admin/crudProyectosActivos.php" class="dropdown-item">2.4.1 Proyectos Activos para realizar Solicitud </a></li>
                                <li><a href="../admin/crudRegistroSolicitudAlta.php" class="dropdown-item">2.4.2 Registro de Solicitud en espera de Alta </a></li>
                            </ul>
                        </li>
                        <li><a href="../admin/crudAltaProyecto.php" class="dropdown-item">2.5 Alta Proyecto </a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.6 Proyectos Código Identificador</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../admin/crudProyCodiIdentificador.php" class="dropdown-item">2.6.1 Registro de Código Identificador </a></li>
                                <li><a href="../components/tablaDadosAltaAsignarCodId.php" class="dropdown-item">2.6.6 Reporte de Alta por asignar Código</a></li>
                            </ul>
                        </li>
                        <li><a href="../admin/crudSuperCodiIdentificador.php" class="dropdown-item ">2.7 Supervisión Código Identificador </a></li>
                        <li><a href="../admin/crudBitacoraProyecto.php" class="dropdown-item disabled">2.8 Bitacora de Proyecto </a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-dark">3.0 Reportes</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="../components/reporteDifValVenAltavsValCodId.php" class="dropdown-item">3.1 Reporte Diferencia Valor Alta Vs Valor Codigo Identificador </a></li>
                        <li><a href="../components/reporteDifValVenInicialvsValAlta.php" class="dropdown-item ">3.2 Reporte Diferencia Valor Venta Inicial Vs Valor Alta </a></li>
                        <li><a href="#" class="dropdown-item disabled">3.3 item </a></li>
                        <li><a href="#" class="dropdown-item disabled">3.4 item </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle disabled">4.0 menú</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Asignación de Asesor</a></li>
                        <li><a href="#" class="dropdown-item disabled">4.2 item </a></li>
                        <li><a href="#" class="dropdown-item disabled">4.3 item </a></li>
                        <li><a href="#" class="dropdown-item disabled">4.4 item </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->

    </ul>
</nav>
