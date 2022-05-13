<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regresarRegCodIdentificador" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Número de Proyecto de comprobación?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <span id="numP"></span>
                </strong>
            </div>
            <form id="formRegresarRegCodIdentificador">
                <div class="modal-footer">
                    <input type="hidden" name="id_regcodidenti" id="id_regcodidenti" value="">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                    <input type="hidden" name="codIdProyBase" id="codIdProyBase" value="">
                    <input type="hidden" name="folioCodID" id="folioCodID" value="">

                    <button type="button" id="btnRegresarRegCodIdentificador" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegresarRegCodIdentificador"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.6.2 Eliminar Registro Código Identificador</h5>
            </div>
        </div>
    </div>
</div>
