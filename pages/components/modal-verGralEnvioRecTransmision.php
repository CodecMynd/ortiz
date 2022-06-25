<?php
require '../components/queryDomPdf.php';
?>
<!-- Modal  style="max-width: 1250px!important;"  -->
<div class="modal fade" id="modal-verGralEnvioRecTransmision" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">6.1.5 Ver Generales Envío y Recepción de Transmisión</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <?php
            $id_envioRecTransm = $_REQUEST['id_envioRecTransm'];
            $query = "SELECT P.id_proyecto, P.nProyecto,
            E.linkEnvioTransm, E.linkRecTransm, E.fecha_creacion, E.fecha_creacionRec,
            U.nombres AS nom, U.aPaterno AS pat, U.aMaterno AS mat,
            U2.nombres AS nom2, U2.aPaterno AS pat2, U2.aMaterno AS mat2
            FROM proyectos P
            LEFT JOIN enviorectransm E ON P.id_proyecto = E.id_proyecto
            INNER JOIN usuarios U ON E.id_capC = U.id_usuario
            LEFT JOIN usuarios U2 ON E.id_capCR = U2.id_usuario
            WHERE E.id_envioRecTransm = $id_envioRecTransm";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            ?>
            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Comprobación Envío de Transmisión</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='ml-5 mb-2'>Link Registro Envío de Transmisión</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class="fa-solid fa-link"></i></span>
                                            </div>
                                            <textarea class='form-control' rows='1' placeholder='Registro Link Registro Envío de Transmisión' readonly><?php echo (empty($row['linkEnvioTransm'])) ? 'Sin Registro' : $row['linkEnvioTransm'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo (empty($row['nom']) and empty($row['pat']) and empty($row['mat'])) ? 'Sin Registro' :  $row['nom'] . ' ' . $row['pat'] . ' ' . $row['mat'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Envío de Transmisión</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha Registro: Envío de Transmisión</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Supervisión Recepción de Transmisión</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='ml-5 mb-2'>Link Registro Recepción de Transmisión</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class="fa-solid fa-link"></i></span>
                                            </div>
                                            <textarea class='form-control' rows='1' placeholder='Agrega Registro Supervisión de Comprobación de Asesor' readonly><?php echo (empty($row['linkRecTransm'])) ? 'Sin Registro' : $row['linkRecTransm'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo (empty($row['nom2']) and empty($row['pat2']) and empty($row['mat2'])) ? 'Sin Registro' :  $row['nom2'] . ' ' . $row['pat2'] . ' ' . $row['mat2'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Recepción de Transmisión</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo (empty($row['fecha_creacionRec'])) ? 'Sin Registro' : $row['fecha_creacionRec'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha Registro: Recepción de Transmisión</label>
                                </div>
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