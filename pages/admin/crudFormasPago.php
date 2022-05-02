<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Formas de Pago | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">Tabla 1.8 Formas de Pago</h1>
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
                                    <h3 class="card-title">Formas de Pago para los Proyectos </h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddFormaPago.php" data-toggle="tooltip" data-placement="left" title="1.8.1 Registro Forma de Pago">
                                                <i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;&nbsp; Registro Forma de Pago</a>
                                        <?php } else if ($regFormaPago  == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddFormaPago.php" data-toggle="tooltip" data-placement="left" title="1.8.1 Registro Forma de Pago">
                                                <i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;&nbsp; Registro Forma de Pago</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regFormaPago" data-toggle="tooltip" data-placement="left" title="1.8.1 Registro Forma de Pago">
                                                <i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;&nbsp; Registro Forma de Pago</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT * FROM formapagos WHERE formaPago <> 'N/A' ORDER BY id_formaPago ASC";
                                } else if ($verTablaAgente == 1) {
                                    $query = "SELECT * FROM formapagos WHERE formaPago <> 'N/A' ORDER BY id_formaPago ASC";
                                } else {
                                    $query = "SELECT * FROM formapagos WHERE formaPago = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaFormaPago == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableSm" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Foma de Pago</th>
                                                <!-- <th>Estatus</th> -->
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
                                                    <td style="width: 60%;">
                                                        <?php echo $row['formaPago'] ?>
                                                    </td>
                                                    <!-- <td>

                                                    </td> -->
                                                    <td class="row justify-content-center">
                                                        <span data-toggle="tooltip" title="1.8.2  Eliminar Forma Pago">
                                                            <?php if ($super == 1) { ?>
                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarFormaPago-<?php echo $row['id_formaPago'] ?>"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php  } else if ($eliFormaPago == 1) { ?>
                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarFormaPago-<?php echo $row['id_formaPago'] ?>"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a class="btn btn-outline-danger" id="eliFormaPago"><i class="fas fa-trash-alt"></i>
                                                                </a>
                                                            <?php } ?>
                                                        </span>
                                                        </li>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarFormaPago.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Forma de Pago</th>
                                                <!-- <th>Estatus</th> -->
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