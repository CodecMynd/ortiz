<div class="modal fade eliminarAgente-<?php echo $row['id_agente'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Realmente deseas eliminar a:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong>
               Agente  <?php echo $row['agente'] ?>
                </strong>
            </div>
            <div class="modal-footer">
                <buttom type="submit" data-dismiss="modal" id="<?php echo $row['id_agente']; ?>" class="btn btn-secondary btn-block btnBorrarAgente" data-toggle="tooltip" data-placement="bottom" title="Estas de acuerdo en eliminar "><i class="fa-solid fa-ban"></i> Eliminar</buttom>
                <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
            </div>
            <div class="pie">
                <h5>1.7.2 Eliminar Agente</h5>
            </div>
        </div>
    </div>
</div>

