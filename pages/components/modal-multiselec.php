<!-- Modal Select multiple Permisos -->
<!-- JS y CSS Multiselect -->
<script src="../../plugins/multiselectbox/jquery.lwMultiSelect.js"></script>
<link rel="stylesheet" href="../../plugins/multiselectbox/jquery.lwMultiSelect.css" />

<!-- Modal -->
<div class="modal fade" id="modalPermisos">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="formNuevoUsuario">
                <div class="modal-header text-center border-nav">
                    <img class="img-fluid img-thumbnail rounded float-left rounded-circle" src="../../src/img/logos/logo.png" alt="logo jsolAutomotriz" width="10%">
                    <h3 class="modal-title w-100 mt-3">Asignar permisos a usuario</h3>
                </div>
                <div class="modal-body mx-1 my-1">
                    <div class="card card-secondary card-outline border-card" style="-webkit-box-shadow: -4px 6px 16px 6px rgba(0, 0, 0, 0.86);
                    box-shadow: -4px 6px 16px 6px rgba(0, 0, 0, 0.86);">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-list-check"></i></span>
                                        </div>
                                        <input name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)"  required data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                        <label for="floatingInput" class="pl-5">Módulos</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 my-1">
                                    <div class="input-group form-floating mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                                        </div>
                                        <input name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)"  required  data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                        <label for="floatingInput" class="pl-5">Botones</label>
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
<script>
    $(document).ready(function() {

        $('#city').lwMultiSelect();

        $('.action').change(function() {
            if ($(this).val() != '') {
                var action = $(this).attr("id");
                var query = $(this).val();
                var result = '';
                if (action == 'country') {
                    result = 'state';
                } else {
                    result = 'city';
                }
                $.ajax({
                    url: 'fetch.php',
                    method: "POST",
                    data: {
                        action: action,
                        query: query
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                        if (result == 'city') {
                            $('#city').data('plugin_lwMultiSelect').updateList();
                        }
                    }
                })
            }
        });

        $('#insert_data').on('submit', function(event) {
            event.preventDefault();
            if ($('#country').val() == '') {
                alert("Please Select Country");
                return false;
            } else if ($('#state').val() == '') {
                alert("Please Select State");
                return false;
            } else if ($('#city').val() == '') {
                alert("Please Select City");
                return false;
            } else {
                $('#hidden_city').val($('#city').val());
                $('#action').attr('disabled', 'disabled');
                var form_data = $(this).serialize();
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: form_data,
                    success: function(data) {
                        $('#action').attr("disabled", "disabled");
                        if (data == 'done') {
                            $('#city').html('');
                            $('#city').data('plugin_lwMultiSelect').updateList();
                            $('#city').data('plugin_lwMultiSelect').removeAll();
                            $('#insert_data')[0].reset();
                            alert('Data Inserted');
                        }
                    }
                });
            }
        });

    });
</script>

<!-- /Modal Select multiple Permisos -->