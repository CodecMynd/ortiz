<?php
require '../components/head-main.php';
?>
<title>2.6.3.2 Registrar Supervisión Diaria de Altas Por Asignar Código ID | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">2.6.3.2 Registrar Supervisión Diaria de Altas Por Asignar Código ID</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <!-- Form editar usuario -->
            <?php
            $id_ComDiaAltasAsignarCodId = $_GET['id'];
            $id_proyecto = $_GET['idP'];
            $nP = $_GET['nP'];
            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">(*) Campos requeridos</h3>
                                </div>
                                <form id="formNuevoComDiaAltasAsignarCodIdSuper" autocomplete="off">
                                    <input type="hidden" name="id_ComDiaAltasAsignarCodId" id="id_ComDiaAltasAsignarCodId" value="<?php echo $id_ComDiaAltasAsignarCodId ?>">
                                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $id_proyecto ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Número de Proyecto</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa-solid fa-hashtag"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nP ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-8 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Asesor</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-gear"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php if ($asesor == '') {
                                                                                                                                                                                    echo "Sin Asesor";
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo $asesor;
                                                                                                                                                                                } ?>" disabled readonly>
                                                </div>
                                            </div> -->
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                    <label class='pl-2 mb-2'>*Supervisión Link de Video en Vivo<small> Campo requerido</small></label>
                                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                                        <div class='input-group'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                            </div>
                                                            <textarea name='textSupervision' id='textSupervision' class='form-control' rows='2' placeholder='Max. 200 caracteres'></textarea>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">*Fecha<small> Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" name="fecha_hoyS" id="fecha_hoyS" step="1" min="2022-04-01" max="2022-12-31" value="<?php echo date("Y-m-d"); ?>" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" readonly>
                                                </div>
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
                                                    <input autofocus type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista<small> *El que registra</small></label>
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
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnNuevoComDiaAltasAsignarCodIdSuper" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoComDiaAltasAsignarCodIdSuper"></div>
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
<script>
    //  iniciar inputMask 
    $(document).ready(function() {
        $(":input").inputmask();
    });

    // 2.3  Registro Nuevo Proyecto --------------------------------------------------------------------
    $(document).ready(function() {
        $('#btnNuevoComDiaAltasAsignarCodIdSuper').click(function() {
            $.ajax({
                    url: '../adds/addNuevoComDiaAltasAsignarCodIdSuper.php',
                    type: 'POST',
                    data: $('#formNuevoComDiaAltasAsignarCodIdSuper').serialize(),
                })
                .done(function(res) {
                    $('#respuestaNuevoComDiaAltasAsignarCodIdSuper').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnNuevoComDiaAltasAsignarCodIdSuper").on('click', function() {
        $("#btnNuevoComDiaAltasAsignarCodIdSuper").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoComDiaAltasAsignarCodIdSuper").css('visibility', 'visible');
        }, 180000);
    });
</script>

</html>