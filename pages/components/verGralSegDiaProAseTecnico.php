<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.6.1.3 Ver Generales Seguimiento Diario Programa de Asesoramiento Técnico | <?php echo $nomComp ?></title>
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
                        <div class="col-sm-8">
                            <h1 class="float-left m-0">2.3.6.1.3 Ver Gral. Seg. Diario Programa de Asesoramiento Técnico</h1>
                        </div>
                        <div class="col-sm-4">
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
                                        <a href="../admin/crudSegDiaAsesoramientoTecnico.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                                    <?php
                                    $id_proyecto = $_GET['id'];
                                    $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                                    V.placa, Co.color, M.marca, Mo.modelo, An.anio, A.asesor,
                                    AST.motivo
                                    from proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios An ON V.id_anio = An.id_anio 
                                   	LEFT JOIN comasesor C ON P.id_proyecto = C.id_proyecto
                                    LEFT JOIN asesores A ON C.id_asesor = A.id_asesor
                                    LEFT JOIN asesoramientostecnicos AST ON P.id_proyecto = AST.id_proyecto
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
                                                <th>Color </th>
                                                <th>Asesor</th>
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
                                                    <?php echo (empty($row1['motivo'])) ? 'Sin Registro Motivo' : $row1['motivo'] ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr>
                                    <br>
                                    <h5 class="text-center"><strong> Registros Seguimiento Diario Programa de Asesoramiento Técnico</strong></h5>

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
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
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
                                                            // $fecha = new DateTime($fechaV);
                                                            // echo $fecha_m_d_y = $fecha->format('d-m-Y');
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
                                                            // $fecha = new DateTime($fechaS);
                                                            // echo $fecha_m_d_y = $fecha->format('d-m-Y');
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
                                            desconectar();
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
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    require '../components/scripts-dataTables.php';
    ?>
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

        // 2.3.2.2.4  ELIMINAR COMPROBACION LINK DE VIDEO EN VIVO --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliComVerifDiariaVehv").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.2.2.4  ELIMINAR COMPROBACION LINK DE VIDEO EN VIVO, consulta al administrador!")

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
        // 2.3.2.2.5  ELIMINAR SUPERVISION LINK DE VIDEO EN VIVO --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliComVerifDiariaVehSuper").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.2.2.5  ELIMINAR SUPERVISION LINK DE VIDEO EN VIVO, consulta al administrador!")

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
        // NO PUEDES ELIMINAR UN REGISTRO  DE SUPERVISIÓN VACIO --------------------------------------------------------------
        $(document).ready(function() {
            $("#sinEliminar").click(function() {
                toastr["error"]("¡NO PUEDES ELIMINAR UN REGISTRO  DE SUPERVISIÓN VACIO!")

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
        // NO PUEDES ELIMINAR COMPROBACION SIN ANTES BORRAR UNA SUPERVISION --------------------------------------------------------------
        $(document).ready(function() {
            $("#yaRegistro").click(function() {
                toastr["error"]("¡NO PUEDES ELIMINAR COMPROBACION SIN ANTES BORRAR UNA SUPERVISION!")

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
    </script>
</body>

</html>

<!-- SELECT P.id_proyecto, P.nProyecto,  
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
                                    WHERE P.id_proyecto = $id_proyecto ORDER BY SD.id_SegDiaProAseTecnico DESC -->