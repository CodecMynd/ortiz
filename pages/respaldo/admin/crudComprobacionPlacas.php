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

    function abrirModal3(id_proyecto, nProyecto) {
        $("#btnMmodal-eliminarComPlaca").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#tituloModal3").html(nProyecto);
    }

    function abrirModal4(id_proyecto, nProyecto) {
        $("#btnMmodal-eliminarComPlacaSuper").click();
        $("#id_proyecto4").val(id_proyecto);
        $("#nProyecto4").val(nProyecto);
        $("#tituloModal4").html(nProyecto);
    }
    function abrirModal5(id_proyecto, nProyecto, nOrden, linkComPlaca ) {
        $("#btnMmodal-verGralComPlacas").click();
        $("#id_proyecto5").val(id_proyecto);
        $("#nProyecto5").val(nProyecto);
        $("#nOrden").val(nOrden);
        $("#linkComPlaca5").val(linkComPlaca);


        $("#tituloModal5").html(nProyecto);
        $("#nOrden").html(nOrden);
        $("#linkComPlaca5").html(linkComPlaca);
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
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla 2.3.9 Lista Comprobación de Placas</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div id="#respuestaNuevoRegComPlaca"></div>

            <!-- Table Comprobcion de placas -->
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
                                <!-- consulta sql -->
                                <?php
                                // $cont = 0;
                                // if ($super == 1) {
                                // $query = "SELECT id_proyecto, nProyecto, nOrden, comPlacas, estadoProyectoEliminado, comSuperPlaca, nombres, aPaternoCliente, aMaternoCliente, placa, marca, modelo, anio, color
                                // FROM test
                                // ORDER BY nProyecto DESC";
                                //     $query = "SELECT * FROM vplacas ";
                                // } else if ($verTablaComPlacas == 1) {
                                //     $query = "SELECT * FROM vplacas ";
                                // } else {
                                //     $query = "SELECT id_proyecto
                                //     FROM proyectos WHERE id_proyecto = 0";
                                // }
                                // $resultado = mysqli_query($conexion, $query);
                                // 
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaComPlacas == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableComPlacas" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto 1</th>
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
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Cliente</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>



                                    <button id="btnModal-regComPlaca" class='btn btn-secondary' data-toggle='modal' data-target='.regComPlacas'></button>
                                    <button id="btnModal-regComPlacaSuper" class='btn btn-secondary' data-toggle='modal' data-target='.regComPlacasSuper'></button>
                                    <button id="btnMmodal-eliminarComPlaca" class='btn btn-secondary' data-toggle='modal' data-target='.borrarComPlaca'></button>
                                    <button id="btnMmodal-eliminarComPlacaSuper" class='btn btn-secondary' data-toggle='modal' data-target='.borrarComPlacaSuper'></button>
                                    <button id="btnMmodal-verGralComPlacas" class='btn btn-secondary' data-toggle='modal' data-target='.verGralComPlacas'></button>
                                    <?php
                                    require '../components/modal-regComPlaca.php';
                                    require '../components/modal-regComPlacaSuper.php';
                                    require '../components/modal-eliminarComPlaca.php';
                                    require '../components/modal-eliminarComPlacaSuper.php';
                                    require '../components/modal-verGralComPlacas.php';

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
<!-- SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comPlacas, P.estadoProyectoEliminado, P.comSuperPlaca,
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
LEFT JOIN usuarios UCS ON CS.id_capC = UCS.id_usuario -->