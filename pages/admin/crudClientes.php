<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Clientes | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.2 Clientes</h1>
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
                                    <h3 class="card-title">Clientes dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>

                                            <a type="button" class="btn btn-secondary" href="../adds/formAddCliente.php" data-toggle="tooltip" data-placement="left" title="2.2.1 Registro Cliente">
                                                <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp; Registro Cliente</a>
                                        <?php } else if ($regCliente   == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddCliente.php" data-toggle="tooltip" data-placement="left" title="2.2.1 Registro Cliente">
                                                <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp; Registro Cliente</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regCliente" data-toggle="tooltip" data-placement="left" title="2.2.1 Registro Cliente">
                                                <i class="fa-solid fa-user-tie"></i>&nbsp;&nbsp; Registro Cliente</a>
                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if($super == 1){
                                $query = "SELECT id_cliente, nombres, aPaternoCliente, aMaternoCliente, tel1, tel2, cel, status FROM clientes ORDER BY nombres DESC";
                                }else if($verTablaCli == 1){
                                    $query = "SELECT id_cliente, nombres, aPaternoCliente, aMaternoCliente, tel1, tel2, cel, status FROM clientes ORDER BY nombres DESC";
                                }else{
                                    $query = "SELECT id_cliente, nombres, aPaternoCliente, aMaternoCliente, tel1, tel2, cel, status FROM clientes WHERE id_cliente = 0";
                                }
                                $resultadoClientes = mysqli_query($conexion, $query);

                                ?>
                                <div class="card-body">
                                <?php
                                    if($verTablaCli == 0){ ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                  <?php  } ?>
                                    <table id="tableCrudUsuarios" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre Cliente</th>
                                                <th>Teléfono 1</th>
                                                <th>Teléfono 2</th>
                                                <th>Celular</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultadoClientes->fetch_assoc()) { ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $nombres = $row['nombres'];
                                                        $aPaterno = $row['aPaternoCliente'];
                                                        $aMaterno = $row['aMaternoCliente'];
                                                        echo $nomCompClie = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['tel1'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['tel2'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['cel'] ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($row['status'] == 1) {
                                                            echo '<span class="badge badge-pill badge-success">Libre</span>';
                                                        } else {
                                                            echo '<span class="badge badge-pill badge-danger">En un proyecto</span>';
                                                        }

                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Clientes"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.2.2 Modificar Cliente">
                                                                            <?php if ($super == 1) { ?>
                                                                                <a class="btn btn-secondary" href="../update/formUpdateCliente.php?id=<?php echo $row['id_cliente'] ?>"><i class="fas fa-edit"></i>
                                                                                </a>
                                                                                <?php  } else if ($modCliente  == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateCliente.php?id=<?php echo $row['id_cliente'] ?>"><i class="fas fa-edit"></i>
                                                                                </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="modCliente"><i class="fas fa-edit"></i>
                                                                                </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.2.3 Eliminar Cliente">
                                                                            <?php if ($super == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarCliente<?php echo $row['id_cliente'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                                <?php  } else if ($eliCliente   == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarCliente<?php echo $row['id_cliente'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliCliente"><i class="fas fa-trash-alt"></i>
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
                                                require '../components/modal-eliminarCliente.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre Cliente</th>
                                                <th>Teléfono 1</th>
                                                <th>Teléfono 2</th>
                                                <th>Celular</th>
                                                <th>Estado</th>
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