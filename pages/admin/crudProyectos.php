<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Lista de Proyectos | <?php echo $nomComp ?></title>
<script>
    function abrirModal1(id_proyecto, nProyecto) {
        $("#btnModal-eliminarProyecto").click();
        $("#id_proyecto").val(id_proyecto);
        $("#nProyecto").val(nProyecto);
        $("#tituloModal1").html(nProyecto);
    }
</script>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-1">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla 2.3.2 Lista de Proyectos</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Rrgistros -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Contadores</strong></h2>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row justify-content-center">

                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
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
                                                <div class="info-box-content">
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
                                                <div class="info-box-content">
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
                                                <div class="info-box-content">
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
                                                <div class="info-box-content">
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
                                                <div class="info-box-content">
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
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_proyectosE); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formProyectos.php" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else if ($regProyecto == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formProyectos.php" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regProyecto" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>

                                        <!-- <a href="#" id="info" class=" btn btn-outline-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualización de Consulta de esta tabla"><i class="fa-solid fa-info"></i></a> -->

                                    </div>
                                </div>

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($listProyecto == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tablaListaProyectos" class="display compact table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Cliente</th>
                                                <th>Status Valor Venta Inicial</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Fecha Registro del Proyecto</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Cliente</th>
                                                <th>Status Valor Venta Inicial</th>
                                                <th class="suma"></th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Fecha Registro del Proyecto</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-eliminarProyecto" class="btn btn-white" data-toggle="modal" data-target=".borrarProyecto"></button>
                                    <?php
                                    require '../components/modal-eliminarProyecto.php';
                                    desconectar();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /table usuario -->
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../components/scripts-dataTables.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        // noeliProyecto PROYECTO ACTIVO NO SE PUEDE ELIMINAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#noModProyecto ").click(function() {
                toastr["error"]("¡PROYECTO ELIMINADO, YA NO PUEDES REALIZAR ESTA ACCION!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });
        // noeliProyecto PROYECTO ACTIVO NO SE PUEDE ELIMINAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#noModProyecto ").click(function() {
                toastr["error"]("¡PROYECTO EN USO, NO SE PUEDE ELIMINAR. DEBERÁS REGRESAR EL PROYECTO HASTA LISTA 2.4.1  PROYECTOS ACTIVOS!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });


        // Info Consulta --------------------------------------------------------------
        $(document).ready(function() {
            $("#info").click(function() {
                toastr["info"]("¡Última Actualizacion: <strong>06/04/2022</strong> -- Bloques !")

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": false,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            })
        });
    </script>
</body>

</html>