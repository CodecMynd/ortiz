<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';

//# Estatus para envio de mensajes (suma de registro COMPROBADOS)
$count_reg_mensajeSI = mysqli_query($conexion, "SELECT FV FROM verificacion WHERE FV = '$fecha_mensaje'  GROUP by id_proyecto");
//# Estatus para envio de mensajes (suma de registro SIN COMPROBAR)
$count_reg_mensajeNO = mysqli_query($conexion, "SELECT FV FROM verificacion WHERE FV <> '$fecha_mensaje' OR FV is null GROUP by id_proyecto");
//# Estatus Solicitudes Cambios de Asesor
$count_reg_cambioasesores = mysqli_query($conexion, "SELECT estatusEspera FROM `cambioasesores` WHERE estatusEspera = 1");
//# Estatus Solicitudes Cambios de Placas
$count_reg_cambioplacas = mysqli_query($conexion, "SELECT estatusEspera FROM `cambioplacas` WHERE estatusEspera = 1");
//# Estatus Solicitudes Cambios de Semana de Solicitud de Altas
$count_reg_cambiosemsolalta = mysqli_query($conexion, "SELECT estatusEspera FROM cambiosemsolalta WHERE estatusEspera = 1");
//# Estatus Solicitudes Cambios de Semana de Altas
$count_reg_cambiosemalta = mysqli_query($conexion, "SELECT estatusEspera FROM cambiosemalta WHERE estatusEspera = 1");

// contador sin comprobar placas / sin supervision placas
$query = "SELECT C.fecha_creacion,
CS.fecha_registro
FROM proyectos P
LEFT JOIN complacas C ON P.id_proyecto = C.id_proyecto
LEFT JOIN comsupervision CS ON P.id_proyecto = CS.id_proyecto";

// $querySinPlacas = "SELECT
// (SELECT count(comPlacas)
// FROM proyectos
// WHERE complacas = 0
// ) AS sin_comPlacas,

// (SELECT count( comSuperPlaca)
// FROM proyectos
// WHERE comSuperPlaca = 0
// ) AS sin_comSuperPlaca;";
// $resultado = mysqli_query($conexion, $querySinPlacas);
// $rowSP = $resultado->fetch_assoc();

$resultado = mysqli_query($conexion, $query);
while ($row = $resultado->fetch_assoc()) {
    $Fcom = $row['fecha_creacion'];
    $Fsup = $row['fecha_registro'];

    // $dateC=date_create ($Fcom);
    // $FC = date_format($dateC,"Y-m-d");

    // $dateS=date_create ($Fsup);
    // $FS = date_format($dateS,"Y-m-d");

    // $dateFC = date("Y-m-d", strtotime($Fcom."- 2 days"));
    $dateFC = date("Y-m-d", strtotime($fecha_mensaje . "- 1 days"));
    $dateFS = date("Y-m-d", strtotime($fecha_mensaje . "- 1 days"));

    $querySinPlacas = "SELECT
    (SELECT count(comPlacas)
    FROM proyectos
    WHERE complacas = 0 and fecha_creacion < '$dateFC'
    ) AS sin_comPlacas,

    (SELECT count( comSuperPlaca)
    FROM proyectos
    WHERE comSuperPlaca = 0 and fecha_creacion < '$dateFS'
    ) AS sin_comSuperPlaca";
    $resultado = mysqli_query($conexion, $querySinPlacas);
    $rowSP = $resultado->fetch_assoc();
}


//  Indicador Vehiculos sin asignar asesor por mas de 24 horas ----------------------------------------------------------
$query2 = "SELECT C.fecha_creacion
FROM proyectos P
LEFT JOIN comasesor C ON P.id_proyecto = C.id_proyecto";
$resultado2 = mysqli_query($conexion, $query2);

while ($rowf2 = $resultado2->fetch_assoc()) {
    $Fcom2 = $rowf2['fecha_creacion'];
    $dateFC2 = date("Y-m-d", strtotime($fecha_mensaje . "- 1 days"));



    $querySinAsesor = "SELECT count(comAsesor) AS sin_Asesor, fecha_creacion
    FROM proyectos
    WHERE comAsesor = 0 AND proyCodIdentificador = 0 and superCodIdentificador = 0 and estadoProyectoEliminado = 1 and fecha_creacion < '$dateFC2' ";
    $resultadoSinAsesor = mysqli_query($conexion, $querySinAsesor);
    $rowSA = $resultadoSinAsesor->fetch_assoc();

}
?>


<title>Panel <?php if ($admin == 1) {
                    echo 'Admin';
                } else {
                    echo 'Usuario';
                } ?> | <?php echo $nomComp ?></title>

</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper" style="height: 75%;">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-1">
                        <div class="col-sm-12 textB">
                            <h1 class="m-0 bienvenido">Bienvenido <?php if ($admin == 1) {
                                                                        echo 'Administrador';
                                                                    } else {
                                                                        echo 'Usuario';
                                                                    } ?>: <strong><?php echo $nomComp ?></strong></h1>

                        </div>
                    </div>
                </div>
            </div>
            <!-- small box-->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <?php if ($super == 1 or $indMensajes == 1) { ?>
                            <div class="col-lg-2 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner" style="padding-right: 1px;">
                                        <h4 style="margin-bottom: 0px;"><strong><?php echo mysqli_num_rows($count_reg_mensajeSI); ?></strong></h4>
                                        <p style="margin-bottom: 0px;">Comprobados</p>
                                        <h4 style="margin-bottom: 0px;"><strong><?php echo mysqli_num_rows($count_reg_mensajeNO); ?></strong></h4>
                                        <p style="margin-bottom: 0px;">Sin Comprobar</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-comment-sms"></i>
                                    </div>
                                    <a href="../components/verIndicadoresAsesores.php" target="_blank" class="small-box-footer"><small>Estatus Para Envío de Mensajes </small><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        <?php }  ?>

                        <?php if ($super == 1 or $indCambioAsesor == 1) { ?>
                            <div class="col-lg-2 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner mb-3" style="padding-right: 1px;">
                                        <h3><?php echo mysqli_num_rows($count_reg_cambioasesores); ?></h3>
                                        <p>Cambios de Asesor</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-people-arrows-left-right"></i>
                                    </div>
                                    <a href="../admin/crudSolicitudCambioAsesor.php" class="small-box-footer"><small>Solicitud Asesor en Espera</small> <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($super == 1 or $indCambioSemAlta == 1) { ?>
                            <div class="col-lg-2 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner mb-4" style="padding-right: 1px;">
                                    <h3 style="margin-bottom: 0px;"><strong><?php echo mysqli_num_rows($count_reg_cambiosemalta); ?></strong></h3>
                                        <p>Cambios de Semana de Alta</p>
                                    </div>
                                    <div class="icon">
                                    <i class="fa-solid fa-calendar-plus"></i>
                                    </div>
                                    <a href="../admin/crudSolicitudCambioSemanaAlta.php" class="small-box-footer"><small>Solicitud Asesor en Espera</small> <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($super == 1 or $indCambioSemSolAlta == 1) { ?>
                            <div class="col-lg-2 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner" style="padding-right: 1px;">
                                    <h3 style="margin-bottom: 0px;"><strong><?php echo mysqli_num_rows($count_reg_cambiosemsolalta); ?></strong></h3>
                                        <p>Cambios de Semana de Solicitud de Alta</p>
                                    </div>
                                    <div class="icon">
                                    <i class="fa-solid fa-calendar-plus"></i>
                                    </div>
                                    <a href="../admin/crudSolicitudCambioSemanaSolAlta.php" class="small-box-footer"><small>Solicitud Asesor en Espera</small> <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($super == 1 or $indCambioPlacas == 1) { ?>
                            <div class="col-lg-2 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner mb-3" style="padding-right: 1px;">
                                        <h3><?php echo mysqli_num_rows($count_reg_cambioplacas); ?></h3>
                                        <p>Cambios de Placas</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-hashtag"></i>
                                    </div>
                                    <a href="../admin/crudSolicitudCambioPlacas.php" class="small-box-footer"><small>Solicitud Placas en Espera</small> <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($super == 1 or $indSinComSupPlacas == 1) { ?>
                            <div class="col-lg-2 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner" style="padding-right: 1px;">
                                        <h4 style="margin-bottom: 0px;"><strong><?php echo $rowSP['sin_comPlacas'] ?></strong></h5>
                                        <p style="margin-bottom: 0px;">Sin Comprobar Placas</p>
                                        <h4 style="margin-bottom: 0px;"><strong><?php echo $rowSP['sin_comSuperPlaca'] ?></strong></h4>
                                        <p style="margin-bottom: 0px;">Sin Supervisar Placas</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-ban"></i>
                                    </div>
                                    <a href="../admin/crudComprobacionPlacas.php" class="small-box-footer"><small>Comprobación de Placas </small> <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($super == 1 or $indVehSinAsignarAsesor == 1) { ?>
                            <div class="col-lg-2 col-6">
                                <div class="small-box bg-secondary">
                                    <div class="inner mb-4" style="padding-right: 1px;">
                                    <h3 style="margin-bottom: 0px;"><strong><?php echo $rowSA['sin_Asesor'] ?></strong></h3>
                                        <p>Vehículos sin Asignar Asesor</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-user-xmark"></i>
                                    </div>
                                    <a href="../admin/crudComprobacionAsignarAsesor.php" class="small-box-footer"><small>Solicitud Placas en Espera</small> <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <?php } ?>

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
    // require '../components/modal-verIndAsesores.php';
    require '../components/scripts-dataTables.php';

    ?>
</body>

</html>