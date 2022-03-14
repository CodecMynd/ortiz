<div class="modal fade" id="regresarAltaProy<?php echo $row['id_proyecto'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Solicitud Alta Proyecto?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <?php echo $row['folioRegAlta'] ?>
                </strong>
            </div>
            <form id="formRegresarAltaProyecto" action="../update/updateRegresarAltaProy.php" method="POST">
                <div class="modal-footer">
                    <input type="hidden" name="id_regAlta" id="id_regAlta" value="<?php echo $id_regAlta ?>">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $row['id_proyecto'] ?>">
                    <button type="submit" id="btnRegresarAltaProyecto" class="btn btn-secondary btn-block"><i class="fa-solid fa-ban"></i> Eliminar</buttom> <br>
                    <button data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar">Salir</button>
                </div>
            </form>
      
            <div class="pie">
                <h5>2.5.2 Eliminar Registro Alta Proyecto</h5>
            </div>
        </div>
    </div>
</div>
