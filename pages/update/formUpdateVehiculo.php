<?php
require '../components/head-main.php';

?>
<title>Edición de Vehículo | <?php echo $nomComp ?></title>
<!-- necesario para comboBox -->
<script src="../../src/js/jquery-3.1.1.js"></script>
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
                            <h1 class="float-left m-0">Edición de Vehículo</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <?php
            $id = $_GET['id'];
            $query = "SELECT M.marca, Mo.modelo, A.anio, V.placa, V.id_vehiculo, V.id_marca, V.id_anio
            FROM vehiculos V INNER JOIN marcas M ON V.id_marca = M.id_marca
             INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
             INNER JOIN anios A ON V.id_anio = A.id_anio WHERE id_vehiculo = $id";
            $respuesta = mysqli_query($conexion, $query);
            $rowV = $respuesta->fetch_assoc();

            ?>
            <!-- Form editar usuario -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Todos los campos son obligatorios</h3>
                                </div>

                                <form id="formUpdateVehiculo" autocomplete="off">
                                    <input type="hidden" name="id_vehiculo" id="id_vehiculo" value="<?php echo $id ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-3 col-sm-12 my-1 form-group">
                                                <div class="input-group">
                                                    <label for="marca" class="pl-5">Marca</label>
                                                    <select name="marca" id="marca" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Selecciona una Marca de la lista" style="width: 100%;">
                                                        <option value="<?php echo $rowV['id_marca'] ?>"><?php echo $rowV['marca'] ?></option>
                                                        <?php while ($rowMarca = $resultMarca->fetch_assoc()) { ?>
                                                            <option value="<?php echo $rowMarca['id_marca'] ?>">
                                                                <?php echo $rowMarca['marca'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1 form-group">
                                                <div class="input-group">
                                                    <label for="modelo" class="pl-5">Modelo <small>Dato actual: <strong><?php echo $rowV['modelo'] ?></strong></small></label>
                                                    <select name="modelo" id="modelo" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Selecciona un Modelo de la lista" style="width: 100%;">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1 form-group">
                                                <div class="input-group">
                                                    <label for="anio" class="pl-5">Año</label>
                                                    <select name="anio" id="anio" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Selecciona un Año de la lista" style="width: 100%;">
                                                        <option value="<?php echo $rowV['id_anio'] ?>"><?php echo $rowV['anio'] ?></option>
                                                        <?php while ($rowAnio = $resultAnio->fetch_assoc()) { ?>
                                                            <option value="<?php echo $rowAnio['id_anio'] ?>">
                                                                <?php echo $rowAnio['anio'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1 form-group">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                                    </div>
                                                    <input autofocus name="placa" id="placa" type="text" class="form-control" required maxlength="10" data-toggle="tooltip" data-placement="bottom" title="Ingresa la Placa del Vehículo" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $rowV['placa'] ?>">
                                                    <label for="floatingInput" class="pl-5">Placas</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha Actualización <small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
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
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnUpdateVehiculo" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateVehiculo"></div>
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
    $(document).ready(function() {
        $("#marca").change(function() {
            // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
            $("#marca option:selected").each(function() {
                id_marca = $(this).val();
                $.post("../components/comboBox.php", {
                    id_marca: id_marca
                }, function(data) {
                    $("#modelo").html(data);
                });
            });
        })
    });
    $(document).ready(function() {
        $('#btnUpdateVehiculo').click(function() {
            $.ajax({
                    url: 'updateVehiculo.php',
                    type: 'POST',
                    data: $('#formUpdateVehiculo').serialize(),

                })
                .done(function(res) {
                    $('#respuestaUpdateVehiculo').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdateVehiculo").on('click', function() {
        $("#btnUpdateVehiculo").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateVehiculo").css('visibility', 'visible');
        }, 300000);
    });
</script>

</html>