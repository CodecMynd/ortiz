<div class="modal fade borrarComImg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar la Comprobación de 7 Imagenes del Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <strong><span id="tituloModal3"></span></strong>
                </strong>
            </div>
            <form action="../delete/deleteComImg.php" method="post">
                <div class="modal-footer">
                <input type="hidden" name="id_proyecto3" id="id_proyecto3" value="">
                <input type="hidden" name="id_comImagenes3" id="id_comImagenes3" value="">
                    <button type="submit" name="btnEliminarRegComPlaca" id="btnEliminarRegComPlaca" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fa-solid fa-circle-xmark"></i> Salir</a>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.11.2 Eliminar Comprobación de 7 Imagenes</h5>
            </div>
        </div>
    </div>
</div>