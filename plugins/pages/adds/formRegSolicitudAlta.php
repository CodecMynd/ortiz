<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.4.2 Registro de Solicitud Alta Proyecto | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">2.4.3 Registro de Solicitud Alta Proyecto </h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registro Proyecto -->
            <form id="formNuevoRegSolAltProyecto">
                <div class="card-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <?php
                                    if ($super == 1) {
                                        echo "<div class='card card-secondary card-outline'>";
                                    } else if ($regSolAltProy == 1) {
                                        echo "<div class='card card-secondary card-outline'>";
                                    } else {
                                        echo "<div class='card card-secondary card-outline collapsed-card'>";
                                    } ?>
                                    <div class="card-header border-nav">
                                        <h3 class="card-title">Registro de Solicitud de Alta</h3>
                                        <div class="card-tools">
                                            <?php
                                            if ($super == 1) {
                                            } else if ($regSolAltProy == 1) {
                                            } else {
                                                echo ' <a type="button" id="regSolAltProy" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="left" title="2.4.2  Registro de Proyecto"><i class="fa-solid fa-eye-slash"></i>&nbsp;&nbsp; Registro de Proyecto</a>';
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-4 my-4">
                                                <div class="card card-secondary card-outline" style="height: 90%;">
                                                    <div class="card-header">
                                                        <h5 class="text-center"><i class="fa-solid fa-magnifying-glass"></i> Buscar <strong>Proyectos Activos para realizar Solicitud</strong></h5>
                                                    </div>
                                                    <div class="card-body d-flex justify-content-center align-items-center">
                                                        <div class="btn-group" role="group">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="input-group form-group">
                                                                        <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalSelectProyecto">
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
                                        <div id="cargarProyectoTabla"></div>
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
    require '../components/modal-selectProyecto.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        //  iniciar inputMask 
        $(document).ready(function() {
            $(":input").inputmask();
        });
    </script>

</body>


</html>