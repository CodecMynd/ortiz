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
                            <h1 class="m-0">Tabla 2.5.4 Ver Link de Video, Observaciones y Generales</h1>
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
            	$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, 
                R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.fecha_creacion AS regSolFecha_creacion, 
                RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, LV.link, RA.fecha_creacion AS regAltaFecha_creacion, 
                Co.color, S.semana, 
                U.nombres AS regAltaNombre, U.aPaterno AS regAltaPaterno, U.aMaterno AS regAltaMaterno, Us.nombres AS regSolNombres, Us.aPaterno AS regSolPaterno, Us.aMaterno AS regSolMaterno
                FROM proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                INNER JOIN anios A ON V.id_anio = A.id_anio 
                INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
                INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
                INNER JOIN semanas S ON R.id_semana = S.id_semana
                INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
                INNER JOIN usuarios U ON RA.id_capC = U.id_usuario
                INNER JOIN usuarios Us ON R.id_capC = Us.id_usuario
                WHERE altaProyecto = 1 AND P.id_proyecto = $idP ORDER BY nProyecto DESC";
                $respuesta = mysqli_query($conexion, $query);
                $row = $respuesta->fetch_assoc();
  
                $regAltaCapturista = $row['regAltaNombre'] . ' ' . $row['regAltaPaterno'] . ' ' . $row['regAltaMaterno'];
                $regAltaFecha_creacion = $row['regAltaFecha_creacion'];
                $regSolCapturista = $row['regSolNombres'] . ' ' . $row['regSolPaterno'] . ' ' . $row['regSolMaterno'];
                $regSolFecha_creacion = $row['regSolFecha_creacion'];
            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos Comprobado y Supervisados en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->

                                <div class="card-body">
                                    <div class="col-12">
                                        <hr>
                                        <h5 class="mt-3">Registro de Solicitud en espera de Alta: Folio <strong><?php echo $row['folioRegSolicitud'] ?></strong></h5>
                                        <hr>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Observaciones: <?php echo $row['folioRegAlta'] ?></strong></h2>
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
                                                        <label for='' class='pl-5'>*Link de Video en Vivo Alta</label>
                                                        <div class='input-group'>
                                                            <div class='input-group-prepend'>
                                                                <button type="button" class="btn btn-secondary" data-clipboard-target="#link<?php echo $row['nProyecto']; ?>">Copiar Link <i class='fa-solid fa-photo-film'></i></button>
                                                            </div>
                                                            <input name='link' id='link<?php echo $row['nProyecto']; ?>' type='text' class='form-control' value="<?php echo $row['link'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-5 mb-2'>*Observaciones Prueba de Auditoria Final</label>
                                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                                </div>
                                                                <textarea name='observCliente' id='observCliente' class='form-control' rows='4' placeholder='Agrega alguna breve Observación para nuestro Cliente' readonly><?php echo $row['observAudiFinal']; ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: <?php echo $row['folioRegAlta'] ?></strong></h2>
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
                                                            <input name='' id='modelo' type='text' class='form-control' value='<?php echo $regAltaCapturista ?>' readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Registro de Alta Proyecto</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $regAltaFecha_creacion ?>' readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Registro de Alta Proyecto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                        <h5 class="mt-3">Registro de Solicitud en espera de Alta: Folio <strong><?php echo $row['folioRegSolicitud'] ?></strong></h5>
                                        <hr>
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
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-5 mb-2'>*Observación Inspección de Control de Calidad</label>
                                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                                </div>
                                                                <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega alguna breve Observación de Inspección de Control Calidad' readonly><?php echo $row['inspecCalidad']; ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-6 mb-2'>*Observaciones Para el Cliente</label>
                                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                                </div>
                                                                <textarea name='observCliente' id='observCliente' class='form-control' rows='4' placeholder='Agrega alguna breve Observación para nuestro Cliente' readonly><?php echo $row['observCliente']; ?></textarea>
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
                                            <div class='row justify-content-center'>
                                                <div class='col-md-5 col-sm-12  form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                        </div>
                                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $regSolCapturista ?>' readonly>
                                                        <label for='floatingInput' class='pl-5'>Capturista: Registro de Solicitud de Alta Proyecto</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12  form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                        </div>
                                                        <input name='' id='' type='text' class='form-control' value='<?php echo $regSolFecha_creacion ?>' readonly>
                                                        <label for='floatingInput' class='pl-5'>Fecha: Registro de Solicitud de Alta Proyecto</label>
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
