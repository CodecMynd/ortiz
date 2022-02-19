<?php
require '../components/head-main.php';

include '../../config/functionPDO.php';

$country = '';
$query = "
	SELECT country FROM modulos GROUP BY country ORDER BY country ASC
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
    $country .= '<option value="' . $row["country"] . '">' . $row["country"] . '</option>';
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../../plugins/multiselectbox/jquery.lwMultiSelect.js"></script>
<link rel="stylesheet" href="../../plugins/multiselectbox/jquery.lwMultiSelect.css" />
<title>Dar permisos | <?php echo $nomComp ?></title>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <!-- consulta sql -->
            <?php
            $id_permiso = $_GET['id'];
            $query = "SELECT * FROM usuarios WHERE id_usuario = $id_permiso";
            $respuesta = mysqli_query($conexion, $query);
            $rowper = $respuesta->fetch_assoc();
            $nomUserPer = $rowper['nombres'] . ' ' . $rowper['aPaterno'] . ' ' . $rowper['aMaterno'];
            ?>
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="m-0">Asignar Permiso </h1>
                        </div>
                        <div class="col-sm-6 ">
                        <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <!-- Form editar permiso -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Seleccionar permisos para: <strong><?php echo $nomUserPer ?></strong></h3>
                                </div>
                                <form method="post" id="insert_data">
                                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_permiso ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <div class="formgroup mb-3">
                                                    <label for="" class="pl-5">Módulos</label>
                                                    <select name="country" id="country" class="form-control action">
                                                        <option value="">Selecciona un Módulo</option>
                                                        <?php echo $country; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <div class="form-group mb-3">
                                                    <label for="" class="pl-5">Botones</label>
                                                    <select name="state" id="state" class="form-control action">
                                                        <option value="">Selecciona un Botón</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-12">
                                                <div class="container">
                                                    <select name="city" id="city" multiple class="form-control"></select>
                                                </div>
                                            </div>
                                            <input type="hidden" name="hidden_city" id="hidden_city" />
                                        </div>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 align-self-center">
                                                <input type="submit" id="action" name="insert" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Campo en Guardar">
                                            </div>
                                            <div class="col-md-4 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdatePass"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        
                        <!-- left -->
                        <div class="col-md-5 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title" data-toggle="tooltip" data-placement="bottom" title="Da click al botón Recargar permisos al sistema"><span class="badge badge-secondary">Por favor cargalos al sistema</span></h3>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                $query = "SELECT * FROM permiso WHERE id_usuario = $id_permiso ORDER BY city ";
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <!-- <div class="card-body table-wrapper-scroll-y my-custom-scrollbar"> -->
                                <div class="card-body ">
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Permiso</th>
                                                <th>Borrar </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($rowp = $resultado->fetch_assoc()) {
                                                $cadena = $rowp['city'];
                  
                                                $separador = ",";
                                                $separada = explode($separador, $cadena);
                                                foreach ($separada as $sep) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php $cont++;
                                                            echo $cont;
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" checked disabled>
                                                                    <label class="form-check-label"><?php echo $sep; ?></label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-secondary" data-toggle="modal" data-target=".modalEliminarPermiso<?php echo $rowp['id_usuario'] ?>" data-toggle="tooltip" title="Eliminar permiso"><i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    require '../components/modal-eliminarPermiso.php';
                                                }
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Permiso</th>
                                                <th>Borrar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="card-footer border-footer">
                                    <div class="row">
                                        <form id="formExtraerPerm">
                                            <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_permiso ?>">
                                            <div class="col-md-12 col-sm-12 align-self-center">
                                                <button type="button" id="extraerDatosPermisos" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Recargar permisos al sistemas"><i class="fa-solid fa-arrows-rotate"></i> Recargar permisos al sistema</button>
                                            </div>
                                        </form>
                                        <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                            <div id="respuestaUpdatePermisos"></div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Form editar permiso -->
        </div>
        <?php
        require '../components/footer.php';
        require '../components/scripts-dataTables.php';
        ?>
    </div>
    <script src="../../plugins/bootstrap/bootstrap.bundle.js"></script>
    <!-- AdminLTE App -->
    <script src="../../src/js/adminlte.min.js"></script>
    <!-- JS main -->
    <script src="../../src/js/main.js"></script>
    <!-- Poppers -->
    <script src="../../plugins/popper/popper.min.js"></script>

</body>

</html>