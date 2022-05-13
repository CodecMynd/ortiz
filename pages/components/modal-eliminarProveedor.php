<div class="modal fade eliminarProveedor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar Proveedor: ?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong><span id="tituloModal1"></span>
                </strong>
            </div>
            <form id="formDeleteProveedor">
                <input type="hidden" name="id_proveedor" id="id_proveedor">
                <div class="modal-footer text-left">
                    <button type="button" id="btnDeleteProveedor" class="btn btn-secondary"><i class="fa-solid fa-trash-alt"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteProveedor"></div>
                </div>
            </div>
            <div class="pie">
                <h5>1.12.3 Eliminar Proveedor</h5>
            </div>
        </div>
    </div>
</div>
