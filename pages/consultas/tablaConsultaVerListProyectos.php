<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.6 Ver Generales Lista de Proyectos | <?php echo $nomComp ?></title>
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
                        <div class="col-sm-8">
                            <h1 class="m-0">Tabla 2.3.6 Ver Generales Lista de Proyectos</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $idP = $_GET['id'];
            $nP = $_GET['nP'];
            $queryR = "SELECT P.fecha_creacion, U.nombres, U.aPaterno, U.aMaterno, valorVenta
            FROM proyectos P 
            INNER JOIN usuarios U ON P.id_capC = U.id_usuario 
            WHERE P.id_proyecto = $idP ";
            $respuestaR = mysqli_query($conexion, $queryR);
            $rowR  = $respuestaR->fetch_assoc();
            $capturista = $rowR['nombres'] . ' ' . $rowR['aPaterno'] . ' ' . $rowR['aMaterno'];

            $queryV = "SELECT P.id_proyecto, C.capValVenta_fecha, U.nombres, U.aPaterno, U.aMaterno
            FROM proyectos P 
            INNER JOIN capvalorventas C ON P.id_proyecto = C.id_proyecto
            INNER JOIN usuarios U ON C.capValVenta = U.id_usuario
            WHERE P.id_proyecto = $idP ";
            $respuestaV = mysqli_query($conexion, $queryV);
            $rowV  = $respuestaV->fetch_assoc();

            if (isset($rowV['nombres'])) {
                $N = $rowV['nombres'];
            }
            if (isset($rowV['aPaterno'])) {
                $P = $rowV['aPaterno'];
            }
            if (isset($rowV['aMaterno'])) {
                $M = $rowV['aMaterno'];
            }
            if (isset($rowV['capValVenta_fecha'])) {
                $F = $rowV['capValVenta_fecha'];
            }

            $queryB = "SELECT P.id_proyecto, P.fecha_borrado, 
            U.nombres, U.aPaterno, U.aMaterno 
            FROM proyectos P 
            INNER JOIN usuarios U ON P.id_capB = U.id_usuario WHERE P.id_proyecto = $idP ";
            $respuestaB = mysqli_query($conexion, $queryB);
            $rowB  = $respuestaB->fetch_assoc();

            if (isset($rowB['nombres'])) {
                $NB = $rowB['nombres'];
            }
            if (isset($rowB['aPaterno'])) {
                $PB = $rowB['aPaterno'];
            }
            if (isset($rowB['aMaterno'])) {
                $MB = $rowB['aMaterno'];
            }
            if (isset($rowB['fecha_borrado'])) {
                $FB = $rowB['fecha_borrado'];
            }

            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro Solicitud Cambio de Placa en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: Número de Proyecto <?php echo $nP ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                            </div>
                                                            <input type='text' class='form-control' value='<?php echo $capturista ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Registro de Proyecto</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $rowR['fecha_creacion'] ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Registro de Proyecto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura de Valor Venta Inicial: <?php echo $rowR['valorVenta']; ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                            </div>
                                                            <input type='text' class='form-control' value='<?php if (!isset($N) and !isset($P) and !isset($M)) {
                                                                                                                echo 'Sin Captura Valor Venta Inicial';
                                                                                                            } else {
                                                                                                                echo $N . ' ' . $P . ' ' . $M;
                                                                                                            } ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Registro de Proyecto</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php
                                                                                                                            if (!isset($F)) {
                                                                                                                                echo 'Sin Captura Valor Venta Inicial';
                                                                                                                            } else {
                                                                                                                                echo $F;
                                                                                                                            } ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Registro de Proyecto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Borrado: Número de Proyecto <?php echo $nP ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                            </div>
                                                            <input type='text' class='form-control' value='<?php if (!isset($NB) and !isset($PB) and !isset($MB)) {
                                                                                                                echo 'Proyecto NO Borrado';
                                                                                                            } else {
                                                                                                                echo $NB . ' ' . $PB . ' ' . $MB;
                                                                                                            } ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Borrador del Proyecto</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php
                                                                                                                            if (!isset($FB)) {
                                                                                                                                echo 'Proyecto NO Borrado';
                                                                                                                            } else {
                                                                                                                                echo $FB;
                                                                                                                            } ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Proyecto Borrado</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</body>

</html>