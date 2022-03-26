<div class="modal fade eliminarSemanaCobro<?php echo $row['id_semanaCobro'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar esta Semana Cobro:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                <?php echo $row['semanaCobro']; ?>
                </strong>
            </div>
            <div class="modal-footer">
                <buttom type="submit" data-dismiss="modal" id="<?php echo $row['id_semanaCobro']; ?>" class="btn btn-secondary btn-block btnBorrarSemanaCobro" data-toggle="tooltip" data-placement="bottom" title="Estas de acuerdo en eliminar "><i class="fa-solid fa-ban"></i> Eliminar</buttom>
                <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
            </div>
            <div class="pie">
                <h5>1.6.2.2 Eliminar Semana de Cobro</h5>
            </div>
        </div>
    </div>
</div>
