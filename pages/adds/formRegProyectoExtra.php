<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>5.1.1 Registro de Proyecto Extra | <?php echo $nomComp ?></title>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-1">
                        <div class="col-sm-6">
                            <h1 class="m-0">5.1.1 Registro de Proyecto Extra</h1>
                        </div>
                        <div class="col-sm-6 ">
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
                                                    <h6 class="info-box-number text-center">C??digo ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisi??n</h6>
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
                                            <p>Consulta optimizada, ultima actualizaci??n: <strong>23/05/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <form id="formNuevoRegProyExtra">
                <div class="card-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class='card card-secondary card-outline'>
                                        <div class="card-header border-nav">
                                            <h3 class="card-title">Proyectos Para Registro de Proyecto Extra</h3>
                                            <div class="card-tools">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar p??gina anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar p??gina"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-md-4 col-sm-4 my-4">
                                                    <div class="card card-secondary card-outline" style="height: 90%;">
                                                        <div class="card-header">
                                                            <h5 class="text-center"><i class="fa-solid fa-magnifying-glass"></i> Buscar <strong>Proyectos Para Registro de Proyecto Extra</strong></h5>
                                                        </div>
                                                        <div class="card-body d-flex justify-content-center align-items-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="input-group form-group">
                                                                            <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalSelectProyectoSExtra">
                                                                                <i class="fa-solid fa-wrench fa-3x"></i>
                                                                                <h6>Proyectos</h6>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="cargarProyectoExtra"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <input type="text" class="form-control" placeholder="" required>
            </form>
            <?php
            require '../components/footer.php';
            ?>
        </div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../components/scripts-dataTables.php';
    // Seleccionar Proyecto
    require '../components/modal-selectProyectoExtra.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        // 2.3  Registro Proyectos cargar Modal de Proyectos -----------------------------------------------
        $(document).on("click", ".cargarProyectoExtra", function() {
            var id_proyecto = $(this).data('id_proyecto');
            $.ajax({
                url: "../components/cargarProyectoExtra.php",
                type: "POST",
                cache: false,
                data: {
                    id_proyecto: id_proyecto
                },
                success: function(data) {
                    $("#cargarProyectoExtra").html(data);
                },
            });
        });
        //  iniciar inputMask 
        $(document).ready(function() {
            $(":input").inputmask();
        });
    </script>

</body>


</html>