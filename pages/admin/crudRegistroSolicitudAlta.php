<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Registro de Solicitud Alta Proyecto | <?php echo $nomComp ?></title>
<style>
    @media (min-width:320px) and (max-width:425px) {
            .content-header{
                margin-bottom: 90px;
                width: 100%;

            }

            .content-header h1{
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
                            <h1 class="m-0">Tabla 2.4.2 Registro de Solicitud en espera de Alta</h1>
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
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Solicitud en espera de alta</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formRegSolicitudAlta.php" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } else if ($regSolAltProy == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formRegSolicitudAlta.php" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regSolAltProy" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } ?>
                                        <!-- <a href="crudProyectosActivos.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.4.1 Tabla Proyectos Activos para realizar Solicitud"><i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i></a>
                                        <a href="crudAltaProyecto.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.5 Tabla Alta Proyecto"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></a> -->

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio,  R.id_regSolicitud, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.borrado, R.fecha_creacion, Co.color, S.semana, U.nombres, U.aPaterno, U.aMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto
                                    INNER JOIN semanas S ON R.id_semana = R.id_semana
                                    INNER JOIN usuarios U ON R.id_capC = U.id_usuario
                                    WHERE P.registroSolicitud = 1 AND R.borrado = 0 ORDER BY nProyecto ASC";
                                } else if ($verTablaRegSolAltProy == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio,  R.id_regSolicitud, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.borrado, R.fecha_creacion, Co.color, S.semana, U.nombres, U.aPaterno, U.aMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto
                                    INNER JOIN semanas S ON R.id_semana = R.id_semana
                                    INNER JOIN usuarios U ON R.id_capC = U.id_usuario
                                    WHERE P.registroSolicitud = 1 AND R.borrado = 0 ORDER BY nProyecto ASC";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaRegSolAltProy == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableRegSolAltaProy" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $inspecCalidad = $row['inspecCalidad'];
                                                $observCliente = $row['observCliente'];
                                                $id_regSolicitud = $row['id_regSolicitud'];
                                                $id_proyecto = $row['id_proyecto'];
                                                $capturista = $row['nombres'].' '.$row['aPaterno'].' ' .$row['aMaterno'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 14%">
                                                        <?php echo $row['folioRegSolicitud'] ?>
                                                    </td>
                                                    <td style="width: 12%">
                                                        <?php echo $row['nProyecto']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nOrden'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['marca'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['modelo'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['anio'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['placa'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['color'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['semana'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['valorVenta'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['valorVentaAlta'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.4.4 Descarga PDF Registro de Solicitud Alta Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/solicitudAlta.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php  } else if ($pdfRegSolAltProy == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/solicitudAlta.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="pdfRegSolAltProy"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.4.5 Eliminar Registro de Solicitud Alta Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarRegSolAltProy<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($eliRegSolAltProy == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarRegSolAltProy<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliRegSolAltProy"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.4.6 Ver Observaciones Registro de Solicitud Alta Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verComentRegSolAltProy<?php echo $id_proyecto ?>"><i class="fa-solid fa-comments"></i></a>
                                                                                <?php  } else if ($eliProyecto == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verComentRegSolAltProy<?php echo $id_proyecto ?>"><i class="fa-solid fa-comments"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verComentRegSolAltProy"><i class="fa-solid fa-comments"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                require '../components/modal-regresarRegSolAltProy.php';
                                                require '../components/modal-verRegSolAltProy.php';
                                                ?>
                                            <?php
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
    <script>
        // regSolAltProy  2.4.2 REGISTRO DE SOLICITUD ALTA DE PROYECTO --------------------------------------------------------------
        $(document).ready(function() {
            $("#regSolAltProy").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.4.2 REGISTRO DE SOLICITUD ALTA DE PROYECTO, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // pdfRegSolAltProy 2.4.3 DESCARGAR PDF REGISTRO DE SOLICITUD ALTA PROYECTO --------------------------------------------------------------
        $(document).ready(function() {
            $("#pdfRegSolAltProy").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.4.2.1 DESCARGAR PDF REGISTRO DE SOLICITUD ALTA PROYECTO, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

    </script>
</body>

</html>