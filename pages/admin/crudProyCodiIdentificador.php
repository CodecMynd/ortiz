<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Proyectos con Código Identificador | <?php echo $nomComp ?></title>
<link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
<script>
    function abrirModal1(id_proyecto, nProyecto, id_regcodidenti, codIdProyBase, folioCodID) {
        $("#btnModal-regresarRegCodIdentificador").click();
        $("#id_proyecto").val(id_proyecto);
        $("#nProyecto").val(nProyecto);
        $("#id_regcodidenti").val(id_regcodidenti);
        $("#codIdProyBase").val(codIdProyBase);
        $("#folioCodID").val(folioCodID);
        $("#numP").html(nProyecto);
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
                            <h1 class="m-0">Tabla 2.6.1 Proyectos con Código Identificador</h1>
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
                        <div class="col-md-12 col-sm-11">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Código Identificador en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 or $regCodIdentificador == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/FormRegCodIdentificador.php" data-toggle="tooltip" data-placement="left" title="2.6.1.1 Registro de Código Identificador"><i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Código Identificador</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regCodIdentificador" data-toggle="tooltip" data-placement="left" title="2.6.1.1 Registro de Código Identificador">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Código Identificador</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaCodIdentificador == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableProyCodId" class="table table-sm table-bordered table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Fecha Registro</th>
                                                <th>Código Identificador Valor Base</th>
                                                <th>Núm Folio Código ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Valor Cobro Proyecto Base</th>
                                                <th>Semana Solicitud de Alta</th>
                                                <th>Semana de Alta</th>
                                                <th>Semana de Cobro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Fecha Registro</th>
                                                <th>Código Identificador Valor Base</th>
                                                <th>Núm Folio Código ID</th>
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
                                    <button id="btnModal-regresarRegCodIdentificador" class="btn btn-white" data-toggle="modal" data-target=".regresarRegCodIdentificador"></button>
                                    <?php
                                    require '../components/modal-regresarRegCodIdentificador.php';
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
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/crudProyCodiIdentificador.js"></script>
</body>
<script>
    // copiar link al portapapeles
    var clipboard = new Clipboard('.btn');
</script>

</html>

<!-- CREATE VIEW vcodidenti AS 
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, 
V.placa, Co.color, M.marca, Mo.modelo, A.anio, 
RS.valorVentaAlta, RC.id_regcodidenti, RC.borrado, RC.folioCodID, RC.fecha_creacion,
S.semana, SC.semanaCobro, D.valCobProyBase, D.codIdProyBase
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
WHERE proyCodIdentificador = 1 AND RC.borrado = 0   -->