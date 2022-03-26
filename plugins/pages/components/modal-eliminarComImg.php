<div class="modal fade borrarComPlaca<?php echo $row["id_proyecto"] ?> " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar la Comprobación de 7 Imagenes del Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                <?php echo $row['nProyecto']; ?>
                </strong>
            </div>
            <div class="modal-footer">
                <buttom type="submit" data-dismiss="modal" id="<?php echo $row['id_proyecto']; ?>" class="btn btn-secondary btn-block btnBorrarComImg" data-toggle="tooltip" data-placement="bottom" title="Estas de acuerdo en eliminar "><i class="fa-solid fa-ban"></i> Eliminar</buttom>
                <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
            </div>
            <div class="pie">
                <h5>2.3.11.2 Eliminar Comprobación de 7 Imagenes</h5>
            </div>
        </div>
    </div>
</div>
