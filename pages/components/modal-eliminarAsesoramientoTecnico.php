<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade borrarAseTec" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar Motivo Programa de Asesoramiento Técnico del Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <strong><span id="tituloModal1"></span></strong>
                </strong>
            </div>
            <!-- <form id="formEliminarAsignacionTop" action="../delete/deleteAsignacionTop.php" method="POST"> -->
            <form id="formEliminarAseTec">
                <div class="modal-footer text-left">
                    <input type="hidden" name="id_aseTec" id="id_aseTec" value="">
                    <button type="submit" name="btnEliminarAseTec" id="btnEliminarAseTec" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <a href="#" class="btn btn-secondary btn-inline" data-dismiss="modal" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="fa-solid fa-circle-xmark"></i> Salir</a>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.6.2 Eliminar Programa de Asesoramiento Técnico</h5>
            </div>
        </div>
    </div>
</div>