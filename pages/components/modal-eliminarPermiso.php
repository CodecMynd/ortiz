<div class="modal fade eliminarP-<?php echo $row['id_modulo'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                    <?php echo  $row['permiso'] ?>
                </strong>
            </div>
            <div class="modal-footer">
                <buttom type="submit" data-dismiss="modal" id="<?php echo $row['id_modulo']; ?>" class="btn btn-secondary btn-block btnBorrarPermisos" data-toggle="tooltip" data-placement="bottom" title="Estas de acuerdo en eliminar "><i class="fa-solid fa-ban"></i> Eliminar</buttom>

                <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
            </div>
        </div>
    </div>
</div>


