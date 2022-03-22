<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Captura de Valor Venta Inicial | <?php echo $nomComp ?></title>
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
                        <div class="col-sm-7">
                            <h1 class="m-0">Tabla 2.3.7 Tabla Captura de Valor Venta Inicial</h1>
                        </div>
                        <div class="col-sm-5">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-11 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <!-- <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formProyectos.php" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else if ($regProyecto == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formProyectos.php" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regProyecto" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-wrench"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } ?> -->

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, P.fecha_creacion, V.placa, M.marca, Mo.modelo, A.anio, Co.color
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    WHERE p.status = 1
                                    ORDER BY nProyecto DESC";
                                } else if ($verTablaCapValVenInicial == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, P.fecha_creacion, V.placa, M.marca, Mo.modelo, A.anio, Co.color
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    WHERE p.status = 1
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
                                    } else if ($verTablaCapValVenInicial == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableCapValVenInicial" class="table table-sm table-bordered table-striped">
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
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 11%;">
                                                        <?php echo $row['nProyecto']; ?>
                                                    </td>
                                                    <td style="width: 9%;">
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
                                                        <?php echo $row['valorVenta']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.7.1 Capturar Valor Venta Inicial">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateCapValVentInicial.php?id=<?php echo $idP ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } else if ($perRegCapValVenInicial == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateCapValVentInicial.php?id=<?php echo $idP ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php  } else if ($regCapValVenInicial == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateCapValVentInicial.php?id=<?php echo $idP ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="regCapValVenInicial"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.7.3 Ver Generales Captura de Valor Venta Inicial">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralProy<?php echo $idP ?>"><i class="fa-solid fa-eye"></i></button>
                                                                                <?php  } else if ($verGralCapValVenInicial == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verGralProy-<?php echo $idP ?>"><i class="fa-solid fa-eye"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verGralCapValVenInicial"><i class="fa-solid fa-comments"></i>
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
                                                require '../components/modal-verListaCapValVenInicial.php';
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

</body>

</html>