<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla 2.3.5.3 Ver Generales Asignación de Top | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">2.3.5.3 Ver Generales Asignación de Top</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Comprobcion de placas -->
            <?php
            $id_proyecto = $_GET['id'];
            $nP = $_GET['nP'];
            $query = "SELECT P.id_proyecto, P.nProyecto, 
            T.motivo, T.fecha_creacion, T.id_top,
            U.nombres, U.aPaterno, U.aMaterno
            FROM proyectos P
            LEFT JOIN tops T ON P.id_proyecto = T.id_proyecto
            INNER JOIN usuarios U ON  T.id_capC = U.id_usuario
            WHERE P.id_proyecto = $id_proyecto";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            // (empty($capturista)) ? 'Sin Registro' : $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno']; 
    

            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro Asignación de Top en el sistema: Número de Proyecto <strong><?php echo $nP?></strong></h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Motivo Asignación de Top</strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col 12"><br></div>
                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-5 mb-2'>¿Motivo?</label>
                                                        <span data-toggle='tooltip' title='max. 200 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                                </div>
                                                                <textarea class='form-control' rows='4' placeholder='Agrega Registro Supervisión de Comprobación de Asesor' readonly><?php echo (empty($row['motivo'])) ? 'Sin Registro' : $row['motivo'] ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                        </div>
                                                        <input type='text' class='form-control' value='<?php echo $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno']?>' disabled readonly>
                                                        <label for='floatingInput' class='pl-5'>Capturista: Asignación de Top</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                        </div>
                                                        <input name='' id='' type='text' class='form-control' value='<?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion'] ?>' disabled readonly>
                                                        <label for='floatingInput' class='pl-5'>Fecha: Asignación de Top</label>
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