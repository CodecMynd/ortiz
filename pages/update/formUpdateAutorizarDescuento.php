<?php
require '../components/head-main.php';
?>
<title>2.10.1.2 Autorizar Solicitud Cambio Valor Alta | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                            <h1 class="float-left m-0">2.10.1.2 Autorizar Solicitud Cambio Valor Alta</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- consulta sql -->
            <?php
            $id_cambioAutorizDescuento = $_GET['id'];
            $idP = $_GET['idP'];
            $nP = $_GET['nP'];
            $id_regSolicitud = $_GET['id_regSolicitud'];
            $query = "SELECT P.id_proyecto, 
            C.folioCambioValAlta, C.folioRegSolicitud, C.valorVentaAltaActual, C.valorVentaAltaAsignado, C.motivo, C.verificado, C.fecha_creacion, C.estatusAprobado,
            U.nombres, U.aPaterno, U.aMaterno
            FROM proyectos P 
            INNER JOIN cambioautorizdescuento C ON P.id_proyecto = C.id_proyecto
            INNER JOIN usuarios U ON C.id_capC = U.id_usuario
            WHERE C.id_cambioAutorizDescuento = $id_cambioAutorizDescuento";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
            $estatusAprobado = $row['estatusAprobado'];
            ?>
            <!-- Form editar marca -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">Motivo de Cambio de Valor de Alta seleccionado - N??mero de Proyecto: <strong><?php echo $nP ?></strong></h3>
                                </div>

                                <form id="formUpdateAutorizarDescuento" autocomplete="off">
                                    <input type="hidden" name="id_regSolicitud" id="id_regSolicitud" value="<?php echo $id_regSolicitud ?>">
                                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $idP  ?>">
                                    <input type="hidden" name="id_cambioAutorizDescuento" id="id_cambioAutorizDescuento" value="<?php echo $id_cambioAutorizDescuento  ?>">
                                    <input type="hidden" name="valorVentaAltaAsignado" id="valorVentaAltaAsignado" value="<?php echo $row['valorVentaAltaAsignado']  ?>">
                                    <input type="hidden" name="folioRegSolicitud" id="folioRegSolicitud" value="<?php echo $row['folioRegSolicitud']  ?>">

                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Valor Venta Alta Actual</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['valorVentaAltaActual'] ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Valor Venta Alta por Asignar</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['valorVentaAltaAsignado'] ?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Solicitante del Descuento</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $solicitante ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha Solicitud Registro del Descuento</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['fecha_creacion'] ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                            </div>
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                    <label class='pl-2 mb-2'>??Motivo?</label>
                                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                                        <div class='input-group'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                            </div>
                                                            <textarea name='motivo' id='motivo' class='form-control' rows='4' placeholder='Max. 200 caracteres' disabled readonly><?php if (!isset($row['motivo'])) {
                                                                                                                                                                                        echo "Sin registro";
                                                                                                                                                                                    } else {
                                                                                                                                                                                        echo $row['motivo'];
                                                                                                                                                                                    } ?></textarea>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-12">
                                                <button type="button" class="btn btn-permisos">
                                                    <div class="info-box">
                                                        <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check"></i></span>
                                                        <div class="info-box-content">
                                                            <?php if ($row['verificado'] == 0) { ?>
                                                                <h6><strong>??Autorizar Cambio?</strong></h4>
                                                                    <span class="info-box-text"> <input type="checkbox" name="estatusAprobado" id="estatusAprobado" data-toggle="toggle" data-on="Autorizado" data-off="No Autorizado" data-width="150" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($row['estatusAprobado'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                <?php } else if ($row['verificado'] == 1) {
                                                                echo "<h6><strong>Ya fue validado</strong></h4>";
                                                                $aviso = ($estatusAprobado == 0) ? 'No fue Aprobado' : 'Aprobado';
                                                                echo 'Estatus:' . ' ' . "<h5><strong>$aviso</strong></h5>";
                                                            } ?>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div>

                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha Autorizaci??n<small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista que Autoriza</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nomComp ?>" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnUpdateAutorizarDescuento" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar p??gina anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar p??gina"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateAutorizarDescuento"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    ?>
</body>

</html>
<script>
    // 1.2.1 Formulario Registro de Marcas ------------------------------------------------------------
    $(document).ready(function() {
        $('#btnUpdateAutorizarDescuento').click(function() {
            $.ajax({
                    url: '../update/updateAutorizarDescuento.php',
                    type: 'POST',
                    data: $('#formUpdateAutorizarDescuento').serialize(),
                })
                .done(function(res) {
                    $('#respuestaUpdateAutorizarDescuento').html(res);
                    // window.location.href = "../admin/crudSolicitudAutorizDescuentos.php";
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdateAutorizarDescuento").on('click', function() {
        $("#btnUpdateAutorizarDescuento").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateAutorizarDescuento").css('visibility', 'visible');
        }, 180000);
    });
</script>