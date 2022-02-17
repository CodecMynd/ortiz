<!-- Modal Crear Usuario Nuevo -->
<div class="modal fade" id="modalAgregarUsuarios">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header text-center border-nav">
                <h3 class="modal-title w-100 mt-1">Nuevo Usuario</h3>
            </div>
            </form id="formNuevoUsuario">
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
                                    <input id="nombres_add" type="text" class="form-control" placeholder="Nombre (s)" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                    <label for="floatingInput" class="pl-5">Nombre(s)</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                    </div>
                                    <input id="aPaterno_add" type="text" class="form-control" placeholder="Apellido Paterno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                    <label for="floatingInput" class="pl-5">Apellido Paterno</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                    </div>
                                    <input id="aMaterno_add" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                    <label for="floatingInput" class="pl-5">Apellido Materno</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                    </div>
                                    <input id="usuario_add" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" onkeyup="javascript:this.value=this.value.toLowerCase();">
                                    <label for="floatingInput" class="pl-5">Usuario</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                    </div>
                                    <input id="email_add" type="email" class="form-control" placeholder="Correo" required maxlength="50" data-toggle="tooltip" data-placement="bottom" title="Max. 50 caracteres" onkeyup="javascript:this.value=this.value.toLowerCase();">
                                    <label for="floatingInput" class="pl-5">Email</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                    </div>
                                    <input id="tel_add" type="number" class="form-control" placeholder="Telefono" required maxlength="10" data-toggle="tooltip" data-placement="bottom" title="Max. 10 caracteres">
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
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
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
                        <button type="button" id="NuevoUsuarioReg" class="btn btn-secondary btn-block " data-toggle="tooltip" data-placement="bottom" title="Guardar"><i class="fa-solid fa-floppy-disk"></i> Guardar </button>
                    </div>
                    <div class="col-md-2 col-sm-12 align-self-center">
                        <a href="javascript:location.reload()" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cerrar ventana"><i class="fas fa-window-close"></i> Cerrar</a>
                    </div>
                    <br>
                    <div class="col-md-12 col-sm-12 align-self-center">
                        <div id="fracaso" style="display:none;margin-top:15px" class="alert alert-success ">
                            Usuario registrado exitosamente, puedes seguir registrando si lo deseas.
                        </div>
                        <!-- <div id="fracaso" style="display:none;margin-top:15px" class="alert alert-danger">
                            Lo siento reintenta nuevamente...
                        </div> -->
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /Modal Crear Usuario Nuevo -->
<script>
    // 1.1.5 Registrar usuario nuevo **************************
    $(document).ready(function() {
        $("#NuevoUsuarioReg").click(function(e) {
            e.preventDefault();
            let nombres_add = $("#nombres_add").val();
            let aPaterno_add = $("#aPaterno_add").val();
            let aMaterno_add = $("#aMaterno_add").val();
            let usuario_add = $("#usuario_add").val();
            let email_add = $("#email_add").val();
            let tel_add = $("#tel_add").val();

            if (nombres_add !== "" && aPaterno_add !== "" && aMaterno_add !== "" && usuario_add !== "" && email_add !== "" && tel_add !== "") {

                $.ajax({
                    url: '../adds/addNuevoUsuario.php',
                    type: 'POST',
                    cache: false,
                    data: {
                        nombres_add: nombres_add,
                        aPaterno_add: aPaterno_add,
                        aMaterno_add: aMaterno_add,
                        usuario_add: usuario_add,
                        email_add: email_add,
                        tel_add: tel_add
                    },
                    success: function(response) {
                        if (response != 0) {
                            $("#exito_add").fadeIn().delay(4000).fadeOut();
                            $('#formNuevoUsuario')[0].reset();
                        } else {
                            $("#fracaso").fadeIn().delay(4000).fadeOut();
                        }
                    }
                });
            } else {
                alert("Todos los campos son obligatorios");
            }
        });
    });
</script>