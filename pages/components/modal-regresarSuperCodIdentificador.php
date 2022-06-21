<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regresarSuperCodIdentificador" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Supervisión de Código Identificador del Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong><strong><span id="tituloModal1"></span></strong></strong>
            </div>
            <form id="formRegresarSuperCodId">
                <input type="hidden" name="id_proyecto" id="id_proyecto">
                <input type="hidden" name="id_supervisado" id="id_supervisado">

                <div class="modal-footer text-left">
                    <button type="button" id="btnRegresarSuperCodId" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegresarSuperCodId"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.7.2 Eliminar Supervisión de Registro Código Identificador</h5>
            </div>
        </div>
    </div>
</div>


