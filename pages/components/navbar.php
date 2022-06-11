<style>
    .scrollable-menu {
        height: auto;
        max-height: 400px;
        overflow-x: visible;
        overflow-y: scroll;
    }
</style>
<nav class="main-header navbar navbar-expand-lg navbar-light navbar-white border-nav">
    <div class="container-fluid">
        <a href="../admin/panelAdmin.php" class="navbar-brand">
            <img src="../../src/img/logos/logo.png" alt="JSOL Automotriz Logo" class="brand-image  elevation-5" style="opacity: .8; height:4rem">
            <!-- Produccion -->
            <span style="font-size: 1.5vw" class="title-nav">Sistema Proyectos Ortiz &reg;</span></a>

            <!-- Pruebas -->
            <!-- <span style="font-size: 1.5vw" class="title-nav text-red parpadea">Sistema Ortiz Pruebas &reg;</span> -->
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse order-2" id="navbarCollapse">
            <!-- Left navbar links -->
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="../admin/panelAdmin.php" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Ir al Inicio" style="padding-left: 5px;padding-right: 5px;">| <i class="fa-solid fa-house-user"></i></a>
                <?php if ($super == 1) { ?>
                    <a href="#" type="button" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter" data-toggle="tooltip" data-placement="bottom" title="Mostrar contadores de proyectos" style="padding-left: 5px;padding-right: 5px;"><i class="fa-solid fa-eye"></i></a>
                <?php } ?>
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" data-toggle="tooltip" data-placement="bottom" title="Expandir pantalla completa" style="padding-left: 5px;padding-right: 5px;"><i class="fas fa-expand-arrows-alt"></i></a>
                <?php if ($passUser == 'SIN_PASSWORD') {
                    echo '<a class="nav-link parpadea" data-toggle="dropdown" href="#" style="padding-left: 5px;padding-right: 5px;">
            <i class="fa-solid fa-user fa-2x" data-toggle="tooltip" data-placement="bottom" title="Ir a mi perfil"></i> |</a>';
                } else {
                    echo '<a class="nav-link" data-toggle="dropdown" href="#" style="padding-left: 5px;padding-right: 5px;">
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
                <!------------------------------------------------------------- 1.0 Catálogos ------------------------------------------------------------->
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle  <?php if ($passUser == 'SIN_PASSWORD') {
                                                                                                                                                                echo 'disabled';
                                                                                                                                                            } else {
                                                                                                                                                                echo 'text-dark ';
                                                                                                                                                            } ?> " style="padding-left: 5px;padding-right: 5px;">1.0 Catálogos  </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="columns:1; width: 165%;">
                        <li><a href="../admin/crudUsuarios.php" class="dropdown-item">1.1 Usuarios </a></li>
                        <li><a href="../admin/crudMarcas.php" class="dropdown-item">1.2 Marcas </a></li>
                        <li><a href="../admin/crudModelos.php" class="dropdown-item">1.3 Modelos </a></li>
                        <li><a href="../admin/crudAnios.php" class="dropdown-item">1.4 Años </a></li>
                        <li><a href="../admin/crudColores.php" class="dropdown-item">1.5 Colores </a></li>
                        <li class="dropdown-submenu dropdown-hover ">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">1.6 Semanas &nbsp;</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../admin/crudSemanas.php" class="dropdown-item">1.6.1 Semanas de Alta</a></li>
                                <li><a href="../admin/crudSemanasCobro.php" class="dropdown-item">1.6.2 Semanas de Cobro </a></li>
                                <li><a href="../admin/crudSemanasSolAlta.php" class="dropdown-item">1.6.3 Semanas Solicitud de Alta </a></li>
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
                        <li><a href="../admin/crudVerPermisosUsuarios.php" class="dropdown-item">1.11 Ver Permisos Usuarios</a></li>
                        <li><a href="../admin/crudProveedores.php" class="dropdown-item">1.12 Proveedores</a></li>


                        <!-- <?php if ($super == 1) { ?>
                            <li><a href="../admin/crudPermisos.php" class="dropdown-item">1.8 Permisos </a></li>
                        <?php  } ?>  -->
                    </ul>
                </li>
                <!------------------------------------------------------------- 2.0 Proyecto ------------------------------------------------------------->
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php if ($passUser == 'SIN_PASSWORD') {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } else {
                                                                                                                                                            echo 'text-dark ';
                                                                                                                                                        } ?> " style="padding-left: 5px;padding-right: 5px;">2.0 Proyecto</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="min-width: 14rem">
                        <li><a href="../admin/crudVehiculos.php" class="dropdown-item">2.1 Registro Vehículo </a></li>
                        <li><a href="../admin/crudClientes.php" class="dropdown-item">2.2 Registro Cliente </a></li>
                        <!-- <li></li> -->
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.3 Registro Proyecto</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow scrollable-menu">
                                <li><a href="../adds/formProyectos.php" class="dropdown-item">2.3.1 Registro de Proyecto </a></li>
                                <li><a href="../admin/crudProyectos.php" class="dropdown-item">2.3.2 Lista de Proyectos</a></li>
                                <li><a href="../admin/crudVerificacionDiariaVehiculos.php" class="dropdown-item ">2.3.2.2 Estatus para envío de Mensajes</a></li>
                                <li><a href="../admin/crudVarificacionDiariaBaterias.php" class="dropdown-item">2.3.3 Verificación Diaria de Baterías </a></li>
                                <li><a href="../admin/crudActividadMinimaDiaria.php" class="dropdown-item ">2.3.4 Actividad Mínima Diaria</a></li>
                                <li><a href="../admin/crudAsignacionTop.php" class="dropdown-item ">2.3.5 Asignación de Top</a></li>
                                <li><a href="../admin/crudAsesoramientoTecnico.php" class="dropdown-item">2.3.6 Programa de Asesoramiento Técnico</a></li>
                                <li><a href="../admin/crudSegDiaAsesoramientoTecnico.php" class="dropdown-item">2.3.6.1 Seguimimiento Diario Programa de Asesoramiento Técnico</a></li>
                                <li><a href="../adds/formAddCapValVenInicial.php" class="dropdown-item">2.3.7 Captura de Valor Venta Inicial </a></li>
                                <li><a href="../update/formUpdateAsignarAgentes.php" class="dropdown-item disabled">2.3.8 Orden de Asignación de Agentes Servicio </a></li>
                                <li class="btn-group dropleft dropdown-hover">
                                    <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.3.9 Placas </a>
                                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-1 shadow bg-light">
                                        <li><a href="../admin/crudComprobacionPlacas.php" class="dropdown-item ">2.3.9.1 Comprobación de Placas </a></li>
                                        <li><a href="../admin/crudSolicitudCambioPlacas.php" class="dropdown-item ">2.3.9.2 Solicitud Cambio de Placas</a></li>
                                    </ul>
                                </li>
                                <li><a href="../admin/crudComprobacionKm.php" class="dropdown-item disabled">2.3.10 Comprobación de Kilometraje </a></li>
                                <li><a href="../admin/crudComprobacionImagenes.php" class="dropdown-item ">2.3.11 Comprobación 7 Imágenes </a></li>
                                <li><a href="../admin/crudComprobacionClientes.php" class="dropdown-item disabled">2.3.12 Comprobación INE Clientes </a></li>
                                <li><a href="../admin/crudComprobacionDocuFirm.php" class="dropdown-item disabled">2.3.13 Comprobación Documentación Firmada Ingreso Vehículo</a></li>
                                <li><a href="../admin/crudComprobacionGarantia.php" class="dropdown-item disabled">2.3.14 Comprobación de Garantia</a></li>

                                <li class="btn-group dropleft dropdown-hover">
                                    <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.3.15 Asesores</a>
                                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-1 shadow bg-light">
                                        <li><a href="../admin/crudComprobacionAsignarAsesor.php" class="dropdown-item">2.3.15.1 Asignación de Asesor</a></li>
                                        <li><a href="../admin/crudSolicitudCambioAsesor.php" class="dropdown-item">2.3.15.2 Solicitud Cambio de Asesor</a></li>
                                    </ul>
                                </li>
                                <li><a href="../admin/crudSolicitudCambioSemanaSolAlta.php" class="dropdown-item">2.3.16 Solicitar Cambio de Semana de Solicitud de Alta</a></li>
                                <li><a href="../admin/crudSolicitudCambioSemanaAlta.php" class="dropdown-item">2.3.17 Solicitar Cambio de Semana de Alta</a></li>

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
                                <li><a href="../components/tablaDadosAltaAsignarCodId.php" class="dropdown-item">2.6.2 Reporte de Alta por asignar Código ID</a></li>
                                <li><a href="../admin/crudComDiariaAltasAsignarCodId.php" class="dropdown-item">2.6.3 Comprobación Diaria de Altas Por Asignar Código ID</a></li>
                                <li><a href="../admin/crudSeguimientoDiarioCobranza.php" class="dropdown-item">2.6.4 Seguimiento Diario de Cobranza </a></li>
                            </ul>
                        </li>
                        <li><a href="../admin/crudSuperCodiIdentificador.php" class="dropdown-item ">2.7 Supervisión Código Identificador </a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.8 Consecutivos</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../consultas/tablaConsSolicitudAlta.php" class="dropdown-item">2.8.1 Consecutivo Solicitud Alta de Proyectos </a></li>
                                <li><a href="../consultas/tablaConsAltaProyecto.php" class="dropdown-item">2.8.2 Consecutivo Alta de Proyectos </a></li>
                                <li><a href="../consultas/tablaConsCodigoIdentificador.php" class="dropdown-item">2.8.3 Consecutivo Códigos Identificadores </a></li>
                            </ul>
                        </li>
                        <li><a href="../consultas/tablaConsultaBitacora.php" class="dropdown-item">2.9 Bitacora de Proyectos </a></li>
                        <li class="dropdown-submenu dropdown-hover">
                            <a id="dropdownSubMenu1" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">2.10 Solicitudes de Cambio</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="../admin/crudSolicitudAutorizDescuentos.php" class="dropdown-item">2.10.1 Autorización Descuentos </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!------------------------------------------------------------- 3.0 Reportes ------------------------------------------------------------->
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php if ($passUser == 'SIN_PASSWORD') {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } else {
                                                                                                                                                            echo 'text-dark ';
                                                                                                                                                        } ?> " style="padding-left: 5px;padding-right: 5px;">3.0 Reportes</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="../components/reporteDifValVenAltavsValCodId.php" class="dropdown-item">3.1 Reporte Diferencia Valor Alta Vs Valor Codigo Identificador </a></li>
                        <li><a href="../components/reporteDifValVenInicialvsValAlta.php" class="dropdown-item ">3.2 Reporte Diferencia Valor Venta Inicial Vs Valor Alta </a></li>
                        <!-- <li><a href="#" class="dropdown-item disabled">3.3 item </a></li> -->
                        <!-- <li><a href="#" class="dropdown-item disabled">3.4 item </a></li> -->
                    </ul>
                </li>
                <!------------------------------------------------------------- 4.0 Compras y Almacén ------------------------------------------------------------->
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php if ($passUser == 'SIN_PASSWORD') {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } else {
                                                                                                                                                            echo 'text-dark ';
                                                                                                                                                        } ?> " style="padding-left: 5px;padding-right: 5px;">4.0 Compras y Almacén</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="../admin/crudRecPzsDanadas.php" class="dropdown-item">4.1 Recepción de Piezas Dañadas</a></li>
                        <li><a href="../admin/crudSolPzsAdicionales.php" class="dropdown-item">4.2 Solicitud de Piezas Adicionales </a></li>
                        <li><a href="../admin/crudCronoSurPzs.php" class="dropdown-item">4.3 Cronometro de Surtido de Piezas </a></li>
                        <!-- <li><a href="#" class="dropdown-item disabled">4.4 item </a></li> -->
                    </ul>
                </li>
                <!------------------------------------------------------------- 5.0 Proyectos Extras ------------------------------------------------------------->
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle <?php if ($passUser == 'SIN_PASSWORD') {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        } else {
                                                                                                                                                            echo 'text-dark ';
                                                                                                                                                        } ?> " style="padding-left: 5px;padding-right: 5px;">5.0 Proyectos Extras</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="../admin/crudProyectoExtra.php" class="dropdown-item">5.1 Captura Proyectos Extras</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
//# Proyectos Activos
$count_reg_proyectoActivo = mysqli_query($conexion, "SELECT proyectoActivo FROM proyectos WHERE proyectoActivo = 1 AND estadoProyectoEliminado	 = 1 ");
//# Registro Solicitud
$count_reg_registroSolicitud = mysqli_query($conexion, "SELECT registroSolicitud FROM proyectos WHERE registroSolicitud = 1 AND estadoProyectoEliminado	 = 1 ");
//# Alta Proyecto
$count_reg_altaProyecto = mysqli_query($conexion, "SELECT altaProyecto FROM proyectos WHERE altaProyecto = 1 AND estadoProyectoEliminado = 1 ");
//# Código Identificador
$count_reg_proyCodIdentificador = mysqli_query($conexion, "SELECT proyCodIdentificador FROM proyectos WHERE proyCodIdentificador = 1 AND estadoProyectoEliminado = 1 ");
//# Supervisión CodID
$count_reg_superCodIdentificador = mysqli_query($conexion, "SELECT superCodIdentificador FROM proyectos WHERE superCodIdentificador = 1 AND estadoProyectoEliminado	 = 1 ");
//# proyectos Registrados
$count_reg_proyectos = mysqli_query($conexion, "SELECT id_proyecto FROM proyectos WHERE estadoProyectoEliminado = 1 ");
//# proyectos Eliminados
$count_reg_proyectosE = mysqli_query($conexion, "SELECT id_proyecto FROM proyectos WHERE estadoProyectoEliminado = 0 ");
?>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Contadores</h5>
                <div class="card-tools">
                    <small><strong>*Visible solo Administrador</strong></small>
                </div>
            </div>
            <div class="card-body ">
                <div class="row justify-content-center">

                    <div class="col-sm-6 col-md-2">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <div class="info-box-content" style="padding-left: 2px;padding-right: 2px;">
                                <h6 class="info-box-number text-center">Activos</h6>
                                <h4 class="text-center">
                                    <?php echo mysqli_num_rows($count_reg_proyectoActivo); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <div class="info-box-content" style="padding-left: 2px;padding-right: 2px;">
                                <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                <h4 class="text-center">
                                    <?php echo mysqli_num_rows($count_reg_registroSolicitud); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <div class="info-box-content" style="padding-left: 2px;padding-right: 2px;">
                                <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                <h4 class="text-center">
                                    <?php echo mysqli_num_rows($count_reg_altaProyecto); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <div class="info-box-content" style="padding-left: 2px;padding-right: 2px;">
                                <h6 class="info-box-number text-center">Código ID</h6>
                                <h4 class="text-center">
                                    <?php echo mysqli_num_rows($count_reg_proyCodIdentificador); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <div class="info-box-content" style="padding-left: 2px;padding-right: 2px;">
                                <h6 class="info-box-number text-center">Supervisión</h6>
                                <h4 class="text-center">
                                    <?php echo mysqli_num_rows($count_reg_superCodIdentificador); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-info elevation-1"><i class="fa-solid fa-arrow-up-1-9"></i></span>
                            <div class="info-box-content" style="padding-left: 2px;padding-right: 2px;">
                                <h6 class="info-box-number text-center">Total Proyectos</h6>
                                <h4 class="text-center">
                                    <?php echo mysqli_num_rows($count_reg_proyectos); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-trash-can"></i></span>
                            <div class="info-box-content" style="padding-left: 2px;padding-right: 2px;">
                                <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                <h4 class="text-center">
                                    <?php echo mysqli_num_rows($count_reg_proyectosE); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>