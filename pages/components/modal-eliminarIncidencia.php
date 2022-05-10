<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade eliminarIncidencia" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar la Incidencia del Número de Proyecto: <strong><span id="tituloModal3"></span></strong>
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    Numero de Folio: <strong><span id="folio3"></span></strong>
                </strong>
            </div>

            <form id="formEliminarIncidencia">
                <div class="modal-footer text-left">
                    <input type="hidden" name="id_incidencia3" id="id_incidencia3" value="">

                    <button type="button" name="btnEliminarIncidencia" id="btnEliminarIncidencia" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaEliminarIncidencia"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.3.3.4 Eliminar Incidencia</h5>
            </div>
        </div>
    </div>
</div>
