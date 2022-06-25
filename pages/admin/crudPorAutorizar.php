<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Por Autorizar | <?php echo $nomComp ?></title>
<style>
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
</style>
<link rel="stylesheet" href="../../src/css/btnRecPzsDanadas.css">
<script>
    function abrirModal1(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial) {
        $("#btnModal-regresarCotizando2").click();
        $("#id_proyecto1").val(id_proyecto);
        $("#nProyecto1").val(nProyecto);
        $("#id_recPzsDanadas1").val(id_recPzsDanadas);
        $("#id_solPzsDanadas1").val(id_solPzsDanadas);
        $("#id_regCompraInicial1").val(id_regCompraInicial);
        $("#tituloModal1").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, fechaRegPreAuto) {
        $("#btnModal-enviarAutorizado2").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_recPzsDanadas2").val(id_recPzsDanadas);
        $("#id_solPzsDanadas2").val(id_solPzsDanadas);
        $("#id_regCompraInicial2").val(id_regCompraInicial);
        $("#fechaRegPreAuto2").val(fechaRegPreAuto);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal3(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic) {
        $("#btnModal-regresarCotizandoPzsAdic2").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_regSolpzadicional3").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic3").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic3").val(id_preAutorizadoPzsAdic);
        $("#tituloModal3").html(nProyecto);
    }

    function abrirModal4(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic) {
        $("#btnModal-enviarAutorizadoPzsAdic2").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_regSolpzadicional4").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic4").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic4").val(id_preAutorizadoPzsAdic);
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
                            <h1 class="m-0">Tabla 4.4 Por Autorizar </h1>
                        </div>
                        <div class="col-sm-4 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contador de Registros Table Pre-Autorización -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Recepción de Piezas Dañadas Pre-Autorización</strong></h2>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>22/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Pre-Autorización -->
            <section class="content" id="Pre-Autorización">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos de Recepción de Piezas Dañadas Pre-Autorización</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablePreautorizacion2' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> 1. Recepción de Piezas Dañadas "Pre-Autorización"</strong></h4>
                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPreautorizacion2 == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablePreautorizacion2" class="display compact table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>ID</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Valor Venta Inicial</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>ID</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th class="suma"></th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarCotizando2" class="btn btn-white" data-toggle="modal" data-target=".regresarCotizando2"></button>
                                        <button id="btnModal-enviarAutorizado2" class="btn btn-white" data-toggle="modal" data-target=".enviarAutorizado2"></button>
                                        <?php
                                        require '../components/modal-regresarCotizando2.php';
                                        require '../components/modal-enviarAutorizado2.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ------------------------------------------------------------------------------------------------------------ -->

            <!-- Contador de Registros Pre-Autorización: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Solicitud de Piezas Adicionales Pre-Autorización</strong></h2>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>21/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Pre-Autorización: Piezas Adicionales -->
            <section class="content" id="Pre-Autorización">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos de Solicitud de Piezas Adicionales Pre-Autorización</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablePreautorizacionPzsAdic2' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 2. Solicitud de Piezas Adicionales "Pre-Autorización"</strong></h4>
                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPreautorizacionPzsAdic2 == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablePreautorizacionPzsAdic2" class="display compact table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Modalidad de Pago</th>
                                                    <th>Costo Crédito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Cronometro Cotizando / Pre-Autorizado</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Modalidad de Pago</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Cronometro Cotizando / Pre-Autorizado</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarCotizandoPzsAdic2" class="btn btn-white" data-toggle="modal" data-target=".regresarCotizandoPzsAdic2"></button>
                                        <button id="btnModal-enviarAutorizadoPzsAdic2" class="btn btn-white" data-toggle="modal" data-target=".enviarAutorizadoPzsAdic2"></button>
                                        <?php
                                        require '../components/modal-regresarCotizandoPzsAdic2.php';
                                        require '../components/modal-enviarAutorizadoPzsAdic2.php';
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
    <div id="divModal1"></div>
    <div id="divModal2"></div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    // btn navegacion
    require '../components/btnSuperCodId.php';
    ?>
    <script src="../ajax/tablaPreautorizacion2.js"></script>
    <script src="../ajax/tablaPreautorizacionPzsAdic2.js"></script>
    <script>
        function mostrarDetalles1(id_proyecto) {
            var ruta = '../components/modal-verGralRecPzsDanadas.php?id_proyecto=' + id_proyecto;
            $.get(ruta, function(data) {
                $('#divModal1').html(data);
                $('#modal-verGralRecPzsDanadas').modal('show');
            });
        }

        function mostrarDetalles2(id_proyecto, id_cotizandoPzsAdic) {
            var ruta = '../components/modal-verGralRegSolPzsAdicionales.php?id_proyecto=' + id_proyecto + '&id_cotizandoPzsAdic=' + id_cotizandoPzsAdic;
            $.get(ruta, function(data) {
                $('#divModal2').html(data);
                $('#modal-verGralRegSolPzsAdicionales').modal('show');
            });
        }
    </script>
    <script>
        // Actualizar tablas independientes
        $(document).ready(function() {
            tablePreautorizacion2 = $("#tablePreautorizacion2").DataTable();
            $("#refresh_tablePreautorizacion2").on("click", function() {
                tablePreautorizacion2.ajax.reload();
            });

            tablePreautorizacionPzsAdic2 = $("#tablePreautorizacionPzsAdic2").DataTable();
            $("#refresh_tablePreautorizacionPzsAdic2").on("click", function() {
                tablePreautorizacionPzsAdic2.ajax.reload();
            });
        });
    </script>


</body>

</html>