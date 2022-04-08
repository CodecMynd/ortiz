<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.3/dist/clipboard.min.js"></script>
<div class="modal fade verGralComPlacas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registro: Número de Proyecto <strong><?php echo $nP ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Link de Comprobación de Placa </strong></h2>
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
                                    <label for='' class='pl-5'>*Link de Comprobación de Placa</label>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <button type="button" class="btn btn-secondary" data-clipboard-target="#link<?php echo $nP; ?>">Copiar Link <i class='fa-solid fa-photo-film'></i></button>
                                        </div>
                                        <input name='link' id='link<?php echo $nP ?>' type='text' class='form-control' value="<?php echo $row['linkComPlaca'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo $row['UPN'] . ' ' . $row['UPP'] . ' ' . $row['UPM']; ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Registro Comprobación de Placas</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo $row['fecha_creacion'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha: Registro Comprobación de Placas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
                    <h5 class="mt-3">Registro Supervisión de Comprobación de Placa: Número de Proyecto <strong><?php echo $nP ?></strong></h5>
                    <hr>
                </div>
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Supervisión Comprobación de Placa</strong></h2>
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
                                    <label class='ml-5 mb-2'>Supervisión de Comprobación de Placa</label>
                                    <span data-toggle='tooltip' title='max. 300 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega Registro Supervisión de Comprobación de Placa' readonly><?php echo $row['textSupervision']; ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo $row['UCSN'] . ' ' . $row['UCSP'] . ' ' . $row['UCSM']; ?>' disabled readonly> 
                                    <label for='floatingInput' class='pl-5'>Capturista: Registro Supervisión</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo $row['CSF'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha: Registro Supervisión</label>
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