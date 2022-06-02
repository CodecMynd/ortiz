<div class="modal fade enviarPzsEntregadas" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="margin-auto__content">
                    Número de Proyecto: <span id="tituloModal10"></span>
                </strong>
            </div>
            <div class="modal-body text-center">
                <form id="formEnviarPzsEntregadas">
                    <div class='col-md-12 col-sm-12 my-1'>
                        <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                            <label class='pl-2 mb-2'>Ingresa algun Comentario</label>
                            <span data-toggle='tooltip' title='max. 200 caracteres'>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class="fa-regular fa-comment-dots"></i></span>
                                    </div>
                                    <textarea autofocus name='comenPzsEntregadas' id='comenPzsEntregadas' class='form-control' rows='3' placeholder='Max. 200 caracteres'></textarea>
                                </div>
                            </span>
                        </div>
                    </div>
                    <input type="hidden" name="id_proyecto10" id="id_proyecto10" value="">
                    <input type="hidden" name="nProyecto10" id="nProyecto10" value="">
                    <input type="hidden" name="id_recPzsDanadas10" id="id_recPzsDanadas10" value="">
                    <input type="hidden" name="id_solPzsDanadas10" id="id_solPzsDanadas10" value="">
                    <input type="hidden" name="id_regCompraInicial10" id="id_regCompraInicial10" value="">
                    <input type="hidden" name="id_autorizado10" id="id_autorizado10" value="">
                    <hr>
                    <button type="button" id="btnEnviarPzsEntregadas" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaEnviarPzsEntregadas"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.1.5.2 Enviar Piezas Entregadas</h5>
            </div>
        </div>
    </div>
</div>
