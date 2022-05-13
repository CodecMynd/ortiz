<div class="modal fade regresarRegSolAltProy" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Solicitud Alta Proyecto?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                   <span id="nProyecto"></span>
                </strong>
            </div>
            <form id="formRegresarRegSolAltProy">
                <div class="modal-footer">
                    <input type="hidden" name="id_regSolicitud" id="id_regSolicitud" value="">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                    <input type="hidden" name="folioRegSolicitud" id="folioRegSolicitud" value="">

                    <button type="button" id="btnRegresarRegSolAltaProy" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegresarRegSolAltaProy"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.4.5 Eliminar Registro de Solicitud Alta Proyecto</h5>
            </div>
        </div>
    </div>
</div>