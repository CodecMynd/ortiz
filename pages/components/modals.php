

<!-- Modal Editar Contraseña -->
<div class="modal fade" id="editPass<?php echo $row['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center border-nav">
                <h3 class="modal-title w-100 mt-1">Editar Contraseña</h3>
            </div>
            <form id="formUpdatePass">
                <div class="modal-body mx-1 my-1">
                    <div class="card card-secondary card-outline border-card" style="-webkit-box-shadow: -4px 6px 16px 6px rgba(0, 0, 0, 0.86);
                        box-shadow: -4px 6px 16px 6px rgba(0, 0, 0, 0.86);">
                        <div class="card-body">
                            <!-- query -->
                            <?php
                            $id_usuario = $row['id_usuario'];
                            $pass = $row['pass'];
                            $user = $row['usuario'];
                            ?>
                            <div class="row justify-content-center">
                                <input type="text" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario ?>">
                                <div class="col-md-6 col-sm-12 my-1">
                                    <label class="pl-5">Usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                        </div>
                                        <input name="usuario" id="usuario" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $user ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                        </div>
                                        <input name="pass" id="pass" type="text" class="form-control" placeholder="pass" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                        <label for="floatingInput" class="pl-5">Nueva Contraseña <small>*Campo a Editar</small></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-md-6 col-sm-12 my-1">
                                    <label class="ml-5 mb-2"> Fecha Actualización <small>*Llenado en automatico</small></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $date ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 my-1">
                                    <label class="ml-5 mb-2">Capturista Editor<small>*Llenado en automatico</small></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $usuario ?>" disabled readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-footer">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 align-self-center">
                            <button type="button" class="btn btn-secondary btn-block" id="enviarFormUpdatePass" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar Edición</button>
                        </div>
                        <div class="col-md-4 col-sm-12 align-self-center">
                            <a href="javascript:location.reload()" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cerrar Ventana "><i class="fas fa-window-close"></i> Cerrar</a>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div id="res_updateFormPass"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Modal Editar Contraseña -->
<script>
            // 1.1.2 Actualizar contraseña **************************
            $('#enviarFormUpdatePass').click(function() {
            $.ajax({
                    url: '../update/updatePass.php',
                    type: 'POST',
                    data: $('#formUpdatePass').serialize(),
                })
                .done(function(res) {
                    $('#res_updateFormPass').html(res)
                })
        });
        // 1.1.2 Actualizar contraseña **************************
</script>