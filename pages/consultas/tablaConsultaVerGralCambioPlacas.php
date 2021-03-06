<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Tabla Ver Generales Solicitud Cambio de Placas | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.9.2.3 Ver Generales Solicitud Cambio de Placas</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Comprobcion de placas -->
            <?php
            $estatusEspera = '';
            $id_cambioPlaca = $_GET['id'];
            $nP = $_GET['nP'];

            $query = "SELECT C.id_cambioPlaca, C.motivo, C.fecha_creacion, C.fecha_mod, C.estatusEspera, C.placaActual, C.placaAsignado, 
            UC.nombres AS solNom, UC.aPaterno AS solPat, UC.aMaterno AS solMat, 
            UM.nombres AS autNom, UM.aPaterno AS autPat, UM.aMaterno AS autMat 
            FROM cambioplacas C 
            INNER JOIN usuarios UC ON C.id_capC = UC.id_usuario
            LEFT JOIN usuarios UM ON C.id_capM = UM.id_usuario 
            WHERE C.id_cambioPlaca = $id_cambioPlaca ";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $placaActual = $row['placaActual'];
            $placaAsignado = $row['placaAsignado'];
            $solicitante = $row['solNom'] . ' ' . $row['solPat'] . ' ' . $row['solMat'];
            $autorizo =  $row['autNom'] . ' ' . $row['autPat'] . ' ' . $row['autMat'];

            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Registro Solicitud Cambio de Placa en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar p??gina anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar p??gina"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <div class="card-body">
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Solicitud Cambio de Placa</strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class='row justify-content-center'>
                                                <div class="col-md-4 col-sm-12 my-1">
                                                    <label class="ml-5 mb-2">Placa Actual</small></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa-solid fa-user-minus"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $placaActual ?>" disabled readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12 my-1">
                                                    <label class="ml-5 mb-2">Placa por Asignar</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa-solid fa-user-plus"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $placaAsignado ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col 12"><br></div>
                                                <div class='col-md-12 col-sm-12 my-1'>
                                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                                        <label class='ml-5 mb-2'>??Motivo Solicitud Cambio de Placa?</label>
                                                        <span data-toggle='tooltip' title='max. 200 caracteres'>
                                                            <div class='input-group'>
                                                                <div class='input-group-prepend'>
                                                                    <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                                </div>
                                                                <textarea  class='form-control' rows='4' placeholder='Motivo por el cual se solicito el Cambio de Placa' readonly><?php echo $row['motivo'] ?></textarea>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                        </div>
                                                        <input type='text' class='form-control' value='<?php echo $solicitante ?>' disabled readonly>
                                                        <label for='floatingInput' class='pl-5'>Capturista: Solicitante Cambio de Placa</label>
                                                    </div>
                                                </div>
                                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                    <div class='input-group form-floating'>
                                                        <div class='input-group-prepend'>
                                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                        </div>
                                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['fecha_creacion'] ?>' disabled readonly>
                                                        <label for='floatingInput' class='pl-5'>Fecha: Solicitud Cambio de Placa</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="card card-secondary card-outline collapsed-card">
                                            <div class="card-header">
                                                <h2 class="card-title"><strong>Validaci??n Solicitud Cambio Asesor</strong></h2>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4 col-sm-12 my-1">
                                                        <label class="ml-5 mb-2">Estado Solicitud Cambio Asesor</small></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"> <i class="fa-solid fa-user-minus"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php if ($row['estatusEspera'] == 0) {
                                                                                                                                                                                            echo "NO Autorizado";
                                                                                                                                                                                        } else if ($row['estatusEspera'] == 1) {
                                                                                                                                                                                            echo "Por Autorizar";
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo "Autorizado";
                                                                                                                                                                                        } ?>" disabled readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='row justify-content-center'>
                                                    <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                                            </div>
                                                            <input type='text' class='form-control' value='<?php if (empty($row['autNom']) and empty($row['autPat']) and empty($row['autMat'])) {
                                                                                                                echo 'En Espera de Autorizaci??n';
                                                                                                            } else {
                                                                                                                echo $autorizo;
                                                                                                            } ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Capturista: Validador Cambio de Asesor (SI / NO)</label>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-5 col-sm-12 my-5 form-group'>
                                                        <div class='input-group form-floating'>
                                                            <div class='input-group-prepend'>
                                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                                            </div>
                                                            <input name='' id='' type='text' class='form-control' value='<?php if (empty($row['fecha_mod'])) {
                                                                                                                                echo 'En Espera de Autorizaci??n';
                                                                                                                            } else {
                                                                                                                                echo $row['fecha_mod'];
                                                                                                                            }  ?>' disabled readonly>
                                                            <label for='floatingInput' class='pl-5'>Fecha: Validaci??n Cambio de Asesor</label>
                                                        </div>
                                                    </div>
                                                </div>
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
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
</body>

</html>