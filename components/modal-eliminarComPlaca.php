<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade borrarComPlaca" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar la Comprobación de Placa del Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <span id="tituloModal3"></span>
                </strong>
            </div>
            <form id="formEliminarRegComPlaca" action="../delete/deleteComPlaca.php" method="POST">
                <div class="modal-footer text-left">
                    <input type="hidden" name="id_proyecto3" id="id_proyecto3" value="">
                    <button type="submit" name="btnEliminarRegComPlaca" id="btnEliminarRegComPlaca" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fa-solid fa-circle-xmark"></i> Salir</a>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.9.2 Eliminar Comprobación de Placa</h5>
            </div>
        </div>
    </div>
</div>