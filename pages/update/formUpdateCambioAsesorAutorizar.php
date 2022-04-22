<?php
require '../components/head-main.php';
?>
<title>3.1.2 Modificar Motivo Supervisión | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="float-left m-0">3.1.2 Modificar Motivo Supervisión</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- consulta sql -->
            <?php
            $id_cambioAsesor = $_GET['id'];
            $idP = $_GET['idP'];
            $nP = $_GET['nP'];
            $query = "SELECT P.id_proyecto, CA.id_cambioAsesor, CA.motivo, CA.estatusAprobado, CA.fecha_creacion, CA.asesorActual, CA.asesorAsignado, AA.asesor AS aseActual, AAA.asesor AS aseAsignar,
            U.nombres, U.aPaterno, U.aMaterno
            FROM proyectos P 
            INNER JOIN cambioasesores CA ON P.id_proyecto = CA.id_proyecto
            INNER JOIN asesores AA ON CA.asesorActual = AA.id_asesor
            INNER JOIN asesores AAA ON CA.asesorAsignado = AAA.id_asesor
            INNER JOIN usuarios U ON CA.id_capC = U.id_usuario
            WHERE CA.id_cambioAsesor = $id_cambioAsesor";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $solicitante = $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'];
            ?>
            <!-- Form editar marca -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">Motivo de Supervisión seleccionado - Número de Proyecto: <strong><?php echo $nP ?></strong></h3>
                                </div>

                                <form id="formUpdateCambioAsesorAutorizar" autocomplete="off">
                                    <input type="hidden" name="id_cambioAsesor" id="id_cambioAsesor" value="<?php echo $id_cambioAsesor  ?>">
                                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $idP  ?>">
                                    <input type="hidden" name="asesorAsignado" id="asesorAsignado" value="<?php echo $row['asesorAsignado']  ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Asesor Actual</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa-solid fa-user-minus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['aseActual'] ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Asesor por Asignar</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-plus"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['aseAsignar'] ?>" readonly>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Solicitante Cambio de Asesor</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $solicitante ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha Solicitud Cambio de Asesor</label>
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
                                                            <h6><strong>¿Autorizar Cambio?</strong></h4>
                                                            <span class="info-box-text"> <input type="checkbox" name="estatusAprobado" id="estatusAprobado" data-toggle="toggle" data-on="Autorizado" data-off="No Autorizado" data-width="150" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($row['estatusAprobado'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
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
                                                <buttom type="submit" id="btnUpdateCambioAsesorAutorizar" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateCambioAsesorAutorizar"></div>
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
        $('#btnUpdateCambioAsesorAutorizar').click(function() {
            $.ajax({
                    url: '../update/updateCambioAsesorAutorizar.php',
                    type: 'POST',
                    data: $('#formUpdateCambioAsesorAutorizar').serialize(),

                })
                .done(function(res) {
                    $('#respuestaUpdateCambioAsesorAutorizar').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdateCambioAsesorAutorizar").on('click', function() {
        $("#btnUpdateCambioAsesorAutorizar").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateCambioAsesorAutorizar").css('visibility', 'visible');
        }, 300000);
    });
</script>