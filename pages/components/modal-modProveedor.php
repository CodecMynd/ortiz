<?php
require '../components/head-main.php';
?>
<div class="modal fade" id="modal-modProveedor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    1.12.2 Editar Proveedor
                </h5>
            </div>
            <?php
            $id_proveedor = $_REQUEST['id_proveedor'];
            $query = "SELECT id_proveedor, nomProvee, calle, 
                colonia, ciudad, estado, cp, email, movil1, movil2, 
                tel1, tel2, servicio, borrado, fecha_creacion, id_capR
                FROM proveedores
                WHERE id_proveedor = $id_proveedor";
            $resultado = mysqli_query($conexion, $query);
            $row = $resultado->fetch_assoc();

            ?>
            <div class="modal-body text-center">
                <form id="formUpdateProvee" autocomplete="off">
                    <input type="hidden" id="id_proveedor" name="id_proveedor" value="<?php echo $row['id_proveedor'] ?>">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-5 col-sm-12 my-1 form-group">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-truck-field"></i></span>
                                    </div>
                                    <input autofocus name="nomProvee" id="nomProvee" type="text" class="form-control" placeholder="Nombre Proveedor" required maxlength="60" data-toggle="tooltip" data-placement="bottom" title="Max. 60 caracteres" value="<?php echo (empty($row['nomProvee'])) ? 'Sin Registro' : $row['nomProvee'] ?>">
                                    <label for="floatingInput" class="pl-5">*Nombre Proveedor <small>*requerido</small></label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-street-view"></i></span>
                                    </div>
                                    <input name="calle" id="calle" type="text" class="form-control" placeholder="Nombre Calle, Número Interior / Exterior" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Nombre Calle, Número Interior / Exterior" value="<?php echo (empty($row['calle'])) ? 'Sin Registro' : $row['calle'] ?>">
                                    <label for="floatingInput" class="pl-5">Calle</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-map-location"></i></span>
                                    </div>
                                    <input name="colonia" id="colonia" type="text" class="form-control" placeholder="Colonia" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo (empty($row['colonia'])) ? 'Sin Registro' : $row['colonia'] ?>">
                                    <label for="floatingInput" class="pl-5">Colonia</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                                    </div>
                                    <input name="ciudad" id="ciudad" type="text" class="form-control" placeholder="Ciudad" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo (empty($row['ciudad'])) ? 'Sin Registro' : $row['ciudad'] ?>">
                                    <label for="floatingInput" class="pl-5">Ciudad</label>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-12">
                                <div class="input-group">
                                    <label for='color' class='pl-5 parpadea'>*Estado</label>
                                    <div class="input-group"></div>
                                    <span data-toggle="tooltip" title="Estado">
                                        <select name="estado" id="estado" class="form-control" style="width: 100%;">
                                            <option value="<?php echo (empty($row['estado'])) ? 'Sin Registro' : $row['estado'] ?>"><?php echo (empty($row['estado'])) ? 'Sin Registro' : $row['estado'] ?></option>
                                            <option disabled>___________________________</option>
                                            <option Value="Aguascalientes">Aguascalientes</Option>
                                            <option Value="Baja California">Baja California</Option>
                                            <option Value="Baja California Sur">Baja California Sur</Option>
                                            <option Value="Campeche">Campeche</Option>
                                            <option Value="Coahuila">Coahuila</Option>
                                            <option Value="Colima">Colima</Option>
                                            <option Value="Chiapas">Chiapas</Option>
                                            <option Value="Chihuahua">Chihuahua</Option>
                                            <option Value="Ciudad De México">Ciudad De México</Option>
                                            <option Value="Durango">Durango</Option>
                                            <option Value="Guanajuato">Guanajuato</Option>
                                            <option Value="Guerrero">Guerrero</Option>
                                            <option Value="Hidalgo">Hidalgo</Option>
                                            <option Value="Jalisco">Jalisco</Option>
                                            <option Value="México">México</Option>
                                            <option Value="Michoacán">Michoacán</Option>
                                            <option Value="Morelos">Morelos</Option>
                                            <option Value="Nayarit">Nayarit</Option>
                                            <option Value="Nuevo León">Nuevo León</Option>
                                            <option Value="Oaxaca">Oaxaca</Option>
                                            <option Value="Puebla">Puebla</Option>
                                            <option Value="Querétaro">Querétaro</Option>
                                            <option Value="Quintana Roo">Quintana Roo</Option>
                                            <option Value="San Luis Potosí">San Luis Potosí</Option>
                                            <option Value="Sinaloa">Sinaloa</Option>
                                            <option Value="Sonora">Sonora</Option>
                                            <option Value="Tabasco">Tabasco</Option>
                                            <option Value="Tamaulipas">Tamaulipas</Option>
                                            <option Value="Tlaxcala">Tlaxcala</Option>
                                            <option Value="Veracruz">Veracruz</Option>
                                            <option Value="Yucatán">Yucatán</Option>
                                            <option Value="Zacatecas">Zacatecas</Option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                    </div>
                                    <input type="text" id="cp" name="cp" class="form-control" placeholder="Código Postal" data-inputmask="'mask': '99999'" value="<?php echo (empty($row['cp'])) ? 'Sin Registro' : $row['cp'] ?>">
                                    <label for="floatingInput" class="pl-5">Código Postal</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                    </div>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Correo" data-inputmask="'alias': 'email'" value="<?php echo $row['email'] ?>" />
                                    <label for="floatingInput" class="pl-5">Email <small> *Ej. prueba@prueba.com</small> </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                    </div>
                                    <input name="movil1" id="movil1" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'" value="<?php echo (empty($row['movil1'])) ? 'Sin Registro' : $row['movil1'] ?>">
                                    <label for="floatingInput" class="pl-5">*Teléfono Movil 1 </small></label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                    </div>
                                    <input name="movil2" id="movil2" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'" value="<?php echo (empty($row['movil2'])) ? 'Sin Registro' : $row['movil2'] ?>">
                                    <label for="floatingInput" class="pl-5">Teléfono Movil 2<small>* 10 dígitos</small></label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-phone-flip"></i></span>
                                    </div>
                                    <input name="tel1" id="tel1" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'" value="<?php echo (empty($row['tel1'])) ? 'Sin Registro' : $row['tel1'] ?>">
                                    <label for="floatingInput" class="pl-5">Teléfono Oficina 1<small>* 10 dígitos</small></label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 my-1">
                                <div class="input-group form-floating mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-phone-flip"></i></span>
                                    </div>
                                    <input name="tel2" id="tel2" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'" value="<?php echo (empty($row['tel2'])) ? 'Sin Registro' : $row['tel2'] ?>">
                                    <label for="floatingInput" class="pl-5">Teléfono Oficina 2<small>* 10 dígitos</small></label>
                                </div>
                            </div>
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='ml-5 mb-2'>Servicio que Suministra</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                            </div>
                                            <textarea name='servicio' id='servicio' class='form-control' rows='2' placeholder='Detalla el servicio o mercancia que suministra a la empresa - max. 200 caracteres' maxlength='200' required><?php echo (empty($row['servicio'])) ? 'Sin Registro' : $row['servicio'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Fecha<small> *modificación</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 my-1">
                                <label class="ml-5 mb-2">Capturista<small> *El que modifica</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nomComp ?>" disabled readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-footer">
                        <div class="row">
                            <div class="col-md-2 col-sm-12 align-self-center">
                                <buttom type="button" id="btnUpdateProvee" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                            </div>
                            <div class="col-md-2 col-sm-12 align-self-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                            </div>
                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                <div id="respuestaUpdateProvee"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //  iniciar inputMask 
    $(document).ready(function() {
        $(":input").inputmask();
    });

    // 1.12.2 Editar Proveedor
    $('#btnUpdateProvee').click(function() {
        var param = $('#formUpdateProvee').serialize();
        $.ajax({
                url: '../update/updateProveedor.php',
                cache: false,
                type: 'POST',
                data: param,

                success: function(vs) {
                    setTimeout(function() {
                        $('#modal-modProveedor').modal('hide');
                    }, 1000);

                    tableProveedores.ajax.reload(null, false)
                }
            })
            .done(function(res) {
                $('#respuestaUpdateProvee').html(res)
            })
    });

    //Ocultar boton por 10 segundos para evitar el doble submit
    $("#btnUpdateProvee").on('click', function() {
        $("#btnUpdateProvee").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateProvee").css('visibility', 'visible');
        }, 5000);
    });
</script>