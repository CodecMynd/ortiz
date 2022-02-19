<div class="modal fade modalEliminarPermiso<?php echo $rowp['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Eliminar permiso ?
                </h5>
            </div>
            <?php $row?>
            <div class="modal-body justify-content-center">
                <strong style="text-align: center !important">                                                      
                    <?php echo  $rowp['id_usuario'] ?>
                </strong>
            </div>
            <div class="modal-footer">
                <buttom type="submit" data-dismiss="modal" id="<?php echo $row['id_usuario']; ?>" class="btn btn-secondary btn-block btnBorrarPermiso" data-toggle="tooltip" data-placement="bottom" title="Estas de acuerdo en eliminar "><i class="fa-solid fa-ban"></i> Eliminar</buttom>

                <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
            </div>
        </div>
    </div>
</div>
