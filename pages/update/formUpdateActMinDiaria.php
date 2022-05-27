<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.4.3 Ver Generales Actividad Mínima Diaria | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">2.3.4.3 Ver Generales Actividad Mínima Diaria</h1>
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
                                        <a href="../admin/crudActividadMinimaDiaria.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                                    <?php
                                    $id_proyecto = $_GET['id'];
                                    $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta,
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio, A.asesor,
                                    T.top, T.motivo AS motivoTop,
                                    AST.id_aseTec, AST.aseTec, AST.motivo AS motivoAsesoramiento
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
                                   	LEFT JOIN comasesor C ON P.id_proyecto = C.id_proyecto
                                    LEFT JOIN asesores A ON C.id_asesor = A.id_asesor
                                    LEFT JOIN tops T ON P.id_proyecto = T.id_proyecto
                                    LEFT JOIN asesoramientostecnicos AST ON P.id_proyecto = AST.id_proyecto
                                    WHERE P.id_Proyecto =  $id_proyecto";
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
                                                <th>Color </th>
                                                <th>Asesor</th>
                                                <th>Top</th>
                                                <th>Asesoramiento Técnico</th>
                                                <th>Motivo Top</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Motivo Asesoramiento Técnico</th>
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
                                                <td><?php if (empty($row1['asesor'])) {
                                                        echo 'Sin Asesor ';
                                                    } else {
                                                        echo $row1['asesor'];
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    // valida columna Top
                                                    if (empty($row1['top'])) {
                                                        echo "<h6><span class='badge badge-ligth badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto no es Top'><i class='fa-solid fa-star fa-2x' style='color:#CCCCCC'></i></span></h6>";
                                                    } else {
                                                        echo "<h6><a href='../admin/crudAsignacionTop.php' data-toggle='tooltip' data-placement='bottom' title='ir a: Tabla 2.3.5 Asignación de Top'><span class='badge badge-ligth badge-pill top'><i class='fa-solid fa-star fa-2x' style='color:#28A745'></i></span></a></h6>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    // valida columna aseTec
                                                    if (empty($row1['aseTec'])) {
                                                        echo "<h6><span class='badge badge-danger badge-pill' data-placement='bottom'>Sin Registro</span></h6>";
                                                    } else {
                                                        echo "<h6><a href='../admin/crudAsesoramientoTecnico.php' data-toggle='tooltip' data-placement='bottom' title='ir a: Tabla 2.3.6 Programa de Asesoramiento Técnico'><span class='badge badge-success badge-pill' data-placement='bottom' >Con Asesoramiento</span></a></h6>";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo (empty($row1['motivoTop'])) ? 'Sin ningún registro Top' : $row1['motivoTop'] ?></td>
                                                <td><?php echo (empty($row1['valorVenta'])) ? 'Sin Registro' : "<strong>{$row1['valorVenta']}</strong>"; ?></td>
                                                <td><?php echo (empty($row1['motivoAsesoramiento'])) ? 'Sin ningún registro Asesoramiento Técnico' : $row1['motivoAsesoramiento'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <br>
                                    <h5 class="text-center"><strong> Registros Actividad Minima Diaria</strong></h5>
                                    <?php
                                    $cont = 0;
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.comActMinDia, P.comSuperActMinDia, 
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio, 
                                    A.id_ActMinDiaria, A.linkComActMinDia, A.textSupervision, A.fecha_creacionV, A.fecha_creacionS,
                                    A.fecha_hoyV AS FV, A.fecha_hoyS AS FS, 
                                    UV.nombres AS nombreV, UV.aPaterno AS paternoV, UV.aMaterno AS maternoV, 
                                    US.nombres AS nombreS, US.aPaterno AS paternoS, US.aMaterno AS maternoS 
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
                                    INNER JOIN actmindiaria A ON P.id_proyecto = A.id_proyecto 
                                    LEFT JOIN usuarios UV ON A.id_capCV = UV.id_usuario 
                                    LEFT JOIN usuarios US ON A.id_capCS = US.id_usuario 
                                    WHERE P.id_Proyecto = $id_proyecto ORDER BY id_ActMinDiaria DESC;";
                                    $resultado = mysqli_query($conexion, $query);
                                    ?>
                                    <table id="tableVarios1" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $id_proyecto = $row['id_proyecto'];
                                                $idV = $row['id_ActMinDiaria'];
                                                $textSupervision = $row['textSupervision'];
                                                $hoyS = $row['FS'];
                                                $fecha = new DateTime($hoyS);
                                                $fechaS = $fecha->format('d-m-Y');

                                                $hoyV = $row['FV'];
                                                $fecha = new DateTime($hoyV);
                                                $fechaV = $fecha->format('d-m-Y');
                                                $fecha_sistema;
                                                $fechaV = $row['FV'];
                                                $fechaS = $row['FS'];
                                                $com = $row['comActMinDia'];
                                                $sup = $row['comSuperActMinDia'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <?php echo $row['nProyecto'] ?>
                                                    </td>
                                                    <td style="width: 15%;">
                                                        <?php echo $row['linkComActMinDia'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombreV'] . ' ' . $row['paternoV'] . ' ' . $row['maternoV']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if (empty($hoyV)) {
                                                            echo '';
                                                        } else {
                                                            echo $row['fecha_creacionV'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width: 15%;">
                                                        <?php echo $row['textSupervision'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombreS'] . ' ' . $row['paternoS'] . ' ' . $row['maternoS']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if (empty($hoyS)) {
                                                            echo '';
                                                        } else if ($hoyS != '0000-00-00') {
                                                            echo $row['fecha_creacionS'];
                                                        }
                                                        ?>
                                                    </td>

                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Marcas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width:2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.4.4 Eliminar Comprobación de Actividad Mínima Diaria">
                                                                                <?php if ($super == 1 and $sup == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($super == 1 and $sup == 0) { ?>
                                                                                    <a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarComActMinDia-<?php $row['id_ActMinDiaria'] ?>'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else if ($eliComActMinDia == 1 and $sup == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($eliComActMinDia == 1 and $sup == 0) { ?>
                                                                                    <a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarComActMinDia-<?php $row['id_ActMinDiaria'] ?>'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliComActMinDia"><i class="fas fa-trash-alt"></i></a>';
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.4.5 Eliminar Supervisión de Comprobación de Actividad Mínima Diaria">
                                                                                <?php if ($super == 1 and $sup == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($super == 1 and $com == 1) { ?>
                                                                                    <a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarComSuperActMinDia-<?php $row['id_ActMinDiaria'] ?>'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else if ($eliComSuperActMinDia == 1 and $sup == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="sinEliminar"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($eliComSuperActMinDia == 1 and $com == 1) { ?>
                                                                                    <a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarComSuperActMinDia-<?php $row['id_ActMinDiaria'] ?>'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliComSuperActMinDia"><i class="fas fa-trash-alt"></i></a>';
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                include '../components/modal-eliminarComActMinDia.php';
                                                include '../components/modal-eliminarComSuperActMinDia.php';
                                                ?>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisor</th>
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

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Consulta de Datos de: <strong>2.3.6.1.3 Ver Gral. Seg. Diario Programa de Asesoramiento Técnico</strong></h3>
                                    <div class="card-tools">
                                        <a href="../admin/crudActividadMinimaDiaria.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong> Consulta: Registro Diario Programa de Asesoramiento Técnico</strong></h5>
                                    <?php
                                    $cont = 0;
                                    $query = "SELECT P.id_proyecto, P.nProyecto,  
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio,
                                    SD.id_SegDiaProAseTecnico, SD.linkSegDiaProAseTecnico, SD.fecha_hoyV AS FV, SD.com, SD.fecha_creacionV,
                                    SDS.id_SegDiaProAseTecnicoSuper, SDS.textSupervision, SDS.sup, SDS.fecha_hoyS AS FS, SDS.fecha_creacionS,
                                    U.nombres AS nombreV, U.aPaterno AS paternoV, U.aMaterno AS maternoV,
                                    US.nombres AS nombreS, US.aPaterno AS paternoS, US.aMaterno AS maternoS
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio
                                    INNER JOIN segdiaproasetecnico SD ON P.id_proyecto = SD.id_proyecto 
                                    LEFT JOIN segdiaproasetecnicosuper SDS ON SD.id_SegDiaProAseTecnico = SDS.id_segDiaProAseTecnico
                                    INNER JOIN usuarios U ON SD.id_capCV = U.id_usuario
                                    LEFT JOIN usuarios US ON SDS.id_capCS = US.id_usuario
                                    WHERE P.id_proyecto = $id_proyecto GROUP BY SD.id_SegDiaProAseTecnico;";
                                    $resultado = mysqli_query($conexion, $query);
                                    ?>
                                    <table id="tableVarios2" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $id_proyecto = $row['id_proyecto'];
                                                $idV = $row['id_SegDiaProAseTecnico'];
                                                $textSupervision = $row['textSupervision'];
                                                $hoyS = $row['FS'];
                                                $fecha = new DateTime($hoyS);
                                                $fechaS = $fecha->format('d-m-Y');

                                                $hoyV = $row['FV'];
                                                $fecha = new DateTime($hoyV);
                                                $fechaV = $fecha->format('d-m-Y');
                                                $fecha_sistema;
                                                $fechaV = $row['FV'];
                                                $fechaS = $row['FS'];
                                                $com = $row['com'];
                                                $sup = $row['sup'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <?php echo $row['nProyecto'] ?>
                                                    </td>
                                                    <td style="width: 15%;">
                                                        <?php echo $row['linkSegDiaProAseTecnico'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombreV'] . ' ' . $row['paternoV'] . ' ' . $row['maternoV']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if (empty($hoyV)) {
                                                            echo '';
                                                        } else {
                                                            echo $row['fecha_creacionV'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width: 15%;">
                                                        <?php echo $row['textSupervision'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombreS'] . ' ' . $row['paternoS'] . ' ' . $row['maternoS']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if (empty($hoyS)) {
                                                            echo '';
                                                        } else if ($hoyS != '0000-00-00') {
                                                            echo $row['fecha_creacionS'];
                                                        }
                                                        ?>
                                                    </td>

                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Marcas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width:2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.6.1.4 Eliminar Comprobación de Seguimiento Diario Programa de Asesoramiento Técnico">
                                                                                <?php if ($super == 1 and $sup == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($super == 1 and $sup == 0) { ?>
                                                                                    <a href='../update/formEliminarComSegDiaAseTecnico.php?id=<?php echo $row['id_SegDiaProAseTecnico'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else if ($eliComActMinDia == 1 and $sup == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($eliComActMinDia == 1 and $sup == 0) { ?>
                                                                                    <a href='../update/formEliminarComSegDiaAseTecnico.php?id=<?php echo $row['id_SegDiaProAseTecnico'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliComSegDiaAseTecnico"><i class="fas fa-trash-alt"></i></a>';
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.6.1.5 Eliminar Supervisión de Seguimiento Diario Programa de Asesoramiento Técnico">
                                                                                <?php if ($super == 1 and $sup == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($super == 1 and $com == 1) { ?>
                                                                                    <a href='../update/formEliminarComSegDiaAseTecnicoSuper.php?id=<?php echo $row['id_SegDiaProAseTecnicoSuper'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else if ($eliComSuperActMinDia == 1 and $sup == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="sinEliminar"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($eliComSuperActMinDia == 1 and $com == 1) { ?>
                                                                                    <a href='../update/formEliminarComSegDiaAseTecnicoSuper.php?id=<?php echo $row['id_SegDiaProAseTecnicoSuper'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliComSuperActMinDia"><i class="fas fa-trash-alt"></i></a>';
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisor</th>
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

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Consulta de Datos de: <strong>4.1.2 Ver Generales Recepción de Piezas Dañadas</strong></h3>
                                    <div class="card-tools">
                                        <a href="../admin/crudActividadMinimaDiaria.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                                    <?php
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
                                    <table id="tableSm2" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                    <h5 class="text-center"><strong> Consulta: Registros Solicitudes de Piezas</strong></h5>
                                    <?php
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
                                    $resultado = mysqli_query($conexion, $query);
                                    ?>
                                    <div id="table_refresh">
                                        <table id="tableVarios3" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                                    <!-- <th>Eliminar</th> -->
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
                                                        <!-- <td style="width: 5%">
                                                            <?php
                                                            //4.1.5 Eliminar Solicitud de Piezas
                                                            // if ($super == 1 or $eliSolRecPzsDanadas == 1) {
                                                            //     echo "<a href='#' onclick='abrirModal2(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_solPzsDanadas . "\", \"" . $folio_solicitud . "\")' class='btn btn-secondary' data-toggle='tooltip' data-placement='bottom' title='4.1.5 Eliminar Solicitud de Piezas'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            // } else {
                                                            //     echo  "<a class='btn btn-outline-danger' id='eliSolRecPzsDanadas' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            // }
                                                            ?>
                                                        </td> -->
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
                                                    <!-- <th>Eliminar</th> -->
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Consulta de Datos de: <strong>2.3.3.4 Ver Generales Verificación Diaria de Baterías</strong> </h3>
                                    <div class="card-tools">
                                        <a href="../admin/crudVarificacionDiariaBaterias.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                                    <?php
                                    $id_proyecto = $_GET['id'];
                                    $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
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
                                    <br>
                                    <hr>
                                    <br>
                                    <h5 class="text-center"><strong> Registros Comprobación y Supervisión de Verificación Diaria de Baterías</strong></h5>

                                    <?php
                                    $cont = 0;
                                    $query = "SELECT P.id_proyecto, P.nProyecto, 
                                    V.id_verifDiaBat, V.linkverifDiaBat, V.textSupervision, V.fecha_creacionV, V.fecha_creacionS, V.borrado AS borradoV,
                                    V.com, V.sup,
                                    UV.nombres AS nomV, UV.aPaterno AS patV, UV.aMaterno AS matV,
                                    US.nombres AS nomS, US.aPaterno AS patS, US.aMaterno AS matS
                                    from proyectos P 
                                    LEFT JOIN verificaciondiariabaterias V ON P.id_proyecto = V.id_proyecto
                                    LEFT JOIN usuarios UV ON V.id_capCV = UV.id_usuario
                                    LEFT JOIN usuarios US ON V.id_capCS = US.id_usuario
                                    WHERE P.id_Proyecto = $id_proyecto AND V.borrado = 0 ORDER BY V.id_verifDiaBat DESC";
                                    $resultado = mysqli_query($conexion, $query);
                                    ?>
                                    <table id="tableVarios4" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisión</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $id_proyecto = $row['id_proyecto'];
                                                $nP = $row['nProyecto'];
                                                $id_verifDiaBat = $row['id_verifDiaBat'];
                                                $com = $row['com'];
                                                $sup = $row['sup'];
                                                $capturistaV = $row['nomV'] . ' ' . $row['patV'] . ' ' . $row['matV'];
                                                $capturistaS = $row['nomS'] . ' ' . $row['patS'] . ' ' . $row['matS'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <span class='badge badge-dark badge-pill'><?php echo $id_proyecto ?></span>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nProyecto'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo (empty($row['linkverifDiaBat'])) ? 'Sin Registro' : $row['linkverifDiaBat']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $capturistaV ?>
                                                    </td>
                                                    <td>
                                                        <?php echo (empty($row['fecha_creacionV'])) ? 'Sin Registro' : $row['fecha_creacionV']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['textSupervision'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $capturistaS ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($row['fecha_creacionS'] == '0000-00-00 00:00:00') {
                                                            echo '';
                                                        } else {
                                                            echo $row['fecha_creacionS'];
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
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisión</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Consulta de Datos de: <strong>2.3.3.3 Ver Tabla Incidencias</strong></h3>
                                    <div class="card-tools">
                                        <a href="../admin/crudVarificacionDiariaBaterias.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    $cont = 0;
                                    $query = "SELECT P.id_proyecto, P.nProyecto,
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio,
                                    I.incidencia, I.fecha_creacion, I.folio,
                                    I.com, I.sup, I.id_incidencia,
                                    U.nombres, U.aPaterno, U.aMaterno
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
                                    LEFT JOIN incidencias I ON P.id_proyecto = I.id_proyecto
                                    LEFT JOIN usuarios U ON I.id_capC = U.id_usuario
                                    WHERE P.id_proyecto = '$id_proyecto' and I.borrado = 0";
                                    $resultado = mysqli_query($conexion, $query);
                                    ?>
                                    <table id="tableVarios5" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Núm. Folio</th>
                                                <th>Incidencia</th>
                                                <th>Solicitado en</th>
                                                <th>Capturista Incidencia</th>
                                                <th>Fecha Solicitud</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $id_proyecto = $row['id_proyecto'];
                                                $id_i = $row['id_incidencia'];
                                                $nP = $row['nProyecto'];
                                                $f = $row['folio'];
                                                $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                                $c = $row['com'];
                                                $s = $row['sup'];
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
                                                        <?php echo $row['marca'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['modelo'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['anio'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['placa'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['color'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['folio'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo (empty($row['incidencia'])) ? 'Sin Registro' : $row['incidencia']; ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($c == 1) {
                                                            echo 'Comprobación';
                                                        } else if ($s == 1) {
                                                            echo 'Supervisión';
                                                        } else {
                                                            echo 'Sin Registro';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
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
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Núm. Folio</th>
                                                <th>Incidencia</th>
                                                <th>Solicitado en</th>
                                                <th>Capturista Incidencia</th>
                                                <th>Fecha Solicitud</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php
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
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/tableVarios.js"></script>
    <script>
        // 2.3.2.2.2 EliminAR Comprobacion ------------------------------------------------------------
        $('.btnBorrarComverifdiariaveh').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Comprobación? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteRegVerifDiariaVeh.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "formUpdateVerifDiariaVeh.php";
                        $('#respuesta').html(data);
                    }
                });
            }
            return false;
        });

        // 2.3.2.2.4 Eliminar Supervisión ------------------------------------------------------------
        $('.btnBorrarComsuperdiariaveh').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Supervisión? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteRegSuperDiariaVeh.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "formUpdateVerifDiariaVeh.php";
                        $('#respuesta').html(data);
                    }
                });
            }
            return false;
        });

        // 4.1.3 Registrar Solicitud de Piezas ------------------------------------------------------------------------------------------------------------------------------------
        // $('#btnNuevoRegSolRecPzsDanadas').click(function() {
        //     var param = $('#formNuevoRegSolRecPzsDanadas').serialize();
        //     $.ajax({
        //             url: '../adds/addNuevoRegSolRecPzsDanadas.php',
        //             cache: false,
        //             type: 'POST',
        //             data: param,

        //             success: function(vs) {
        //                 $('#formNuevoRegSolRecPzsDanadas')[0].reset();
        //                 $("#table_refresh").load(" #table_refresh");
        //                 setTimeout(function() {
        //                     $('.regSolRecPzsDanadas').modal('hide');
        //                 }, 1000);

        //             }
        //         })
        //         .done(function(res) {
        //             $('#respuestaRegSolRecPzsDanadas').html(res)
        //         })
        // });
        // //Ocultar boton por 10 segundos para evitar el doble submit
        // $("#btnNuevoRegSolRecPzsDanadas").on('click', function() {
        //     $("#btnNuevoRegSolRecPzsDanadas").css('visibility', 'hidden');
        //     setTimeout(function() {
        //         $("#btnNuevoRegSolRecPzsDanadas").css('visibility', 'visible');
        //     }, 3000);
        // });
        // ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        // 4.1.5 Eliminar Solicitud de Piezas
        // $('#btnDeleteSolPzsDanadas').click(function() {
        //     var param = $('#formDeleteSolPzsDanadas').serialize();
        //     $.ajax({
        //             url: '../delete/deleteSolPzsDanadas.php',
        //             cache: false,
        //             type: 'POST',
        //             data: param,

        //             success: function(vs) {
        //                 $('#formDeleteSolPzsDanadas')[0].reset();
        //                 $("#table_refresh").load(" #table_refresh");
        //                 setTimeout(function() {
        //                     $('.eliminarSolRecPzsDanadas').modal('hide');
        //                 }, 1000);
        //             }
        //         })
        //         .done(function(res) {
        //             $('#respuestaDeleteSolPzsDanadas').html(res)
        //         })
        // });
        // //Ocultar boton por 10 segundos para evitar el doble submit
        // $("#btnDeleteSolPzsDanadas").on('click', function() {
        //     $("#btnDeleteSolPzsDanadas").css('visibility', 'hidden');
        //     setTimeout(function() {
        //         $("#btnDeleteSolPzsDanadas").css('visibility', 'visible');
        //     }, 3000);
        // });
    </script>
</body>

</html>