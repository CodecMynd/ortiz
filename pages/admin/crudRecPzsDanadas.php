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
<link rel="stylesheet" href="../../src/css/btnRecPzsDanadas.css">

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

    function abrirModal4(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, fechaRegLink) {
        $("#btnModal-enviarPreAutorizacion").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_recPzsDanadas4").val(id_recPzsDanadas);
        $("#id_solPzsDanadas4").val(id_solPzsDanadas);
        $("#id_regCompraInicial4").val(id_regCompraInicial);
        $("#fechaRegLink4").val(fechaRegLink);
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

    function abrirModal6(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, fechaRegPreAuto) {
        $("#btnModal-enviarAutorizado").click();
        $("#id_proyecto6").val(id_proyecto);
        $("#nProyecto6").val(nProyecto);
        $("#id_recPzsDanadas6").val(id_recPzsDanadas);
        $("#id_solPzsDanadas6").val(id_solPzsDanadas);
        $("#id_regCompraInicial6").val(id_regCompraInicial);
        $("#fechaRegPreAuto6").val(fechaRegPreAuto);
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

    function abrirModal8(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado) {
        $("#btnModal-enviarAutoProceSurtPzs").click();
        $("#id_proyecto8").val(id_proyecto);
        $("#nProyecto8").val(nProyecto);
        $("#id_recPzsDanadas8").val(id_recPzsDanadas);
        $("#id_solPzsDanadas8").val(id_solPzsDanadas);
        $("#id_regCompraInicial8").val(id_regCompraInicial);
        $("#id_autorizado8").val(id_autorizado);
        $("#tituloModal8").html(nProyecto);
    }

    function abrirModal9(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_pzsEntregadas) {
        $("#btnModal-regresarAutorizado").click();
        $("#id_proyecto9").val(id_proyecto);
        $("#nProyecto9").val(nProyecto);
        $("#id_recPzsDanadas9").val(id_recPzsDanadas);
        $("#id_solPzsDanadas9").val(id_solPzsDanadas);
        $("#id_regCompraInicial9").val(id_regCompraInicial);
        $("#id_autorizado9").val(id_autorizado);
        $("#id_pzsEntregadas9").val(id_pzsEntregadas);
        $("#tituloModal9").html(nProyecto);
    }

    function abrirModal10(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_AutoProceSurtPz) {
        $("#btnModal-enviarPzsEntregadas").click();
        $("#id_proyecto10").val(id_proyecto);
        $("#nProyecto10").val(nProyecto);
        $("#id_recPzsDanadas10").val(id_recPzsDanadas);
        $("#id_solPzsDanadas10").val(id_solPzsDanadas);
        $("#id_regCompraInicial10").val(id_regCompraInicial);
        $("#id_autorizado10").val(id_autorizado);
        $("#id_AutoProceSurtPz10").val(id_AutoProceSurtPz);
        $("#tituloModal10").html(nProyecto);
    }

    function abrirModal11(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_pzsEntregadas) {
        $("#btnModal-regresarAutoProceSurtPzs").click();
        $("#id_proyecto11").val(id_proyecto);
        $("#nProyecto11").val(nProyecto);
        $("#id_recPzsDanadas11").val(id_recPzsDanadas);
        $("#id_solPzsDanadas11").val(id_solPzsDanadas);
        $("#id_regCompraInicial11").val(id_regCompraInicial);
        $("#id_autorizado11").val(id_autorizado);
        $("#id_pzsEntregadas11").val(id_pzsEntregadas);
        $("#tituloModal11").html(nProyecto);
    }

    function abrirModal12(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_pzsEntregadas) {
        $("#btnModal-enviarPzsFirmadasRec").click();
        $("#id_proyecto12").val(id_proyecto);
        $("#nProyecto12").val(nProyecto);
        $("#id_recPzsDanadas12").val(id_recPzsDanadas);
        $("#id_solPzsDanadas12").val(id_solPzsDanadas);
        $("#id_regCompraInicial12").val(id_regCompraInicial);
        $("#id_autorizado12").val(id_autorizado);
        $("#id_pzsEntregadas12").val(id_pzsEntregadas);
        $("#tituloModal12").html(nProyecto);
    }

    function abrirModal13(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_pzsEntregadas, id_pzsFirmadasRec) {
        $("#btnModal-regresarPzsEntregadas").click();
        $("#id_proyecto13").val(id_proyecto);
        $("#nProyecto13").val(nProyecto);
        $("#id_recPzsDanadas13").val(id_recPzsDanadas);
        $("#id_solPzsDanadas13").val(id_solPzsDanadas);
        $("#id_regCompraInicial13").val(id_regCompraInicial);
        $("#id_autorizado13").val(id_autorizado);
        $("#id_pzsEntregadas13").val(id_pzsEntregadas);
        $("#id_pzsFirmadasRec13").val(id_pzsFirmadasRec);
        $("#tituloModal13").html(nProyecto);
    }

    function abrirModal14(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_pzsEntregadas, id_pzsFirmadasRec) {
        $("#btnModal-enviarSuperSurtPzs").click();
        $("#id_proyecto14").val(id_proyecto);
        $("#nProyecto14").val(nProyecto);
        $("#id_recPzsDanadas14").val(id_recPzsDanadas);
        $("#id_solPzsDanadas14").val(id_solPzsDanadas);
        $("#id_regCompraInicial14").val(id_regCompraInicial);
        $("#id_autorizado14").val(id_autorizado);
        $("#id_pzsEntregadas14").val(id_pzsEntregadas);
        $("#id_pzsFirmadasRec14").val(id_pzsFirmadasRec);
        $("#tituloModal14").html(nProyecto);
    }

    function abrirModal15(id_proyecto, nProyecto, id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_pzsEntregadas, id_pzsFirmadasRec, id_superSurtPzs) {
        $("#btnModal-regresarPzsFirmadasRec").click();
        $("#id_proyecto15").val(id_proyecto);
        $("#nProyecto15").val(nProyecto);
        $("#id_recPzsDanadas15").val(id_recPzsDanadas);
        $("#id_solPzsDanadas15").val(id_solPzsDanadas);
        $("#id_regCompraInicial15").val(id_regCompraInicial);
        $("#id_autorizado15").val(id_autorizado);
        $("#id_pzsEntregadas15").val(id_pzsEntregadas);
        $("#id_pzsFirmadasRec15").val(id_pzsFirmadasRec);
        $("#id_superSurtPzs15").val(id_superSurtPzs);
        $("#tituloModal15").html(nProyecto);
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
            <!-- Contador de Registros Table Cotizando -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Cotizando</strong></h2>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Cotizando -->
            <section class="content" id="Cotizando">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Cotizando</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableRecPzsDanadas' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> 1. Cotizando</strong></h4>

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
                                                    <th>Número Solicitud(es) de Pieza(s)</th>
                                                    <th>Número Registro(s) Compra(s)</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
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
                                                    <th>Número Solicitud(es) de Pieza(s)</th>
                                                    <th>Número Registro(s) Compra(s)</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
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

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->
            <!-- Contador de Registros Table Pre-Autorización -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Pre-Autorización</strong></h2>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
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
                                    <h3 class="card-title">Proyectos en Pre-Autorización</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablePreautorizacion' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> 2. Pre-Autorización</strong></h4>
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

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Contador de Registros Table Autorizado -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Autorizado</strong></h2>
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
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Autorizado -->
            <section class="content" id="Autorizado">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Autorizado</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableAutorizado' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> 3. Autorizado</strong></h4>

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
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
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
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarPreAutorizacion" class="btn btn-white" data-toggle="modal" data-target=".regresarPreAutorizacion"></button>
                                        <button id="btnModal-enviarAutoProceSurtPzs" class="btn btn-white" data-toggle="modal" data-target=".enviarAutoProceSurtPzs"></button>
                                        <?php
                                        require '../components/modal-regresarPreAutorizacion.php';
                                        require '../components/modal-enviarAutoProceSurtPzs.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Contador de Registros Table Proceso de Surtido de Piezas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Proceso de Surtido de Piezas</strong></h2>
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
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table  Proceso de Surtido de Piezas -->
            <section class="content" id="ProcesoSurtidoPz">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Proceso de Surtido de Piezas</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableAutoProceSurtPzs' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 4. Proceso de Surtido de Piezas</strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaAutoProceSurtPzs == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableAutoProceSurtPzs" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
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
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarAutorizado" class="btn btn-white" data-toggle="modal" data-target=".regresarAutorizado"></button>
                                        <button id="btnModal-enviarPzsEntregadas" class="btn btn-white" data-toggle="modal" data-target=".enviarPzsEntregadas"></button>
                                        <?php
                                        require '../components/modal-regresarAutorizado.php';
                                        require '../components/modal-enviarPzsEntregadas.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Contador de Registros Table Entregadas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Entregadas</strong></h2>
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
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Piezas Entregadas -->
            <section class="content" id="pzsEntregadas">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Entregadas</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablepzsEntregadas' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 5. Piezas Entregadas </strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPzsEntregadas == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablepzsEntregadas" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
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
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarAutoProceSurtPzs" class="btn btn-white" data-toggle="modal" data-target=".regresarAutoProceSurtPzs"></button>
                                        <button id="btnModal-enviarPzsFirmadasRec" class="btn btn-white" data-toggle="modal" data-target=".enviarPzsFirmadasRec"></button>
                                        <?php
                                        require '../components/modal-regresarAutoProceSurtPzs.php';
                                        require '../components/modal-enviarPzsFirmadasRec.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Contador de Registros Table Piezas Firmadas de Recibido -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Piezas Firmadas de Recibido</strong></h2>
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
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Piezas Firmadas de Recibido -->
            <section class="content" id="pzsFirmadasRec">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Firmadas de Recibido</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablePzsFirmadasRec' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 6. Piezas Firmadas de Recibido </strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPzsFirmadasRec == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablePzsFirmadasRec" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
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
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarPzsEntregadas" class="btn btn-white" data-toggle="modal" data-target=".regresarPzsEntregadas"></button>
                                        <button id="btnModal-enviarSuperSurtPzs" class="btn btn-white" data-toggle="modal" data-target=".enviarSuperSurtPzs"></button>
                                        <?php
                                        require '../components/modal-regresarPzsEntregadas.php';
                                        require '../components/modal-enviarSuperSurtPzs.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Contador de Registros Table Supervisión de Surtido de Piezas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada: Supervisión de Surtido de Piezas</strong></h2>
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
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Supervisión de Surtido de Piezas -->
            <section class="content" id="SuperSurtPzs">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Firmadas de Recibido</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableSuperSurtPzs' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 7. Supervisión de Surtido de Piezas </strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaSuperSurtPzs == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableSuperSurtPzs" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
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
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarPzsFirmadasRec" class="btn btn-white" data-toggle="modal" data-target=".regresarPzsFirmadasRec"></button>
                                        <?php
                                        require '../components/modal-regresarPzsFirmadasRec.php';
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
        <div id="divModalProceSurtPzs"></div>
        <div id="divModalPzasEntregadas"></div>
        <div id="divModalPzasFirmadasRec"></div>
        <div id="divModalSuperSurtPzs"></div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    // btn navegacion
    require '../components/btnRecPzsDanadas.php';
    ?>
    <script src="../ajax/crudRecPzsDanadas.js"></script>
    <script src="../ajax/tablaPreautorizacion.js"></script>
    <script src="../ajax/tableAutorizado.js"></script>
    <script src="../ajax/tableAutoProceSurtPzs.js"></script>
    <script src="../ajax/tablePzsEntregadas.js"></script>
    <script src="../ajax/tablePzsFirmadasRec.js"></script>
    <script src="../ajax/tableSuperSurtPzs.js"></script>
    <script>
        // Actualizar tablas independientes
        $(document).ready(function() {

            tableRecPzsDanadas = $("#tableRecPzsDanadas").DataTable();
            $("#refresh_tableRecPzsDanadas").on("click", function() {
                tableRecPzsDanadas.ajax.reload();
            });

            tablePreautorizacion = $("#tablePreautorizacion").DataTable();
            $("#refresh_tablePreautorizacion").on("click", function() {
                tablePreautorizacion.ajax.reload();
            });

            tableAutorizado = $("#tableAutorizado").DataTable();
            $("#refresh_tableAutorizado").on("click", function() {
                tableAutorizado.ajax.reload();
            });

            tableAutoProceSurtPzs = $("#tableAutoProceSurtPzs").DataTable();
            $("#refresh_tableAutoProceSurtPzs").on("click", function() {
                tableAutoProceSurtPzs.ajax.reload();
            });

            tablepzsEntregadas = $("#tablepzsEntregadas").DataTable();
            $("#refresh_tablepzsEntregadas").on("click", function() {
                tablepzsEntregadas.ajax.reload();
            });

            tablaPzsFirmadasRec = $("#tablaPzsFirmadasRec").DataTable();
            $("#refresh_tablaPzsFirmadasRec").on("click", function() {
                tablaPzsFirmadasRec.ajax.reload();
            });

            tablaPzsFirmadasRec = $("#tableSuperSurtPzs").DataTable();
            $("#refresh_tableSuperSurtPzs").on("click", function() {
                tableSuperSurtPzs.ajax.reload();
            });

        });
    </script>

</body>

</html>