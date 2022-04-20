<div class="modal fade eliminarComAsesor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar la Comprobación de Asesor del Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <span id="tituloModal3"></span>
                </strong>
            </div>
            <form action="../delete/deleteComAsesor.php" method="POST">
                <div class="modal-footer">
                    <input type="hidden" name="id_proyecto3" id="id_proyecto3">
                    <input type="hidden" name="id_comAsesor3" id="id_comAsesor3">
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-pen"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.15.1.2 Eliminar Comprobación de Asesor</h5>
            </div>
        </div>
    </div>
</div>