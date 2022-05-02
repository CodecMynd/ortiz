<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla 2.4.6 Ver Observaciones Registro de Solicitud Alta Proyecto| <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.4.6 Ver Observaciones Registro de Solicitud Alta Proyecto</h1>
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
            $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, 
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
            WHERE P.registroSolicitud = 1 AND R.borrado = 0 ORDER BY fecha_creacion DESC";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $capturista = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
            $inspecCalidad = $row['inspecCalidad'];
            $observCliente = $row['observCliente'];
            $tecArmador = $row['tecArmador']; 
            $TM1 = $row['TM1']; 
            $TM2 = $row['TM2']; 
            $TM3 = $row['TM3']; 
            $TM4 = $row['TM4'];
            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Observaciones Registro de Solicitud Alta Proyecto en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <div class='col-md-12 col-sm-12 my-1'>
                                        <div class="card card-secondary card-outline collapsed-card">
                                            <div class="card-header">
                                                <h2 class="card-title"><strong>Técnicos: <?php echo $row['folioRegSolicitud'] ?></strong></h2>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class="fa-solid fa-user-gear"></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $tecArmador ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5 ml-1'>Técnico Armador</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class="fa-solid fa-people-carry-box"></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $TM1 ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5 ml-1'>Técnico Montador 1</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class="fa-solid fa-people-carry-box"></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $TM2 ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5 ml-1'>Técnico Montador 2</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class="fa-solid fa-people-carry-box"></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $TM3 ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5 ml-1'>Técnico Montador 3</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class="fa-solid fa-people-carry-box"></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $TM4 ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5 ml-1'>Técnico Montador 4</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-secondary card-outline collapsed-card">
                                            <div class="card-header">
                                                <h2 class="card-title"><strong>Observaciones: <?php echo $row['folioRegSolicitud'] ?></strong></h2>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-12 col-sm-12 my-1'>
                                                        <div class='form-group-input'>
                                                            <label class='ml-5 mb-2'>*Observación Inspección de Control de Calidad</label>
                                                            <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                                <div class='input-group'>
                                                                    <div class='input-group-prepend'>
                                                                        <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                                    </div>

                                                                    <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega alguna breve Observación de Inspección de Control Calidad' maxlength='300' required readonly><?php echo $inspecCalidad; ?></textarea>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-12 col-sm-12 my-1'>
                                                        <div class='form-group-input'>
                                                            <label class='ml-5 mb-2'>*Observaciones Para el Cliente</label>
                                                            <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                                <div class='input-group'>
                                                                    <div class='input-group-prepend'>
                                                                        <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                                    </div>
                                                                    <textarea name='observCliente' id='observCliente' class='form-control' rows='4' placeholder='Agrega alguna breve Observación para nuestro Cliente' maxlength='300' required readonly><?php echo $observCliente; ?></textarea>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-secondary card-outline collapsed-card">
                                            <div class="card-header">
                                                <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: <?php echo $row['folioRegSolicitud'] ?></strong></h2>
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
                                                                    <span class='input-group-text'><i class='fa-solid fa-car-side'></i></span>
                                                                </div>
                                                                <input name='' id='modelo' type='text' class='form-control' value='<?php echo $capturista ?>' disabled readonly>
                                                                <label for='floatingInput' class='pl-5'>Capturista: Registro de Solicitud en espera de alta </label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-5 col-sm-12  form-group'>
                                                            <div class='input-group form-floating'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                                </div>
                                                                <input name='' id='' type='text' class='form-control' value='<?php echo $row['fecha_creacion'] ?>' disabled readonly>
                                                                <label for='floatingInput' class='pl-5'>Fecha: Registro de Solicitud en espera de alta</label>
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