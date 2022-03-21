<div class="modal fade" id="regresarRegCodIdentificador<?php echo $row['id_proyecto'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Código Identificador?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <?php echo $codIdProyBase ?>
                </strong>
            </div>
            <!-- <form id="formRegresarRegCodIdentificador" action="../update/updateRegresarRegCodIdentificador.php" method="POST"> -->
            <form id="formRegresarRegCodIdentificador">
                <div class="modal-footer">
                    <input type="hidden" name="id_regcodidenti" id="id_regcodidenti" value="<?php echo $id_regcodidenti ?>">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $row['id_proyecto'] ?>">
                    <button type="submit" id="btnRegresarRegCodIdentificador" class="btn btn-secondary btn-block"><i class="fa-solid fa-ban"></i> Eliminar</buttom> <br>
                    <button data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar">Salir</button>
                </div>
            </form>
      
            <div class="pie">
                <h5>2.6.2 Eliminar Registro Código Identificador</h5>
            </div>
        </div>
    </div>
</div>
