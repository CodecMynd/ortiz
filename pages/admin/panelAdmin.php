<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';

//# Estatus para envio de mensajes (suma de registro COMPROBADOS)
$count_reg_mensajeSI = mysqli_query($conexion, "SELECT FV FROM verificacion WHERE FV = '$fecha_mensaje'  GROUP by id_proyecto");

//# Estatus para envio de mensajes (suma de registro SIN COMPROBAR)
$count_reg_mensajeNO = mysqli_query($conexion, "SELECT FV FROM verificacion WHERE FV <> '$fecha_mensaje' OR FV is null GROUP by id_proyecto");
?>
<title>Panel <?php if ($admin == 1) {
                    echo 'Admin';
                } else {
                    echo 'Usuario';
                } ?> | <?php echo $nomComp ?></title>

</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper" style="height: 100%;">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-5">
                        <div class="col-sm-12 textB">
                            <h1 class="m-0 bienvenido">Bienvenido <?php if ($admin == 1) {
                                                                        echo 'Admin';
                                                                    } else {
                                                                        echo 'Usuario';
                                                                    } ?>: <strong><?php echo $nomComp?></strong></h1>

                        </div>
                    </div>
                </div>
            </div>
            <!-- small box-->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <?php if ($super == 1 OR $indMensajes == 1) { ?>
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h5 style="margin-bottom: 0px;"><strong><?php echo mysqli_num_rows($count_reg_mensajeSI); ?></strong></h5>
                                    <p style="margin-bottom: 0px;">Comprobados</p>
                                    <h5 style="margin-bottom: 0px;"><strong><?php echo mysqli_num_rows($count_reg_mensajeNO); ?></strong></h5>
                                    <p style="margin-bottom: 0px;">Sin Comprobar/Sin Registro</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-comment-sms"></i>
                                </div>
                                <a href="#" data-toggle="modal" data-target=".verIndAsesores" class="small-box-footer"><small>Estatus Para Envío de Mensajes </small><i class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>
                    <?php }  ?>


                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3><?php echo mysqli_num_rows($count_reg_marcas); ?></h3>
                                    <p>Marcas</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-car"></i>
                                </div>
                                <?php if ($passUser == 'SIN_PASSWORD') {
                                    echo '';
                                } else {
                                    echo '<a href="crudMarcas.php" class="small-box-footer">Ver info <i class="fas fa-arrow-circle-right"></i></a>';
                                } ?>
                            </div>
                        </div>

                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <!-- <h3><?php echo mysqli_num_rows($count_reg_modelos); ?><sup style="font-size: 20px">%</sup></h3> porcentaje-->
                                    <h3><?php echo mysqli_num_rows($count_reg_modelos); ?></h3>
                                    <p>Modelos</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-car-side"></i>
                                </div>
                                <?php if ($passUser == 'SIN_PASSWORD') {
                                    echo '';
                                } else {
                                    echo '<a href="crudModelos.php" class="small-box-footer">Ver info <i class="fas fa-arrow-circle-right"></i></a>';
                                } ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <!-- <h3><?php echo mysqli_num_rows($count_reg_modelos); ?><sup style="font-size: 20px">%</sup></h3> porcentaje-->
                                    <h3><?php echo mysqli_num_rows($count_reg_vehiculos); ?></h3>
                                    <p>Vehículos</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-car-crash"></i>
                                </div>
                                <?php if ($passUser == 'SIN_PASSWORD') {
                                    echo '';
                                } else {
                                    echo '<a href="crudVehiculos.php" class="small-box-footer">Ver info <i class="fas fa-arrow-circle-right"></i></a>';
                                } ?>
                            </div>
                        </div>

                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <!-- <h3><?php echo mysqli_num_rows($count_reg_modelos); ?><sup style="font-size: 20px">%</sup></h3> porcentaje-->
                                    <h3><?php echo mysqli_num_rows($count_reg_clientes); ?></h3>
                                    <p>Clientes</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>
                                <?php if ($passUser == 'SIN_PASSWORD') {
                                    echo '';
                                } else {
                                    echo '<a href="crudClientes.php" class="small-box-footer">Ver info <i class="fas fa-arrow-circle-right"></i></a>';
                                } ?>
                            </div>
                        </div>

                        <div class="col-lg-2 col-4">
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3>65</h3>
                                    <p>Destajos Técnicos</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-money-bill-1-wave"></i>
                                </div>
                                <?php if ($passUser == 'SIN_PASSWORD') {
                                    echo '';
                                } else {
                                    echo '<a href="#" class="small-box-footer">Ver info <i class="fas fa-arrow-circle-right"></i></a>';
                                } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- /small box-->
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    require '../components/scripts-main.php';
    require '../components/modal-sinPass.php';
    require '../components/modal-verIndAsesores.php';
    require '../components/scripts-dataTables.php';
    
    ?>
</body>

</html>