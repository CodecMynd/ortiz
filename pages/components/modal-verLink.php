<div class="modal fade verLinkVideo-<?php echo $row['id_proyecto'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ver comentarios: <strong><?php echo $row['folioRegSolicitud'] ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="card-body">
                <div class='col-md-12 col-sm-12 my-1'>
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
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input'>
                                <label for='' class='pl-5'>*Link de Video en Vivo Alta</label>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <a type="button" class="btn btn-secondary" onclick="copy_data(select_txt)">Copiar Link <i class='fa-solid fa-photo-film'></i></a>
                                    </div>
                                    <input name='link' id='select_txt' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required value="<?php echo $row['link'] ?>" readonly>
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
    function copy_data(containerid) {
        var range = document.createRange();
        range.selectNode(containerid); //changed here
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
        alert("Link copiado correctamente");
    }
</script>