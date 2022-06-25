<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade borrarProyecto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <span id="tituloModal1"></span>
                </strong>
            </div>
            
            <form id="formDeleteProyecto">
            <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                <div class="modal-footer">
                    <button type="button" id="btnDeleteProyecto" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteProyecto"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.2.4 Eliminar Proyecto</h5>
            </div>
        </div>
    </div>
</div>