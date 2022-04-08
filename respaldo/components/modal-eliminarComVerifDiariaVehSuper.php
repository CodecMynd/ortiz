<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade borrarComVerifDiariaVehSuper<?php echo $row["id_proyecto"] ?> " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar Supervisión de Verificacion Diaria Vehículos Activos del Número de Proyecto:?
                </h5>
            </div>
            <form id="formNuevoRegComPlaca" action="../delete/deleteComVerifDiariaVehSuper.php" method="POST">
                <div class="modal-body text-center">
                    <strong class="margin-auto__content">
                        <?php echo $nP ?>
                    </strong>
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $idP ?>">
                        <input type="hidden" name="id_comSupervision" id="id_comSupervision" value="<?php echo $id_cS ?>">
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" name="btnNuevoRegComVerifDiariaVeh" id="btnNuevoRegComVerifDiariaVeh" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.9.4 Eliminar Supervisión de Comprobación de Placa</h5>
            </div>
        </div>
    </div>
</div>
