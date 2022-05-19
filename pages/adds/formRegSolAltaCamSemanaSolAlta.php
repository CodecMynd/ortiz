<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.16.1 Solicitar Cambio Semana Solicitud de Alta | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">2.3.16.1 Solicitar Cambio Semana Solicitud de Alta</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registro Proyecto -->
            <form id="formNuevoSolCamSemanaSolAltas">
                <div class="card-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                <div class='card card-secondary card-outline'>
                                    <div class="card-header border-nav">
                                        <h3 class="card-title">Proyectos Para Solicitar Cambio Semana Solicitud de Alta</h3>
                                        <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-4 my-4">
                                                <div class="card card-secondary card-outline" style="height: 90%;">
                                                    <div class="card-header">
                                                        <h5 class="text-center"><i class="fa-solid fa-magnifying-glass"></i> Buscar <strong>Proyectos Para Solicitar Cambio Semana de Solicitud de Alta</strong></h5>
                                                    </div>
                                                    <div class="card-body d-flex justify-content-center align-items-center">
                                                        <div class="btn-group" role="group">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="input-group form-group">
                                                                        <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalSelectProyectoSolCamSemanaSolAltas">
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
                                        <div id="cargarProyectoTabla2"></div>
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
    require '../components/modal-selectProyectoSolCamSemanaSolAltas.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        // 2.3  Registro Proyectos cargar Modal de Proyectos -----------------------------------------------
        $(document).on("click", ".cargarProyectoSolSemana", function() {
            var idProyecto = $(this).data('id_proyecto');
            $.ajax({
                url: "../components/cargarProyectoSolCamSemSolAlta.php",
                type: "POST",
                cache: false,
                data: {
                    idProyecto: idProyecto
                },
                success: function(data) {
                    $("#cargarProyectoTabla2").html(data);
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