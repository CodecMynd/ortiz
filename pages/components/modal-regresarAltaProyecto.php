<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regresarAltaProy" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Solicitud Alta Proyecto?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong><strong><span id="tituloModal1"></span></strong></strong>
            </div>
            <form id="formRegresarAltaProyecto">
                <div class="modal-footer">
                    <input type="hidden" name="id_regAlta" id="id_regAlta" value="">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                    <input type="hidden" name="folioRegAlta" id="folioRegAlta" value="">

                    <button type="button" id="btnRegresarAltaProyecto" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegresarAltaProyecto"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.5.2 Eliminar Registro Alta Proyecto</h5>
            </div>
        </div>
    </div>
</div>