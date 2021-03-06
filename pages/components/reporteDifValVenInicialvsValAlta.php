<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla 3.2 Reporte Diferencia Valor Venta Inicial Vs Valor Alta | <?php echo $nomComp ?></title>
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
    function abrirModal1(id_proyecto, nProyecto) {
        $("#btnModal-regMotivoSupVVIvsVVA").click();
        $("#id_proyecto1").val(id_proyecto);
        $("#nProyecto1").val(nProyecto);
        $("#tituloModal1").html(nProyecto);
    }

    // function abrirModal2(id_proyecto, nProyecto, id_repVVAvsVCI, motivo) {
    //     $("#btnModal-modMotivoSupVVAvsVCodID").click();
    //     $("#id_proyecto2").val(id_proyecto);
    //     $("#nProyecto2").val(nProyecto);
    //     $("#motivo").html(motivo);
    //     $("#tituloModal2").html(nProyecto);
    // }
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
                            <h1 class="m-0">3.2 Reporte Diferencia Valor Venta Inicial Vs Valor Alta </h1>
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
                                    <h3 class="card-title">Reporte Diferencia Valor Venta Inicial Vs. Valor Alta </h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar p??gina"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaRepVVIvsVVA  == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableDifVentasInicialvsValAltas" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <!-- <th>C??digo Identificador Valor Base</th>
                                                <th>N??m C??digo ID</th> -->
                                                <th>N??m. Proyecto</th>
                                                <th>N??m. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>A??o</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th>Semana de Cobro</th>
                                                <th class="bg-secondary text-white">Valor Venta Inicial</th>
                                                <th class="bg-secondary text-white">Valor Venta Alta</th>
                                                <th>Valor Cobro Proyecto Base</th>
                                                <th>Etapa Proyecto</th>
                                                <th>Status Supervisi??n</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <!-- <th>C??digo Identificador Valor Base</th>
                                                <th>N??m C??digo ID</th> -->
                                                <th>N??m. Proyecto</th>
                                                <th>N??m. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>A??o</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Semana de Alta</th>
                                                <th>Semana de Cobro</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Etapa Proyecto</th>
                                                <th>Status Supervisi??n</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </table>
                                    <button id="btnModal-regMotivoSupVVIvsVVA" class='btn btn-white' data-toggle='modal' data-target='.regMotivoSupVVIvsVVA'></button>
                                    <?php
                                        require '../components/modal-regMotivoSupVVIvsVVA.php';
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
    // Scripts dataTables
    require '../components/scripts-dataTables.php';
    ?>

    <script>
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
            }, 180000);
        });
        // regCodIdentificador 2.6.1 REGISTRO CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#regCodIdentificador").click(function() {
                toastr["error"]("??No tienes acceso a: 2.5.1 REGISTRO DE C??DIGO IDENTIFICADOR, consulta al administrador!")

                tostadas.opciones = {
                    "bot??ncerrar": falso,
                    "depuraci??n": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuraci??n": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilaci??n",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // eliCodIdentificador 2.6.2 ELIMINAR CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliCodIdentificador").click(function() {
                toastr["error"]("??No tienes acceso a: 2.6.2 ELIMINAR CODIGO IDENTIFICADOR, consulta al administrador!")

                tostadas.opciones = {
                    "bot??ncerrar": falso,
                    "depuraci??n": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuraci??n": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilaci??n",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // pdfCodIdentificador 2.6.3 DESCARGAR PDF CODIGO IDENTIFICADOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#pdfCodIdentificador").click(function() {
                toastr["error"]("??No tienes acceso a: 2.5.3 DESCARGAR PDF REGISTRO CODIGO IDENTIFICADOR, consulta al administrador!")

                tostadas.opciones = {
                    "bot??ncerrar": falso,
                    "depuraci??n": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuraci??n": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilaci??n",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // verLinkObsIdentificador 2.6.4 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#verLinkObsIdentificador").click(function() {
                toastr["error"]("??No tienes acceso a: 2.5.4 VER LINK DE VIDEO EN VIVO Y OBSERVACIONES, consulta al administrador!")

                tostadas.opciones = {
                    "bot??ncerrar": falso,
                    "depuraci??n": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuraci??n": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilaci??n",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // varTablaAlta 2.5.4 VER TABLA ALTAS  --------------------------------------------------------------
        $(document).ready(function() {
            $("#verTablaCodIdentificador").click(function() {
                toastr["error"]("??No tienes acceso a: 2.5.4 VER TABLA PROYECTOS CON CODIGO IDENTIFICADOR, consulta al administrador!")

                tostadas.opciones = {
                    "bot??ncerrar": falso,
                    "depuraci??n": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuraci??n": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilaci??n",
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