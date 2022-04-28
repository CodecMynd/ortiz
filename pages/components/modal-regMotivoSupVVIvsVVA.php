
<div class="modal fade regMotivoSupVVIvsVVA" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                   Registrar Supervisión Valor Venta Inicial Vs Valor Alta
                </h5>
            </div>
            <form id="formNuevoRegMotivoSupVVAvsVCodID" action="../adds/addNuevoRegMotivoSupVVIvsVVA.php" method="POST"> 
                <div class="modal-body">
                    <div class='row justify-content-center'>
                    <h5>Número de Proyecto: <span id="tituloModal1"></span></h5>
                        <input type="hidden" name="id_proyecto1" id="id_proyecto1" value="">
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='pl-2 mb-2'>¿Motivo?</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                        </div>
                                        <textarea name='motivo' id='motivo' class='form-control' rows='4' placeholder='Max. 200 caracteres'></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" id="btnNuevaRegMotivoSupVVAvsVCodID" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-broom"></i> Limpiar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>3.2.1 Registrar Motivo Supervisión</h5>
            </div>
        </div>
    </div>
</div>
