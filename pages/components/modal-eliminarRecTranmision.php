<div class="modal fade eliminarRecTranmision" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Recepción de Transmisión?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                   Número de Proyecto: <span id="tituloModal4"></span>
                </strong>
            </div>
            <form id="formDeleteRecTranmision">
                <div class="modal-footer">
                    <input type="hidden" name="id_proyecto4" id="id_proyecto4" value="">
                    <input type="hidden" name="nProyecto4" id="nProyecto4" value="">
                    <input type="hidden" name="id_envioRecTransm4" id="id_envioRecTransm4" value="">

                    <button type="button" id="btnDeleteRecTranmision" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteRecTranmision"></div>
                </div>
            </div>
            <div class="pie">
                <h5>6.1.4 Eliminar Registro Recepción de Transmisión</h5>
            </div>
        </div>
    </div>
</div>
