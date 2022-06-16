<?php
require '../components/queryDomPdf.php';
?>
<!-- Modal  style="max-width: 1250px!important;"  -->
<div class="modal fade" id="modal-verGralAutorizacionDescuentos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> 2.10.1.3 Ver Generales Solicitud de Cambio de Valor Alta</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <?php
            $id_proyecto = $_REQUEST['id_proyecto'];
            $nProyecto = $_REQUEST['nProyecto'];
            $id_cambioAutorizDescuento = $_REQUEST['id_cambioAutorizDescuento'];
            $query = "SELECT P.id_proyecto, P.nProyecto, 
            C.folioCambioValAlta, C.valorVentaAltaActual, C.valorVentaAltaAsignado, C.motivo, 
            C.fecha_creacion, C.fecha_mod, C.verificado, C.estatusAprobado,
            U.nombres, U.aPaterno, U.aMaterno,
            UA.nombres AS nomA, UA.aPaterno AS patA, UA.aMaterno AS matA
            FROM proyectos P
            INNER JOIN cambioautorizdescuento C ON P.id_proyecto = C.id_proyecto
            LEFT JOIN usuarios U ON C.id_capC = U.id_usuario
            LEFT JOIN usuarios UA ON C.id_capM = UA.id_usuario
            WHERE C.id_cambioAutorizDescuento = $id_cambioAutorizDescuento";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            $solicitante = (empty($row['nombres']) AND empty($row['aPaterno']) AND empty($row['aMaterno'])) ? 'Sin Registro' : $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
            $estatusAprobado = (empty($row['estatusAprobado'])) ? '' : $row['estatusAprobado'];
            $validado = (empty($row['nomA']) AND empty($row['patA']) AND empty($row['matA'])) ? 'Sin Registro' : $row['nomA'] . ' ' . $row['patA'] . ' ' . $row['matA'];
            ?>
            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Solicitud de de Cambio de Valor Alta</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Valor Venta Alta Actual</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['valorVentaAltaActual'] ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Valor Venta Alta por Asignar</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-dollar-sign"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['valorVentaAltaAsignado'] ?>" readonly>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Solicitante del Cambio de Valor Alta</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $solicitante ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Fecha Solicitud Registro de Cambio de Valor Alta</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $row['fecha_creacion'] ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                            </div>
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='pl-2 mb-2'>¿Motivo de Cambio de Valor Alta?</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea name='motivo' id='motivo' class='form-control' rows='4' placeholder='Max. 200 caracteres' disabled readonly><?php echo $row['motivo'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Validado / Autorizado</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Validado / Autorizado por:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $validado ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Fecha Validado / Autorizado</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo (empty($row['fecha_mod'])) ? 'Sin Registro' : $row['fecha_mod'] ?>" disabled readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col 12">
                            <hr>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 col-12">
                                <button type="button" class="btn btn-permisos">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check"></i></span>
                                        <div class="info-box-content">
                                            <?php if ($row['verificado'] == 0) { ?>
                                                <h6><strong>Estatus de la Solicitud</strong></h4>
                                                <h6><strong>Aún Sin Validar</strong></h4>
                                                <?php } else if ($row['verificado'] == 1) {
                                                echo "<h6><strong>Ya fue validado</strong></h4>";
                                                $aviso = ($estatusAprobado == 0) ? 'No fue Aprobado' : 'Aprobado';
                                                echo 'Estatus:' . ' ' . "<h5><strong>$aviso</strong></h5>";
                                            } ?>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer text-left">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <?php
            desconectar();
            ?>
        </div>
    </div>
</div>
<script src="../ajax/tableVarios.js"></script>