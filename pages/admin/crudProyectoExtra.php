<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Crud Captura Proyectos Extras | <?php echo $nomComp ?></title>
<link rel="stylesheet" href="../../src/css/btnRecPzsDanadas.css">
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
<script>
    function abrirModal1(id_proyecto, nProyecto, id_proyExtra, folioProyExtra) {
        $("#btbModal-eliminarProyExtra").click();
        $("#id_proyecto").val(id_proyecto);
        $("#id_proyExtra").val(id_proyExtra);
        $("#folioProyExtra").val(folioProyExtra);
        $("#folioProyExtraText").html(folioProyExtra);
        $("#nProyectoText").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, folioProyExtra, id_proyExtra) {
        $("#btbModal-regSuperProyExtra").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#id_proyExtra2").val(id_proyExtra);
        $("#folioProyExtra2").val(folioProyExtra);
        $("#folioProyExtraText2").html(folioProyExtra);
        $("#nProyectoText2").html(nProyecto);
    }

    function abrirModal3(id_proyExtra, textSupervision, id_comSuperProyExtra, nProyecto) {
        $("#btbModal-eliminarSuperProyExtra").click();
        $("#id_proyExtra3").val(id_proyExtra);
        $("#textSupervision3").val(textSupervision);
        $("#id_comSuperProyExtra3").val(id_comSuperProyExtra);
        $("#textSupervisionText").html(textSupervision);
        $("#nProyectoText3").html(nProyecto);
    }

    function abrirModal4(id_proyecto, nProyecto, id_proyExtra) {
        $("#btbModal-enviarProyExtraUtil").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_proyExtra4").val(id_proyExtra);
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
                            <h1 class="m-0">Tabla 5.1 Captura Proyectos Extras</h1>
                        </div>
                        <div class="col-sm-4 ">
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
                                            <p>Consulta optimizada, ultima actualización: <strong>13/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Proyecto Extra Capturados -->
            <section class="content" id="ProyExtraCapturados">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Proyecto Extra Capturados</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 or $regProyExtra  == 1) {
                                            echo "<a type='button' class='btn btn-secondary' href='../adds/formRegProyectoExtra.php' data-toggle='tooltip' data-placement='left' title='5.1.1 Registro de Proyecto Extra'><i class='fa-solid fa-file-arrow-up'></i></i>&nbsp;&nbsp; Registro de Proyecto Extra</a>";
                                        } else {
                                            echo "<a type='button' class='btn btn-outline-danger' id='regProyExtra ' data-toggle='tooltip' data-placement='left' title='5.1.1 Registro de Proyecto Extra'><i class='fa-solid fa-file-arrow-up'></i></i>&nbsp;&nbsp; Registro de Proyecto Extra</a>";
                                        } ?>
                                        <button class="btn btn-secondary" id='refresh_tableProyExtra' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> 1. Proyectos Extras Capturados</strong></h4>
                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaRegProyExtra == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableProyExtra" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Etapa del Proyecto</th>
                                                    <th>Estado Proyecto Extra</th>
                                                    <th>Núm. Folio Proyecto Extra</th>
                                                    <th>Valor Proyecto Extra</th>
                                                    <th>Link Autorización Whatsapp</th>
                                                    <th>Link de Supervisión</th>
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Etapa del Proyecto</th>
                                                    <th>Estado Proyecto Extra</th>
                                                    <th>Núm. Folio Proyecto Extra</th>
                                                    <th class="suma">Valor Proyecto Extra</th>
                                                    <th>Link Autorización Whatsapp</th>
                                                    <th>Link de Supervisión</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <button id="btbModal-eliminarProyExtra" class="btn btn-white" data-toggle="modal" data-target=".eliminarProyExtra"></button>
                                        <button id="btbModal-regSuperProyExtra" class="btn btn-white" data-toggle="modal" data-target=".regSuperProyExtra"></button>
                                        <button id="btbModal-eliminarSuperProyExtra" class="btn btn-white" data-toggle="modal" data-target=".eliminarSuperProyExtra"></button>
                                        <button id="btbModal-enviarProyExtraUtil" class="btn btn-white" data-toggle="modal" data-target=".enviarProyExtraUtil"></button>
                                        <?php
                                        require '../components/modal-eliminarProyExtra.php';
                                        require '../components/modal-regSuperProyExtra.php';
                                        require '../components/modal-eliminarSuperProyExtra.php';
                                        require '../components/modal-enviarProyExtraUtil.php';
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Proyecto Extra Utilizado -->
            <section class="content" id="ProyExtraUtilizados">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Proyecto Extra Utilizados</h3>
                                    <div class="card-tools">
                                        <?php
                                        // if ($super == 1 or $regProyExtra  == 1) {
                                        //     echo "<a type='button' class='btn btn-secondary' href='../adds/formRegProyectoExtra.php' data-toggle='tooltip' data-placement='left' title='5.1.1 Registro de Proyecto Extra'><i class='fa-solid fa-file-arrow-up'></i></i>&nbsp;&nbsp; Registro de Proyecto Extra</a>";
                                        // } else {
                                        //     echo "<a type='button' class='btn btn-outline-danger' id='regProyExtra ' data-toggle='tooltip' data-placement='left' title='5.1.1 Registro de Proyecto Extra'><i class='fa-solid fa-file-arrow-up'></i></i>&nbsp;&nbsp; Registro de Proyecto Extra</a>";
                                        // } 
                                        ?>
                                        <button class="btn btn-secondary" id='refresh_tableProyExtraUtil' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> 2. Proyectos Extras Utilizados</strong></h4>
                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablaRegProyExtra == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableProyExtraUtil" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Etapa del Proyecto</th>
                                                    <th>Núm. Folio Proyecto Extra</th>
                                                    <th>Valor Proyecto Extra</th>
                                                    <th>Núm. Folio Proyecto Extra Utilizado</th>
                                                    <th>Semana de Proyecto Utilizado</th>
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
                                                    <th>Estado del Proyecto</th>
                                                    <th>Etapa del Proyecto</th>
                                                    <th>Núm. Folio Proyecto Extra</th>
                                                    <th class="suma">Valor Proyecto Extra</th>
                                                    <th>Núm. Folio Proyecto Extra Utilizado</th>
                                                    <th>Semana de Proyecto Utilizado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- <button id="btbModal-eliminarProyExtra" class="btn btn-white" data-toggle="modal" data-target=".eliminarProyExtra"></button>
                                        <button id="btbModal-regSuperProyExtra" class="btn btn-white" data-toggle="modal" data-target=".regSuperProyExtra"></button>
                                        <button id="btbModal-eliminarSuperProyExtra" class="btn btn-white" data-toggle="modal" data-target=".eliminarSuperProyExtra"></button>
                                        <button id="btbModal-enviarProyExtraUtil" class="btn btn-white" data-toggle="modal" data-target=".enviarProyExtraUtil"></button> -->
                                        <?php
                                        // require '../components/modal-eliminarProyExtra.php';
                                        // require '../components/modal-regSuperProyExtra.php';
                                        // require '../components/modal-eliminarSuperProyExtra.php';
                                        // require '../components/modal-enviarProyExtraUtil.php';
                                        desconectar();
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div id="divModal"></div>
            <div id="divModal2"></div>
        </div>
        <?php
        require '../components/footer.php';
        require '../components/btnRecProyExtras.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/crudProyectoExtra.js"></script>
    <script src="../ajax/crudProyectoExtraUtil.js"></script>

    <script>
        // Actualizar tablas independientes
        $(document).ready(function() {

            tableProyExtra = $("#tableProyExtra").DataTable();
            $("#refresh_tableProyExtra").on("click", function() {
                tableProyExtra.ajax.reload();
            });

            tableProyExtraUtil = $("#tableProyExtraUtil").DataTable();
            $("#refresh_tableProyExtraUtil").on("click", function() {
                tableProyExtraUtil.ajax.reload();
            });
        });
    </script>

</body>

</html>