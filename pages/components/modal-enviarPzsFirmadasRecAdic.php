<div class="modal fade enviarPzsFirmadasRecAdic" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="margin-auto__content">
                    Número de Proyecto: <span id="tituloModal11"></span>
                </strong>
            </div>
            <div class="modal-body text-center">
                <form id="formEnviarPzsFirmadasRecAdic">
                    <div class='col-md-12 col-sm-12 my-1'>
                        <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                            <label class='pl-2 mb-2'>Ingresa algun Comentario</label>
                            <span data-toggle='tooltip' title='max. 200 caracteres'>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class="fa-regular fa-comment-dots"></i></span>
                                    </div>
                                    <textarea autofocus name='comenPzsFirmadasRecAdic' id='comenPzsFirmadasRecAdic' class='form-control' rows='3' placeholder='Max. 200 caracteres'></textarea>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class='col-md-12 col-sm-12 my-5'>
                        <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                            <label class='pl-2 mb-2'>*Link del Documento <small>(requerido)</small> </label>
                            <span data-toggle='tooltip' title='max. 200 caracteres'>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class="fa-solid fa-link"></i></span>
                                    </div>
                                    <textarea autofocus name='linkDocumento' id='linkDocumento' class='form-control' rows='1' placeholder='Max. 200 caracteres'></textarea>
                                </div>
                            </span>
                        </div>
                    </div>

                    <input type="hidden" name="id_proyecto11" id="id_proyecto11" value="">
                    <input type="hidden" name="nProyecto11" id="nProyecto11" value="">
                    <input type="hidden" name="id_regSolpzadicional11" id="id_regSolpzadicional11" value="">
                    <input type="hidden" name="id_cotizandoPzsAdic11" id="id_cotizandoPzsAdic11" value="">
                    <input type="hidden" name="id_preAutorizadoPzsAdic11" id="id_preAutorizadoPzsAdic11" value="">
                    <input type="hidden" name="id_autorizadoPzsAdic11" id="id_autorizadoPzsAdic11" value="">
                    <input type="hidden" name="id_AutoProceSurtPzAdic11" id="id_AutoProceSurtPzAdic11" value="">
                    <input type="hidden" name="id_pzsEntregadasAdic11" id="id_pzsEntregadasAdic11" value="">
                    <hr>
                    <button type="button" id="btnEnviarPzsFirmadasRecAdic" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaEnviarPzsFirmadasRecAdic"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.2.5.2 Enviar de Piezas Entregadas: Piezas Adicionales a Piezas Firmadas de Recibido: Piezas Adicionales</h5>
            </div>
        </div>
    </div>
</div>

