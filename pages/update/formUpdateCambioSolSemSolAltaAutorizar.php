<?php
require '../components/head-main.php';
?>
<title>2.3.16.2 Registrar Autorización Cambio Semana Solicitud de Alta | <?php echo $nomComp ?></title>
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
                        <div class="col-sm-8">
                            <h1 class="float-left m-0">2.3.16.2 Registro Autorización Cambio Semana Solicitud de Alta</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- consulta sql -->
            <?php
            $id_cambioSemSolAlta = $_GET['id'];
            $idP = $_GET['idP'];
            $nP = $_GET['nP'];
            $id_regSolicitud = $_GET['id_regSolicitud'];
            $folioRegSolicitud = $_GET['folioRegSolicitud'];
            $query = "SELECT P.id_proyecto, 
            CS.semanaActual, CS.motivo, CS.fecha_creacion, CS.semanaAsignado, CS.estatusAprobado, CS.verificado,
            U.nombres, U.aPaterno, U.aMaterno,
            SS.semana AS semanaPorAsignar
            FROM proyectos P 
            INNER JOIN cambiosemsolalta CS ON P.id_proyecto = CS.id_proyecto
            INNER JOIN usuarios U ON CS.id_capC = U.id_usuario
            LEFT JOIN semanasolalta SS ON CS.semanaAsignado = SS.id_semSolAlta
            WHERE CS.id_cambioSemSolAlta = $id_cambioSemSolAlta";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $solicitante = $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'];
            $estatusAprobado = $row['estatusAprobado'];
            ?>
            <!-- Form editar marca -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">Motivo de Autorización Cambio Semana Solicitud de Alta seleccionado - Número de Proyecto: <strong><?php echo $nP ?></strong></h3>
                                </div>

                                <form id="formUpdateCambioSemSolAltaAutorizar" autocomplete="off">
                                    <input type="hidden" name="id_cambioSemSolAlta" id="id_cambioSemSolAlta" value="<?php echo $id_cambioSemSolAlta  ?>">
                                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $idP  ?>">
                                    <input type="hidden" name="semanaAsignado" id="semanaAsignado" value="<?php echo $row['semanaAsignado']  ?>">
                                    <input type="hidden" name="id_regSolicitud" id="id_regSolicitud" value="<?php echo $id_regSolicitud ?>">
                                    <input type="hidden" name="folioRegSolicitud" id="folioRegSolicitud" value="<?php echo $folioRegSolicitud ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Semana Solicitud de Alta Actual</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['semanaActual'] ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Semana Solicitud de Alta por Asignar</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['semanaPorAsignar'] ?>" readonly>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Solicitante <small>Cambio de Semana Solicitud de Alta</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $solicitante ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha Solicitud <small> Cambio de Semana Solicitud de Alta</small></label>
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
                                                    <label class='pl-2 mb-2'>¿Motivo?</label>
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
                                                            <?php if($row['verificado'] == 0){ ?>
                                                            <h6><strong>¿Autorizar Cambio?</strong></h4>
                                                            <span class="info-box-text"> <input type="checkbox" name="estatusAprobado" id="estatusAprobado" data-toggle="toggle" data-on="Autorizado" data-off="No Autorizado" data-width="150" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($row['estatusAprobado'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                        <?php } else if($row['verificado'] == 1){
                                                            echo "<h6><strong>Ya fue validado</strong></h4>";
                                                            $aviso = ($estatusAprobado == 0) ? 'No fue Aprobado' : 'Aprobado';
                                                            echo 'Estatus:'.' '."<h5><strong>$aviso</strong></h5>";
                                                        } ?>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div>

                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha<small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista editor<small> *El que modifica</small></label>
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
                                                <buttom type="submit" id="btnUpdateCambioSemSolAltaAutorizar" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateCambioSemSolAltaAutorizar"></div>
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
        $('#btnUpdateCambioSemSolAltaAutorizar').click(function() {
            $.ajax({
                    url: 'updateCambioSemSolAltaAutorizar.php',
                    type: 'POST',
                    data: $('#formUpdateCambioSemSolAltaAutorizar').serialize(),

                })
                .done(function(res) {
                    $('#respuestaUpdateCambioSemSolAltaAutorizar').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdateCambioSemSolAltaAutorizar").on('click', function() {
        $("#btnUpdateCambioSemSolAltaAutorizar").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateCambioSemSolAltaAutorizar").css('visibility', 'visible');
        }, 180000);
    });
</script>