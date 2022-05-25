<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regEntregaPz" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Link de Entrega de Pieza de Número de Proyecto: <strong><span id="tituloModal1"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegEntregaPz">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto1" id="id_proyecto1" value="">
                        <input type="hidden" name="nProyecto1" id="nProyecto1" value="">
                        <input type="hidden" name="id_solPzsDanadas1" id="id_solPzsDanadas1" value="">
                        <div class='col-md-10 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input name='comEntragaPz' id='comEntragaPz' type='text' class='form-control' placeholder='Registrar Link de Desarmado' data-toggle='tooltip' data-placement='bottom' title='Registrar Link de Desarmado'>
                                <label for='floatingInput' class='pl-5'>*Link de Registro de Entrega de Pieza</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnNuevoRegEntregaPz" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRegEntregaPz"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.3.1 Registro Entrega de Pieza</h5>
            </div>
        </div>
    </div>
</div>