<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Ver Link de Video, Observaciones y Generales| <?php echo $nomComp ?></title>
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
                    <div class="row my-3 mx-5">
                        <div class="col-sm-8">
                            <h1 class="m-0">Tabla 2.3.15.1.5 Ver Comprobación y Supervisión de Asesor</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Comprobcion de placas -->
            <?php
            $idP = $_GET['id'];
            $query = "SELECT P.id_proyecto, P.nProyecto, C.fecha_creacion, A.asesor,
            CS.fecha_registro, CS.textSupervision,
            UCS.nombres AS nomSuper, UCS.aPaterno AS patSuper, UCS.aMaterno AS matSuper,
            U.nombres, U.aPaterno, U.aMaterno
            FROM proyectos P
            INNER JOIN comasesor C ON P.id_proyecto = C.id_proyecto
            LEFT JOIN comsupervisionasesor CS ON P.id_proyecto = CS.id_proyecto
            LEFT JOIN asesores A ON C.id_asesor = A.id_asesor
            LEFT JOIN usuarios U ON C.id_capC = U.id_usuario
            LEFT JOIN usuarios UCS ON CS.id_capC = UCS.id_usuario
            WHERE P.id_proyecto = $idP ";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();

            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro Asesor Comprobado y Supervisados en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Comprobación de Asesor </strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='row justify-content-center'>
                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                        </div>
                                                        <input type='text' class='form-control' value='<?php if (empty($row['asesor'])) {
                                                                                                            echo 'Sin Registro';
                                                                                                        } else {
                                                                                                            echo $row['asesor'];
                                                                                                        } ?>' disabled readonly>
                                                        <label for='floatingInput' class='pl-5'>Comprobación de Asignación de Asesor</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                        </div>
                                                        <input type='text' class='form-control' value='<?php if(empty($row['nombres']) AND empty($row['aPaterno']) AND empty($row['aMaterno']) ){
                                                            echo 'Sin Registro';
                                                        } else {
                                                            echo $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'];
                                                        } ?>' disabled readonly>
                                                        <label for='floatingInput' class='pl-5'>Capturista: Registro Comprobación de Asesors</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                        </div>
                                                        <input name='' id='' type='text' class='form-control' value='<?php  if (empty($row['fecha_creacion'])) {
                                                            echo 'Sin Registro';
                                                        } else {
                                                            echo $row['fecha_creacion'];
                                                        }  ?>' disabled readonly>
                                                        <label for='floatingInput' class='pl-5'>Fecha: Registro Comprobación de Asesors</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                            <h5 class="mt-3">Registro Supervisión de Comprobación de Asesor: Número de Proyecto <strong><?php  if (empty($row['nProyecto'])) {
                                                            echo 'Sin Registro';
                                                        } else {
                                                            echo $row['nProyecto'];
                                                        }  ?></strong></h5>
                                            <hr>
                                        </div>
                                        <div class="card card-secondary card-outline collapsed-card">
                                            <div class="card-header">
                                                <h2 class="card-title"><strong>Supervisión Comprobación de Asesor</strong></h2>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-12 col-sm-12 my-1'>
                                                        <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                            <label class='ml-5 mb-2'>Supervisión de Comprobación de Asesor</label>
                                                            <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                                <div class='input-group'>
                                                                    <div class='input-group-prepend'>
                                                                        <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                                    </div>
                                                                    <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega Registro Supervisión de Comprobación de Asesor' readonly><?php if (empty($row['textSupervision'])) {
                                                                                                            echo 'Sin Registro';
                                                                                                        } else {
                                                                                                            echo $row['textSupervision'];
                                                                                                        } ?></textarea>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                            </div>
                                                            <input type='text' class='form-control' value='<?php if(empty($row['nomSuper']) AND empty($row['patSuper']) AND empty($row['matSuper']) ){
                                                            echo 'Sin Registro';
                                                        } else {
                                                            echo $row['nomSuper'].' '.$row['patSuper'].' '.$row['matSuper'];
                                                        } ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Registro Supervisión</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php  if (empty($row['fecha_registro'])) {
                                                            echo 'Sin Registro';
                                                        } else {
                                                            echo $row['fecha_registro'];
                                                        }  ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Registro Supervisión</label>
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