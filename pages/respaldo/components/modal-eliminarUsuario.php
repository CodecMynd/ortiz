<div class="modal fade bd-example-modal-sm<?php echo $row['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Realmente deseas eliminar a:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong>
                    <?php echo  $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'] ?>
                </strong>
            </div>
            <div class="modal-footer">
                <buttom type="submit" data-dismiss="modal" id="<?php echo $row['id_usuario']; ?>" class="btn btn-secondary btn-block btnBorrarUsuario" data-toggle="tooltip" data-placement="bottom" title="Estas de acuerdo en eliminar "><i class="fa-solid fa-ban"></i> Eliminar</buttom>
                <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
            </div>
            <div class="pie">
                <h5>1.1.3 Eliminar Usuario</h5>
            </div>
        </div>
    </div>
</div>
