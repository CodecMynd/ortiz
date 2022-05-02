<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Indicador Estatus de Envío de Mensajes | <?php echo $nomComp ?></title>
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

    .celda {
        background-color: #5A6268;
        color: #fff;
        font-size: 40;
        font-weight: 900;
        text-align: center;
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
                            <h1 class="float-left m-0">Indicador Estatus de Envío de Mensajes</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">Datos de Consulta</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <?php
                                //# Estatus Solicitudes Cambios de Placas
                                $count_reg_null = mysqli_query($conexion, "SELECT count(asesor)
                                FROM verificacion
                                WHERE FV IS NULL AND asesor IS NULL GROUP BY id_proyecto");
                                ?>

                                <div class="modal-body">
                                    <table id="tableIndicadorAsesor" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Asesor</th>
                                                <th>Comprobados</th>
                                                <th>Sin Comprobar</th>
                                                <th>Sin Registro</th>
                                                <th>Suma <small>Sin Comprobar + Sin Registro</small></th>
                                                <th>Fecha Actual</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Asesor</th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th class="suma"></th>
                                                <th>Fecha Actual</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <table id="" class="table table-sm table-bordered table-striped" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Sin Asesor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="suma">
                                                            <?php echo mysqli_num_rows($count_reg_null); ?>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Sin Asesor</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
            $('#btnDeleteComDiaAltasAsignarCodId').click(function() {
                $.ajax({
                        url: '../delete/deleteComDiaAltasAsignarCodId.php',
                        type: 'POST',
                        data: $('#formDeleteComDiaAltasAsignarCodId').serialize(),
                    })
                    .done(function(res) {
                        $('#respuestaDeleteComDiaAltasAsignarCodId').html(res)
                    })
            });
        });
        //Ocultar boton por 5 minutos para evitar el doble submit
        $("#btnDeleteComDiaAltasAsignarCodId").on('click', function() {
            $("#btnDeleteComDiaAltasAsignarCodId").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteComDiaAltasAsignarCodId").css('visibility', 'visible');
            }, 300000);
        });
    </script>
</body>

</html>