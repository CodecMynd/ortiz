<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Recepción de Piezas Dañadas | <?php echo $nomComp ?></title>
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
    function abrirModal1(id_proyecto, nProyecto) {
        $("#btnModal-regRecPzsDanadas").click();
        $("#id_proyecto1").val(id_proyecto);
        $("#nProyecto1").val(nProyecto);
        $("#tituloModal1").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, id_recPzsDanadas) {
        $("#btnModal-regSolRecPzsDanadas").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_recPzsDanadas2").val(id_recPzsDanadas);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal3(id_proyecto, nProyecto, id_recPzsDanadas) {
        $("#btnModal-eliminarRegRecPzsDanadas").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_recPzsDanadas3").val(id_recPzsDanadas);
        $("#tituloModal3").html(nProyecto);
    }

    function abrirModal4(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial) {
        $("#btnModal-enviarPreAutorizacion").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_recPzsDanadas4").val(id_recPzsDanadas);
        $("#id_solPzsDanadas4").val(id_solPzsDanadas);
        $("#id_regCompraInicial4").val(id_regCompraInicial);
        $("#tituloModal4").html(nProyecto);
    }

    function abrirModal5(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial) {
        $("#btnModal-regresarCotizando").click();
        $("#id_proyecto5").val(id_proyecto);
        $("#nProyecto5").val(nProyecto);
        $("#id_recPzsDanadas5").val(id_recPzsDanadas);
        $("#id_solPzsDanadas5").val(id_solPzsDanadas);
        $("#id_regCompraInicial5").val(id_regCompraInicial);
        $("#tituloModal5").html(nProyecto);
    }

    function abrirModal6(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial) {
        $("#btnModal-enviarAutorizado").click();
        $("#id_proyecto6").val(id_proyecto);
        $("#nProyecto6").val(nProyecto);
        $("#id_recPzsDanadas6").val(id_recPzsDanadas);
        $("#id_solPzsDanadas6").val(id_solPzsDanadas);
        $("#id_regCompraInicial6").val(id_regCompraInicial);
        $("#tituloModal6").html(nProyecto);
    }

    function abrirModal7(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado) {
        $("#btnModal-regresarPreAutorizacion").click();
        $("#id_proyecto7").val(id_proyecto);
        $("#nProyecto7").val(nProyecto);
        $("#id_recPzsDanadas7").val(id_recPzsDanadas);
        $("#id_solPzsDanadas7").val(id_solPzsDanadas);
        $("#id_regCompraInicial7").val(id_regCompraInicial);
        $("#id_autorizado7").val(id_autorizado);
        $("#tituloModal7").html(nProyecto);
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
                            <h1 class="m-0">Tabla 4.1 Recepción de Piezas Dañadas</h1>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>20/05/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Cotizando -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Cotizando</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> Cotizando</strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaRecPzsDanadas == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableRecPzsDanadas" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Link de Desarmado</th>
                                                    <th>Solicitud de Piezas</th>
                                                    <th>Registro(s) Compra(s)</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Fecha Eliminación Link Desarmado</th>
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Link de Desarmado</th>
                                                    <th>Solicitud de Piezas</th>
                                                    <th>Registro(s) Compra(s)</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Fecha Eliminación Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regRecPzsDanadas" class="btn btn-white" data-toggle="modal" data-target='.regRecPzsDanadas'></button>
                                        <!-- <button id="btnModal-regSolRecPzsDanadas" class="btn btn-white" data-toggle="modal" data-target=".regSolRecPzsDanadas"></button> -->
                                        <button id="btnModal-eliminarRegRecPzsDanadas" class="btn btn-white" data-toggle="modal" data-target=".eliminarRegRecPzsDanadas"></button>
                                        <button id="btnModal-enviarPreAutorizacion" class="btn btn-white" data-toggle="modal" data-target=".enviarPreAutorizacion"></button>
                                        <?php
                                        require '../components/modal-regRecPzsDanadas.php';
                                        // require '../components/modal-regSolRecPzsDanadas.php';
                                        require '../components/modal-eliminarRegRecPzsDanadas.php';
                                        require '../components/modal-enviarPreAutorizacion.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Pre-Autorización -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Pre-Autorización</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> Pre-Autorización</strong></h4>
                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPreautorizacion == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablePreautorizacion" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Link de Desarmado</th>
                                                    <th>Solicitud de Piezas</th>
                                                    <th>Registro(s) Compra(s)</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Fecha Eliminación Link Desarmado</th>
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Link de Desarmado</th>
                                                    <th>Solicitud de Piezas</th>
                                                    <th>Registro(s) Compra(s)</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Fecha Eliminación Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarCotizando" class="btn btn-white" data-toggle="modal" data-target=".regresarCotizando"></button>
                                        <button id="btnModal-enviarAutorizado" class="btn btn-white" data-toggle="modal" data-target=".enviarAutorizado"></button>
                                        <?php
                                        require '../components/modal-regresarCotizando.php';
                                        require '../components/modal-enviarAutorizado.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Autorizado -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Autorizado</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> Autorizado</strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaAutorizado == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableAutorizado" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Link de Desarmado</th>
                                                    <th>Solicitud de Piezas</th>
                                                    <th>Registro(s) Compra(s)</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Autorización</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Fecha Eliminación Link Desarmado</th>
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Link de Desarmado</th>
                                                    <th>Solicitud de Piezas</th>
                                                    <th>Registro(s) Compra(s)</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Autorización</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Fecha Eliminación Link Desarmado</th>
                                                    <th>Acciones</th>  
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarPreAutorizacion" class="btn btn-white" data-toggle="modal" data-target=".regresarPreAutorizacion"></button>
                                        <?php
                                        require '../components/modal-regresarPreAutorizacion.php';
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
        desconectar();
        ?>
        <div id="divModal"></div>
        <div id="divModalPreAuto"></div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/crudRecPzsDanadas.js"></script>
    <script src="../ajax/tablaPreautorizacion.js"></script>
    <script src="../ajax/tableAutorizado.js"></script>

</body>

</html>