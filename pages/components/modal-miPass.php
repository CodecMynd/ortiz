<div class="modal fade modalMiPass<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Cambiar acceso:
                </h5>
            </div>

            <form id="formUpdatePassUser" autocomplete="off">
                <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id ?>">
                <div class="modal-body d-block">
                    <div class="input-group form-floating mb-3">
                        <input name="usuario" id="usuario" type="text" class="form-control" id="floatingInput" value='<?php echo $usuario ?>'>
                        <label for="floatingInput">Usuario</label>
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="form-group-input">
                        <label for="password">Mi contraseña</label>
                        <div class="input-group">
                            <input type="Password" name="password" id="password" class="form-control" required value="<?php echo $passUser ?>" />
                            <div class="input-group-prepend">
                                <button id="show_password" class="btn btn-secondary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <buttom type="submit" id="btnUpdatePassUser" class="btn btn-secondary btn-block btnMiPass" data-toggle="tooltip" data-placement="bottom" title="Cambiar acceso"><i class="fa-solid fa-edit"></i> Modificar</buttom>
                    <a id="btnCerrarModal" data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
                    <a id="cerrar" href="../../config/cerrar-sesion.php" class="btn btn-secondary btn-block"><i class="fa-solid fa-xmark"></i> Cerrar</a>
                </div>
                <div class="col-md-12 col-sm-12 align-self-center mt-2">
                    <div id="respuestaUpdatePassUser"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #cerrar {
        display: none;
    }
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
</script>