<div class="modal fade enviarPzsFirmadasRec" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="margin-auto__content">
                    Número de Proyecto: <span id="tituloModal12"></span>
                </strong>
            </div>
            <div class="modal-body text-center">
                <form id="formEnviarPzsFirmadasRec">
                    <div class='col-md-12 col-sm-12 my-1'>
                        <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                            <label class='pl-2 mb-2'>Ingresa algun Comentario</label>
                            <span data-toggle='tooltip' title='max. 200 caracteres'>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class="fa-regular fa-comment-dots"></i></span>
                                    </div>
                                    <textarea autofocus name='comenPzsFirmadasRec' id='comenPzsFirmadasRec' class='form-control' rows='3' placeholder='Max. 200 caracteres'></textarea>
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

                    <input type="hidden" name="id_proyecto12" id="id_proyecto12" value="">
                    <input type="hidden" name="nProyecto12" id="nProyecto12" value="">
                    <input type="hidden" name="id_recPzsDanadas12" id="id_recPzsDanadas12" value="">
                    <input type="hidden" name="id_solPzsDanadas12" id="id_solPzsDanadas12" value="">
                    <input type="hidden" name="id_regCompraInicial12" id="id_regCompraInicial12" value="">
                    <input type="hidden" name="id_autorizado12" id="id_autorizado12" value="">
                    <input type="hidden" name="id_pzsEntregadas12" id="id_pzsEntregadas12" value="">
                    <hr>
                    <button type="button" id="btnEnviarPzsFirmadasRec" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaEnviarPzsFirmadasRec"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.1.6.2 Enviar Piezas Firmadas de Recibido</h5>
            </div>
        </div>
    </div>
</div>
