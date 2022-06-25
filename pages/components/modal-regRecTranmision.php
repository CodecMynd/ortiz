<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regRecTranmision" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                Registro Link Recepción de Transmisión de Número de Proyecto: <strong><span id="tituloModal3"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegRecTranmision">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto3" id="id_proyecto3" value="">
                        <input type="hidden" name="nProyecto3" id="nProyecto3" value="">
                        <input type="hidden" name="id_envioRecTransm3" id="id_envioRecTransm3" value="">
                        <div class='col-md-10 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input name='linkRecTransm' id='linkRecTransm' type='text' class='form-control' placeholder='Registro Link Recepción de Transmisión' data-toggle='tooltip' data-placement='bottom' title='Registro Link Recepción de Transmisión'>
                                <label for='floatingInput' class='pl-5'>*Registro Link Recepción de Transmisión</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnNuevoRegRecTranmision" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegRecTranmision"></div>
                </div>
            </div>
            <div class="pie">
                <h5>6.1.3 Registro Recepción de Transmisión</h5>
            </div>
        </div>
    </div>
</div>

