<div class="modal fade modMotivoSupVVIvsVVA-<?php echo $row["id_proyecto"] ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                   Modificar Supervisión
                </h5>
            </div>
            <?php 
            $id_proyecto = $row['id_proyecto'];
            $query = "SELECT id_proyecto, motivo FROM repvalveninicialvsvalvenalta WHERE id_proyecto = $id_proyecto";
            $respuesta = mysqli_query($conexion, $query);
            $rowR = $respuesta->fetch_assoc();
            ?>
            <form id="formUpdateRegMotivoSupVVIvsVVA" action="../update/updateRegMotivoSupVVIvsVVA.php" method="POST"> 
                <div class="modal-body">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $row['id_proyecto'] ?>">
                    <div class='row justify-content-center'>
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='pl-2 mb-2'>¿Motivo?</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                        </div>
                                        <textarea name='motivo' id='motivo' class='form-control' rows='4' placeholder='Max. 200 caracteres'><?php if(!isset($rowR['motivo'])){
                                            echo "Sin registrar aún";
                                        }else{
                                            echo $rowR['motivo'];
                                        } ?></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" id="btnNuevaRegMotivoSupVVAvsVCodID" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>3.1.2 Modificar Motivo Supervisión</h5>
            </div>
        </div>
    </div>
</div>
