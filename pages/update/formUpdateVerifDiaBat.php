<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.3.4 Ver Generales Verificación Diaria de Baterías | <?php echo $nomComp ?></title>
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
    function abrirModal1(id_proyecto, nProyecto, id_verifDiaBat) {
        $("#btnModal-eliComVerifDiaBat").click();
        $("#id_proyecto").val(id_proyecto);
        $("#nProyecto").val(nProyecto);
        $("#id_verifDiaBat").val(id_verifDiaBat);
        $("#tituloModal1").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, id_verifDiaBat) {
        $("#btnModal-eliminarComVerifDiaBatSuper").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_verifDiaBat2").val(id_verifDiaBat);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal3(nProyecto, id_incidencia, folio) {
        $("#btnModal-eliminarIncidencia").click();
        $("#nProyecto3").val(nProyecto);
        $("#id_incidencia3").val(id_incidencia);
        $("#tituloModal3").html(nProyecto);
        $("#folio3").html(folio);
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
                            <h1 class="float-left m-0">2.3.3.4 Ver Generales Verificación Diaria de Baterías</h1>
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
                                        <a href="../admin/crudVarificacionDiariaBaterias.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h4>
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
                                    <h4 class="text-center"><strong> Registros Comprobación y Supervisión de Verificación Diaria de Baterías</strong></h3>

                                    <?php
                                    if ($super == 1 or $verGralVerDiaBat == 1) {
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
                                    } else {
                                        $query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 0";
                                    }
                                    $resultado = mysqli_query($conexion, $query);

                                    if ($super == 1) {
                                    } else if ($verGralVerDiaBat == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>

                                    <div id="table_refresh">
                                        <table id="tableVarios1" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Accion</th>
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
                                                        <td>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  "> Acciones</span>
                                                                    </button>
                                                                    <ul class="dropdown-menu" style="columns:2; min-width:2em;">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.3.6 Eliminar Comprobación Recepción de Piezas Dañadas">
                                                                                <?php
                                                                                if ($super == 1 and $com == 1 and $sup == 0) {
                                                                                    echo "<a href='#' onclick='abrirModal1(\"" . $id_proyecto  . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary' data-toggle='tooltip' data-placement='bottom' title='2.3.3.6 Eliminar Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else if ($super == 1 and $com == 1 and $sup == 1) {
                                                                                    echo "<a class='btn btn-outline-danger' id='eliComVerifDiaBat' data-toggle='tooltip' data-placement='bottom' title='2.3.3.6 Eliminar Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else if ($eliComVerifDiaBat == 1 and $com == 1 and $sup == 0) {
                                                                                    echo "<a href='#' onclick='abrirModal1(\"" . $id_proyecto  . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary' data-toggle='tooltip' data-placement='bottom' title='2.3.3.6 Eliminar Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else if ($eliComVerifDiaBat == 1 and $com == 1 and $sup == 1) {
                                                                                    echo "<a class='btn btn-outline-danger' id='eliComVerifDiaBat' data-toggle='tooltip' data-placement='bottom' title='2.3.3.6 Eliminar Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else {
                                                                                    echo "<a class='btn btn-outline-danger' id='eliComVerifDiaBat' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fas fa-trash-alt'></i></a>";
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.3.7 Eliminar Supervisión de Comprobación Recepción de Piezas Dañadas">
                                                                                <?php
                                                                                if ($super == 1 and $com == 1 and $sup == 1) {
                                                                                    echo "<a href='#' onclick='abrirModal2(\"" . $id_proyecto  . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary' data-toggle='tooltip' data-placement='bottom' title='2.3.3.7 Eliminar Supervisión de Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else if ($super == 1 and $com == 1 and $sup == 0) {
                                                                                    echo "<a class='btn btn-outline-danger' id='eliComVerifDiaBat' data-placement='bottom' title='2.3.3.7 Eliminar Supervisión de Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else if ($eliSupComVerifDiaBat == 1 and $com == 1 and $sup == 0) {
                                                                                    echo "<a href='#' onclick='abrirModal2(\"" . $id_proyecto  . "\",\"" . $nP . "\", \"" . $id_verifDiaBat . "\")' class='btn btn-secondary' data-toggle='tooltip' data-placement='bottom' title='2.3.3.7 Eliminar Supervisión de Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else if ($eliSupComVerifDiaBat == 1 and $com == 0 and $sup == 1) {
                                                                                    echo "<a class='btn btn-outline-danger' id='eliComVerifDiaBat' data-placement='bottom' title='2.3.3.7 Eliminar Supervisión de Comprobación Recepción de Piezas Dañadas'><i class='fas fa-trash-alt'></i></a>";
                                                                                } else {
                                                                                    echo "<a class='btn btn-outline-danger' id='eliSupComVerifDiaBat' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fas fa-trash-alt'></i></a>";
                                                                                }
                                                                                ?>

                                                                            </span>
                                                                        </li>
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
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Link Verificación</th>
                                                    <th>Capturista Verificador</th>
                                                    <th>Fecha Registro Verificación</th>
                                                    <th>Supervisión</th>
                                                    <th>Capturista Supervisor</th>
                                                    <th>Fecha Registro Supervisión</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <button id="btnModal-eliComVerifDiaBat" class="btn btn-white" data-toggle="modal" data-target='.eliComVerifDiaBat'></button>
                                    <button id="btnModal-eliminarComVerifDiaBatSuper" class="btn btn-white" data-toggle="modal" data-target=".eliminarComVerifDiaBatSuper"></button>
                                    <?php
                                    require '../components/modal-eliminarComVerifDiaBat.php';
                                    require '../components/modal-eliminarComVerifDiaBatSuper.php';
                                    ?>
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
                                    <h3 class="card-title"><strong>2.3.3.3 Ver Tabla Incidencias</strong></h3>
                                    <div class="card-tools">
                                        <a href="../admin/crudVarificacionDiariaBaterias.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    if ($super == 1 or $verGralIncidencias == 1) {
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
                                    } else {
                                        $query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 0";
                                    }
                                    $resultado = mysqli_query($conexion, $query);

                                    if ($super == 1) {
                                    } else if ($verGralIncidencias == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <hr>
                                    <br>
                                    <h4 class="text-center"><strong>Incidencias Registradas</strong></h4>
                                    <div id="table_refresh2">
                                        <table id="tableVarios2" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Eliminar</th>
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
                                                            <?php echo "<h6><span class='badge badge-success badge-pill'>{$row['folio']}</span></h6>" ?>
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
                                                        <td>

                                                            <?php
                                                            if ($super == 1 or $eliIncidencia == 1) {
                                                                echo "<a href='#' onclick='abrirModal3(\"" . $nP . "\", \"" . $id_i . "\", \"" . $f . "\")' class='btn btn-secondary' data-toggle='tooltip' data-placement='bottom' title='2.3.3.5 Eliminar Incidencia'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            } else {
                                                                echo  "<a class='btn btn-outline-danger' id='eliIncidencia' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
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
                                                    <th>Eliminar</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <button id="btnModal-eliminarIncidencia" class="btn btn-white" data-toggle="modal" data-target='.eliminarIncidencia'></button>
                                    <?php
                                    require '../components/modal-eliminarIncidencia.php';
                                    ?>

                                    <?php
                                    if ($super == 1 or $verGralIncidencias == 1) {
                                        $cont = 0;
                                        $query = "SELECT P.id_proyecto, P.nProyecto,
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio,
                                    I.incidencia, I.fecha_creacion, I.folio,
                                    I.com, I.sup, I.id_incidencia, I.fecha_borrado,
                                    U.nombres, U.aPaterno, U.aMaterno,
                                    UB.nombres AS nomB, UB.aPaterno AS patB, UB.aMaterno AS matB
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
                                    LEFT JOIN incidencias I ON P.id_proyecto = I.id_proyecto
                                    LEFT JOIN usuarios U ON I.id_capC = U.id_usuario
                                    LEFT JOIN usuarios UB ON I.id_capB = UB.id_usuario
                                    WHERE P.id_proyecto = '$id_proyecto' and I.borrado = 1";
                                    } else {
                                        $query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = 1";
                                    }
                                    $resultado = mysqli_query($conexion, $query);

                                    if ($super == 1) {
                                    } else if ($verGralIncidencias == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <hr>
                                    <br>
                                    <h4 class="text-center"><strong>Incidencias Eliminadas</strong></h4>
                                    <div id="table_refresh3">
                                        <table id="tableVarios3" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                                    <th>Capturista Eliminó</th>
                                                    <th>Fecha Borrado</th>
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
                                                    $solicitanteB = $row['nomB'] . ' ' . $row['patB'] . ' ' . $row['matB'];
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
                                                            <?php echo "<h6><span class='badge badge-danger badge-pill'>{$row['folio']}</span></h6>" ?>
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
                                                        <td>
                                                            <?php echo (empty($solicitanteB)) ? 'Sin Registro' : $solicitanteB; ?>
                                                        </td>                                                        
                                                        <td>
                                                            <?php echo (empty($row['fecha_borrado'])) ? 'Sin Registro' : $row['fecha_borrado']; ?>
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
                                                    <th>Capturista Eliminó</th>
                                                    <th>Fecha Eliminado</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

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
        // 2.3.3.6 Eliminar Comprobación Recepción de Piezas Dañadas
        $('#btnDeleteComVerifDiaBat').click(function() {
            var param = $('#formDeleteComVerifDiaBat').serialize();
            $.ajax({
                    url: '../delete/deleteComVerifDiaBat.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formDeleteComVerifDiaBat')[0].reset();
                        setTimeout(function() {
                            $('.eliComVerifDiaBat').modal('hide');
                        }, 1000);
                        $("#table_refresh").load(" #table_refresh");
                    }
                })
                .done(function(res) {
                    $('#respuestaDeleteComVerifDiaBat').html(res)
                })
        });
        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnDeleteComVerifDiaBat").on('click', function() {
            $("#btnDeleteComVerifDiaBat").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteComVerifDiaBat").css('visibility', 'visible');
            }, 3000);
        });

        // ------------------------------------------------------------------------------------------------------------------------------------------------------------------

        //2.3.3.7 Eliminar Supervisión de Comprobación Recepción de Piezas Dañadas
        $('#btnDeleteComVerifDiaBatSuper').click(function() {
            var param = $('#formDeleteComVerifDiaBatSuper').serialize();
            $.ajax({
                    url: '../delete/deleteComVerifDiaBatSuper.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formDeleteComVerifDiaBatSuper')[0].reset();
                        setTimeout(function() {
                            $('.eliminarComVerifDiaBatSuper').modal('hide');
                        }, 1000);
                        $("#table_refresh").load(" #table_refresh");
                    }
                })
                .done(function(res) {
                    $('#respuestaDeleteComVerifDiaBatSuper').html(res)
                })
        });
        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnDeleteComVerifDiaBatSuper").on('click', function() {
            $("#btnDeleteComVerifDiaBatSuper").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteComVerifDiaBatSuper").css('visibility', 'visible');
            }, 3000);
        });

        //------------------------------------------------------------------------------------------------------------------------------------------------------------------

        // Eliminar Incidencia ---------------------------------------------------------
        $('#btnEliminarIncidencia').click(function() {
            var param = $('#formEliminarIncidencia').serialize();
            $.ajax({
                    url: '../update/updateEliminarIncidencia.php',
                    type: 'POST',
                    data: param,

                    success: function(s) {
                        $('#formEliminarIncidencia')[0].reset();
                        setTimeout(function() {
                            $('.eliminarIncidencia').modal('hide');
                        }, 1000);
                        $("#table_refresh2").load(" #table_refresh2");
                    }
                })
                .done(function(res) {
                    $('#respuestaEliminarIncidencia').html(res)
                })
        });

        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnEliminarIncidencia").on('click', function() {
            $("#btnEliminarIncidencia").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnEliminarIncidencia").css('visibility', 'visible');
            }, 3000);
        });
    </script>
</body>

</html>