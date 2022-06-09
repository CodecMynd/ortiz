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
        $("#btnModal-regSolRecPzsDanada").click();
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

    function abrirModal3(id_proyecto, nProyecto, id_solPzsDanadas, folio_solicitud) {
        $("#btnModal-regCompraInicial").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_solPzsDanadas3").val(id_solPzsDanadas);
        $("#folio_solicitudText").html(folio_solicitud);
        $("#folio_solicitud3").val(folio_solicitud);
        $("#tituloModal3").html(nProyecto);
    }

    function abrirModal4(nomProvee, nomProvee, nProyecto, id_regCompraInicial, folio_solicitud, id_solPzsDanadas) {
        $("#btnModal-eliminarCompraInicial").click();
        $("#id_regCompraInicial4").val(id_regCompraInicial);
        $("#folio_solicitud4").val(folio_solicitud);
        $("#id_solPzsDanadas4").val(id_solPzsDanadas);
        $("#nomProvee4").html(nomProvee);
        $("#tituloModal4").html(nProyecto);
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
                                    R.linkRecPzsDanadas, R.fecha_borrado, U.nombres, U.aPaterno, U.aMaterno,
                                    T.tecArmador
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
                                    LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                                    LEFT JOIN tecarmadores T ON R.id_tecArmador = T.id_tecArmador
                                    LEFT JOIN usuarios U ON R.id_capB = U.id_usuario
                                    WHERE P.id_Proyecto =  $id_proyecto";
                                    $resultado1 = mysqli_query($conexion, $query1);
                                    $row1 = $resultado1->fetch_assoc();
                                    $captB = (empty($row1['nombres']) AND empty($row1['aPaterno']) AND empty($row1['aMaterno'])) ? 'Sin Registro' : $row1['nombres'].' '.$row1['aPaterno'].' '.$row1['aMaterno'];

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
                                                <th>Técnico Armador</th>
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
                                                <td><?php echo (empty($row1['tecArmador'])) ? 'Sin Registro' : $row1['tecArmador'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Link de Desarmado</th>
                                                <th>Fecha Link Elimnado</th>
                                                <th>Capturista Elimino</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo (empty($row1['linkRecPzsDanadas'])) ? 'Sin Registro' : $row1['linkRecPzsDanadas'] ?></td>
                                                <td><?php echo (empty($row1['fecha_borrado'])) ? 'Sin Registro' : $row1['fecha_borrado'] ?></td>
                                                <td><?php echo  $captB?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <!-- -------------------------------------------------------------------------------------------------- -->
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
                                    echo '<a href="javascript:location.reload()" class="btn btn-secondary mb-2 ml-1" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>';

                                    if ($super == 1 or $verGralRecPzsDanadas == 1) {
                                        $cont = 0;
                                        $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId,
                                        S.id_solPzsDanadas, S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
                                        S.borrado, S.enUso, S.regCompraInicial,
                                        U.nombres, U.aPaterno, U.aMaterno,
                                        RC.id_regCompraInicial,RC.precio, RC.modalidadPago, RC.borrado AS borradoRegComInicial,
                                        RC.fecha_creacion AS fechaCompra, PR.nomProvee,
                                        UCI.nombres AS nomc, UCI.aPaterno AS patc, UCI.aMaterno as matc
                                        from proyectos P 
                                        LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                                        LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
                                        LEFT JOIN usuarios U ON S.id_capC = U.id_usuario
                                        LEFT JOIN regcomprainicial RC ON S.id_solPzsDanadas = RC.id_solPzsDanadas
                  						LEFT JOIN usuarios UCI ON RC.id_capC = UCI.id_usuario
                                        LEFT JOIN proveedores PR ON RC.id_proveedor = PR.id_proveedor
                                        WHERE P.id_Proyecto = $id_proyecto AND P.proyectoActivo = 1 AND S.borrado = 0 ORDER BY S.fecha_creacion DESC";
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
                                                    <th>Proveedor</th>
                                                    <th>Modo de Pago</th>
                                                    <th>Costo Credito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Fecha Registro Compra Inicial</th>
                                                    <th>Capturista Registro Compra Inicial</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = $resultado->fetch_assoc()) {
                                                    $id_proyecto = $row['id_proyecto'];
                                                    $nP = $row['nProyecto'];
                                                    $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                                    $captCompra = $row['nomc'] . ' ' . $row['patc'] . ' ' . $row['matc'];
                                                    $linkId = (empty($row['linkId'])) ? '' : $row['linkId'];
                                                    $id_solPzsDanadas = $row['id_solPzsDanadas'];
                                                    $folio_solicitud = $row['folio_solicitud'];
                                                    $id_regCompraInicial = $row['id_regCompraInicial'];
                                                    $nomProvee = $row['nomProvee'];
                                                    $regCompraInicial = $row['regCompraInicial'];

                                                    // costo Credito o contado
                                                    if ($row['modalidadPago'] == 'Crédito') {
                                                        $Credito = $row['precio'];
                                                        $Contado = 0;
                                                    } else if ($row['modalidadPago'] == 'Contado') {
                                                        $Credito = 0;
                                                        $Contado = $row['precio'];
                                                    }
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
                                                            <?php echo (empty($row['folio_solicitud'])) ? 'Sin Registro' : "<h6><span class='badge badge-success badge-pill'>{$row['folio_solicitud']}</span></h6>" ?>
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
                                                        <td>
                                                            <?php echo (empty($row['nomProvee'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['nomProvee']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['modalidadPago'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['modalidadPago']; ?>
                                                        </td>
                                                        <td style="width:8%">
                                                            <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Credito</strong>" ?>
                                                        </td>
                                                        <td style="width:8%">
                                                            <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Contado</strong>" ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['fechaCompra'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['fechaCompra']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($captCompra)) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $captCompra ?>
                                                        </td>
                                                        <td>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Marcas"> Acciones</span>
                                                                    </button>
                                                                    <ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="4.1.5 Eliminar Solicitud de Piezas (Eliminar toda la fila)">
                                                                                <?php
                                                                                if ($super == 1) {
                                                                                    echo "<a href='#' onclick='abrirModal2(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_solPzsDanadas . "\", \"" . $folio_solicitud . "\")' class='btn btn-secondary'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else if ($super == 1 and $regCompraInicial == 1) {
                                                                                    echo  "<a class='btn btn-outline-danger' id='eliSolRecPzsDanadas' data-toggle='tooltip' data-placement='bottom' title='Primero Borra Registro de Compra Inicial'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else if ($eliSolRecPzsDanadas == 1) {
                                                                                    echo "<a href='#' onclick='abrirModal2(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_solPzsDanadas . "\", \"" . $folio_solicitud . "\")' class='btn btn-secondary'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else if ($eliSolRecPzsDanadas == 1 and $regCompraInicial == 1) {
                                                                                    echo  "<a class='btn btn-outline-danger' id='eliSolRecPzsDanadas' data-toggle='tooltip' data-placement='bottom' title='Primero Borra Registro de Compra Inicial'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else {
                                                                                    echo  "<a class='btn btn-outline-danger' id='eliSolRecPzsDanadas' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="4.1.6 Registro de Compra Inicial">
                                                                                <?php
                                                                                if ($super == 1 and $regCompraInicial == 0 and $row['borrado'] == 0) {
                                                                                    echo "<a href='#' onclick='abrirModal3(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_solPzsDanadas . "\", \"" . $folio_solicitud . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
                                                                                } else if ($super == 1 and $regCompraInicial == 1 or $row['borrado'] == 1) {
                                                                                    echo  "<a class='btn btn-outline-danger' id='regCompraInicial' data-toggle='tooltip' data-placement='bottom' title='Ya hay Registro de Compra Inicial'><i class='fa-solid fa-pencil'></i></a>";
                                                                                } else if ($perRegCompraInicial == 1) {
                                                                                    echo "<a href='#' onclick='abrirModal3(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_solPzsDanadas . "\", \"" . $folio_solicitud . "\")' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
                                                                                } else if ($perRegCompraInicial == 1 and $regCompraInicial == 1 or $row['borrado'] == 1) {
                                                                                    echo  "<a class='btn btn-outline-danger' id='perRegCompraInicial' data-toggle='tooltip' data-placement='bottom' title='Ya hay Registro de Compra Inicial'><i class='fa-solid fa-pencil'></i></a>";
                                                                                } else {
                                                                                    echo  "<a class='btn btn-outline-danger' id='perRegCompraInicial' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-pencil'></i></a>";
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item  mt-1">
                                                                            <span data-toggle="tooltip" title="4.1.7 Eliminar Registro de Compra Inicial">
                                                                                <?php
                                                                                if ($super == 1 and $regCompraInicial == 1) {
                                                                                    echo "<a href='#' onclick='abrirModal4(\"" . $id_proyecto . "\",\"" . $row['nomProvee'] . "\",\"" . $nP . "\",\"" . $id_regCompraInicial . "\",\"" . $folio_solicitud . "\",\"" . $id_solPzsDanadas . "\")' class='btn btn-secondary'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else if ($super == 1 and $regCompraInicial == 0) {
                                                                                    echo  "<a class='btn btn-outline-danger' id='eliRegCompraInicial' data-toggle='tooltip' data-placement='bottom' title='No puedes eliminar sin haber ingresado un registro'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else    if ($eliRegCompraInicial == 1 and $regCompraInicial == 1) {
                                                                                    echo "<a href='#' onclick='abrirModal4(\"" . $id_proyecto . "\",\"" . $row['nomProvee'] . "\",\"" . $nP . "\",\"" . $id_regCompraInicial . "\",\"" . $folio_solicitud . "\",\"" . $id_solPzsDanadas . "\")' class='btn btn-secondary'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else if ($eliRegCompraInicial == 1 and $regCompraInicial == 0) {
                                                                                    echo  "<a class='btn btn-outline-danger' id='eliRegCompraInicial' data-toggle='tooltip' data-placement='bottom' title='No puedes eliminar sin haber ingresado un registro'><i class='fa-solid fa-trash-alt'></i></a>";
                                                                                } else {
                                                                                    echo  "<a class='btn btn-outline-danger' id='eliRegCompraInicial' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
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
                                                    <th>Núm. Folio</th>
                                                    <th>Cantidad</th>
                                                    <th>Descripción</th>
                                                    <th>Minuto de Video</th>
                                                    <th>Capturista Solicitante</th>
                                                    <th>Fecha Solicitud</th>
                                                    <th>Proveedor</th>
                                                    <th>Modo de Pago</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Fecha Registro Compra Inicial</th>
                                                    <th>Capturista Registro Compra Inicial</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <button id="btnModal-regSolRecPzsDanada" class="btn btn-white" data-toggle="modal" data-target='.regSolRecPzsDanada'></button>
                                    <button id="btnModal-eliminarSolRecPzsDanadas" class="btn btn-white" data-toggle="modal" data-target=".eliminarSolRecPzsDanadas"></button>
                                    <button id="btnModal-regCompraInicial" class="btn btn-white" data-toggle="modal" data-target=".regCompraInicial"></button>
                                    <button id="btnModal-eliminarCompraInicial" class="btn btn-white" data-toggle="modal" data-target=".eliminarCompraInicial"></button>

                                    <?php
                                    require '../components/modal-regSolRecPzsDanadas.php';
                                    require '../components/modal-eliminarSolRecPzsDanadas.php';
                                    require '../components/modal-regCompraInicial.php';
                                    require '../components/modal-eliminarCompraInicial.php';

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- -------------------------------------------------------------------------------------------------- -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title"></h3>
                                    <div class="card-tools">
                                        <a href="../admin/crudRecPzsDanadas.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong> Consulta: Registros Solicitudes de Piezas Eliminadas del Número de Proyecto: <?php echo $row1['nProyecto'] ?> </strong></h5>
                                    <?php
                                    $cont = 0;
                                    $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId,
                                    S.id_solPzsDanadas, S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
                                    S.borrado, S.enUso, S.regCompraInicial, S.fecha_borrado,
                                    RC.id_regCompraInicial,RC.precio, RC.modalidadPago, RC.borrado AS borradoRegComInicial,
                                    RC.fecha_creacion AS fechaCompra, PR.nomProvee,
                                    UR.nombres AS nomR, UR.aPaterno AS patR, UR.aMaterno as matR,
                                    UB.nombres AS nomB, UB.aPaterno AS patB, UB.aMaterno AS matB,
                                    UC.nombres AS nomC, UC.aPaterno AS patC, UC.aMaterno AS matC
                                    from proyectos P 
                                    LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                                    LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
                                    LEFT JOIN usuarios UR ON S.id_capC = UR.id_usuario
                                    LEFT JOIN regcomprainicial RC ON S.id_solPzsDanadas = RC.id_solPzsDanadas
                                    LEFT JOIN usuarios UB ON S.id_capB = UB.id_usuario
                                    LEFT JOIN proveedores PR ON RC.id_proveedor = PR.id_proveedor
                                    LEFT JOIN usuarios UC ON RC.id_capC = UC.id_usuario
                                    WHERE P.id_Proyecto = $id_proyecto AND P.proyectoActivo = 1 AND S.borrado = 1 ORDER BY S.fecha_borrado DESC";
                                    $resultado = mysqli_query($conexion, $query); ?>
                                    <div id="table_refresh2">
                                        <table id="tableUpdateRecPzsDanadasEliminados" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Folio Solicitud de Pieza</th>
                                                    <th>Cantidad</th>
                                                    <th>Descripción</th>
                                                    <th>Minuto de Video</th>
                                                    <th>Capturista que Eliminó</th>
                                                    <th>Fecha Eliminación</th>
                                                    <th>Capturista Solicitante</th>
                                                    <th>Fecha Solicitud</th>
                                                    <th>Proveedor</th>
                                                    <th>Modo de Pago</th>
                                                    <th>Costo Credito</th>
                                                    <th>Costo Contado</th>
                                                    <th>Fecha Registro Compra Inicial</th>
                                                    <th>Capturista Registro Compra Inicial</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = $resultado->fetch_assoc()) {
                                                    $id_proyecto = $row['id_proyecto'];
                                                    $nP = $row['nProyecto'];
                                                    $solicitanteR = $row['nomR'] . ' ' . $row['patR'] . ' ' . $row['matR'];
                                                    $solicitanteB = $row['nomB'] . ' ' . $row['patB'] . ' ' . $row['matB'];
                                                    $captCompra = $row['nomC'] . ' ' . $row['patC'] . ' ' . $row['matC'];
                                                    $linkId = (empty($row['linkId'])) ? '' : $row['linkId'];
                                                    $id_solPzsDanadas = $row['id_solPzsDanadas'];
                                                    $folio_solicitud = $row['folio_solicitud'];

                                                    // costo Credito o contado
                                                    if ($row['modalidadPago'] == 'Crédito') {
                                                        $Credito = $row['precio'];
                                                        $Contado = 0;
                                                    } else if ($row['modalidadPago'] == 'Contado') {
                                                        $Credito = 0;
                                                        $Contado = $row['precio'];
                                                    }

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
                                                            <?php echo (empty($row['folio_solicitud'])) ? 'Sin Registro' : "<h6><span class='badge badge-danger badge-pill'>{$row['folio_solicitud']}</span></h6>" ?>
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
                                                            <?php echo (empty($solicitanteB)) ? 'Sin Registro' : $solicitanteB; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['fecha_borrado'])) ? 'Sin Registro' : $row['fecha_borrado']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($solicitanteR)) ? 'Sin Registro' : $solicitanteR; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['nomProvee'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['nomProvee']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['modalidadPago'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['modalidadPago']; ?>
                                                        </td>
                                                        <td style="width:8%">
                                                            <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Credito</strong>" ?>
                                                        </td>
                                                        <td style="width:8%">
                                                            <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Contado</strong>" ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($row['fechaCompra'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['fechaCompra']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo (empty($captCompra)) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $captCompra ?>
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
                                                    <th>Núm. Folio Solicitud de Pieza</th>
                                                    <th>Cantidad</th>
                                                    <th>Descripción</th>
                                                    <th>Minuto de Video</th>
                                                    <th>Capturista que Eliminó</th>
                                                    <th>Fecha Eliminación</th>
                                                    <th>Capturista Solicitante</th>
                                                    <th>Fecha Solicitud</th>
                                                    <th>Proveedor</th>
                                                    <th>Modo de Pago</th>
                                                    <th class="suma"></th>
                                                    <th class="suma"></th>
                                                    <th>Fecha Registro Compra Inicial</th>
                                                    <th>Capturista Registro Compra Inicial</th>
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
        <div id="divModal"></div>
        <div id="divModRegCompraInicial"></div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/formUpdateRecPzsDanadas.js"></script>
    <script src="../ajax/tableVarios.js"></script>
    <script>
        // 4.1.3 Registrar Solicitud de Piezas ------------------------------------------------------------------------------------------------------------------------------------
        $('#btnNuevoRegSolRecPzsDanada').click(function() {
            var param = $('#formNuevoRegSolRecPzsDanada').serialize();
            $.ajax({
                    url: '../adds/addNuevoRegSolRecPzsDanadas.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                         $('#formNuevoRegSolRecPzsDanada')[0].reset();
                         $("#table_refresh").load(" #table_refresh");
                         $("#table_refresh2").load(" #table_refresh2");
                          setTimeout(function() {
                              $('.regSolRecPzsDanada').modal('hide');
                          }, 1000);

                    }
                })
                .done(function(res) {
                    $('#respuestaRegSolRecPzsDanada').html(res)
                })
        });
        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnNuevoRegSolRecPzsDanada").on('click', function() {
            $("#btnNuevoRegSolRecPzsDanada").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnNuevoRegSolRecPzsDanada").css('visibility', 'visible');
            }, 3000);
        });

        // 4.1.5 Eliminar Solicitud de Piezas ------------------------------------------------------------------------------------------------------------------------------------
        $('#btnDeleteSolPzsDanadas').click(function() {
            var param = $('#formDeleteSolPzsDanadas').serialize();
            $.ajax({
                    url: '../delete/deleteSolPzsDanadas.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        // $('#formDeleteSolPzsDanadas')[0].reset();
                        $("#table_refresh2").load(" #table_refresh2");
                        setTimeout(function() {
                            $('.eliminarSolRecPzsDanadas').modal('hide');
                        }, 1000);
                    }
                })
                .done(function(res) {
                    $('#respuestaDeleteSolPzsDanadas').html(res)
                })
        });
        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnDeleteSolPzsDanadas").on('click', function() {
            $("#btnDeleteSolPzsDanadas").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteSolPzsDanadas").css('visibility', 'visible');
            }, 3000);
        });

        // 4.1.7 Eliminar Registro de Compra Inicial ------------------------------------------------------------------------------------------------------------------------------------
        $('#btnDeleteCompraInicial').click(function() {
            var param = $('#formDeleteCompraInicial').serialize();
            $.ajax({
                    url: '../delete/deleteCompraInicial.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        // $('#formDeleteSolPzsDanadas')[0].reset();
                        $("#table_refresh").load(" #table_refresh");
                        setTimeout(function() {
                            $('.eliminarCompraInicial').modal('hide');
                        }, 1000);
                    }
                })
                .done(function(res) {
                    $('#respuestaDeleteCompraInicial').html(res)
                })
        });
        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnDeleteCompraInicial").on('click', function() {
            $("#btnDeleteCompraInicial").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteCompraInicial").css('visibility', 'visible');
            }, 3000);
        });

        // 4.1.7 Registro de Compra Inicial ------------------------------------------------------------------------------------------------------------------------------------
        $('#btnNuevoRegCompraInicial').click(function() {
            var param = $('#formNuevoRegCompraInicial').serialize();
            $.ajax({
                    url: '../adds/addNuevoRegCompraInicial.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formNuevoRegCompraInicial')[0].reset();
                         $("#table_refresh").load(" #table_refresh");
                         setTimeout(function() {
                             $('.regCompraInicial').modal('hide');
                         }, 1000);

                    }
                })
                .done(function(res) {
                    $('#respuestaRegCompraInicial').html(res)
                })
        });
        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnNuevoRegCompraInicial").on('click', function() {
            $("#btnNuevoRegCompraInicial").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnNuevoRegCompraInicial").css('visibility', 'visible');
            }, 3000);
        });
    </script>
</body>

</html>