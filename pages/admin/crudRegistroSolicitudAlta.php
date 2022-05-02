<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Registro de Solicitud Alta Proyecto | <?php echo $nomComp ?></title>
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
    function abrirModal1(id_proyecto, nProyecto, id_regSolicitud) {
        $("#btbModal-regresarRegSolAltProy").click();
        $("#id_proyecto").val(id_proyecto);
        $("#id_regSolicitud").val(id_regSolicitud);
        $("#nProyecto").html(nProyecto);


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
                            <h1 class="m-0">Tabla 2.4.2 Registro de Solicitud en espera de Alta</h1>
                        </div>
                        <div class="col-sm-4 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Solicitud en espera de alta</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formRegSolicitudAlta.php" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } else if ($regSolAltProy == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formRegSolicitudAlta.php" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regSolAltProy" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } ?>
                                        <!-- <a href="crudProyectosActivos.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.4.1 Tabla Proyectos Activos para realizar Solicitud"><i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i></a>
                                        <a href="crudAltaProyecto.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.5 Tabla Alta Proyecto"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></a> -->

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaRegSolAltProy == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableRegSolAltaProy" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Fecha Registro Solicitud de Alta</th>
                                                <th>Cronometro Solicitud en espera de Alta</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Fecha Registro Solicitud de Alta</th>
                                                <th>Cronometro Solicitud en espera de Alta</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btbModal-regresarRegSolAltProy" class="btn btn-white" data-toggle="modal" data-target=".regresarRegSolAltProy"></button>
                                    <?php
                                    require '../components/modal-regresarRegSolAltProy.php';
                                    // require '../components/modal-verRegSolAltProy.php';
                                    ?>
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
    require '../components/scripts-dataTables.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        // regSolAltProy  2.4.2 REGISTRO DE SOLICITUD ALTA DE PROYECTO --------------------------------------------------------------
        $(document).ready(function() {
            $("#regSolAltProy").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.4.2 REGISTRO DE SOLICITUD ALTA DE PROYECTO, consulta al administrador!")

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

        // pdfRegSolAltProy 2.4.3 DESCARGAR PDF REGISTRO DE SOLICITUD ALTA PROYECTO --------------------------------------------------------------
        $(document).ready(function() {
            $("#pdfRegSolAltProy").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.4.2.1 DESCARGAR PDF REGISTRO DE SOLICITUD ALTA PROYECTO, consulta al administrador!")

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
    </script>
</body>


</html>
<!-- 
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, 
A.anio, R.id_regSolicitud, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.borrado, R.fecha_creacion, 
Co.color, S.semana, U.nombres, U.aPaterno, U.aMaterno,
TA.tecArmador, TM1.tecMontador AS TM1, TM2.tecMontador AS TM2, TM3.tecMontador AS TM3, TM4.tecMontador AS TM4
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co ON V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto
INNER JOIN semanas S ON R.id_semana = S.id_semana
INNER JOIN usuarios U ON R.id_capC = U.id_usuario
INNER JOIN tecarmadores TA ON R.tecArmador = TA.id_tecArmador
INNER JOIN tecmontadores TM1 ON R.tecMontador1 = TM1.id_tecMontador
INNER JOIN tecmontadores TM2 ON R.tecMontador2 = TM2.id_tecMontador
INNER JOIN tecmontadores TM3 ON R.tecMontador3 = TM3.id_tecMontador
INNER JOIN tecmontadores TM4 ON R.tecMontador4 = TM4.id_tecMontador
WHERE P.registroSolicitud = 1 AND R.borrado = 0 ORDER BY fecha_creacion DESC -->