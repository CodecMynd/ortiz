<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Supervisión de Registro Código Identificador | <?php echo $nomComp ?></title>
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
    function abrirModal1(id_proyecto, codIdProyBase, nProyecto, id_supervisado) {
        $("#btnModal-regresarSuperCodIdentificador").click();
        $("#id_proyecto").val(id_proyecto);
        $("#codIdProyBase").val(codIdProyBase);
        $("#id_supervisado").val(id_supervisado);
        $("#tituloModal1").html(nProyecto);

    }

    function abrirModal2(id_proyecto, nProyecto, id_regcodidenti) {
        $("#btnModal-generarSuperCodIdentificador").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_regcodidenti2").val(id_regcodidenti);
        $("#tituloModal2").html(nProyecto);

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
                            <h1 class="m-0">Tabla 2.7 Supervisión de Registro Código Identificador </h1>
                        </div>
                        <div class="col-sm-4 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Registros -->
            <section class="content" id="SelectProyCodId">
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
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Activos</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
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
                                <div class="card-footer">
                                    <marquee width="100%" behavior="alternate">
                                        <marquee behavior="alternate">
                                            <p>Consulta optimizada, ultima actualización: <strong>20/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Supervisión de Registro Código Identificador -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-11">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Supervisión de Registro Código Identificador en el sistema</h3>
                                    <div class="card-tools">

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <h3 class="text-center">Tabla<strong> 1. Seleccion de Proyectos con Código Identificador</strong></h3>
                                <?php
                                $cont = 0;
                                $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, 
                                    V.placa, M.marca, Mo.modelo, A.anio, Co.color,
                                    R.folioRegSolicitud, R.valorVentaAlta, RA.folioRegAlta, D.valCobProyBase, D.codIdProyBase, RC.folioCodID
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
                                    INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
                                    INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
                                    INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                                    WHERE proyCodIdentificador = 1 ORDER BY nProyecto ASC";
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSelectProyCodId == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableSelectProyCodId" class="display compact table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Código Identificador</th>
                                                <th>Núm. Folio Código ID</th>
                                                <th>Núm. Folio de Alta</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placa</th>
                                                <th>Color</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Valor Cobro Proyecto Base</th>
                                                <th>Enviar</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Código Identificador</th>
                                                <th>Núm. Folio Código ID</th>
                                                <th>Núm. Folio de Alta</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placa</th>
                                                <th>Color</th>
                                                <th class="suma">Valor Venta Alta</th>
                                                <th class="suma">Valor Cobro Proyecto Base</th>
                                                <th>Enviar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-generarSuperCodIdentificador" class='btn btn-white' data-toggle='modal' data-target='.generarSuperCodIdentificador'></button>
                                    <?php
                                    require '../components/modal-generarSuperCodIdentificador.php';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Supervisión de Registro Código Identificador -->
            <section class="content" id="SuperRegCodID">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-11">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Supervisión de Registro Código Identificador en el sistema</h3>
                                    <div class="card-tools">
                                        <!-- <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formSuperCodIdentificador.php" data-toggle="tooltip" data-placement="left" title="2.7.1 Registro de Supervisión Código Identificador ">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro de Supervisión Código Identificador </a>
                                        <?php } else if ($regSuperCodIdentificador == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formSuperCodIdentificador.php" data-toggle="tooltip" data-placement="left" title="2.7.1 Registro de Supervisión Código Identificador ">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro de Supervisión Código Identificador </a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regSuperCodIdentificador" data-toggle="tooltip" data-placement="left" title="2.7.1 Registro de Supervisión Código Identificador ">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro de Supervisión Código Identificador </a>
                                        <?php } ?>
                                        <a href="crudProyCodiIdentificador.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.6 Proyectos con Código Identificador"><i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i></a> -->

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 2. Consecutivo de Supervisión de Código Identificador</strong></h3>
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSuperCodIdentificador == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableSuperRegCodID" class="display compact table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Folio Supervisión</th>
                                                <th>Código Identificador</th>
                                                <th>Estado Supervisión Código Identificador</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Valor Cobro</th>
                                                <th>Semana de Alta</th>
                                                <th>Semana Solicitud de Alta</th>
                                                <th>Semana de Cobro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Folio Supervisión</th>
                                                <th>Código Identificador</th>
                                                <th>Estado Supervisión Código Identificador</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Semana Solicitud de Alta</th>
                                                <th>Semana de Alta</th>
                                                <th>Semana de Cobro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-regresarSuperCodIdentificador" class='btn btn-white' data-toggle='modal' data-target='.regresarSuperCodIdentificador'></button>
                                    <?php
                                    require '../components/modal-regresarSuperCodIdentificador.php';

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
    <div id="divModal"></div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    // btn navegacion
    require '../components/btnSuperCodId.php';
    ?>
    <script src="../ajax/crudSuperCodiIdentificador.js"></script>
    <script src="../ajax/selectProyCodId.js"></script>
    <script>
        function mostrarDetalles(id_proyecto) {
            var ruta = '../components/modal-verGralSupCodId.php?id_proyecto=' + id_proyecto;
            $.get(ruta, function(data) {
                $('#divModal').html(data);
                $('#modal-verGralSupCodId').modal('show');
            });
        }
    </script>

</body>

</html>
<!-- VISTA 
CREATE VIEW vsupercodid as 
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, Co.color, M.marca, Mo.modelo, A.anio, RS.valorVentaAlta, RC.id_regcodidenti,S.semana, SC.semanaCobro, D.valCobProyBase, D.codIdProyBase, SU.compCodId, SU.folioSupervision
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co ON V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto  
INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
INNER JOIN semanas S ON RS.id_semana = S.id_semana
INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto 
INNER JOIN supervisado SU ON P.id_proyecto = SU.id_proyecto
WHERE superCodIdentificador = 1 AND D.borrado = 0
-->