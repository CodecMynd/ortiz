<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Colores | <?php echo $nomComp ?></title>

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
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla 1.5 Colores</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->

            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Colores dadas de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddColor.php" data-toggle="tooltip" data-placement="left" title="1.5.1 Registro de Color"> <i class="fa-solid fa-brush"></i>&nbsp;&nbsp; Registro de Color</a>
                                        <?php } else if ($regColor == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddColor.php" data-toggle="tooltip" data-placement="left" title="1.5.1 Registro de Color"> <i class="fa-solid fa-brush"></i>&nbsp;&nbsp; Registro de Color</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regColor" data-toggle="tooltip" data-placement="left" title="1.5.1 Registro de Color"> <i class="fa-solid fa-brush"></i>&nbsp;&nbsp; Registro de Color</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT id_color, color FROM colores ORDER BY color ASC";
                                } else if ($verTablaColor == 1) {
                                    $query = "SELECT id_color, color FROM colores ORDER BY color ASC";
                                } else {
                                    $query = "SELECT id_color FROM colores WHERE id_color = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);

                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaColor == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableSm" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Color</th>
                                                <!-- <th>Status</th> -->
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
                                                        <?php echo $row['color'] ?>
                                                    </td>
                                                    <!-- <td>

                                                    </td> -->
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Marcas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width:2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.5.2 Modificar Color">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateColor.php?id=<?php echo $row['id_color'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php  } else if ($modColor  == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateColor.php?id=<?php echo $row['id_color'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="modColor"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.5.3  Eliminar Color">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarColor-<?php echo $row['id_color'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($eliminarCol  == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarColor-<?php echo $row['id_color'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliminarCol"><i class="fas fa-trash-alt"></i>
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
                                                require '../components/modal-eliminarColor.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Colores</th>
                                                <!-- <th>Status</th> -->
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