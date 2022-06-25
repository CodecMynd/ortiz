<div class="modal fade eliminarEnvioTranmision" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Envío de Transmisión?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                   Número de Proyecto: <span id="tituloModal2"></span>
                </strong>
            </div>
            <form id="formDeleteEnvioTranmision">
                <div class="modal-footer">
                    <input type="hidden" name="id_proyecto2" id="id_proyecto2" value="">
                    <input type="hidden" name="nProyecto2" id="nProyecto2" value="">
                    <input type="hidden" name="id_envioRecTransm2" id="id_envioRecTransm2" value="">

                    <button type="button" id="btnDeleteEnvioTranmision" class="btn btn-secondary"><i class="fa-solid fa-trash"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteEnvioTranmision"></div>
                </div>
            </div>
            <div class="pie">
                <h5>6.1.2 Eliminar Registro Envío de Transmisión</h5>
            </div>
        </div>
    </div>
</div>
