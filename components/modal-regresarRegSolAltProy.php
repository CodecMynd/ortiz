<div class="modal fade" id="regresarRegSolAltProy<?php echo $row['id_proyecto'] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Solicitud Alta Proyecto?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <?php echo $row['folioRegSolicitud'] ?>
                </strong>
            </div>
            <form id="formRegresarRegSolAltProy" method="post" action="../update/updateRegresarRegSolAltProy.php">
                <div class="modal-footer">
                    <input type="hidden" name="id_regSolicitud" id="id_regSolicitud" value="<?php echo $id_regSolicitud ?>">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $row['id_proyecto'] ?>">
                    <button type="submit" id="btnRegresarRegSolAltaProy" class="btn btn-secondary btn-block"><i class="fa-solid fa-ban"></i> Eliminar</buttom> <br>
                    <button data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar">Salir</button>
                </div>
            </form>

            <div class="pie">
                <h5>2.4.5 Eliminar Registro de Solicitud Alta Proyecto</h5>
            </div>
        </div>
    </div>
</div>