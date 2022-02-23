<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Modelos | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">Tabla 1.3 Modelos</h1>
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
                        <div class="col-md-6 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Modelos dadas de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddModelo.php" data-toggle="tooltip" data-placement="left" title="1.3.1 Registro de Modelos">
                                                <i class="fa-solid fa-car"></i>&nbsp;&nbsp; Registro de Modelos</a>
                                        <?php } else if ($regModelo == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddModelo.php" data-toggle="tooltip" data-placement="left" title="1.3.1 Registro de Modelos">
                                                <i class="fa-solid fa-car"></i>&nbsp;&nbsp; Registro de Modelos</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regModelo" data-toggle="tooltip" data-placement="left" title="1.3.1 Registro de Modelos">
                                                <i class="fa-solid fa-car"></i>&nbsp;&nbsp; Registro de Modelos</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                $query = "SELECT Mo.id_modelo, Mo.id_marca, Mo.modelo, Ma.id_marca, Ma.marca  FROM modelos Mo INNER JOIN marcas Ma ON Mo.id_marca = Ma.id_marca ORDER BY marca ASC";
                                $resultado = mysqli_query($conexion, $query);
                                ?>

                                <div class="card-body">
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
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
                                                        <?php echo $row['marca'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['modelo'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.3.2 Modificar Modelo">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateModelo.php?id=<?php echo $row['id_modelo'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php  } else if ($modModelo  == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateModelo.php?id=<?php echo $row['id_modelo'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="modModelo"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.3.3  Eliminar Modelo">
                                                                            <?php if ($super == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarModelo-<?php echo $row['id_modelo'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                                <?php  } else if ($eliminarMod  == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarModelo-<?php echo $row['id_modelo'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliminarMod" ><i class="fas fa-trash-alt"></i></a>
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
                                                require '../components/modal-eliminarModelo.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="respuestaBorrarModelo"></div>
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