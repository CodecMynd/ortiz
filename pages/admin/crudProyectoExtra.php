<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Crud Captura Proyectos Extras | <?php echo $nomComp ?></title>
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
    function abrirModal1(id_proyecto, nProyecto, id_proyExtra, folioProyExtra) {
        $("#btbModal-eliminarProyExtra").click();
        $("#id_proyecto").val(id_proyecto);
        $("#id_proyExtra").val(id_proyExtra);
        $("#folioProyExtra").val(folioProyExtra);
        $("#folioProyExtraText").html(folioProyExtra);
        $("#nProyectoText").html(nProyecto);
    }

    function abrirModal2(id_proyecto, nProyecto, folioProyExtra, id_proyExtra) {
        $("#btbModal-regSuperProyExtra").click();
        $("#id_proyecto2").val(id_proyecto);
        $("#id_proyExtra2").val(id_proyExtra);
        $("#folioProyExtra2").val(folioProyExtra);
        $("#folioProyExtraText2").html(folioProyExtra);
        $("#nProyectoText2").html(nProyecto);
    }

    function abrirModal3(id_proyExtra, textSupervision, id_comSuperProyExtra, nProyecto) {
        $("#btbModal-eliminarSuperProyExtra").click();
        $("#id_proyExtra3").val(id_proyExtra);
        $("#textSupervision3").val(textSupervision);
        $("#id_comSuperProyExtra3").val(id_comSuperProyExtra);
        $("#textSupervisionText").html(textSupervision);
        $("#nProyectoText3").html(nProyecto);
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
                            <h1 class="m-0">Tabla 5.1 Captura Proyectos Extras</h1>
                        </div>
                        <div class="col-sm-4 ">
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
                                    <h2 class="card-title"><strong>Tablas Consultadas</strong></h2>
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
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
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
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-trash-can"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                                    <div class="text-center "><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="height: 50px;">
                                    <marquee width="100%" behavior="alternate">
                                        <marquee behavior="alternate">
                                            <p>Consulta optimizada, ultima actualización: <strong>23/05/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro de Proyecto Extra</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 or $regProyExtra  == 1) {
                                            echo "<a type='button' class='btn btn-secondary' href='../adds/formRegProyectoExtra.php' data-toggle='tooltip' data-placement='left' title='5.1.1 Registro de Proyecto Extra'><i class='fa-solid fa-file-arrow-up'></i></i>&nbsp;&nbsp; Registro de Proyecto Extra</a>";
                                        } else {
                                            echo "<a type='button' class='btn btn-outline-danger' id='regProyExtra ' data-toggle='tooltip' data-placement='left' title='5.1.1 Registro de Proyecto Extra'><i class='fa-solid fa-file-arrow-up'></i></i>&nbsp;&nbsp; Registro de Proyecto Extra</a>";
                                        } ?>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaRegProyExtra == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableProyExtra" class="display compact table-bordered table-striped" style="width: 100%;">
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
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa del Proyecto</th>
                                                <th>Estado Proyecto Extra</th>
                                                <th>Núm. Folio Proyecto Extra</th>
                                                <th>Valor Proyecto Extra</th>
                                                <th>Link Autorización Whatsapp</th>
                                                <th>Link de Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
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
                                                <th>Estado del Proyecto</th>
                                                <th>Etapa del Proyecto</th>
                                                <th>Estado Proyecto Extra</th>
                                                <th>Núm. Folio Proyecto Extra</th>
                                                <th class="suma">Valor Proyecto Extra</th>
                                                <th>Link Autorización Whatsapp</th>
                                                <th>Link de Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btbModal-eliminarProyExtra" class="btn btn-white" data-toggle="modal" data-target=".eliminarProyExtra"></button>
                                    <button id="btbModal-regSuperProyExtra" class="btn btn-white" data-toggle="modal" data-target=".regSuperProyExtra"></button>
                                    <button id="btbModal-eliminarSuperProyExtra" class="btn btn-white" data-toggle="modal" data-target=".eliminarSuperProyExtra"></button>
                                    <?php
                                    require '../components/modal-eliminarProyExtra.php';
                                    require '../components/modal-regSuperProyExtra.php';
                                    require '../components/modal-eliminarSuperProyExtra.php';
                                    desconectar();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /table usuario -->
            <div id="divModal"></div>
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/crudProyectoExtra.js"></script>
    <script>
        function mostarDetalles(id_proyecto, id_proyExtra) {
            var ruta = '../components/modal-verGralProyExtra.php?id_proyecto=' + id_proyecto + '&id_proyExtra=' + id_proyExtra;
            $.get(ruta, function(data) {
                $('#divModal').html(data);
                $('#modal-verGralProyExtra').modal('show');
            });
        }
 
        //5.1.3 Registrar Supervisión Proyecto Extra
        $('#btnNuevoSuperProyExtra').click(function() {
            var param = $('#formNuevoSuperProyExtra').serialize();
            $.ajax({
                    url: '../adds/addNuevoRegSuperProyExtra.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formNuevoSuperProyExtra')[0].reset();
                         setTimeout(function() {
                             $('.regSuperProyExtra').modal('hide');
                         }, 1000);
                        tableProyExtra.ajax.reload(null, false)
                    }
                })
                .done(function(res) {
                    $('#respuestaSuperProyExtra').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnNuevoSuperProyExtra").on('click', function() {
            $("#btnNuevoSuperProyExtra").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnNuevoSuperProyExtra").css('visibility', 'visible');
            }, 5000);
        });


        
        //  5.1.4 Eliminar Supervisión Proyecto Extra
        $('#btnDeleteSuperProyExtra').click(function() {
            var param = $('#formDeleteSuperProyExtra').serialize();
            $.ajax({
                    url: '../delete/deleteSuperProyExtra.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formDeleteSuperProyExtra')[0].reset();
                         setTimeout(function() {
                             $('.eliminarSuperProyExtra').modal('hide');
                         }, 1000);
                        tableProyExtra.ajax.reload(null, false)
                    }
                })
                .done(function(res) {
                    $('#respuestaDeleteSuperProyExtra').html(res)
                })
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnDeleteSuperProyExtra").on('click', function() {
            $("#btnDeleteSuperProyExtra").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteSuperProyExtra").css('visibility', 'visible');
            }, 5000);
        });
    </script>

</body>

</html>