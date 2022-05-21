<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla 4.2 Autorización de Compras | <?php echo $nomComp ?></title>
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
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <h1 class="m-0">Tabla 4.2 Autorización de Compras</h1>
                        </div>
                        <div class="col-sm-4 col-md-8 col-lg-4">
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
                                    <h3 class="card-title">Tabla solo de consulta</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php if ($super == 1) {
                                } else if ($verTablaBitacoraSolPiezas == 0) { ?>
                                    <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                    <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                    <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                    <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                <?php  } ?>
                                <div class="card-body">
                                    <table id="tableConsultaBitacoraSolPiezas" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                                <th>Etapa del Proyecto (actual)</th>
                                                <th>Suma Costo Credito</th>
                                                <th>Suma Costo Contado</th>
                                                <th>Suma Costos Total</th>
                                            </tr>
                                        </thead>
                                        <tbody> </tbody>
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
                                                <th>Etapa del Proyecto (actual)</th>
                                                <th class="suma">Costo Credito</th>
                                                <th class="suma">Costo Contado</th>
                                                <th class="suma">Costo Contado</th>
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
    <script src="../ajax/tablaConsultaBitacoraSolPiezas.js"></script>

</body>

</html>