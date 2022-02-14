<!-- Modal Crear Usuario Nuevo -->
<div class="modal fade" id="modalAgregarUsuarios">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="formNuevoUsuario">
                <div class="modal-header text-center border-nav">
                    <img class="img-fluid img-thumbnail rounded float-left rounded-circle" src="../../src/img/logos/logo.png" alt="logo jsolAutomotriz" width="10%">
                    <h3 class="modal-title w-100 mt-3">Formulario: Nuevo Usuario</h3>
                </div>
                <div class="modal-body mx-1 my-1">
                    <div class="card card-secondary card-outline border-card" style="-webkit-box-shadow: -4px 6px 16px 6px rgba(0, 0, 0, 0.86);
                    box-shadow: -4px 6px 16px 6px rgba(0, 0, 0, 0.86);">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        </div>
                                        <input name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                        <label for="floatingInput" class="pl-5">Nombre(s)</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                        </div>
                                        <input name="aPaterno" id="aPaterno" type="text" class="form-control" placeholder="Apellido Paterno" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                        <label for="floatingInput" class="pl-5">Apellido Materno</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                        </div>
                                        <input name="aMaterno" id="aMaterno" type="text" class="form-control" placeholder="Apellido Materno" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                        <label for="floatingInput" class="pl-5">Apellido Materno</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                        </div>
                                        <input name="usuario" id="usuario" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                        <label for="floatingInput" class="pl-5">Usuario</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                        </div>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Correo" required maxlength="50" data-toggle="tooltip" data-placement="bottom" title="Max. 50 caracteres">
                                        <label for="floatingInput" class="pl-5">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                        </div>
                                        <input name="tel" id="tel" type="text" class="form-control" placeholder="Telefono" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="10" data-toggle="tooltip" data-placement="bottom" title="Max. 10 caracteres" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                        <label for="floatingInput" class="pl-5">Teléfono</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-md-4 col-sm-12 my-1">
                                    <label class="ml-5 mb-2">Fecha registro</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $date ?>" disabled readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 my-1">
                                    <label class="ml-5 mb-2">Capturista</label>
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
                        <div class="col-md-2 col-sm-12 align-self-center">
                            <button type="submit" id="regNuevoUsuario" class="btn btn-secondary btn-block btnRegNuevoUsuario"><i class="fas fa-pen"></i> Guardar</button>
                        </div>
                        <div class="col-md-2 col-sm-12 align-self-center">
                            <a href="javascript:location.reload()" class="btn btn-secondary btn-block"><i class="fas fa-window-close"></i> Cerrar</a>
                        </div>
                        <br>
                        <div class="col-md-12 col-sm-12 align-self-center">
                            <div id="exito" style="display:none;margin-top:15px" class="alert alert-success ">
                                Usuario registrado exitosamente, puedes seguir registrando si lo deseas.
                            </div>
                            <div id="fracaso" style="display:none;margin-top:15px" class="alert alert-danger">
                                Lo siento reintenta nuevamente...
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Modal Crear Usuario Nuevo -->

<!-- Modal Editar Contraseña -->
<div class="modal fade" id="editPass<?php echo $row['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center border-nav">
                <img class="img-fluid img-thumbnail rounded float-left rounded-circle" src="../../src/img/logos/logo.png" alt="logo jsolAutomotriz" width="18%">
                <h3 class="modal-title w-100 mt-3">Formulario: Editar Contraseña</h3>
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
                                <input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">
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
                                        <input name="pass" type="text" class="form-control" placeholder="pass" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $pass ?>">
                                        <label for="floatingInput" class="pl-5">Nueva Contraseña <small>*Campo a Editar</small></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                <div class="col-md-6 col-sm-12 my-1">
                                Fecha Actualización <small>*Llenado en automatico</small>
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
                        <div class="col-md-2 col-sm-12 align-self-center">
                            <button type="button" class="btn btn-secondary btn-block" id="enviarFormUpdatePass"><i class="fas fa-pen"></i> Guardar</button>
                        </div>
                        <div class="col-md-2 col-sm-12 align-self-center">
                            <a href="javascript:location.reload()" class="btn btn-secondary btn-block"><i class="fas fa-window-close"></i> Cerrar</a>
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