<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>4.1.2 Ver Generales Recepción de Piezas Dañadas | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
<script>
    function abrirModal1(id_proyecto, nProyecto, id_recPzsDanadas) {
        $("#btnModal-regSolRecPzsDanadas").click();
        $("#id_proyecto").val(id_proyecto);
        $("#nProyecto").val(nProyecto);
        $("#id_recPzsDanadas").val(id_recPzsDanadas);
        $("#tituloModal").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, id_solPzsDanadas, folio_solicitud) {
        $("#btnModal-eliminarSolRecPzsDanadas").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_solPzsDanadas2").val(id_solPzsDanadas);
        $("#folio_solicitud2").html(folio_solicitud);
        $("#tituloModal2").html(nProyecto);
    }
</script>
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
                            <h1 class="float-left m-0">4.1.2 Ver Generales Recepción de Piezas Dañadas</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Todos los campos son obligatorios</h3>
                                    <div class="card-tools">
                                        <a href="../admin/crudRecPzsDanadas.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                                    <?php
                                    $id_proyecto = $_GET['id'];
                                    $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio,
                                    R.linkRecPzsDanadas
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
                                    LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                                    WHERE P.id_Proyecto = $id_proyecto";
                                    $resultado1 = mysqli_query($conexion, $query1);
                                    $row1 = $resultado1->fetch_assoc();

                                    ?>
                                    <table id="tableRegProyectos" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Núm. de Proyecto</th>
                                                <th>Número de Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th style="width: 5%;"><span class='badge badge-dark badge-pill'><?php echo $row1['id_proyecto'] ?></span></th>
                                                <td style="width: 10%;"><?php echo $row1['nProyecto'] ?></td>
                                                <td style="width: 10%;"><?php echo $row1['nOrden'] ?></td>
                                                <td><?php echo $row1['marca'] ?></td>
                                                <td><?php echo $row1['modelo'] ?></td>
                                                <td><?php echo $row1['anio'] ?></td>
                                                <td><?php echo $row1['placa'] ?></td>
                                                <td><?php echo $row1['color'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Link de Desarmado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo (empty($row1['linkRecPzsDanadas'])) ? 'Sin Registro' : $row1['linkRecPzsDanadas'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <br>
                                    <h5 class="text-center"><strong> Registros Solicitudes de Piezas</strong></h5>
                                    <a href="../admin/crudRecPzsDanadas.php" class="btn btn-secondary btn-inline mb-2" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                    <?php
                                    $query3 = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId, MAX(R.enUso) AS enUso
                                    from proyectos P 
                                    LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                                    WHERE P.id_Proyecto = $id_proyecto GROUP BY P.id_proyecto ";
                                    $result = mysqli_query($conexion, $query3);
                                    $row3 = $result->fetch_assoc();

                                    if ($row3['enUso'] == 1) {
                                        if ($super == 1 or $regSolRecPzsDanadas == 1) {
                                            echo "<a type'button' href='#' onclick='abrirModal1(\"" . $row3['id_proyecto'] . "\",\"" . $row3['nProyecto'] . "\",\"" . $row3['linkId'] . "\")' class='btn btn-secondary mb-2' data-toggle='tooltip' data-placement='left' title='4.1.4 Registrar Solicitud de Piezas'>Registrar Solicitud de Piezas <i class='fa-solid fa-pencil'></i></a>";
                                        } else {
                                            echo "<a class='btn btn-outline-danger mb-2' data-toggle='tooltip' data-placement='left' title='Sin Permiso'>Registrar Solicitud de Piezas <i class='fa-solid fa-pencil'></i></a>";
                                        }
                                    } else {
                                        echo "<a class='btn btn-outline-danger mb-2' data-toggle='tooltip' data-placement='left' title='Primero debes agregar Link de Desarmado'>Registrar Solicitud de Piezas <i class='fa-solid fa-pencil'></i></a>";
                                    }

                                    ?>

                                    <?php
                                    if ($super == 1 or $verGralRecPzsDanadas == 1) {
                                        $cont = 0;
                                        $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId,
                                        S.id_solPzsDanadas, S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
                                        S.borrado, S.enUso,
                                        U.nombres, U.aPaterno, U.aMaterno
                                        from proyectos P 
                                        LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                                        LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
                                        LEFT JOIN usuarios U ON S.id_capC = U.id_usuario
                                        WHERE P.id_Proyecto = $id_proyecto AND P.proyectoActivo = 1 AND S.borrado = 0 ORDER BY S.folio_solicitud DESC";
                                    } else {
                                        $query = "SELECT id_proyecto FROM proyecto WHERE id_proyecto = 0";
                                    }
                                    $resultado = mysqli_query($conexion, $query);

                                    if ($super == 1) {
                                    } else if ($verGralRecPzsDanadas == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <div id="table_refresh">
                                        <table id="tableUpdateRecPzsDanadas" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Folio</th>
                                                    <th>Cantidad</th>
                                                    <th>Descripción</th>
                                                    <th>Minuto de Video</th>
                                                    <th>Capturista Solicitante</th>
                                                    <th>Fecha Solicitud</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = $resultado->fetch_assoc()) {
                                                    $id_proyecto = $row['id_proyecto'];
                                                    $nP = $row['nProyecto'];
                                                    $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                                    $linkId = (empty($row['linkId'])) ? '' : $row['linkId'];
                                                    $id_solPzsDanadas = $row['id_solPzsDanadas'];
                                                    $folio_solicitud = $row['folio_solicitud'];

                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php $cont++;
                                                            echo $cont;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <span class='badge badge-dark badge-pill'><?php echo $id_proyecto ?></span>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['nProyecto'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['folio_solicitud'])) ? 'Sin Registro' : $row['folio_solicitud']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['cantidad'])) ? 'Sin Registro' : $row['cantidad']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['descripcion'])) ? 'Sin Registro' : $row['descripcion']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['minVideo'])) ? 'Sin Registro' : $row['minVideo']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
                                                        </td>
                                                        <td style="width: 5%">
                                                            <?php
                                                            //4.1.5 Eliminar Solicitud de Piezas
                                                            if ($super == 1 OR $eliSolRecPzsDanadas == 1 ) {
                                                                echo "<a href='#' onclick='abrirModal2(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_solPzsDanadas . "\", \"" . $folio_solicitud . "\")' class='btn btn-secondary' data-toggle='tooltip' data-placement='bottom' title='4.1.5 Eliminar Solicitud de Piezas'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            } else {
                                                                echo  "<a class='btn btn-outline-danger' id='eliSolRecPzsDanadas' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Folio</th>
                                                    <th>Cantidad</th>
                                                    <th>Descripción</th>
                                                    <th>Minuto de Video</th>
                                                    <th>Capturista Solicitante</th>
                                                    <th>Fecha Solicitud</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <button id="btnModal-regSolRecPzsDanadas" class="btn btn-white" data-toggle="modal" data-target='.regSolRecPzsDanadas'></button>
                                    <button id="btnModal-eliminarSolRecPzsDanadas" class="btn btn-white" data-toggle="modal" data-target=".eliminarSolRecPzsDanadas"></button>
                                        <?php
                                        require '../components/modal-regSolRecPzsDanadas.php';
                                        require '../components/modal-eliminarSolRecPzsDanadas.php';
                                        desconectar();
                                        ?>
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
    <div id="divModal"></div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    require '../ajax/plugins-datatable.php';
    ?>
<script src="../ajax/formUpdateRecPzsDanadas.js"></script>

</body>

</html>