<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.9.2.1 Registro Solicitud Cambio de Placas | <?php echo $nomComp ?></title>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="m-0">2.3.9.2.1 Registro Solicitud Cambio de Placas </h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registro Proyecto -->
            <form id="formNuevoSolCambioPlacas">
                <div class="card-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class='card card-secondary card-outline'>
                                        <div class="card-header border-nav">
                                            <h3 class="card-title">Registro de Solicitud para Cambio de Placas</h3>
                                            <div class="card-tools">
                                                <a type="button" href="javascript:history.go(-1)" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-md-4 col-sm-4 my-4">
                                                    <div class="card card-secondary card-outline" style="height: 90%; width:auto">
                                                        <div class="card-header">
                                                            <h5 class="text-center"><i class="fa-solid fa-magnifying-glass"></i> Buscar <strong>Placa Asignada al Proyecto</strong></h5>
                                                        </div>
                                                        <div class="card-body d-flex justify-content-center align-items-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="input-group form-group">
                                                                            <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalSelectSolCambioPlacas">
                                                                            <i class="fa-solid fa-language fa-3x"></i>
                                                                                <h6>Placas</h6>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="cargarSolCambioPlacasTabla"></div>
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
    require '../components/modal-selectSolCambioPlacas.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        //  iniciar inputMask 
        $(document).ready(function() {
            $(":input").inputmask();
        });

        // 2.5.1  Registro Alta Proyectos cargar Modal  -----------------------------------------------
        $(document).on("click", ".cargarSolCambioPlacas", function() {
            var idProyecto = $(this).data('id_proyecto');
            $.ajax({
                url: "../components/cargarSolCambioPlacas.php",
                type: "POST",
                cache: false,
                data: {
                    idProyecto: idProyecto
                },
                success: function(data) {
                    $("#cargarSolCambioPlacasTabla").html(data);
                },
            });
        });
    </script>
</body>

</html>