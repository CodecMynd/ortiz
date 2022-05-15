<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla 2.8.2 Consecutivo Alta Proyecto | <?php echo $nomComp ?></title>
<script>
    function abrirModal1(id_proyecto, nProyecto, id_regAlta) {
        $("#btnModal-regresarAltaProyecto").click();
        $("#id_proyecto").val(id_proyecto);
        $("#id_regAlta").val(id_regAlta);
        $("#nProyecto").val(nProyecto);
        ("#numP1").html(nProyecto);
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
                            <h1 class="m-0">Tabla 2.8.2 Consecutivo Alta Proyecto <small>(Solo Consulta)</small></h1>
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
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Bitácora de Alta Proyectos en el sistema</h3>
                                    <div class="card-tools">
                                        <!-- <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a> -->
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($consAltaProy == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableConsAltaProy" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Estatus Alta Proyecto</th>
                                                <th>Núm. Folio Alta</th>
                                                <th>Cronometro Respuesta a solicitud de Alta</th>
                                                <th>Tiempo Entre Registro y Solicitud</th>
                                                <th>Tiempo Entre Registro y Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana Solicitud de Alta</th>
                                                <th>Semana de Alta</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Fecha Registro Proyecto</th>
                                                <th>Fecha Registro Solicitud Alta</th>
                                                <th>Fecha Registro Alta</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Estatus Alta Proyecto</th>
                                                <th>Núm. Folio Alta</th>
                                                <th>Cronometro Respuesta a solicitud de Alta</th>
                                                <th>Tiempo Entre Registro y Solicitud</th>
                                                <th>Tiempo Entre Registro y Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana Solicitud de Alta</th>
                                                <th>Semana de Alta</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Fecha Registro Proyecto</th>
                                                <th>Fecha Registro Solicitud Alta</th>
                                                <th>Fecha Registro Alta</th>
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
    <script src="../ajax/tablaConsAltaProyecto.js"></script>
</body>

</html>