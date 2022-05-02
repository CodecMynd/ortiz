<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Alta Proyecto | <?php echo $nomComp ?></title>
<script>
    function abrirModal1(id_proyecto, nProyecto, id_regAlta) {
        $("#btnModal-regresarAltaProyecto").click();
        $("#id_proyecto").val(id_proyecto);
        $("#id_regAlta").val(id_regAlta);
        $("#nProyecto").val(nProyecto);
        ("#numP1").html(nProyecto);
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
                                        <!-- <a href="crudRegistroSolicitudAlta.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.4.2 Registro de Solicitud Alta Proyecto"><i class="fa-solid fa-angle-left"></i>&nbsp;&nbsp;<i class="fa-solid fa-eye"></i></a>
                                        <a href="crudProyCodiIdentificador.php" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Ver Tabla 2.6 Proyectos con Código Identificador"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></a> -->

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaAlta == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableAltaProy" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Fecha Registro</th>
                                                <th>Folio Alta</th>
                                                <th>Cronometro Respuesta a solicitud de Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Valor Venta Alta</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Fecha Registro</th>
                                                <th>Folio Alta</th>
                                                <th>Cronometro Respuesta a solicitud de Alta</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-regresarAltaProyecto" class="btn btn-white" data-toggle="modal" data-target=".regresarAltaProy"></button>
                                    <?php
                                    require '../components/modal-regresarAltaProyecto.php';
                                    ?>
                                    <?php

                                    desconectar();
                                    ?>
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
    <!-- CREATE VIEW valtaproyecto as 
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.altaProyecto, P.valorVenta, V.placa, M.marca, Mo.modelo, A.anio, 
R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, R.fecha_creacion AS regSolFecha_creacion, 
RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, LV.link, RA.fecha_creacion AS regAltaFecha_creacion, 
Co.color, S.semana, 
U.nombres AS regAltaNombre, U.aPaterno AS regAltaPaterno, U.aMaterno AS regAltaMaterno, Us.nombres AS regSolNombres, Us.aPaterno AS regSolPaterno, Us.aMaterno AS regSolMaterno
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co ON V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
INNER JOIN semanas S ON R.id_semana = S.id_semana
INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
INNER JOIN usuarios U ON RA.id_capC = U.id_usuario
INNER JOIN usuarios Us ON R.id_capC = Us.id_usuario
WHERE altaProyecto = 1 ORDER BY nProyecto DESC -->