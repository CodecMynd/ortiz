<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Proyectos con Código Identificador | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.6 Proyectos con Código Identificador</h1>
                        </div>
                        <div class="col-sm-4 ">
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
                                    <h3 class="card-title">Registro de Código Identificador en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/FormRegCodIdentificador.php" data-toggle="tooltip" data-placement="left" title="2.6.1 Registro de Código Identificador">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Código Identificador</a>
                                        <?php } else if ($regCodIdentificador == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/FormRegCodIdentificador.php" data-toggle="tooltip" data-placement="left" title="2.6.1 Registro de Código Identificador">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Código Identificador</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regCodIdentificador" data-toggle="tooltip" data-placement="left" title="2.6.1 Registro de Código Identificador">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Código Identificador</a>
                                        <?php } ?>
                                        <a href="crudAltaProyecto.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.5 Alta Proyecto"><i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i></a>

                                        <a href="crudSuperCodiIdentificador.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.7 Supervisión de Registro Código Identificador"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, V.placa, M.marca, Mo.modelo, A.anio, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, LV.link, Co.color, RC.id_regcodidenti, RC.valorCobro, RC.codIdentificador, RC.borrado
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
                                    INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
                                    INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
                                    INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                                    WHERE proyCodIdentificador = 1 AND RC.borrado = 0 AND supervisado = 0 ORDER BY nProyecto ASC";
                                } else if ($verTablaCodIdentificador == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, V.placa, M.marca, Mo.modelo, A.anio, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, LV.link, Co.color, RC.id_regcodidenti, RC.valorCobro, RC.codIdentificador, RC.borrado
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
                                    INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
                                    INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
                                    INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                                    WHERE proyCodIdentificador = 1 AND RC.borrado = 0 AND supervisado = 0 ORDER BY nProyecto ASC";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaCodIdentificador == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Código Identificación</th>
                                                <th>Núm. Folio de Alta</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Valor Cobro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                                $codIdentificador = $row['codIdentificador'];
                                                $id_regcodidenti = $row['id_regcodidenti'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['codIdentificador'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['folioRegAlta'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['folioRegSolicitud'] ?>
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
                                                        <?php echo $row['valorVentaAlta'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['valorCobro'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Marcas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.6.2 Eliminar Registro Código Identificador">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarRegCodIdentificador<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php  } else if ($eliCodIdentificador == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarRegCodIdentificador<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliCodIdentificador"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <!-- repAltaCob permiso -->
                                                                            <span data-toggle="tooltip" title="2.6.3 Descarga PDF Registro Código Identificador">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/regCodIdentificador.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php  } else if ($pdfCodIdentificador == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/regCodIdentificador.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="pdfCodIdentificador"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.6.4 Ver Link de Video en Vivo y Observaciones">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".verLinkVideo-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                                <?php  } else if ($verLinkObsIdentificador == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verLinkVideo-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verLinkObsIdentificador"><i class="fa-solid fa-comments"></i>
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
                                                require '../components/modal-regresarRegCodIdentificador.php';
                                                require '../components/modal-verLink.php';
                                                ?>
                                            <?php
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Código Identificación</th>
                                                <th>Núm. Folio de Alta</th>
                                                <th>Núm. Folio Solicitud Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Valor Cobro</th>
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

    <script>
        // regCodIdentificador 2.6.1 REGISTRO CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#regCodIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.1 REGISTRO DE CÓDIGO IDENTIFICADOR, consulta al administrador!")

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

        // eliCodIdentificador 2.6.2 ELIMINAR CODIGO IDENTIFICADOR  --------------------------------------------------------------
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
        // regresar a tabla registro solicitud
        $(document).ready(function() {
            $('#btnRegresarRegCodIdentificador').click(function() {
                $.ajax({
                        url: '../update/updateRegresarRegCodIdentificador.php',
                        type: 'POST',
                        data: $('#formRegresarRegCodIdentificador').serialize(),
                    })
                    .done(function(res) {
                        $('#respuestaRegresarRegCodIdentificador').html(res)
                    })
            });

        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnRegresarRegCodIdentificador").on('click', function() {
            $("#btnRegresarRegCodIdentificador").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnRegresarRegCodIdentificador").css('visibility', 'visible');
            }, 300000);
        });
    </script>

    </html>