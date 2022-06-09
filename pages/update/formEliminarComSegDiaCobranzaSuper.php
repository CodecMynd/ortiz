<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.6.4.5 Eliminar Supervisión Seguimiento Diario de Cobranza  | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">2.6.4.5 Eliminar Supervisión Seguimiento Diario de Cobranza</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $id_ComSegDiaCobranza = $_GET['id'];
            $nP = $_GET['nP'];
            $fecha = $_GET['fecha'];

            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Todos los campos son obligatorios</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <form id="formDeleteComSegDiaCobranzaSuper">
                                    <div class="card-body">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    ¿Deseas eliminar la Supervisión Seguimiento Diario de Cobranza del Número de Proyecto:?
                                                </h5>
                                            </div>
                                            <div class="modal-body text-center">
                                                <h5>Fecha: <strong><?php echo $fecha?></strong></h5>
                                                <h4>Número de Proyecto
                                                    <strong class="margin-auto__content">
                                                        <?php echo $nP ?>
                                                    </strong>
                                                </h4>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div class='row justify-content-center'>
                                                    <input type="hidden" name="id_ComSegDiaCobranza" id="id_ComSegDiaCobranza" value="<?php echo $id_ComSegDiaCobranza ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnDeleteComSegDiaCobranzaSuper" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-ban"></i> Eliminar</buttom>
                                            </div>
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaDeleteComSegDiaCobranzaSuper"></div>
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
    require '../components/scripts-dataTables.php';
    ?>
    <script>
        $(document).ready(function() {
            $('#btnDeleteComSegDiaCobranzaSuper').click(function() {
                $.ajax({
                        url: '../update/updateComDiaCobranzaSuper.php',
                        type: 'POST',
                        data: $('#formDeleteComSegDiaCobranzaSuper').serialize(),
                    })
                    .done(function(res) {
                        $('#respuestaDeleteComSegDiaCobranzaSuper').html(res)
                    })
            });
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnDeleteComSegDiaCobranzaSuper").on('click', function() {
            $("#btnDeleteComSegDiaCobranzaSuper").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteComSegDiaCobranzaSuper").css('visibility', 'visible');
            }, 180000);
        });
    </script>
</body>

</html>