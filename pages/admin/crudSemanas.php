<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Semanas de Alta | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">Tabla 1.6.1 Semanas de Alta</h1>
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
                                    <h3 class="card-title">Semanas de Alta para los Proyectos </h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddSemana.php" data-toggle="tooltip" data-placement="left" title="1.6.1.1 Registro de Semanas">
                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana de Alta</a>
                                        <?php } else if ($regSemana  == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddSemana.php" data-toggle="tooltip" data-placement="left" title="1.6.1.1 Registro de Semanas">
                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana de Alta</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regSemana" data-toggle="tooltip" data-placement="left" title="1.6.1.1 Registro de Semanas">
                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana de Alta</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT id_semana, semana FROM semanas WHERE borrado = 0 ORDER BY semana DESC";
                                } else if ($verTablaSemana == 1) {
                                    $query = "SELECT id_semana, semana FROM semanas WHERE borrado = 0 ORDER BY semana DESC";
                                } else {
                                    $query = "SELECT id_semana FROM semanas WHERE id_semana = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSemana == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableSm" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Semana de Alta</th>
                                                <th>Eliminar</th>
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
                                                        <?php echo $row['semana'] ?>
                                                    </td>
                                                    <td class="row justify-content-center">
                                                        <span data-toggle="tooltip" title="1.6.1.2  Eliminar Semana de Alta">
                                                            <?php if ($super == 1) { ?>
                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarSemana<?php echo $row['id_semana'] ?>"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php  } else if ($eliSemana   == 1) { ?>
                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarSemana<?php echo $row['id_semana'] ?>"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a class="btn btn-outline-danger" id="eliSemana"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php } ?>
                                                        </span>
                                                        </li>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarSemana.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Semana de Alta</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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