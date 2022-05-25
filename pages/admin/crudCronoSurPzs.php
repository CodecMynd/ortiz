<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Cronometro de Surtido de Piezas | <?php echo $nomComp ?></title>
<!-- <style>
    @media (min-width:320px) and (max-width:425px) {
        .content-header {
            margin-bottom: 90px;
            width: 100%;

        }

        .content-header h1 {
            font-size: 20px;
            padding: 10px 10px 5px;
            text-align: center;
        }
    }
</style> -->
<script>
    function abrirModal1(id_proyecto, nProyecto, id_solPzsDanadas, folio_solicitud) {
        $("#btnModal-regEntregaPz").click();
        $("#id_proyecto1").val(id_proyecto);
        $("#nProyecto1").val(nProyecto);
        $("#id_solPzsDanadas1").val(id_solPzsDanadas);
        $("#folio_solicitud1").val(folio_solicitud);
        $("#tituloModal1").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, id_solPzsDanadas, id_entregaPz) {
        $("#btnModal-regSuperEntregaPz").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_solPzsDanadas2").val(id_solPzsDanadas);
        $("#id_entregaPz2").val(id_entregaPz);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal3(id_proyecto, nProyecto, id_entregaPz) {
        $("#btnModal-eliminarRegEntregaPz").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_entregaPz3").val(id_entregaPz);
        $("#tituloModal3").html(nProyecto);
    }

    function abrirModal4(id_proyecto, nProyecto, id_entregaPz) {
        $("#btnModal-eliminarRegSuperEntregaPz").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_entregaPz4").val(id_entregaPz);
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
                        <div class="col-sm-8">
                            <h1 class="m-0">Tabla 4.3 Cronometro de Surtido de Piezas</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Registros -->
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
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>24/05/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Comprobcion de img -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Cronometro de Surtido de Piezas dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaCronoSurPzs == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableCronoSurPzs" class="display compact table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placa</th>
                                                <th>Color</th>
                                                <th>Asesor</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Núm. Folio Solicitud de Pieza</th>
                                                <th>Registro Entrega de Piezas</th>
                                                <th>Supervisión de Entrega de Piezas</th>
                                                <th>Fecha Registro Link de Desarmado</th>
                                                <th>Fecha Registro Entrega de Pieza</th>
                                                <th>Fecha Supervisión Entrega de Pieza</th>
                                                <th>Núm. Folio Entrega de Pieza</th>
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
                                                <th>Placa</th>
                                                <th>Color</th>
                                                <th>Asesor</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Núm. Folio Solicitud de Pieza</th>
                                                <th>Registro Entrega de Piezas</th>
                                                <th>Supervisión de Entrega de Piezas</th>
                                                <th>Fecha Registro Link de Desarmado</th>
                                                <th>Fecha Registro Entrega de Pieza</th>
                                                <th>Fecha Supervisión Entrega de Pieza</th>
                                                <th>Núm. Folio Entrega de Pieza</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-regEntregaPz" class="btn btn-white" data-toggle="modal" data-target='.regEntregaPz'></button>
                                    <button id="btnModal-regSuperEntregaPz" class="btn btn-white" data-toggle="modal" data-target=".regSuperEntregaPz"></button>
                                    <button id="btnModal-eliminarRegEntregaPz" class="btn btn-white" data-toggle="modal" data-target=".eliminarRegEntregaPz"></button>
                                    <button id="btnModal-eliminarRegSuperEntregaPz" class="btn btn-white" data-toggle="modal" data-target=".eliminarRegSuperEntregaPz"></button>
                                    <?php
                                    require '../components/modal-regEntregaPz.php';
                                    require '../components/modal-regSuperEntregaPz.php';
                                    require '../components/modal-eliminarRegEntregaPz.php';
                                    require '../components/modal-eliminarRegSuperEntregaPz.php';
                                    desconectar();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="divModal"></div>
        </div>
        <?php
        require '../components/footer.php';
        ?>
        <div id="divModal"></div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/crudCronoSurtidoPzs.js"></script>

</body>

</html>