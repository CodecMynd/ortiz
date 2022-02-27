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
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <!-- <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddUsuario.php" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto">
                                                <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else if ($verTablaProy == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddUsuario.php" data-toggle="tooltip" data-placement="left" title="1.1.5 Registro de Proyecto">
                                                <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="verTablaProy" data-toggle="tooltip" data-placement="left" title="1.1.5 Registro de Proyecto">
                                                <i class="fa-solid fa-user-plus"></i>&nbsp;&nbsp; Registro de Proyecto</a>
                                        <?php } ?> -->

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, C.aMaternoCliente 
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente ORDER BY nProyecto ASC";
                                } else if ($verTablaProy == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, C.aMaternoCliente 
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente ORDER BY nProyecto ASC";
                                } else {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, C.aMaternoCliente 
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente ORDER BY nProyecto ASC WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($verTablaProy == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableCrudUsuarios" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Placas</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Cliente</th>
                                                <th>Acciones</th>
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
                                                    <td>
                                                        <?php echo $row['nProyecto']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nOrden'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['placa']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['marca']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['modelo']?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['anio']?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                         $nombres = $row['nombres'];
                                                         $aPaterno = $row['aPaternoCliente'];
                                                         $aMaterno = $row['aMaternoCliente'];
                                                         echo $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
                                                         ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.2 Modificar Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateProyecto.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php  } else if ($modProyecto == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateProyecto.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fas fa-edit"></i> </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="modProyecto"><i class="fas fa-edit"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.4 Eliminar Proyecyo">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($eliProyecto == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliProyecto"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.5 Descarga PDF Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php  } else if ($pdfProyecto == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="pdfProyecto"><i class="fa-solid fa-file-pdf"></i>
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
                                                require '../components/modal-eliminarUsuario.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Placas</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Cliente</th>
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

</html> -->