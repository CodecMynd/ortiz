<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Acceso de Usuarios al Sistema | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla Acceso de Usuarios al Sistema</h1>
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
                        <div class="col-md-7 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title"><strong>Tabla solo para uso del administrador</strong></h3>
                                    <div class="card-tools">
                                    <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                $query = "SELECT A.id_acceso, A.fecha_acceso, A.fecha_cierre, 
                                U.nombres, U.aPaterno, U.aMaterno
                                FROM acceso A
                                INNER JOIN usuarios U ON A.id_usuario = U.id_usuario ORDER BY id_acceso DESC";
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre de usuario</th>
                                                <th>Inicio de sesión</th>
                                                <th>Cierre de sesión</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) { 
                                                ?>
                                                <tr>
                                                    <td style="width: 5%;">
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $nombres = $row['nombres'];
                                                        $aPaterno = $row['aPaterno'];
                                                        $aMaterno = $row['aMaterno'];
                                                        echo $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
                                                        ?>
                                                    </td>
                                                    <td >
                                                        <?php echo $row['fecha_acceso'] ?>
                                                    </td>
                                                    <td>
                                                        <?php if(empty($row['fecha_cierre'])){
                                                            echo 'Sin cerrar última sesión';
                                                        }{
                                                            echo $row['fecha_cierre'];
                                                        }
                                                         ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre de usuario</th>
                                                <th>Inicio de sesión</th>
                                                <th>Cierre de sesión</th>
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