<div class="modal fade eliminarProyExtra" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Proyecto Extra?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                   Folio: <span id="folioProyExtraText"></span>
                </strong>
            </div>
            <form id="formDeleteProyExtra">
                <div class="modal-footer">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                    <input type="hidden" name="id_proyExtra" id="id_proyExtra" value="">
                    <input type="hidden" name="folioProyExtra" id="folioProyExtra" value="">

                    <button type="button" id="btnDeleteProyExtra" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteProyExtra"></div>
                </div>
            </div>
            <div class="pie">
                <h5>5.1.2 Eliminar Proyecto Extra</h5>
            </div>
        </div>
    </div>
</div>