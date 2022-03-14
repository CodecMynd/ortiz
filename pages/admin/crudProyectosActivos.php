<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Proyectos Activos para realizar Solicitud | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.4.1 Proyectos Activos para realizar Solicitud</h1>
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
                                    <h3 class="card-title">Proyectos Activos de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formRegSolicitudAlta.php" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } else if ($regSolAltProy  == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formRegSolicitudAlta.php" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regSolAltProy" data-toggle="tooltip" data-placement="left" title="2.4.3 Registro de Solicitud Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Solicitud Alta</a>
                                        <?php } ?>
                                        <!-- <a href="crudRegistroSolicitudAlta.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.4.2 Tabla Registro de Solicitud Alta Proyecto"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></a> -->
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.proyectoActivo, P.registroSolicitud, P.fecha_creacion, V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, C.aMaternoCliente, Co.color, U.nombres, U.aPaterno, U.aMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN usuarios U ON P.id_capC = U.id_usuario
                                    WHERE P.proyectoActivo = 1 AND P.registroSolicitud = 0 ORDER BY nProyecto ASC";
                                } else if ($verTablaProyAct == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.proyectoActivo, P.registroSolicitud, P.fecha_creacion, V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, C.aMaternoCliente, Co.color, U.nombres, U.aPaterno, U.aMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN usuarios U ON P.id_capC = U.id_usuario
                                    WHERE P.proyectoActivo = 1 AND P.registroSolicitud = 0 ORDER BY nProyecto ASC";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaProyAct == 0) { ?>
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
                                                <th>Cliente</th>
                                                <th>Fecha Registro</th>
                                                <th>Capturista</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) { ?>
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
                                                    <td style="width: 15%;">
                                                        <?php
                                                        $nombres = $row['nombres'];
                                                        $aPaterno = $row['aPaternoCliente'];
                                                        $aMaterno = $row['aMaternoCliente'];
                                                        echo $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $originalDate = $row['fecha_creacion'];
                                                        echo $newDate = date("d-m-Y H:i:s ", strtotime($originalDate));
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        echo $capturista = $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'];
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarProyecto.php';
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
                                                <th>Cliente</th>
                                                <th>Fecha Registro</th>
                                                <th>Capturista</th> 
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
    </script>
</body>

</html>