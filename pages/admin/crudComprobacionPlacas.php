<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Comprobación de Placas | <?php echo $nomComp ?></title>

<script>
    function abrirModal1(id_proyecto, nProyecto) {
        $("#btnModal-regComPlaca").click();
        $("#id_proyecto").val(id_proyecto);
        $("#nProyecto").val(nProyecto);
        $("#tituloModal1").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto) {
        $("#btnModal-regComPlacaSuper").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto").val(nProyecto);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal3(id_proyecto, nProyecto, id_complaca) {
        $("#btnMmodal-eliminarComPlaca").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_complaca3").val(id_complaca);
        $("#tituloModal3").html(nProyecto);
    }

    function abrirModal4(id_proyecto, nProyecto, id_comSupervision) {
        $("#btnMmodal-eliminarComPlacaSuper").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#id_comSupervision4").val(id_comSupervision);
        $("#tituloModal4").html(nProyecto);
    }

    // function abrirModal5(id_proyecto, nProyecto, nOrden, linkComPlaca, UPN, UPP, UPM, fecha_creacion, textSupervision, UCSN, UCSP, UCSM, CSF) { // 13 en total
    function abrirModal5(id_proyecto, nProyecto, nOrden) { // 13 en total

        $("#btnMmodal-verGralComPlacas").click();
        $("#id_proyecto5").val(id_proyecto);
        $("#nProyecto5").val(nProyecto);
        $("#nOrden").val(nOrden);
        // $("#linkComPlaca").val(linkComPlaca);
        // $("#UPN").val(UPN); //nombre comprobacion
        // $("#UPP").val(UPP); //paterno comprobacion
        // $("#UPM").val(UPM); //materno comprobacion
        // $("#captComprobacion").val(UPN+' '+UPP+' '+UPM); // concatenado

        // $("#fecha_creacion").val(fecha_creacion);
        // $("#UCSN").val(UCSN); //nombre Supervision
        // $("#UCSP").val(UCSP); //paterno Supervision
        // $("#UCSM").val(UCSM); //matwerno Supervision
        // $("#captSupervision").val(UCSN+' '+UCSP+' '+UCSM); //cocatenado

        // $("#CSF").val(CSF); // Capturista Fecha Supervision


        // $("#textSupervision").html(textSupervision);
        // $("#id_proyecto5").html(id_proyecto);
        // $("#tituloModal5").html(nProyecto);
        // $("#tituloModal5.1").html(nProyecto);
        // $("#nOrden").html(nOrden);

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
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla 2.3.9 Lista Comprobación de Placas</h1>
                        </div>
                        <div class="col-sm-6 ">
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
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
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
                                    <marquee width="100%"  behavior="alternate">
                                        <marquee behavior="alternate">
                                            <p>Consulta optimizada, ultima actualización: <strong>04/04/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Comprobacion de placas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                        
                                <div class="card-body">
                                    <?php
                                    $regComPlacas;
                                    if ($super == 1) {
                                    } else if ($verTablaComPlacas == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableComPlacas" class="display compact table-bordered table-striped" style="width:100%">
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
                                                <th>Cliente</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Fecha Registro</th>
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
                                                <th>Cliente</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Fecha Registro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>



                                    <button id="btnModal-regComPlaca" class='btn btn-white' data-toggle='modal' data-target='.regComPlacas'></button>
                                    <button id="btnModal-regComPlacaSuper" class='btn btn-white' data-toggle='modal' data-target='.regComPlacasSuper'></button>
                                    <button id="btnMmodal-eliminarComPlaca" class='btn btn-white' data-toggle='modal' data-target='.borrarComPlaca'></button>
                                    <button id="btnMmodal-eliminarComPlacaSuper" class='btn btn-white' data-toggle='modal' data-target='.borrarComPlacaSuper'></button>
                                    <?php
                                    require '../components/modal-regComPlaca.php';
                                    require '../components/modal-regComPlacaSuper.php';
                                    require '../components/modal-eliminarComPlaca.php';
                                    require '../components/modal-eliminarComPlacaSuper.php';

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
    <!-- <script src="../../src/js/toastr.js"></script> -->
    <script src="../../src/js/jsComprobacionPlacas.js"></script>
</body>

</html>
<!-- 
CREATE VIEW vplacas as 
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comPlacas, P.estadoProyectoEliminado, P.comSuperPlaca,
C.nombres, C.aPaternoCliente, C.aMaternoCliente,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,
CP.linkComPlaca, CP.fecha_creacion,
UP.nombres AS UPN, UP.aPaterno AS UPP, UP.aMaterno AS UPM,
CS.textSupervision, CS.fecha_registro AS CSF,
UCS.nombres AS UCSN, UCS.aPaterno AS UCSP, UCS.aMaterno AS UCSM
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
INNER JOIN clientes C on P.id_cliente = C.id_cliente
LEFT JOIN complacas CP ON P.id_proyecto = CP.id_proyecto
LEFT JOIN usuarios UP ON CP.id_capC = UP.id_usuario
LEFT JOIN comsupervision CS ON P.id_proyecto = CS.id_proyecto
LEFT JOIN usuarios UCS ON CS.id_capC = UCS.id_usuario 
-->