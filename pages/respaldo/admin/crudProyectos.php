<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Lista de Proyectos | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.2 Lista de Proyectos</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Rrgistros -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Contadores</strong></h2>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row justify-content-center">

                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-secondary elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Activos</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_proyectoActivo); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-secondary elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_registroSolicitud); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-secondary elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_altaProyecto); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-secondary elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_proyCodIdentificador); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-secondary elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_superCodIdentificador); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-arrow-up-1-9"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Total Proyectos</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_proyectos); ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-trash-can"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                                    <h4 class="text-center">
                                                        <?php echo mysqli_num_rows($count_reg_proyectosE); ?>
                                                    </h4>
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

            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-11 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formProyectos.php" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else if ($regProyecto == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formProyectos.php" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regProyecto" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, P.fecha_creacion, P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador, P.estadoProyectoEliminado,
                                    V.placa, M.marca, Mo.modelo, A.anio, Co.color,
                                    U.nombres, U.aPaterno, U.aMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN usuarios U ON P.id_capC = U.id_usuario
                                    ORDER BY nProyecto DESC";
                                } else if ($listProyecto == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, P.fecha_creacion, P.proyectoActivo, P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador, P.estadoProyectoEliminado,
                                    V.placa, M.marca, Mo.modelo, A.anio, Co.color,
                                    U.nombres, U.aPaterno, U.aMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN usuarios U ON P.id_capC = U.id_usuario
                                    ORDER BY nProyecto DESC";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($listProyecto == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Status Valor Venta Inicial</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                                $pActivo = $row['proyectoActivo'];
                                                $row['nProyecto'];

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 12%;">
                                                        <?php echo $row['nProyecto']; ?>
                                                    </td>
                                                    <td style="width: 10%;">
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
                                                    <td class="text-center">
                                                        <?php
                                                        $v = $row['valorVenta'];
                                                        if ($v == 0.00) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">No modificado 0.00</span></h6>';
                                                        } else {
                                                            echo '<h6><span class="badge badge-success badge-pill">Actualizado</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width: 10%;">
                                                        <?php echo $row['valorVenta'] ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $Eliminado = $row['estadoProyectoEliminado'];
                                                        if ($Eliminado == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>';
                                                        } else {
                                                            echo '<h6><span class="badge badge-success badge-pill">Activo</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $PA = $row['proyectoActivo'];
                                                        $RS = $row['registroSolicitud'];
                                                        $AP = $row['altaProyecto'];
                                                        $CI = $row['proyCodIdentificador'];
                                                        $SU = $row['superCodIdentificador'];

                                                        if ($PA == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Proyecto Activo</span></h6>';
                                                        } else if ($RS == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Solicitud Alta</span></h6>';
                                                        } else if ($AP == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Alta Proyecto</span></h6>';
                                                        } else if ($CI == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Código Identificador</span></h6>';
                                                        } else if ($SU == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Supervisión</span></h6>';
                                                        } else {
                                                            echo '<h6><span class="badge badge-Warning badge-pill">Sin Ubicación</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width:2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.3 Modificar Proyecto">
                                                                                <?php if ($super == 1 and $Eliminado == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateProyecto.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fas fa-edit"></i></a>
                                                                                <?php } else if ($super == 1 and $Eliminado == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="noModProyecto"><i class="fas fa-edit"></i></a>';
                                                                                } else if ($modProyecto == 1 and $Eliminado == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateProyecto.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fas fa-edit"></i> </a>
                                                                                <?php } else if ($modProyecto == 1 and $Eliminado == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="noModProyecto"><i class="fas fa-edit"></i></a>';
                                                                                } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="modProyecto"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.4 Eliminar Proyecto">
                                                                                <?php
                                                                                if ($super == 1 && $pActivo == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarProyecto<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($super == 1 && $pActivo == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="noEliProyecto"><i class="fas fa-trash-alt"></i>
                                                                                </a>';
                                                                                } else if ($eliProyecto == 1 && $pActivo == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarProyecto<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($eliProyecto == 1 && $pActivo == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="noEliProyecto"><i class="fas fa-trash-alt"></i>
                                                                                    </a>';
                                                                                } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliProyecto"><i class="fas fa-trash-alt"></i>
                                                                                </a>';
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.5 Descarga PDF Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/ordenTrabajo.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php  } else if ($pdfProyecto == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/ordenTrabajo.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="pdfProyecto"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.6 Ver Generales Lista de Proyectos">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralProy<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                                <?php  } else if ($verGralProy == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verGralProy-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verGralProy"><i class="fa-solid fa-comments"></i>
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
                                                require '../components/modal-eliminarProyecto.php';
                                                require '../components/modal-verListaProy.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
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
                                                <th>Status Valor Venta Inicial</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!-- <div id="respuestaProyectoBorrado"></div> -->
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
        // noeliProyecto PROYECTO ACTIVO NO SE PUEDE ELIMINAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#noModProyecto ").click(function() {
                toastr["error"]("¡PROYECTO ELIMINADO, YA NO PUEDES REALIZAR ESTA ACCION!")

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
        // noeliProyecto PROYECTO ACTIVO NO SE PUEDE ELIMINAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#noModProyecto ").click(function() {
                toastr["error"]("¡PROYECTO EN USO, NO SE PUEDE ELIMINAR. DEBERÁS REGRESAR EL PROYECTO HASTA LISTA 2.4.1  PROYECTOS ACTIVOS!")

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