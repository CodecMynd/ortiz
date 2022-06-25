<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Envío y Recepción de Transmisión | <?php echo $nomComp ?></title>
<script>
    function abrirModal1(id_proyecto, nProyecto) {
        $("#btnModal-regEnvioTranmision").click();
        $("#id_proyecto1").val(id_proyecto);
        $("#nProyecto1").val(nProyecto);
        $("#tituloModal1").html(nProyecto);
    }
    function abrirModal2(id_proyecto, nProyecto, id_envioRecTransm) {
        $("#btnModal-eliminarEnvioTranmision").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_envioRecTransm2").val(id_envioRecTransm);
        $("#tituloModal2").html(nProyecto);
    }
    function abrirModal3(id_proyecto, nProyecto, id_envioRecTransm) {
        $("#btnModal-regRecTranmision").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_envioRecTransm3").val(id_envioRecTransm);
        $("#tituloModal3").html(nProyecto);
    }
    function abrirModal4(id_proyecto, nProyecto, id_envioRecTransm) {
        $("#btnModal-eliminarRecTranmision").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_envioRecTransm4").val(id_envioRecTransm);
        $("#tituloModal4").html(nProyecto);
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
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <h1 class="m-0">Tabla 6.1 Envío y Recepción de Transmisión</h1>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registros -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tablas Consultadas</strong></h2>
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
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-trash-can"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                                    <div class="text-center "><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="height: 50px;">
                                    <marquee width="100%" behavior="alternate">
                                        <marquee behavior="alternate">
                                            <p>Consulta optimizada, ultima actualización: <strong>25/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Comprobcion de placas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-11 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Envío y Recepción de Transmisión dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableEnvioRecTransm' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaEnvioRecTransm == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableEnvioRecTransm" class="display compact table-bordered table-striped" style="width:100%">
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
                                                <th>Asesor</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Envío de Transmisión</th>
                                                <th>Status Recepción de Transmisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
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
                                                <th>Asesor</th>
                                                <th class="suma">Valor Venta Inicial</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Envío de Transmisión</th>
                                                <th>Status Recepción de Transmisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-regEnvioTranmision" class="btn btn-white" data-toggle="modal" data-target='.regEnvioTranmision'></button>
                                    <button id="btnModal-eliminarEnvioTranmision" class="btn btn-white" data-toggle="modal" data-target='.eliminarEnvioTranmision'></button>
                                    <button id="btnModal-regRecTranmision" class="btn btn-white" data-toggle="modal" data-target='.regRecTranmision'></button>
                                    <button id="btnModal-eliminarRecTranmision" class="btn btn-white" data-toggle="modal" data-target='.eliminarRecTranmision'></button>
                                    <?php
                                    require '../components/modal-regEnvioTranmision.php';
                                    require '../components/modal-eliminarEnvioTranmision.php';
                                    require '../components/modal-regRecTranmision.php';
                                    require '../components/modal-eliminarRecTranmision.php';
                                    desconectar();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    ?>
    <div id="divModal"></div>
    <script src="../ajax/crudEnvioRecepTransmision.js"></script>
    <script>
        function mostarDetalles(id_proyecto) {
            var ruta = '../components/modal-VerGralActMinDiaria.php?id_proyecto=' + id_proyecto;
            $.get(ruta, function(data) {
                $('#divModal').html(data);
                $('#modal-verGralActMinDiaria').modal('show');
            });
        }
        // -------------------------------------

        // Actualizar tablas independientes
        $(document).ready(function() {

            tableEnvioRecTransm = $("#tableEnvioRecTransm").DataTable();
            $("#refresh_tableEnvioRecTransm").on("click", function() {
                tableEnvioRecTransm.ajax.reload();
            });
        });
    </script>
</body>

</html>