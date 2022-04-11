<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla 3.1 Reporte Diferencia Valor Alta Vs. Valor Código Identificador | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">3.1 Reporte Diferencia Valor Alta Vs. Valor Código Identificador </h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-11">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Reporte Diferencia Valor Alta Vs. Valor Código Identificador </h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, 
                                    V.placa, Co.color, M.marca, Mo.modelo, A.anio, RS.valorVentaAlta,
                                    RC.id_regcodidenti, RC.borrado, RC.folioCodID, RC.supervisionValores,
                                    S.semana, SC.semanaCobro, D.codIdProyBase, D.valCobProyBase
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto  
                                    INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                                    INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
                                    INNER JOIN semanas S ON RS.id_semana = S.id_semana
                                    INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
                                    WHERE proyCodIdentificador = 1 AND RC.borrado = 0 AND RS.valorVentaAlta <> D.valCobProyBase ORDER BY nProyecto ASC";
                                } else if ($verTablaRepVVAvsVCodID == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, 
                                    V.placa, Co.color, M.marca, Mo.modelo, A.anio, RS.valorVentaAlta,
                                    RC.id_regcodidenti, RC.borrado, RC.folioCodID,RC.supervisionValores,
                                    S.semana, SC.semanaCobro, D.codIdProyBase, D.valCobProyBase
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto  
                                    INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                                    INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
                                    INNER JOIN semanas S ON RS.id_semana = S.id_semana
                                    INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
                                    WHERE proyCodIdentificador = 1 AND RC.borrado = 0 AND RS.valorVentaAlta <> D.valCobProyBase ORDER BY nProyecto ASC";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaRepVVAvsVCodID == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableProyCodId" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Código Identificador Valor Base</th>
                                                <th>Núm Código ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th>Semana de Cobro</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Valor Cobro Proyecto Base</th>
                                                <th>Status Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                                $codIdProyBase = $row['codIdProyBase'];
                                                $id_regcodidenti = $row['id_regcodidenti'];
                                                $VVA = $row["valorVentaAlta"];
                                                $Sup = $row['supervisionValores'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['codIdProyBase'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['folioCodID'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nProyecto']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nOrden'] ?>
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
                                                        <?php echo $row['semana'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['semanaCobro'] ?>
                                                    </td>
                                                    <td style="min-width: 10%;">
                                                        <?php echo $row['valorVenta'] ?>
                                                    </td>
                                                    <td style="min-width: 10%; background: gray; color: #fff">
                                                        <?php
                                                        echo $row["valorVentaAlta"];
                                                        ?>
                                                    </td>
                                                    <td style="min-width: 10%; background: gray; color: #fff">
                                                        <?php echo $row['valCobProyBase'] ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($Sup == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Sin Supervisión</span></h6>';
                                                        } else if ($Sup == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Supervisado</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class=" input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Marcas"> Acciones</span></button>
                                                                <ul class="dropdown-menu" style="min-width: 2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="3.1.1 Registrar Motivo Supervisión">
                                                                                <?php if ($super == 1 && $Sup == 0) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".regMotivoSupVVAvsVCodID-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                    </button>
                                                                                <?php } else if ($super == 1 && $Sup == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="regMotivoSupVVAvsVCodID"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                                } else if ($regMotivoSupVVAvsVCodID == 1 && $Sup == 0) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".regMotivoSupVVAvsVCodID-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                    </button>
                                                                                <?php  } else if ($regMotivoSupVVAvsVCodID == 1 && $Sup == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="regMotivoSupVVAvsVCodID"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                                } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="regMotivoSupVVAvsVCodID"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                                } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="3.1.2 Modificar Motivo Supervisión">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".modMotivoSupVVAvsVCodID-<?php echo $row["id_proyecto"] ?>"><i class="fa-solid fa-pen-to-square"></i>
                                                                                    </button>
                                                                                <?php  } else if ($modMotivoSupVVAvsVCodID == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".modMotivoSupVVAvsVCodID-<?php echo $row["id_proyecto"] ?>"><i class="fa-solid fa-pen-to-square"></i>
                                                                                    </button>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="modMotivoSupVVAvsVCodID"><i class="fa-solid fa-pen-to-square"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="3.1.3 Ver Link de Video, Observaciones y Generales">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target="#verGralRepVVAvsVCodID-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                                <?php  } else if ($verGralRepVVAvsVCodID == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#verGralRepVVAvsVCodID-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verGralRepVVAvsVCodID"><i class="fa-solid fa-comments"></i>
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
                                                require '../components/modal-verRepDifValVenAltavsValCodId.php';
                                                require '../components/modal-regMotivoSupVVAvsVCodID.php';
                                                require '../components/modal-modMotivoSupVVAvsVCodID.php';
                                                ?>
                                            <?php
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Código Identificador Valor Base</th>
                                                <th>Núm Código ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th>Semana de Cobro</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Status Supervisión</th>
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

    <script>
        // regMotivoSupVVAvsVCodID  3.1.1 PDF CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#regMotivoSupVVAvsVCodID ").click(function() {
                toastr["error"]("¡No tienes acceso a: 3.1.1 REGISTRO MOTIVO DE SUPERVISION, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // eliCodIdentificador 3.1.2 ELIMINAR CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliCodIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.6.2 ELIMINAR CODIGO IDENTIFICADOR, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // pdfCodIdentificador 2.6.3 DESCARGAR PDF CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#pdfCodIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.3 DESCARGAR PDF REGISTRO CODIGO IDENTIFICADOR, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // verLinkObsIdentificador 2.6.4 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#verLinkObsIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.4 VER LINK DE VIDEO EN VIVO Y OBSERVACIONES, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // varTablaAlta 2.5.4 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#verTablaCodIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.4 VER TABLA PROYECTOS CON CODIGO IDENTIFICADOR, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });
        // copiar link al portapapeles
        var clipboard = new Clipboard('.btn');
    </script>
</body>

</html>