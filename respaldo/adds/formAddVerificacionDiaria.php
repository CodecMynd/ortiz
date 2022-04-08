<?php
require '../components/head-main.php';
?>
<title>2.3.2.2.1 Registrar Link de Video en Vivo | <?php echo $nomComp ?></title>
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
                        <div class="col-sm-8">
                            <h1 class="float-left m-0">2.3.2.2.1 Registrar Link de Video en Vivo</h1>
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
            $id_proyecto = $_GET['id'];
            $query = "SELECT id_proyecto, nProyecto FROM proyectos WHERE id_proyecto = $id_proyecto";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $nP = $row['nProyecto'];
            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">(*) Campos requeridos</h3>
                                </div>
                                <form id="formNuevoRegComVerifDiariaVeh" autocomplete="off">
                                <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $id_proyecto ?>">
                                <input type="hidden" name="nProyecto" id="nProyecto" value="<?php echo $nP ?>"> 
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='input-group form-floating mb-3'>
                                                    <div class='input-group-prepend'>
                                                        <span class='input-group-text mt-2'>
                                                            <i class="fa-solid fa-link"></i>
                                                        </span>
                                                    </div>
                                                    <input name='linkComVerifDiariaVeh' id='linkComVerifDiariaVeh' type='text' class='form-control' placeholder='Link de Video en Vivo' data-toggle='tooltip' data-placement='bottom' title='Ingresa Registrar Link de Video en Vivo'>
                                                    <label for='floatingInput' class='pl-5'>*Link de Video en Vivo <small> Campo requerido</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha<small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" name="fecha_hoyV" id="fecha_hoyV" step="1" min="2022-04-01" max="2022-12-31" value="<?php echo date("Y-m-d"); ?>" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" readonly>
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
                                                <buttom type="submit" id="btnNuevoRegComVerifDiariaVeh" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoRegComVerifDiariaVeh"></div>
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
        $('#btnNuevoRegComVerifDiariaVeh').click(function() {
            $.ajax({
                    url: '../adds/addNuevoRegComVerifDiariaVeh.php',
                    type: 'POST',
                    data: $('#formNuevoRegComVerifDiariaVeh').serialize(),
                })
                .done(function(res) {
                    $('#respuestaNuevoRegComVerifDiariaVeh').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnNuevoRegComVerifDiariaVeh").on('click', function() {
        $("#btnNuevoRegComVerifDiariaVeh").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoRegComVerifDiariaVeh").css('visibility', 'visible');
        }, 300000);
    });
</script>

</html>