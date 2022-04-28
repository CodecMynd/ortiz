<div class="modal fade regComImg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Comprobacion de 7 Imagenes de Número de Proyecto: <strong><span id="tituloModal1"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegComImg" action="../adds/addNuevoRegComImg.php" method="POST">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto1" id="id_proyecto1" value="">
                        <input type="hidden" name="nProyecto1" id="nProyecto1" value="">
                        <div class='col-md-10 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input name='linkComImagenes' id='linkComImagenes' type='text' class='form-control' placeholder='Link de Comprobación de 7 Imagenes' data-toggle='tooltip' data-placement='bottom' title='Ingresa Link Comprobacion de 7 Imagenes'>
                                <label for='floatingInput' class='pl-5'>*Link de Comprobación de 7 Imagenes</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" id="btnNuevaRegMotivoSupVVAvsVCodID" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-broom"></i> Limpiar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.11.1 Registrar Comprobación de 7 Imagenes</h5>
            </div>
        </div>
    </div>
</div>