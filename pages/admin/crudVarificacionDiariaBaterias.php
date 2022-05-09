<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Verificación Diaria de Baterías | <?php echo $nomComp ?></title>
<script>
    function abrirModal1(id_proyecto, nProyecto) {
        $("#btnModal-regVerifDiaBat").click();
        $("#id_proyecto1").val(id_proyecto);
        $("#nProyecto1").val(nProyecto);
        $("#tituloModal1").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, id_verifDiaBat) {
        $("#btnModal-regVerifDiaBatSuper").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#nProyecto2").val(nProyecto);
        $("#id_verifDiaBat2").val(id_verifDiaBat);
        $("#tituloModal2").html(nProyecto);
    }

    function abrirModal3(id_proyecto, nProyecto, id_incidencia, folio) {
        $("#btnModal-eliminarIncidencia").click();
        $("#id_proyecto3").val(id_proyecto);
        $("#nProyecto3").val(nProyecto);
        $("#id_incidencia3").val(id_incidencia);
        $("#folio3").html(folio);
        $("#tituloModal3").html(nProyecto);
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
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <h1 class="m-0">Tabla 2.3.3 Verificación Diaria de Baterías </h1>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registros -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tablas en uso</strong></h2>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Activos</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-trash-can"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                                    <div class="text-center "><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="height: 50px;">
                                    <marquee width="100%" behavior="alternate">
                                        <marquee behavior="alternate">
                                            <p>Consulta optimizada, ultima actualización: <strong>06/05/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Comprobcion de placas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaVerifDiaBat == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tablaVerifDiaBaterias" class="table table-sm table-bordered table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Asesor</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Incidencias</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Asesor</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Incidencias</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-regVerifDiaBat" class="btn btn-white" data-toggle="modal" data-target='.regVerifDiaBat'></button>
                                    <button id="btnModal-regVerifDiaBatSuper" class="btn btn-white" data-toggle="modal" data-target=".regVerifDiaBatSuper"></button>
                                    <button id="btnModal-eliminarIncidencia" class="btn btn-white" data-toggle="modal" data-target=".eliminarIncidencia"></button>
                                    <?php
                                    require '../components/modal-regVerifDiaBat.php';
                                    require '../components/modal-regVerifDiaBatSuper.php';
                                    require '../components/modal-eliminarIncidencia.php';
                                    // desconectar();
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
    <div id="divModalverGralIncidencias"></div>
    <div id="divModalverGralVarDiaBat"></div>
    <script>
        // Mostrar Modal Incidencias ---------------------------------------------------------
        function mostarIncidencias(id_proyecto) {
            var ruta = '../components/modal-verGralIncidencias.php?id_proyecto=' + id_proyecto;
            $.get(ruta, function(data) {
                $('#divModalverGralIncidencias').html(data);
                $('#modal-verGralIncidencias').modal('show');
            });
        }

        // Mostrar Generales  ---------------------------------------------------------
        function mostrarVerGralVerDiaBat(id_proyecto) {
            var ruta = '../components/modal-verGralVerifDiaBat.php?id_proyecto=' + id_proyecto;
            $.get(ruta, function(data) {
                $('#divModalverGralVarDiaBat').html(data);
                $('#modal-verGralVerDiaBat').modal('show');
            });
        }


        // Agregar Comprobación Link ---------------------------------------------------------
        $('#btnNuevoRegVerifDiaBat').click(function() {
            var param = $('#formNuevoRegVerifDiaBat').serialize();
            $.ajax({
                    url: '../adds/addNuevoRegVerifDiaBat.php',
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formNuevoRegVerifDiaBat')[0].reset();
                    }
                })
                .done(function(res) {
                    $('#respuestaNuevoRegVerifDiaBat').html(res)
                })
        });

        //Ocultar boton por 10 segundos para evitar el doble submit
        $("#btnNuevoRegVerifDiaBat").on('click', function() {
            $("#btnNuevoRegVerifDiaBat").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnNuevoRegVerifDiaBat").css('visibility', 'visible');
            }, 5000);
        });

        // Agregar Supervision Comprobacion de Link ---------------------------------------------------------
        $('#btnNuevoRegVerifDiaBatSuper').click(function() {
            var param = $('#formNuevoRegVerifDiaBatSuper').serialize();
            $.ajax({
                    url: '../adds/addNuevoRegVerifDiaBatSuper.php',
                    type: 'POST',
                    data: param,

                    success: function(s) {
                        $('#formNuevoRegVerifDiaBatSuper')[0].reset();
                    }
                })
                .done(function(res) {
                    $('#respuestaNuevoRegVerifDiaBatSuper').html(res)
                })
        });

        //Ocultar boton por 10 segundos para evitar el doble submit
        $("#btnNuevoRegVerifDiaBatSuper").on('click', function() {
            $("#btnNuevoRegVerifDiaBatSuper").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnNuevoRegVerifDiaBatSuper").css('visibility', 'visible');
            }, 10000);
        });
    </script>

</body>

</html>