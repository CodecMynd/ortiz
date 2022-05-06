<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Solicitud Cambio de Placas | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.9.2 Solicitud Cambio de Placas</h1>
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
                                            <p>Consulta optimizada, ultima actualización: <strong>05/05/2022</strong></p>
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
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Solicitudes para cambio de Placas</h3>
                                    <div class="card-tools">
                                    <?php if ($super == 1 OR $solCambioPlacas == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddSolCambioPlacas.php" data-toggle="tooltip" data-placement="left" title="2.3.9.2.1 Registro Solicitud Cambio de Placas"><i class="fa-solid fa-language"></i>&nbsp;&nbsp; Solicitud Cambio de Placas</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="solCambioPlacas" data-toggle="tooltip" data-placement="left" title="2.3.9.2.1 Registro Solicitud Cambio de Placas"><i class="fa-solid fa-language"></i>&nbsp;&nbsp; Solicitud Cambio de Placas</a>
                                        <?php } ?>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSolCambioPlacas == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableSolCambiarPlacas" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Núm. Folio Cambio Placas</th>
                                                <th>Estado Solicitud Cambio Placas</th>
                                                <th>Placas Actual</th>
                                                <th>Placas por Asignar</th>
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
                                                <th>Núm. Folio Cambio Placas</th>
                                                <th>Estado Solicitud Cambio Placas</th>
                                                <th>Placas Actual</th>
                                                <th>Placas por Asignar</th>
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
    require '../components/scripts-dataTables.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        // comprobar NO SE PUEDE HACER UNA SUPERVISION SIN HABER PRIMERO HECHO UNA COMPROBACION DE ASESORS --------------------------------------------------------------
  
        // regComAsesorSuper 2.3.15.3 REGISTRAR COMPROBACIÓN DE ASESOR --------------------------------------------------------------
        $(document).ready(function() {
            $("#verGralcambioPlacasAutorizar ").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.9.2.3 Ver Generales Solicitud Cambio de Placas, consulta al administrador!")

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

        // eliComAsesorSuper 2.3.15.4  ELIMINAR SUPERVISION COMPROBACIÓN DE ASESOR --------------------------------------------------------------
        $(document).ready(function() {
            $("#cambioPlacasAutorizar ").click(function() {
                toastr["error"]("¡No tienes acceso a:2.3.9.2.2 Registrar Autorización Cambio de Placas, consulta al administrador!")

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
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comAsesor, P.estadoProyectoEliminado, P.comSuperAsesor,
C.nombres, C.aPaternoCliente, C.aMaternoCliente,
V.placa, M.marca, Mo.modelo, A.anio, Co.color
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN clientes C on P.id_cliente = C.id_cliente
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud OR P.altaProyecto" -->