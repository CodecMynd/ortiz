<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>3.1.3 Ver Link de Video, Observaciones y Generales | <?php echo $nomComp ?></title>
<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.3/dist/clipboard.min.js"></script>
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
                            <h1 class="m-0">3.1.3 Ver Link de Video, Observaciones y Generales</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Comprobcion de placas -->
            <?php
            $idP = $_GET['id'];
            $query = "SELECT P.id_proyecto, P.nProyecto, RS.folioRegSolicitud, RS.inspecCalidad, RS.observCliente, 
            RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, RA.cronometro, 
            LV.link, RC.borrado, RC.folioCodID, RC.supervisionValores,
            RS.fecha_creacion AS regSolfecha,
            RA.fecha_creacion AS regAltaFecha,
            RC.fecha_creacion AS regCodIdFechas,
            URS.nombres AS RSNombre , URS.aPaterno AS RSPaterno, URS.aMaterno AS RSMaterno,
            URA.nombres AS RANombre, URA.aPaterno AS RAPaterno, URA.aMaterno AS RAMaterno,
            URC.nombres AS RCNombre, URC.aPaterno AS RCPaterno, URC.aMaterno AS RCMaterno,
            D.valCobProyBase, D.codIdProyBase, D.id_pagoProyBase, D.valCobProyExtra, D.codIdProyExtra, D.valCobComBan, D.codIdComBan,D.valCobPen, D.codIdPension, D.valCobOtros, D.codIdOtros, 
            F.formaPago AS formaProyBase, FE.formaPago AS formaProyExtra, FB.formaPago AS formaComBan, FP.formaPago AS formaCobPen, FO.formaPago AS formaOtros,
            RE.motivo, RE.fecha_registro AS Fecha_motivo, RE.fecha_mod AS fechaMod_motivo,
            URE.nombres AS motNombre, URE.aPaterno AS motPaterno, URE.aMaterno AS motMaterno,
            UREM.nombres AS motModNombre, UREM.aPaterno AS motModPaterno, UREM.aMaterno AS motModMaterno
            FROM proyectos P 
            INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto 
            INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
            INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
            INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
            INNER JOIN usuarios URS ON RS.id_capC = URS.id_usuario
            INNER JOIN usuarios URA ON RA.id_capC = URA.id_usuario
            INNER JOIN usuarios URC ON RC.id_capC = URC.id_usuario
            INNER JOIN desglocecodid D ON P.id_proyecto = D.id_proyecto
            INNER JOIN formapagos F ON D.id_pagoProyBase = F.id_formaPago
            INNER JOIN formapagos FE ON D.id_pagoProyExtra = FE.id_formaPago
            INNER JOIN formapagos FB ON D.id_pagoComBan = FB.id_formaPago
            INNER JOIN formapagos FP ON D.id_pagoPension = FP.id_formaPago 
            INNER JOIN formapagos FO ON D.id_pagoOtros = FO.id_formaPago
            LEFT JOIN repvalvenaltavsvalcodid RE ON P.id_proyecto = RE.id_proyecto
            LEFT JOIN usuarios URE ON RE.id_capC = URE.id_usuario
            LEFT JOIN usuarios UREM ON RE.id_capM = UREM.id_usuario
            WHERE P.id_proyecto = $idP";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $motNomComp = $row['motNombre'] . ' ' . $row['motPaterno'] . ' ' . $row['motMaterno'];
            $motModomComp = $row['motModNombre'] . ' ' . $row['motModPaterno'] . ' ' . $row['motModMaterno'];
            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Número de Proyectos Supervisado en el sistema: <strong><?php echo $row['nProyecto'] ?></strong></h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->

                                <div class="card-body">
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura Supervisión: Código <?php echo $row['codIdProyBase'] ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="col-md-12 col-sm-12 my-1">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 col-sm-12 my-1">
                                                        <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                            <label class="pl-2 mb-2">¿Motivo?</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa-solid fa-comments"></i></span>
                                                                </div>
                                                                <textarea name="motivo" id="motivo" class="form-control" rows="4" placeholder="Max. 200 caracteres" readonly><?php if (!isset($row['motivo'])) {
                                                                                                                                                                                    echo 'Sin Agregar Motivo Supervisión';
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo $row['motivo'];
                                                                                                                                                                                } ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="col-md-5 col-sm-12  form-group">
                                                        <div class="input-group form-floating">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?php if (!isset($motNomComp)) {
                                                                                                                echo 'Sin Agregar Motivo Supervisión';
                                                                                                            } else {
                                                                                                                echo $motNomComp;
                                                                                                            } ?>" readonly>
                                                            <label for="floatingInput" class="pl-5">Capturista: Supervisión </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-sm-12  form-group">
                                                        <div class="input-group form-floating">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?php if (!isset($row['Fecha_motivo'])) {
                                                                                                                echo 'Sin Agregar Motivo Supervisión';
                                                                                                            } else {
                                                                                                                echo $row['Fecha_motivo'];
                                                                                                            } ?>" readonly>
                                                            <label for="floatingInput" class="pl-5">Fecha: Registro Supervisión</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura Modificación de Supervisión: Código <?php echo $row['codIdProyBase'] ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-md-12 col-sm-12 my-1">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-5 col-sm-12  form-group">
                                                        <div class="input-group form-floating">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?php if (!isset($motModNomComp)) {
                                                                                                                echo 'Sin Modificar Motivo Supervisión';
                                                                                                            } else {
                                                                                                                echo $motModNomComp;
                                                                                                            } ?>" readonly>
                                                            <label for="floatingInput" class="pl-5">Capturista: Modificación </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-sm-12  form-group">
                                                        <div class="input-group form-floating">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-calendar-check"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?php if (!isset($row['Fecha_motivo'])) {
                                                                                                                echo 'Sin Modificar Motivo Supervisión';
                                                                                                            } else {
                                                                                                                echo $row['Fecha_motivo'];
                                                                                                            } ?>" readonly>
                                                            <label for="floatingInput" class="pl-5">Fecha: Modificación Supervisión</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="mt-3">Registro con Código Identificador: Folio <strong><?php echo $row['folioCodID'] ?></strong></h5>
                                    <hr>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Desgloce de Cobro de (código identificador: <?php echo $row['codIdProyBase'] ?>)</strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                                                    <div class='row justify-content-center'>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['valCobProyBase'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>*Valor Cobro Proyecto Base</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobProyBase' id='currency1' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['formaProyBase'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Forma de Pago Proyecto Base</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-10 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                                                </div>
                                                                <input name='codIdProyBase' id='codIdProyBase' type='text' class='form-control' placeholder='Ingresa el Código Identificador' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres' value="<?php echo $row['codIdProyBase'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>*Código Identificador Valor Cobro Proyecto Base</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                                                    <div class='row justify-content-center'>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobProyExtra' id='currency2' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['valCobProyExtra'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Valor Cobro Proyecto Extra</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobProyExtra' id='currency2' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['formaProyExtra'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Forma de Pago Proyecto Extra</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-10 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                                                </div>
                                                                <input name='codIdProyExtra' id='codIdProyExtra' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres' value="<?php echo $row['codIdProyExtra'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Código Identificador Proyecto Extra</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                                                    <div class='row justify-content-center'>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobComBan' id='currency3' type='text' class='form-control' placeholder='Ingresa Cobro' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['valCobComBan'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Valor Cobro Comisión Bancaria</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobComBan' id='currency3' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['formaComBan'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Forma de Pago Comisión Bancaria</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-10 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                                                </div>
                                                                <input name='codIdComBan' id='codIdComBan' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' required maxlength='50' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres' value="<?php echo $row['codIdComBan'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Código Identificador Comisión Bancaria</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                                                    <div class='row justify-content-center'>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobPen' id='currency4' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['valCobPen'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Valor Cobro Pensión</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobPen' id='currency4' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['formaCobPen'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Forma de Pago Pensión</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-10 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                                                </div>
                                                                <input name='codIdPension' id='codIdPension' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres' value="<?php echo $row['codIdPension'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Código Identificador Pensión</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12 col-sm-12 my-2 py-1' style='border: 2px solid #CED4DA;'>
                                                    <div class='row justify-content-center'>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobOtros' id='currency5' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['valCobOtros'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Valor Cobro Otros</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-5 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text  mt-2'>
                                                                        <i class='fa-solid fa-money-bill-1-wave '></i>
                                                                    </span>
                                                                </div>
                                                                <input name='valCobOtros' id='currency5' type='text' class='form-control' placeholder='Ingresa Cobro' data-toggle='tooltip' data-placement='bottom' title='Ingresa Cobro' value="<?php echo $row['formaOtros'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Forma de Pago Otros</label>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-10 col-sm-12 my-1'>
                                                            <div class='input-group form-floating mb-3'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text '><i class='fa-solid fa-arrow-down-1-9'></i></span>
                                                                </div>
                                                                <input name='codIdOtros' id='codIdOtros' type='text' class='form-control' placeholder='Ingresa el Código Identificador ' data-toggle='tooltip' data-placement='bottom' title='Código Identificador max. 50 Caracteres' value="<?php echo $row['codIdOtros'] ?>" readonly>
                                                                <label for='floatingInput' class='pl-5'>Código Identificador Otros</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: Código <?php echo $row['codIdProyBase'] ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-6 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                            </div>
                                                            <input name='' id='modelo' type='text' class='form-control' value='<?php echo $RCCapturista = $row['RCNombre'] . ' ' . $row['RCPaterno'] . ' ' . $row['RCMaterno'] ?>' readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Registro Proyectos con Código Identificador</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $row['regCodIdFechas'] ?>' readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Registro Proyectos con Código Identificador</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                        <h5 class="mt-3">Registro Alta Proyecto: Folio <strong><?php echo $row['folioRegAlta'] ?></strong></h5>
                                        <hr>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Observaciones: <?php echo $row['folioRegAlta'] ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='row justify-content-center'>
                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input'>
                                                        <label for='' class='pl-5'>*Link de Video en Vivo Alta</label>
                                                        <div class='input-group'>
                                                            <div class='input-group-prepend'>
                                                                <button type="button" class="btn btn-secondary" data-clipboard-target="#link<?php echo $row['nProyecto']; ?>">Copiar Link <i class='fa-solid fa-photo-film'></i></button>
                                                            </div>
                                                            <input name='link' id='link<?php echo $row['nProyecto']; ?>' type='text' class='form-control' value="<?php echo $row['link'] ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-5 mb-2'>*Observaciones Prueba de Auditoria Final</label>
                                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                                </div>
                                                                <textarea name='observCliente' id='observCliente' class='form-control' rows='4' placeholder='Agrega alguna breve Observación para nuestro Cliente' readonly><?php echo $row['observAudiFinal']; ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: <?php echo $row['folioRegAlta'] ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='col-md-12 col-sm-12 my-1'>
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-stopwatch'></i></span>
                                                            </div>
                                                            <input name='' id='modelo' type='text' class='form-control' value='<?php echo $row['cronometro'] ?>' readonly>
                                                            <label for='floatingInput' class='pl-5'>Cronometro Respuesta Solicitud Alta</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                            </div>
                                                            <input name='' id='modelo' type='text' class='form-control' value='<?php echo $RACapturista = $row['RANombre'] . ' ' . $row['RAPaterno'] . ' ' . $row['RAMaterno'] ?>' readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Registro de Alta Proyecto</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-4 col-sm-12  form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php echo $row['regAltaFecha'] ?>' readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Registro de Alta Proyecto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                        <h5 class="mt-3">Registro de Solicitud en espera de Alta: Folio <strong><?php echo $row['folioRegSolicitud'] ?></strong></h5>
                                        <hr>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Observaciones: <?php echo $row['folioRegSolicitud'] ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='row justify-content-center'>
                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-5 mb-2'>*Observación Inspección de Control de Calidad</label>
                                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                                </div>
                                                                <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega alguna breve Observación de Inspección de Control Calidad' readonly><?php echo $row['inspecCalidad']; ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-6 mb-2'>*Observaciones Para el Cliente</label>
                                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                                </div>
                                                                <textarea name='observCliente' id='observCliente' class='form-control' rows='4' placeholder='Agrega alguna breve Observación para nuestro Cliente' readonly><?php echo $row['observCliente']; ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: <?php echo $row['folioRegSolicitud'] ?></strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='row justify-content-center'>
                                                <div class='col-md-5 col-sm-12  form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                        </div>
                                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $RSCapturista =  $row['RSNombre'] . ' ' . $row['RSPaterno'] . ' ' . $row['RSMaterno'] ?>' readonly>
                                                        <label for='floatingInput' class='pl-5'>Capturista: Registro Solicitud de Alta Proyecto</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12  form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                        </div>
                                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['regSolfecha'] ?>' readonly>
                                                        <label for='floatingInput' class='pl-5'>Fecha: Registro Solicitud de Alta Proyecto</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-muted">
                                        <div class="text-dark">
                                            <h5>** Texto solo de consulta, no se puede modificar!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /table usuario -->

        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../components/scripts-dataTables.php';
    ?>
</body>

</html>