<div class="modal fade eliminarAgregadoPzsAdicionales" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar Número de Folio del Número de Proyecto: <strong><span id="tituloModal"></span></strong> ?
                </h5>
            </div>
            <div class="modal-body text-center">
                Número de Folio: <strong><span id="folioPzAdicionalText"></span>
                </strong>
            </div>
            <form id="formDeleteAgregadoPzsAdicionales">
                <input type="hidden" name="id_regSolpzadicional" id="id_regSolpzadicional">
                <input type="hidden" name="id_proyecto" id="id_proyecto">

                <div class="modal-footer text-left">
                    <button type="button" id="btnDeleteAgregadoPzsAdicionales" class="btn btn-secondary"><i class="fa-solid fa-trash-alt"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteAgregadoPzsAdicionales"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.2.3 Eliminar Agregado de Solicitud de Piezas Adicionales</h5>
            </div>
        </div>
    </div>
</div>
