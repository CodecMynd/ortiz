<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<div class="modal fade enviarProyExtraUtil" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="margin-auto__content">
                    Número de Proyecto: <span id="tituloModal4"></span>
                </strong>
            </div>
            <div class="modal-body text-center">
                <form id="formEnviarProyExtraUtil">
                    <input type="hidden" name="id_proyecto4" id="id_proyecto4" value="">
                    <input type="hidden" name="nProyecto4" id="nProyecto4" value="">
                    <input type="hidden" name="id_proyExtra4" id="id_proyExtra4" value="">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12 my-1 form-group">
                            <div class="input-group form-floating my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar-plus"></i></span>
                                </div>
                                <input autofocus name="semProyExtraUtil" id="semProyExtraUtil" type="text" class="form-control" placeholder="Ingresa Año - Semana" required maxlength="7" data-toggle="tooltip" data-placement="bottom" title="Ingresa Año - Semana" data-inputmask="'mask' : '9999-99'">
                                <label for="floatingInput" class="pl-5">Semana Proyecto Extra Utilizado</label>
                            </div>
                        </div>
                    </div>


                    <button type="button" id="btnEnviarProyExtraUtil" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaEnviarProyExtraUtil"></div>
                </div>
            </div>
            <div class="pie">
                <h5>5.1.6 Enviar A Proyecto Extra Utilizado</h5>
            </div>
        </div>
    </div>
</div>
<script>
    //  iniciar inputMask 
    $(document).ready(function() {
        $(":input").inputmask();
        // $('#semana').mask("9999-59");
    });
</script>