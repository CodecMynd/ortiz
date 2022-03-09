<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Alta Proyecto | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.5 Alta Proyecto</h1>
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
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Alta Proyectos en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/FormRegAltaProyecto.php" data-toggle="tooltip" data-placement="left" title="2.5.1 Registro Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Alta Proyecto</a>
                                        <?php } else if ($regAlta == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/FormRegAltaProyecto.php" data-toggle="tooltip" data-placement="left" title="2.5.1 Registro Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Alta Proyecto</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regAlta" data-toggle="tooltip" data-placement="left" title="2.5.1 Registro Alta Proyecto">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Registro Alta Proyecto</a>
                                        <?php } ?>
                                        <a href="crudRegistroSolicitudAlta.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.4.2 Registro de Solicitud Alta Proyecto"><i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i></a>
                                        <a href="crudProyCodiIdentificador.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.6 Proyectos con Código Identificador"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, V.placa, M.marca, Mo.modelo, A.anio, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, LV.link, Co.color
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
                                    WHERE altaProyecto = 1 ORDER BY nProyecto ASC";
                                } else if ($verTablaAlta == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, V.placa, M.marca, Mo.modelo, A.anio, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, LV.link, Co.color
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
                                    WHERE altaProyecto = 1 ORDER BY nProyecto ASC";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaAlta == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
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
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                                $folioRegAlta = $row['folioRegAlta'];
                                                $id_regAlta = $row['id_regAlta'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
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
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Marcas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.5.2 Eliminar Registro Alta Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarAltaProy<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php  } else if ($eliAlta == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarAltaProy<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliAlta"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <!-- repAltaCob permiso -->
                                                                            <span data-toggle="tooltip" title="2.5.3 Descarga PDF Registro Alta Proyecto">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/altaProyecto.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php  } else if ($pdfAlta == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/altaProyecto.php?id=<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="pdfAlta"><i class="fa-solid fa-file-pdf"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.5.4 Ver Link de Video en Vivo y Observaciones">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".verLinkVideo-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                                <?php  } else if ($verLinkObsAlta == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verLinkVideo-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verLinkObsAlta"><i class="fa-solid fa-comments"></i>
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
                                                require '../components/modal-regresarAltaProyecto.php';
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
        // regresar a tabla registro solicitud
        $(document).ready(function() {
            $('#btnRegresarAltaProyecto').click(function() {
                $.ajax({
                        url: '../update/updateRegresarAltaProy.php',
                        type: 'POST',
                        data: $('#formRegresarAltaProyecto').serialize(),
                    })
                    .done(function(res) {
                        $('#respuestaRegresarAltaProyecto').html(res)
                    })
            });

        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnRegresarAltaProyecto").on('click', function() {
            $("#btnRegresarAltaProyecto").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnRegresarAltaProyecto").css('visibility', 'visible');
            }, 300000);
        });

        // regAlta 2.5.1 REGISTRO ALTA  --------------------------------------------------------------
        $(document).ready(function() {
            $("#regAlta").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.1 REGISTRO ALTA PROYECTO, consulta al administrador!")

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

        // eliAlta 2.5.2 ELIMINAR ALTA  --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliAlta").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.2 ELIMINAR ALTA PROYECTO, consulta al administrador!")

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

        // repAltaCob 2.5.3 REPORTE ALTA POR COBRANZAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#pdfAlta").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.3 REPORTE PDF ALTA PROYECTO, consulta al administrador!")

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

        // verLinkObsAlta 2.5.5 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#verLinkObsAlta").click(function() {
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

        // varTablaAlta 2.5.5 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#varTablaAlta").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.5.4 VER TABLA ALTAS, consulta al administrador!")

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

    </html>