<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Ver Generales Comprobación de 7 Imagenes| <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.11.5 Ver Generales Comprobación de 7 Imagenes</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Comprobcion de placas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos Comprobado y Supervisados en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                $idP = $_GET['id'];
                                $query = "SELECT P.id_proyecto, P.nProyecto, P.estadoProyectoEliminado, 
                                    CI.linkComImagenes, CI.fecha_creacion,
                                    UP.nombres AS UPN, UP.aPaterno AS UPP, UP.aMaterno AS UPM,
                                    CS.textSupervision, CS.fecha_registro AS CSF,
                                    UCS.nombres AS UCSN, UCS.aPaterno AS UCSP, UCS.aMaterno AS UCSM
                                    FROM proyectos P
                                    LEFT JOIN comimagenes CI ON P.id_proyecto = CI.id_proyecto
                                    LEFT JOIN usuarios UP ON CI.id_capC = UP.id_usuario
                                    LEFT JOIN comsupervisionimagenes CS ON P.id_proyecto = CS.id_proyecto
                                    LEFT JOIN usuarios UCS ON CS.id_capC = UCS.id_usuario
                                    WHERE P.id_proyecto =  $idP";
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">

                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Link Comprobación</th>
                                                <th>Capturista Comprobación</th>
                                                <th>Fecha Comprobación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisión</th>
                                                <th>Fecha Supervisión</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 8%;">
                                                        <?php echo $row['nProyecto'] ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $Eliminado = $row['estadoProyectoEliminado'];
                                                        if ($Eliminado == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>';
                                                        } else {
                                                            echo '<h6><span class="badge badge-success badge-pill">Activo</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="bg-light">
                                                        <?php echo $row['linkComImagenes'] ?>
                                                    </td>
                                                    <td class="bg-light" style="width: 7%;">
                                                        <?php echo $row['UPN'] . ' ' . $row['UPP'] . ' ' . $row['UPM'] ?>
                                                    </td>
                                                    <td class="bg-light">
                                                        <?php echo $row['fecha_creacion'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['textSupervision'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['UCSN'] . ' ' . $row['UCSP'] . ' ' . $row['UCSM'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['CSF'] ?>
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
                                                <th>Núm. Proyecto</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Link Comprobación</th>
                                                <th>Capturista Comprobación</th>
                                                <th>Fecha Comprobación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisión</th>
                                                <th>Fecha Supervisión</th>
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

</body>

</html>
