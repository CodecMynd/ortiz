<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Solicitud Cambio de Semana de Alta | <?php echo $nomComp ?></title>
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
    //  function abrirModal1(id_proyecto, nProyecto, id_cambioPlaca) {
    //      $("#btnModal-regCambioPlacasAutorizar").click();
    //      $("#id_proyecto").val(id_proyecto);
    //      $("#nProyecto").val(nProyecto);
    //      $("#id_cambioPlacas").val(id_cambioPlaca);
    //      $("#tituloModal").html(nProyecto);
    //  }
    // function abrirModal2(id_proyecto, nProyecto){
    //     $("#btnModal-regComPlacasSuper").click();
    //     $("#id_proyecto1").val(id_proyecto);
    //     $("#nProyecto1").val(nProyecto);
    //     $("#tituloModal1").html(nProyecto);
    // }
    // function abrirModal3(id_proyecto, nProyecto){
    //     $("#btnModal-verGralComPlacas").click();
    //     $("#id_proyecto2").val(id_proyecto);
    //     $("#tituloModal2").html(nProyecto);
    // }
    // function abrirModal4(id_proyecto, nProyecto, id_comPlacas){
    //     $("#btnModal-eliminarComPlacas").click();
    //     $("#id_proyecto3").val(id_proyecto);
    //     $("#id_comPlacas3").val(id_comPlacas);
    //     $("#tituloModal3").html(nProyecto);
    // }
    // function abrirModal5(id_proyecto, nProyecto, id_comSupervision){
    //     $("#btnModal-eliminarComPlacasSuper").click();
    //     $("#id_proyecto4").val(id_proyecto);
    //     $("#id_comSupervision4").val(id_comSupervision);
    //     $("#tituloModal4").html(nProyecto);
    // }
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
                            <h1 class="m-0">Tabla 2.3.17 Solicitud Cambio de Semana de Alta</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Registros -->
            <!-- <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tablas en uso</strong></h2>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>16/05/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Table Comprobcion de placas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Solicitudes para Cambio de Semana de Alta</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 or $solCamSemanaAltas == 1) { 
                                           echo '<a type="button" class="btn btn-secondary" href="../adds/formRegSolAltaCamSemanaAlta.php" data-toggle="tooltip" data-placement="left" title="2.3.17.1 Solicitar Cambio Semana de Alta"><i class="fa-solid fa-calendar-xmark"></i>&nbsp;&nbsp; Solicitar Cambio Semana de Alta</a>';
                                        } else { 
                                            echo '<a type="button" class="btn btn-outline-danger" id="solCamSemanaAltas" data-toggle="tooltip" data-placement="left" title="2.3.17.1 Solicitar Cambio Semana de Alta"><i class="fa-solid fa-calendar-xmark"></i>&nbsp;&nbsp; Solicitar Cambio Semana de Alta</a>';
                                        } ?>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSolCamSemanaAltas == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableSolCamSemanaAltas" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Núm. Folio Solicitud Cambio Semana de Alta</th>
                                                <th>Estado Solicitud Cambio Semana de Alta</th>
                                                <th>Semana de Alta Actual</th>
                                                <th>Semana de Alta por Asignar</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Color</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                            <th>#</th>
                                                <th>ID</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Núm. Folio Solicitud Cambio Semana de Alta</th>
                                                <th>Estado Solicitud Cambio Semana de Alta</th>
                                                <th>Semana de Alta Actual</th>
                                                <th>Semana de Alta por Asignar</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Color</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php
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
    require '../ajax/plugins-datatable.php';
    ?>
    <!-- avisos -->
    <script src="../ajax/crudSolicitudCambioSemanaAlta.js"></script>
</body>

</html>