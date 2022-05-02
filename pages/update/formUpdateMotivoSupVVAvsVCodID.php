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
                    <div class="row my-3 mx-1">
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
            $id_repVVAvsVCI = $_GET['id'];
            $nP = $_GET['nP'];
            $query = "SELECT id_proyecto, motivo FROM repvalvenaltavsvalcodid WHERE id_repVVAvsVCI = $id_repVVAvsVCI";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            ?>
            <!-- Form editar marca -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">Motivo de Supervisión seleccionado - Número de  Proyecto: <strong><?php echo $nP ?></strong></h3>
                                </div>

                                <form id="formUpdateUpdateRegMotivoSupVVAvsVCodID" autocomplete="off">
                                    <input type="hidden" name="id_repVVAvsVCI" value="<?php echo $id_repVVAvsVCI  ?>">
                                    <input type="hidden" name="id_proyecto" value="<?php echo $row['id_proyecto']  ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                    <label class='pl-2 mb-2'>¿Motivo?</label>
                                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                                        <div class='input-group'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                            </div>
                                                            <textarea name='motivo' id='motivo' class='form-control' rows='4' placeholder='Max. 200 caracteres'><?php if(!isset($row['motivo'])){
                                            echo "Sin registrar aún";
                                        }else{
                                            echo $row['motivo'];
                                        } ?></textarea>
                                                        </div>
                                                    </span>
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
                                                <buttom type="submit" id="btnUpdateRegMotivoSupVVAvsVCodID" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateRegMotivoSupVVAvsVCodID"></div>
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
$(document).ready(function () {
    $('#btnUpdateRegMotivoSupVVAvsVCodID').click(function () {
        $.ajax({
                url: '../update/updateRegMotivoSupVVAvsVCodID.php',
                type: 'POST',
                data: $('#formUpdateUpdateRegMotivoSupVVAvsVCodID').serialize(),

            })
            .done(function (res) {
                $('#respuestaUpdateRegMotivoSupVVAvsVCodID').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateRegMotivoSupVVAvsVCodID").on('click', function () {
    $("#btnUpdateRegMotivoSupVVAvsVCodID").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateRegMotivoSupVVAvsVCodID").css('visibility', 'visible');
    }, 300000);
});
</script>
