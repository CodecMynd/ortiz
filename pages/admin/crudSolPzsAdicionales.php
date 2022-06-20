<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Solicitud de Piezas Adicionales | <?php echo $nomComp ?></title>
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
    function abrirModal1(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic) {
        $("#btnModal-regSolPzsAdicionales").click();
        $("#id_proyecto1").val(id_proyecto);
        $("#nProyecto1").val(nProyecto);
        $("#id_regSolpzadicional1").val(id_regSolpzadicional)
        $("#id_cotizandoPzsAdic1").val(id_cotizandoPzsAdic)
        $("#tituloModal1").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, id_cotizandoPzsAdic) {
        $("#btnModal-eliminarRegSolPzsAdicionales").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_cotizandoPzsAdic2").val(id_cotizandoPzsAdic);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal3(id_proyecto, nProyecto, id_cotizandoPzsAdic, id_regSolpzadicional) {
        $("#btnModal-enviarPreAutorizacionPzsAdic").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_cotizandoPzsAdic3").val(id_cotizandoPzsAdic);
        $("#id_regSolpzadicional3").val(id_regSolpzadicional);
        $("#tituloModal3").html(nProyecto);
    }

    function abrirModal4(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic) {
        $("#btnModal-regresarCotizandoPzsAdic").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_regSolpzadicional4").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic4").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic4").val(id_preAutorizadoPzsAdic);
        $("#tituloModal4").html(nProyecto);
    }

    function abrirModal5(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic) {
        $("#btnModal-enviarAutorizadoPzsAdic").click();
        $("#id_proyecto5").val(id_proyecto);
        $("#nProyecto5").val(nProyecto);
        $("#id_regSolpzadicional5").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic5").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic5").val(id_preAutorizadoPzsAdic);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal6(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic) {
        $("#btnModal-regresarPreAutorizacionPzsAdic").click();
        $("#id_proyecto6").val(id_proyecto);
        $("#nProyecto6").val(nProyecto);
        $("#id_regSolpzadicional6").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic6").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic6").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic6").val(id_autorizadoPzsAdic);
        $("#tituloModal6").html(nProyecto);
    }

    function abrirModal7(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic) {
        $("#btnModal-enviarAutoProceSurtPzsAdic").click();
        $("#id_proyecto7").val(id_proyecto);
        $("#nProyecto7").val(nProyecto);
        $("#id_regSolpzadicional7").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic7").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic7").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic7").val(id_autorizadoPzsAdic);
        $("#tituloModal7").html(nProyecto);
    }

    function abrirModal8(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic, id_AutoProceSurtPzAdic) {
        $("#btnModal-regresarAutorizadoPzsAdic").click();
        $("#id_proyecto8").val(id_proyecto);
        $("#nProyecto8").val(nProyecto);
        $("#id_regSolpzadicional8").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic8").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic8").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic8").val(id_autorizadoPzsAdic);
        $("#id_AutoProceSurtPzAdic8").val(id_AutoProceSurtPzAdic);
        $("#tituloModal8").html(nProyecto);
    }

    function abrirModal9(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic, id_AutoProceSurtPzAdic) {
        $("#btnModal-enviarPzsEntregadasPzsAdic").click();
        $("#id_proyecto9").val(id_proyecto);
        $("#nProyecto9").val(nProyecto);
        $("#id_regSolpzadicional9").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic9").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic9").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic9").val(id_autorizadoPzsAdic);
        $("#id_AutoProceSurtPzAdic9").val(id_AutoProceSurtPzAdic);
        $("#tituloModal9").html(nProyecto);
    }

    function abrirModal10(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic, id_AutoProceSurtPzAdic, id_pzsEntregadasAdic) {
        $("#btnModal-regresarAutoProceSurtPzsAdic").click();
        $("#id_proyecto10").val(id_proyecto);
        $("#nProyecto10").val(nProyecto);
        $("#id_regSolpzadicional10").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic10").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic10").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic10").val(id_autorizadoPzsAdic);
        $("#id_AutoProceSurtPzAdic10").val(id_AutoProceSurtPzAdic);
        $("#id_pzsEntregadasAdic10").val(id_pzsEntregadasAdic);
        $("#tituloModal10").html(nProyecto);
    }

    function abrirModal11(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic, id_AutoProceSurtPzAdic, id_pzsEntregadasAdic) {
        $("#btnModal-enviarPzsFirmadasRecAdic").click();
        $("#id_proyecto11").val(id_proyecto);
        $("#nProyecto11").val(nProyecto);
        $("#id_regSolpzadicional11").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic11").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic11").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic11").val(id_autorizadoPzsAdic);
        $("#id_AutoProceSurtPzAdic11").val(id_AutoProceSurtPzAdic);
        $("#id_pzsEntregadasAdic11").val(id_pzsEntregadasAdic);
        $("#tituloModal11").html(nProyecto);
    }

    function abrirModal12(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic, id_AutoProceSurtPzAdic, id_pzsEntregadasAdic, id_pzsFirmadasRecAdic) {
        $("#btnModal-regresarPzsEntregadasAdic").click();
        $("#id_proyecto12").val(id_proyecto);
        $("#nProyecto12").val(nProyecto);
        $("#id_regSolpzadicional12").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic12").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic12").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic12").val(id_autorizadoPzsAdic);
        $("#id_AutoProceSurtPzAdic12").val(id_AutoProceSurtPzAdic);
        $("#id_pzsEntregadasAdic12").val(id_pzsEntregadasAdic);
        $("#id_pzsFirmadasRecAdic12").val(id_pzsFirmadasRecAdic);
        $("#tituloModal12").html(nProyecto);
    }

    function abrirModal13(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic, id_AutoProceSurtPzAdic, id_pzsEntregadasAdic, id_pzsFirmadasRecAdic) {
        $("#btnModal-enviarSuperSurtPzsAdic").click();
        $("#id_proyecto13").val(id_proyecto);
        $("#nProyecto13").val(nProyecto);
        $("#id_regSolpzadicional13").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic13").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic13").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic13").val(id_autorizadoPzsAdic);
        $("#id_AutoProceSurtPzAdic13").val(id_AutoProceSurtPzAdic);
        $("#id_pzsEntregadasAdic13").val(id_pzsEntregadasAdic);
        $("#id_pzsFirmadasRecAdic13").val(id_pzsFirmadasRecAdic);
        $("#tituloModal13").html(nProyecto);
    }

    function abrirModal14(id_proyecto, nProyecto, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_autorizadoPzsAdic, id_AutoProceSurtPzAdic, id_pzsEntregadasAdic, id_pzsFirmadasRecAdic, id_superSurtPzsAdic) {
        $("#btnModal-regresarPzsFirmadasRecAdic").click();
        $("#id_proyecto14").val(id_proyecto);
        $("#nProyecto14").val(nProyecto);
        $("#id_regSolpzadicional14").val(id_regSolpzadicional);
        $("#id_cotizandoPzsAdic14").val(id_cotizandoPzsAdic);
        $("#id_preAutorizadoPzsAdic14").val(id_preAutorizadoPzsAdic);
        $("#id_autorizadoPzsAdic14").val(id_autorizadoPzsAdic);
        $("#id_AutoProceSurtPzAdic14").val(id_AutoProceSurtPzAdic);
        $("#id_pzsEntregadasAdic14").val(id_pzsEntregadasAdic);
        $("#id_superSurtPzsAdic14").val(id_superSurtPzsAdic);
        $("#tituloModal14").html(nProyecto);
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
                            <h1 class="m-0">Tabla 4.2 Solicitud de Piezas Adicionales</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Registros Cotizando: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Cotizando: Piezas Adicionales</strong></h2>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Cotizando Solicitud de Piezas Adicionales-->
            <section class="content" id="Cotizando">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Cotizando: Solicitud de Piezas Adicionales</h3>
                                    <div class="card-tools">
                                        <?php
                                        if ($super == 1 or $regSolPzsAdicionales == 1) {
                                            echo '<a type="button" class="btn btn-secondary" href="../adds/formRegSolPzsAdicionales.php" data-toggle="tooltip" data-placement="left" title="4.2.1 Registro de Solicitud de Piezas Adicionales"><i class="fa-solid fa-hammer"></i>&nbsp;&nbsp;Registro de Solicitud de Piezas Adicionales</a>';
                                        } else {
                                            echo '<a type="button" class="btn btn-outline-danger" id="regSolPzsAdicionales" data-toggle="tooltip" data-placement="left" title="4.2.1 Registro de Solicitud de Piezas Adicionales"><i class="fa-solid fa-hammer"></i>&nbsp;&nbsp;Registro de Solicitud de Piezas Adicionales</a>';
                                        }
                                        ?>
                                        <button class="btn btn-secondary" id='refresh_tableSolPzsAdicionales' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 1. Cotizando: Piezas Adicionales</strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaSolPzsAdicionales == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableSolPzsAdicionales" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Estado de la Solicitud</th>
                                                    <th>Modalidad de Pago</th>
                                                    <th>Costo Crédito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
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
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Estado de la Solicitud</th>
                                                    <th>Modalidad de Pago</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regSolPzsAdicionales" class="btn btn-white" data-toggle="modal" data-target='.regSolPzsAdicionales'></button>
                                        <button id="btnModal-eliminarRegSolPzsAdicionales" class="btn btn-white" data-toggle="modal" data-target=".eliminarRegSolPzsAdicionales"></button>
                                        <button id="btnModal-enviarPreAutorizacionPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".enviarPreAutorizacionPzsAdic"></button>
                                        <?php
                                        require '../components/modal-regSolPzsAdicionales.php';
                                        require '../components/modal-eliminarRegSolPzsAdicionales.php';
                                        require '../components/modal-enviarPreAutorizacionPzsAdic.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------------------------------------------------------------------- -->
            <!-- Contador de Registros Pre-Autorización: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Pre-Autorización: Piezas Adicionales</strong></h2>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/06/2022</strong></p>
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
                                    <h3 class="card-title">Proyectos en Pre-Autorización: Piezas Adicionales</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablePreautorizacionPzsAdic' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 2. Pre-Autorización: Piezas Adicionales</strong></h4>
                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPreautorizacionPzsAdic == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablePreautorizacionPzsAdic" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                        <button id="btnModal-regresarCotizandoPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".regresarCotizandoPzsAdic"></button>
                                        <button id="btnModal-enviarAutorizadoPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".enviarAutorizadoPzsAdic"></button>
                                        <?php
                                        require '../components/modal-regresarCotizandoPzsAdic.php';
                                        require '../components/modal-enviarAutorizadoPzsAdic.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------------------------------------------------------------------- -->
            <!-- Contador de Registros Autorizado: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Autorizado: Piezas Adicionales</strong></h2>
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
            <!-- Table Autorizado: Piezas Adicionales -->
            <section class="content" id="Autorizado">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Autorizado: Piezas Adicionales</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableAutorizadoPzsAdic' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 3. Autorizado: Piezas Adicionales</strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaAutorizadoPzsAdic == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableAutorizadoPzsAdic" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Modalidad de Pago</th>
                                                    <th>Costo Crédito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
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
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
                                                    <th>Cronometro Cotizando / Pre-Autorizado</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarPreAutorizacionPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".regresarPreAutorizacionPzsAdic"></button>
                                        <button id="btnModal-enviarAutoProceSurtPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".enviarAutoProceSurtPzsAdic"></button>
                                        <?php
                                        require '../components/modal-regresarPreAutorizacionPzsAdic.php';
                                        require '../components/modal-enviarAutoProceSurtPzsAdic.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------------------------------------------------------------------- -->
            <!-- Contador de Registros Proceso de Surtido de Piezas: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Proceso de Surtido de Piezas: Piezas Adicionales</strong></h2>
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
            <!-- Table  Proceso de Surtido de Piezas: Piezas Adicionales -->
            <section class="content" id="ProcesoSurtidoPz">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Proceso de Surtido de Piezas: Piezas Adicionales</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableAutoProceSurtPzsAdic' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 4. Proceso de Surtido de Piezas: Piezas Adicionales</strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaAutoProceSurtPzsAdic == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableAutoProceSurtPzsAdic" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Modalidad de Pago</th>
                                                    <th>Costo Crédito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
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
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
                                                    <th>Cronometro Cotizando / Pre-Autorizado</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarAutorizadoPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".regresarAutorizadoPzsAdic"></button>
                                        <button id="btnModal-enviarPzsEntregadasPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".enviarPzsEntregadasPzsAdic"></button>
                                        <?php
                                        require '../components/modal-regresarAutorizadoPzsAdic.php';
                                        require '../components/modal-enviarPzsEntregadasPzsAdic.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------------------------------------------------------------------- -->
            <!-- Contador de Registros Piezas Entregadas: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Piezas Entregadas: Piezas Adicionales</strong></h2>
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
                                    <h3 class="card-title">Proyectos en Piezas Entregadas: Piezas Adicionales</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablepzsEntregadasAdic' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 5. Piezas Entregadas: Piezas Adicionales </strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPzsEntregadasAdic == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablepzsEntregadasAdic" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Modalidad de Pago</th>
                                                    <th>Costo Crédito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Núm Folio Pieza Entregada Adicional</th>
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
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
                                                    <th>Núm Folio Pieza Entregada Adicional</th>
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
                                                    <th>Cronometro Cotizando / Pre-Autorizado</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarAutoProceSurtPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".regresarAutoProceSurtPzsAdic"></button>
                                        <button id="btnModal-enviarPzsFirmadasRecAdic" class="btn btn-white" data-toggle="modal" data-target=".enviarPzsFirmadasRecAdic"></button>
                                        <?php
                                        require '../components/modal-regresarAutoProceSurtPzsAdic.php';
                                        require '../components/modal-enviarPzsFirmadasRecAdic.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------------------------------------------------------------------- -->
            <!-- Contador de Registros Piezas Firmadas de Recibido: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Piezas Firmadas de Recibido: Piezas Adicionales</strong></h2>
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
            <!-- Table Piezas Firmadas de Recibido: Piezas Adicionales -->
            <section class="content" id="pzsFirmadasRec">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Firmadas de Recibido: Piezas Adicionales</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablePzsFirmadasRecAdic' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 6. Piezas Firmadas de Recibido: Piezas Adicionales </strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaPzsFirmadasRecAdic == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablePzsFirmadasRecAdic" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Modalidad de Pago</th>
                                                    <th>Costo Crédito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Núm Folio Pieza Entregada Adicional</th>
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Autorizado / Piezas Firmadas</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
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
                                                    <th>Núm Folio Pieza Entregada Adicional</th>
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Autorizado / Piezas Firmadas</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
                                                    <th>Cronometro Cotizando / Pre-Autorizado</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarPzsEntregadasAdic" class="btn btn-white" data-toggle="modal" data-target=".regresarPzsEntregadasAdic"></button>
                                        <button id="btnModal-enviarSuperSurtPzsAdic" class="btn btn-white" data-toggle="modal" data-target=".enviarSuperSurtPzsAdic"></button>
                                        <?php
                                        require '../components/modal-regresarPzsEntregadasAdic.php';
                                        require '../components/modal-enviarSuperSurtPzsAdic.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------------------------------------------------------------------- -->
            <!-- Contador de Registros Supervisión de Surtido de Piezas: Piezas Adicionales -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tabla Consultada Supervisión de Surtido de Piezas: Piezas Adicionales</strong></h2>
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
            <!-- Table Supervisión de Surtido de Piezas: Piezas Adicionales -->
            <section class="content" id="SuperSurtPzs">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Firmadas de Recibido: Piezas Adicionales</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableSuperSurtPzsAdic' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 7. Supervisión de Surtido de Piezas: Piezas Adicionales </strong></h4>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaSuperSurtPzsAdic == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableSuperSurtPzsAdic" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Modalidad de Pago</th>
                                                    <th>Costo Crédito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Núm Folio Pieza Entregada Adicional</th>
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Cotizando / Piezas Firmadas</th>
                                                    <th>Cronometro Autorizado / Piezas Firmadas</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
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
                                                    <th>Núm Folio Pieza Entregada Adicional</th>
                                                    <th>Núm Folio Proceso Surtido Pieza Adicional</th>
                                                    <th>Núm Folio Autorizado Pieza Adicional</th>
                                                    <th>Núm Folio Cotizado Pieza Adicional</th>
                                                    <th>Cronometro Cotizando / Piezas Firmadas</th>
                                                    <th>Cronometro Autorizado / Piezas Firmadas</th>
                                                    <th>Cronometro Pre-Autorizado / Autorizado</th>
                                                    <th>Cronometro Cotizando / Pre-Autorizado</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Solicitud Pieza Adicional</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btnModal-regresarPzsFirmadasRecAdic" class="btn btn-white" data-toggle="modal" data-target=".regresarPzsFirmadasRecAdic"></button>
                                        <?php
                                        require '../components/modal-regresarPzsFirmadasRecAdic.php';
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
        <div id="divModal2"></div>
        <div id="divModalPreAuto"></div>
        <div id="divModalProceSurtPzsAdic"></div>
        <div id="divModalPzasEntregadasAdic"></div>
        <div id="divModalPzasFirmadasRecAdic"></div>
        <div id="divModalSuperSurtPzsAdic"></div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    // btn navegacion
    require '../components/btnRecPzsDanadas.php';
    ?>
    <script src="../ajax/crudSolPzsAdicionales.js"></script>
    <script src="../ajax/tablaPreautorizacionPzsAdic.js"></script>
    <script src="../ajax/tableAutorizadoPzsAdic.js"></script>
    <script src="../ajax/tableAutoProceSurtPzsAdic.js"></script>
    <script src="../ajax/tablePzsEntregadasAdic.js"></script>
    <script src="../ajax/tablePzsFirmadasRecAdic.js"></script>
    <script src="../ajax/tableSuperSurtPzsAdic.js"></script>
    <script>
        // Actualizar tablas independientes
        $(document).ready(function() {

            tableSolPzsAdicionales = $("#tableSolPzsAdicionales").DataTable();
            $("#refresh_tableSolPzsAdicionales").on("click", function() {
                tableSolPzsAdicionales.ajax.reload();
            });

            tablePreautorizacionPzsAdic = $("#tablePreautorizacionPzsAdic").DataTable();
            $("#refresh_tablePreautorizacionPzsAdic").on("click", function() {
                tablePreautorizacionPzsAdic.ajax.reload();
            });

            tableAutorizadoPzsAdic = $("#tableAutorizadoPzsAdic").DataTable();
            $("#refresh_tableAutorizadoPzsAdic").on("click", function() {
                tableAutorizadoPzsAdic.ajax.reload();
            });

            tableAutoProceSurtPzsAdic = $("#tableAutoProceSurtPzsAdic").DataTable();
            $("#refresh_tableAutoProceSurtPzsAdic").on("click", function() {
                tableAutoProceSurtPzsAdic.ajax.reload();
            });

            tablepzsEntregadasAdic = $("#tablepzsEntregadasAdic").DataTable();
            $("#refresh_tablepzsEntregadasAdic").on("click", function() {
                tablepzsEntregadasAdic.ajax.reload();
            });

            tablaPzsFirmadasRecAdic = $("#tablaPzsFirmadasRecAdic").DataTable();
            $("#refresh_tablaPzsFirmadasRecAdic").on("click", function() {
                tablaPzsFirmadasRecAdic.ajax.reload();
            });

            tableSuperSurtPzsAdic = $("#tableSuperSurtPzsAdic").DataTable();
            $("#refresh_tableSuperSurtPzsAdic").on("click", function() {
                tableSuperSurtPzsAdic.ajax.reload();
            });

        });
    </script>

</body>

</html>