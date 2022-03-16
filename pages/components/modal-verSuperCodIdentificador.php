<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.3/dist/clipboard.min.js"></script>
<div class="modal fade verSuperCodId<?php echo $row['id_proyecto'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Supervisión de Registro Código Identificador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: Supervisión de Registro Código Identificador</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
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
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $SVCapturista ?>' readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Supervisión de Registro Código Identificador</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $SupervicionFecha ?>' readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Supervisión de Registro Código Identificador</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
                    <h5 class="mt-3">Registro con Código Identificador: Código <strong><?php echo $row['codIdentificador'] ?></strong></h5>
                    <hr>
                </div>
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: Código <?php echo $row['codIdentificador'] ?></strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
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
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $RCCapturista ?>' readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Registro Proyectos con Código Identificador</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $regCodIdFechas ?>' readonly>
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
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
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
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
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
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $cronometro ?>' readonly>
                                        <label for='floatingInput' class='pl-5'>Cronometro Respuesta Solicitud Alta</label>
                                    </div>
                                </div>
                                <div class='col-md-4 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $RACapturista ?>' readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Registro de Alta Proyecto</label>
                                    </div>
                                </div>
                                <div class='col-md-4 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $regAltaFecha ?>' readonly>
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
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
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
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
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
                                    <input name='' id='modelo' type='text' class='form-control' value='<?php echo $RSCapturista  ?>' readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Registro Solicitud de Alta Proyecto</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12  form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo $regSolfecha ?>' readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha: Registro Solicitud de Alta Proyecto</label>
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
    </div>
</div>
<script>
    // copiar link al portapapeles
    var clipboard = new Clipboard('.btn');
</script>