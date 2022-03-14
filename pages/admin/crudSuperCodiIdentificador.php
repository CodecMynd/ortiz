<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Supervisión de Registro Código Identificador | <?php echo $nomComp ?></title>
<style>
    @media (min-width:320px) and (max-width:425px) {
            .content-header{
                margin-bottom: 90px;
                width: 100%;

            }

            .content-header h1{
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
                            <h1 class="m-0">Tabla 2.7 Supervisión de Registro Código Identificador </h1>
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
                                    <h3 class="card-title">Supervisión de Registro Código Identificador en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formSuperCodIdentificador.php" data-toggle="tooltip" data-placement="left" title="2.7.1 Supervisión de Registro Código Identificador ">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Supervisión de Registro Código Identificador </a>
                                        <?php } else if ($regSuperCodIdentificador == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formSuperCodIdentificador.php" data-toggle="tooltip" data-placement="left" title="2.7.1 Supervisión de Registro Código Identificador ">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Supervisión de Registro Código Identificador </a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regSuperCodIdentificador" data-toggle="tooltip" data-placement="left" title="2.7.1 Supervisión de Registro Código Identificador ">
                                                <i class="fa-solid fa-file-arrow-up"></i></i>&nbsp;&nbsp; Supervisión de Registro Código Identificador </a>
                                        <?php } ?>
                                        <!-- <a href="crudProyCodiIdentificador.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.6 Proyectos con Código Identificador"><i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i></a> -->

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, RS.folioRegSolicitud, RS.valorVentaAlta, RS.inspecCalidad, RS.observCliente, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, LV.link, Co.color, RC.id_regcodidenti, RC.valorCobro, RC.codIdentificador, RC.borrado, S.semana, SC.semanaCobro,
                                    RS.fecha_creacion AS regSolfecha, RA.fecha_creacion AS regAltaFecha, RC.fecha_creacion AS regCodIdFechas, SV.fecha_creacion AS SupervicionFecha,
                                    URS.nombres AS RSNombre, URS.aPaterno AS RSPaterno, URS.aMaterno AS RSMaterno,
                                    URA.nombres AS RANombre, URA.aPaterno AS RAPaterno, URA.aMaterno AS RAMaterno,
                                    URC.nombres AS RCNombre, URC.aPaterno AS RCPaterno, URC.aMaterno AS RCMaterno,
                                    USV.nombres AS SVNombre, USV.aPaterno AS SVPaterno, USV.aMaterno AS SVMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto 
                                    INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
                                    INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
                                    INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                                    INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
                                    INNER JOIN semanas S ON RS.id_semana = S.id_semana
                                    INNER JOIN usuarios URS ON RS.id_capC = URS.id_usuario
                                    INNER JOIN usuarios URA ON RA.id_capC = URA.id_usuario
                                    INNER JOIN usuarios URC ON RC.id_capC = URC.id_usuario
                                    INNER JOIN supervisado SV ON P.id_proyecto = SV.id_proyecto
                                    INNER JOIN usuarios USV ON SV.id_capC = USV.fecha_creacion
                                    WHERE superCodIdentificador = 1 AND RC.borrado = 0 AND SV.supervisado = 1 ORDER BY nProyecto ASC";
                                } else if ($verTablaSuperCodIdentificador == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, RS.folioRegSolicitud, RS.valorVentaAlta, RS.inspecCalidad, RS.observCliente, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, LV.link, Co.color, RC.id_regcodidenti, RC.valorCobro, RC.codIdentificador, RC.borrado, S.semana, SC.semanaCobro,
                                    RS.fecha_creacion AS regSolfecha, RA.fecha_creacion AS regAltaFecha, RC.fecha_creacion AS regCodIdFechas, SV.fecha_creacion AS SupervicionFecha,
                                    URS.nombres AS RSNombre, URS.aPaterno AS RSPaterno, URS.aMaterno AS RSMaterno,
                                    URA.nombres AS RANombre, URA.aPaterno AS RAPaterno, URA.aMaterno AS RAMaterno,
                                    URC.nombres AS RCNombre, URC.aPaterno AS RCPaterno, URC.aMaterno AS RCMaterno,
                                    USV.nombres AS SVNombre, USV.aPaterno AS SVPaterno, USV.aMaterno AS SVMaterno
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co ON V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                                    INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto 
                                    INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
                                    INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
                                    INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                                    INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_semanaCobro
                                    INNER JOIN semanas S ON RS.id_semana = S.id_semana
                                    INNER JOIN usuarios URS ON RS.id_capC = URS.id_usuario
                                    INNER JOIN usuarios URA ON RA.id_capC = URA.id_usuario
                                    INNER JOIN usuarios URC ON RC.id_capC = URC.id_usuario
                                    INNER JOIN supervisado SV ON P.id_proyecto = SV.id_proyecto
                                    INNER JOIN usuarios USV ON SV.id_capC = USV.fecha_creacion
                                    WHERE superCodIdentificador = 1 AND RC.borrado = 0 AND SV.supervisado = 1 ORDER BY nProyecto ASC";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSuperCodIdentificador == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableSuperRegCodId" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Código Identificación</th>
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
                                                $regSolfecha = $row['regSolfecha'];
                                                $regAltaFecha = $row['regAltaFecha'];
                                                $regCodIdFechas = $row['regCodIdFechas'];
                                                $SupervicionFecha = $row['SupervicionFecha'];
                                                $RSCapturista = $row['RSNombre'] . ' ' . $row['RSPaterno'] . ' ' . $row['RSMaterno'];
                                                $RACapturista = $row['RANombre'] . ' ' . $row['RAPaterno'] . ' ' . $row['RAMaterno'];
                                                $RCCapturista = $row['RCNombre'] . ' ' . $row['RCPaterno'] . ' ' . $row['RCMaterno'];
                                                $SVCapturista = $row['SVNombre'] . ' ' . $row['SVPaterno'] . ' ' . $row['SVMaterno'];
                                                $cronometro = $row['cronometro'];
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
                                                    <td style="width: 10%">
                                                        <?php echo $row['valorVenta'] ?>
                                                    </td>
                                                    <td style="width: 10%">
                                                        <?php echo $row['valorVentaAlta'] ?>
                                                    </td>
                                                    <td style="width: 10%">
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
                                                                            <span data-toggle="tooltip" title="2.7.2 Eliminar Supervisión de Registro Código Identificador ">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarSuperCodIdentificador<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php  } else if ($eliSuperCodIdentificador == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target="#regresarSuperCodIdentificador<?php echo $row['id_proyecto'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="eliSuperCodIdentificador"><i class="fas fa-trash-alt"></i></a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.7.3 Ver Link de Video, Observaciones y Generales">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".verSuperCodId<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                                <?php  } else if ($verLinkObsSuperIdentificador == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verSuperCodId<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verLinkObsSuperIdentificador"><i class="fa-solid fa-comments"></i>
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
                                                require '../components/modal-regresarSuperCodIdentificador.php';
                                                require '../components/modal-verSuperCodIdentificador.php';
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
            $('#btnRegresarSuperCodIdentificador').click(function() {
                $.ajax({
                        url: '../update/updateRegresarSuperCodIdentificador.php',
                        type: 'POST',
                        data: $('#formRegresarSuperCodIdentificador').serialize(),
                    })
                    .done(function(res) {
                        $('#respuestaRegresarRegCodIdentificador').html(res)
                    })
            });

        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnRegresarSuperCodIdentificador").on('click', function() {
            $("#btnRegresarSuperCodIdentificador").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnRegresarSuperCodIdentificador").css('visibility', 'visible');
            }, 300000);
        });

        // regSuperCodIdentificador 2.7.1 SUPERVISION DE REGISTRO CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#regSuperCodIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.7.1 SUPERVISION DE REGISTRO DE CÓDIGO IDENTIFICADOR, consulta al administrador!")

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

        // eliSuperCodIdentificador 2.6.2 ELIMINAR CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliSuperCodIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.7.2 ELIMINAR SUPERVISION DE CODIGO IDENTIFICADOR, consulta al administrador!")

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

        // verLinkObsSuperIdentificador 2.6.4 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#verLinkObsSuperIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.7.3 VER LINK DE VIDEO EN VIVO Y OBSERVACIONES, consulta al administrador!")

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

        // verTablaSuperCodIdentificador 2.5.4 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#verTablaSuperCodIdentificador").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.7.4 VER TABLA PROYECTOS SUPERVISADOS CON CODIGO IDENTIFICADOR, consulta al administrador!")

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