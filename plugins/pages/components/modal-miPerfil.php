<!-- Modal -->
<div class="modal fade modalMiPass<?php echo $id ?>" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header border-nav">
                <h5 class="modal-title" id="exampleModalLabel">Editar mi perfil</h5>
                <div class="modal-tool">
                    <small>*Todos los campos son requeridos</small>
                </div>
            </div>
            <form id="formUpdatePassUser">
                <div class="card-body">
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                </div>
                                <input autofocus name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $nombres ?>" <?php if($admin == 1){echo '';}else{ echo 'readonly';}?> >
                                <label for="floatingInput" class="pl-5">Nombre(s) <small>*Campo a Editar</small></label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                </div>
                                <input name="aPaterno" id="aPaterno" type="text" class="form-control" placeholder="Apellido Paterno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" value="<?php echo $aPaterno ?>" <?php if($admin == 1){echo '';}else{ echo 'readonly';}?> >
                                <label for="floatingInput" class="pl-5">Apellido Paterno <small>*Campo a Editar</small></label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                </div>
                                <input name="aMaterno" id="aMaterno" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" value="<?php echo $aMaterno ?>" <?php if($admin == 1){echo '';}else{ echo 'readonly';}?> >
                                <label for="floatingInput" class="pl-5">Apellido Materno <small>*Campo a Editar</small></label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                </div>
                                <input name="usuario" id="usuario" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $usuario ?>" onkeyup="javascript:this.value=this.value.toLowerCase();" <?php if($admin == 1){echo '';}else{ echo 'readonly';}?> >
                                <label for="floatingInput" class="pl-5">Usuario <small>*Campo a Editar</small></label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                </div>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Correo" data-inputmask="'alias': 'email'" value="<?php echo $email ?>" <?php if($admin == 1){echo '';}else{ echo 'readonly';}?>  />
                                <label for="floatingInput" class="pl-5">Email <small> *Ej. prueba@prueba.com</small> </label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 my-1">
                            <div class="input-group form-floating mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                </div>
                                <input name="tel" id="tel" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'" value="<?php echo $tel ?>" <?php if($admin == 1){echo '';}else{ echo 'readonly';}?> >
                                <label for="floatingInput" class="pl-5">Teléfono <small>*Campo a Editar</small></label>
                            </div>
                        </div>
                        <!-- <div class="col-md-2 col-sm-12 tipo-usuario">
                                <div class="input-group">
                                    <input type="checkbox" data-toggle="toggle" data-on="Admin" data-off="Usuario" data-size="mini" data-onstyle="success" data-offstyle="danger" name="admin" id="admin" value="1">
                                </div>
                            </div> -->
                        <div class="form-group-input">
                            <label for="password">Mi contraseña</label>
                            <div class="input-group">
                                <input type="Password" name="password" id="password" class="form-control" required value="<?php echo $passUser ?>" />
                                <div class="input-group-prepend">
                                    <button id="show_password" class="btn btn-secondary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-md-4 col-sm-12 my-1">
                            <label class="ml-5 mb-2">Fecha Actualización <small> *Llenado en automatico</small></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 my-1">
                            <label class="ml-5 mb-2">Rol de Acceso</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php if ($admin == 1) {
                                                                                                                                                                echo 'Administrador';
                                                                                                                                                            } else {
                                                                                                                                                                echo 'Usuario';
                                                                                                                                                            } ?>" disabled readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-footer">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 align-self-center">
                            <buttom type="button" id="btnUpdatePassUser" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                        </div>
                        <div class="col-md-2 col-sm-12 align-self-center">
                            <a id="btnCerrarModal" data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
                        </div>
                        <a id="cerrar" href="../../config/cerrar-sesion.php" class="btn btn-secondary btn-block"><i class="fa-solid fa-xmark"></i> Cerrar</a>
                        <br>
                        <div class="col-md-12 col-sm-12 align-self-center mt-2">
                            <div id="respuestaUpdatePassUser"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #cerrar {
        display: none;
    }

    /* Boton tipo usuario */
    /* .tipo-usuario {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-left: 5%;
    margin-top: 10px;
    height: 25%;
    width: auto;
} */
</style>
<script>
    $('#btnUpdatePassUser').click(function() {
        $.ajax({
                url: '../update/updatePerfil.php',
                type: 'POST',
                data: $('#formUpdatePassUser').serialize(),
            })
            .done(function(res) {
                $('#respuestaUpdatePassUser').html(res)
            })
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdatePassUser").on('click', function() {
        $("#btnUpdatePassUser").css('visibility', 'hidden');
        $("#btnCerrarModal").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdatePassUser").css('visibility', 'visible');
            $("#btnCerrarModal").css('visibility', 'visible');
        }, 300000);
    });

    $(document).ready(function() {
        $('#btnUpdatePassUser').on('click', function() {
            $('#cerrar').toggle('slow');
        });
    });

    function mostrarPassword() {
        var cambio = document.getElementById("password");
        if (cambio.type == "password") {
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }
    $(document).ready(function() {
        //CheckBox mostrar contraseña
        $('#ShowPassword').click(function() {
            $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });
</script>
<script>
    //  iniciar inputMask 
    $(document).ready(function() {
        $(":input").inputmask();
    });
</script>