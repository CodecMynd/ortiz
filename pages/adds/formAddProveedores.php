<?php
require '../components/head-main.php';
?>
<title>1.12.1 Nuevo Proveedor | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-1">
                        <div class="col-sm-6">
                            <h1 class="float-left m-0">1.12.1 Nuevo Proveedor</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <!-- Form editar usuario -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Campos obligatorios</h3>
                                </div>
                                <form id="formNuevoProvee" autocomplete="off">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-5 col-sm-12 my-1 form-group">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-truck-field"></i></span>
                                                    </div>
                                                    <input autofocus name="nomProvee" id="nomProvee" type="text" class="form-control" placeholder="Nombre Proveedor" required maxlength="60" data-toggle="tooltip" data-placement="bottom" title="Max. 60 caracteres">
                                                    <label for="floatingInput" class="pl-5">*Nombre Proveedor <small>*requerido</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-street-view"></i></span>
                                                    </div>
                                                    <input name="calle" id="calle" type="text" class="form-control" placeholder="Nombre Calle, Número Interior / Exterior" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Nombre Calle, Número Interior / Exterior">
                                                    <label for="floatingInput" class="pl-5">Calle</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-map-location"></i></span>
                                                    </div>
                                                    <input name="colonia" id="colonia" type="text" class="form-control" placeholder="Colonia" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">Colonia</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                                                    </div>
                                                    <input name="ciudad" id="ciudad" type="text" class="form-control" placeholder="Ciudad" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">Ciudad</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-sm-12">
                                                <div class="input-group">
                                                    <label for='color' class='pl-5 parpadea'>*Estado</label>
                                                    <div class="input-group"></div>
                                                    <span data-toggle="tooltip" title="Estado">
                                                        <select name="estado" id="estado" class="form-control" style="width: 100%;">
                                                            <option disabled>Seleccione una opción</option>
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
                                                            <option selected Value="Puebla">Puebla</Option>
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
                                                    <input type="text" id="cp" name="cp" class="form-control" placeholder="Código Postal" data-inputmask="'mask': '99999'" />
                                                    <label for="floatingInput" class="pl-5">Código Postal</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                                    </div>
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="Correo" data-inputmask="'alias': 'email'" />
                                                    <label for="floatingInput" class="pl-5">Email <small> *Ej. prueba@prueba.com</small> </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                                    </div>
                                                    <input name="movil1" id="movil1" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">*Teléfono Movil 1 <small>*requerido - 10 dígitos</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                                    </div>
                                                    <input name="movil2" id="movil2" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">Teléfono Movil 2<small>* 10 dígitos</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-phone-flip"></i></span>
                                                    </div>
                                                    <input name="tel1" id="tel1" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">Teléfono Oficina 1<small>* 10 dígitos</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-phone-flip"></i></span>
                                                    </div>
                                                    <input name="tel2" id="tel2" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
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
                                                            <textarea name='servicio' id='servicio' class='form-control' rows='2' placeholder='Detalla el servicio o mercancia que suministra a la empresa - max. 200 caracteres' maxlength='200' required></textarea>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha<small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista<small> *El que registra</small></label>
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
                                                <buttom type="button" id="btnNuevoProvee" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoProvee"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principal
    require '../components/scripts-main.php';
    ?>
</body>
<script>
    //  iniciar inputMask 
    $(document).ready(function() {
        $(":input").inputmask();
    });
</script>

<script>
    // 4.1.2 Eliminar Link de Desarmado
$('#btnNuevoProvee').click(function () {
    var param = $('#formNuevoProvee').serialize();
    $.ajax({
            url: 'addNuevoProveedor.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoProvee')[0].reset();
            }
        })
        .done(function (res) {
            $('#respuestaNuevoProvee').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnNuevoProvee").on('click', function () {
    $("#btnNuevoProvee").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoProvee").css('visibility', 'visible');
    }, 10000);
});
</script>

</html>