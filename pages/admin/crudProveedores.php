<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Proveedores | <?php echo $nomComp ?></title>
<script>
    function abrirModal1(id_proveedor, nomProvee) {
        $("#btnModal-eliminarProveedor").click();
        $("#id_proveedor").val(id_proveedor);
        $("#nomProvee").val(nomProvee);
        $("#tituloModal1").html(nomProvee);
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
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla 1.12 Proveedores</h1>
                        </div>
                        <div class="col-sm-6 ">
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
                                    <h3 class="card-title">Proveedores dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 or $nuevoProvee == 1) {
                                            echo "<a type='button' class='btn btn-secondary' href='../adds/formAddProveedores.php' data-toggle='tooltip' data-placement='left' title='1.12.1 Nuevo Proveedor'>
                                                <i class='fa-solid fa-people-carry-box'></i>&nbsp;&nbsp; Nuevo Proveedor</a>";
                                        } else {
                                            echo "<a type='button' class='btn btn-outline-danger' id='nuevoProvee' data-toggle='tooltip' data-placement='left' title='1.12.5 Nuevo Proveedor'>
                                                <i class='fa-solid fa-people-carry-box'></i>&nbsp;&nbsp; Nuevo Proveedor</a>";
                                        } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaProvee == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableProveedores" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nombre Proveedor</th>
                                                <th>Calle</th>
                                                <th>Colonia</th>
                                                <th>Ciudad</th>
                                                <th>Estado</th>
                                                <th>Código Postal</th>
                                                <th>Email</th>
                                                <th>Teléfono Movil 1</th>
                                                <th>Teléfono Movil 2</th>
                                                <th>Teléfono Oficina 1</th>
                                                <th>Teléfono Oficina 2</th>
                                                <th>Servicio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nombre Proveedor</th>
                                                <th>Calle</th>
                                                <th>Colonia</th>
                                                <th>Ciudad</th>
                                                <th>Estado</th>
                                                <th>Código Postal</th>
                                                <th>Email</th>
                                                <th>Teléfono Movil 1</th>
                                                <th>Teléfono Movil 2</th>
                                                <th>Teléfono Oficina 1</th>
                                                <th>Teléfono Oficina 2</th>
                                                <th>Servicio</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-eliminarProveedor" class="btn btn-white" data-toggle="modal" data-target='.eliminarProveedor'></button>
                                    <?php
                                    require '../components/modal-eliminarProveedor.php';
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
    <div id="divModalmodProveedor"></div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    ?>
    <script src="../ajax/crudProveedores.js"></script>
    <script>
        // Mostrar Modal Incidencias ---------------------------------------------------------
        function modProveedor(id_proveedor) {
            var ruta = '../components/modal-modProveedor.php?id_proveedor=' + id_proveedor;
            $.get(ruta, function(data) {
                $('#divModalmodProveedor').html(data);
                $('#modal-modProveedor').modal('show');
            });
        }
    </script>
</body>

</html>