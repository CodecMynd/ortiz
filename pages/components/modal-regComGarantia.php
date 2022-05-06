<div class="modal fade regComGarantia-<?php echo $idP ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Comprobacion de Garantia de Número de Proyecto: <?php echo $nP ?>
                </h5>
            </div>
            <form id="formNuevoRegComGarantia" action="../adds/addNuevoRegComGarantia.php" method="POST">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $idP ?>">
                        <input type="hidden" name="nProyecto" id="nProyecto" value="<?php echo $nP ?>">
                        <div class='col-md-10 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input name='linkComGarantia' id='linkComGarantia' type='text' class='form-control' placeholder='Link de Comprobación de Garantia' data-toggle='tooltip' data-placement='bottom' title='Ingresa Link Comprobacion de Garantia'>
                                <label for='floatingInput' class='pl-5'>*Link de Comprobación de Garantia</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" id="btnNuevaRegMotivoSupVVAvsVCodID" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                   
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.9.1 Registrar Comprobación de Garantia</h5>
            </div>
        </div>
    </div>
</div>