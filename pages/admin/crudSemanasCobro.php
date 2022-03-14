<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Semanas de Cobro | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">Tabla 1.6.2 Semanas de Cobro</h1>
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
                                    <h3 class="card-title">Semanas de Cobro </h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddSemanaCobro.php" data-toggle="tooltip" data-placement="left" title="1.6.1.1 Registro de Semanas">
                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana de  Cobro</a>
                                        <?php } else if ($regSemanaCobro  == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddSemanaCobro.php" data-toggle="tooltip" data-placement="left" title="1.6.1.1 Registro de Semanas">
                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana de Cobro</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regSemanaCobro" data-toggle="tooltip" data-placement="left" title="1.6.1.1 Registro de Semanas">
                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana de Cobro</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT id_semanaCobro, semanaCobro FROM semanasCobro ORDER BY semanaCobro DESC";
                                } else if ($verTablaSemanaCobro == 1) {
                                    $query = "SELECT id_semanaCobro, semanaCobro FROM semanasCobro ORDER BY semanaCobro DESC";
                                } else {
                                    $query = "SELECT id_semanaCobro,semanaCobro FROM semanasCobro WHERE id_semanaCobro = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSemanaCobro == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Semana de Cobro</th>
                                                <th>Estatus</th>
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
                                                        <?php echo $row['semanaCobro'] ?>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary">
                                                            En uso <span class="badge badge-light">0</span>
                                                        </button>
                                                    </td>
                                                    <td class="row justify-content-center">
                                                        <span data-toggle="tooltip" title="1.6.2.2  Eliminar Semana de Cobro">
                                                            <?php if ($super == 1) { ?>
                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarSemanaCobro<?php echo $row['id_semanaCobro'] ?>"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php  } else if ($eliSemanaCobro   == 1) { ?>
                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarSemanaCobro<?php echo $row['id_semanaCobro'] ?>"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a class="btn btn-outline-danger" id="eliSemanaCobro"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php } ?>
                                                        </span>
                                                        </li>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarSemanaCobro.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Semana de Cobro</th>
                                                <th>Estatus</th>
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