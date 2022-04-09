<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade eliminarComSuperActMinDia-<?php $row['id_ActMinDiaria']?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar la Supervisión de Comprobación de Actividad Mínima Diaria del Número de Proyecto:?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                <?php echo $row['nProyecto']; ?>
                </strong>
            </div>
            <form id="formNuevoRegComPlaca" action="../delete/deleteComSuperActMinDia.php" method="POST">
                <div class="modal-body text-center">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_ActMinDiaria" id="id_ActMinDiaria" value="<?php echo $row['id_ActMinDiaria'] ?>">
                        <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $row['id_proyecto'] ?>">
                        
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" name="btnNuevoRegComVerifDiariaVeh" id="btnNuevoRegComVerifDiariaVeh" class="btn btn-secondary"><i class="fas fa-ban"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.4.5 Eliminar Supervisión de Comprobación de Actividad Mínima Diaria</h5>
            </div>
        </div>
    </div>
</div>
