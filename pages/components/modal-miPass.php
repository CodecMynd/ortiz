<!-- Modal -->
<div class="modal fade" id="modalMiPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cambiar Acceso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../update/updatePerfil.php" method="POST">
                <div class="modal-body">
                    <div class="input-group form-floating mb-3">
                        <input name="usuario" id="usuario" type="text" class="form-control" id="floatingInput" placeholder="Ej. Juan" required pattern="[A-Za-z0-9 _-]{1,32}">
                        <label for="floatingInput">Usuario</label>
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <div class="form-group-input">
                        <label for="password">Mi contraseña</label>
                        <div class="input-group">
                            <input type="Password" name="password" id="password" class="form-control" required value="<?php echo $pass ?>" />
                            <div class="input-group-prepend">
                                <button id="show_password" class="btn btn-secondary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-secondary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // ocultar password
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