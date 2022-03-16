<!-- Modal -->
<div class="modal fade verComentRegSolAltProy<?php echo $row['id_proyecto'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registro de Solicitud en espera de Alta: Folio <strong><?php echo $row['folioRegSolicitud'] ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- consulta sql -->
            <?php
            $inspecCalidad;
            $observCliente;
            ?>
            <div class="card-body">
                <div class='col-md-12 col-sm-12 my-1'>
                    <div class="card card-secondary card-outline collapsed-card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Observaciones: <?php echo $row['folioRegSolicitud'] ?></strong></h2>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class='row justify-content-center'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label class='ml-5 mb-2'>*Observación Inspección de Control de Calidad</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                </div>

                                                <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega alguna breve Observación de Inspección de Control Calidad' maxlength='300' required readonly><?php echo $inspecCalidad; ?></textarea>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label class='ml-5 mb-2'>*Observaciones Para el Cliente</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                </div>
                                                <textarea name='observCliente' id='observCliente' class='form-control' rows='4' placeholder='Agrega alguna breve Observación para nuestro Cliente' maxlength='300' required readonly><?php echo $observCliente; ?></textarea>
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
                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='row justify-content-center'>
                                    <div class='col-md-5 col-sm-12  form-group'>
                                        <div class='input-group form-floating'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-car-side'></i></span>
                                            </div>
                                            <input name='' id='modelo' type='text' class='form-control' value='<?php echo $capturista?>' disabled readonly>
                                            <label for='floatingInput' class='pl-5'>Capturista: Registro de Solicitud en espera de alta </label>
                                        </div>
                                    </div>
                                    <div class='col-md-5 col-sm-12  form-group'>
                                        <div class='input-group form-floating'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                            </div>
                                            <input name='' id='' type='text' class='form-control' value='<?php echo $row['fecha_creacion'] ?>' disabled readonly>
                                            <label for='floatingInput' class='pl-5'>Fecha: Registro de Solicitud en espera de alta</label>
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
    <div class="card-footer text-muted">
        <div class="text-dark">
            <h5>** Texto solo de consulta, no se puede modificar!</h5>
        </div>
    </div>
</div>