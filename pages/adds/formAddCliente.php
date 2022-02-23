<?php
require '../components/head-main.php';
?>
<title>2.2.1 Registro de Cliente | <?php echo $nomComp ?></title>
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
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="float-left m-0">2.2.1 Registro de Cliente </h1>
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
                        <div class="col-11">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Todos los campos son obligatorios</h3>
                                </div>
                                <?php
                                $cont = 0;
                                $query = "SELECT id_cliente, nombres, aPaternoCliente, aMaternoCliente, tel1, tel2, cel, status FROM clientes ORDER BY nombres DESC";
                                $resultadoClientes = mysqli_query($conexion, $query);
                                ?>
                                <form id="formNuevoCliente" autocomplete="off">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-12 my-1 form-group">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input autofocus name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre(s) Cliente" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                                    <label for="floatingInput" class="pl-5">Nombre(s) Cliente</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aPaternoCliente" id="aPaternoCliente" type="text" class="form-control" placeholder="Apellido Paterno" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">Apellido Paterno Cliente </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aMaternoCliente" id="aMaternoCliente" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">Apellido Materno Cliente</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-road"></i></span>
                                                    </div>
                                                    <input name="calle" id="calle" type="text" class="form-control" placeholder="Calle y Número Ext. Int." required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres">
                                                    <label for="floatingInput" class="pl-5">Calle y Número Ext. Int. </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                                    </div>
                                                    <input type="text" id="colonia" name="colonia" class="form-control" placeholder="Colonia" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" />
                                                    <label for="floatingInput" class="pl-5">Colonia</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3" id="ciudad">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-city"></i></span>
                                                    </div>
                                                    <input name="ciudad" id="ciudad" type="text" class="form-control" placeholder="Telefono" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" />
                                                    <label for="floatingInput" class="pl-5">Ciudad </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12">
                                                <div class="form-group">
                                                    <label>Estado</label>
                                                    <div class="input-group"></div>
                                                    <span data-toggle="tooltip" title="Estado" data-placement="bottom">
                                                        <select name="estado" id="estado" class="form-control" style="width: 100%;">
                                                            <option disabled selected>Seleccione una opción</option>
                                                            <option disabled>___________________________</option>
                                                            <option value="Aguascalientes">Aguascalientes</option>
                                                            <option value="Baja California">Baja California</option>
                                                            <option value="Baja California Sur">Baja California Sur</option>
                                                            <option value="Campeche">Campeche</option>
                                                            <option value="Coahuila">Coahuila</option>
                                                            <option value="Colima">Colima</option>
                                                            <option value="Chiapas">Chiapas</option>
                                                            <option value="Chihuahua">Chihuahua</option>
                                                            <option value="CDMX">CDMX</option>
                                                            <option value="Durango">Durango</option>
                                                            <option value="Guanajuato">Guanajuato</option>
                                                            <option value="Guerrero">Guerrero</option>
                                                            <option value="Hidalgo">Hidalgo</option>
                                                            <option value="Jalisco">Jalisco</option>
                                                            <option value="México">México</option>
                                                            <option value="Michoacán ">Michoacán </option>
                                                            <option value="Morelos">Morelos</option>
                                                            <option value="Nayarit">Nayarit</option>
                                                            <option value="Nuevo León">Nuevo León </option>
                                                            <option value="Oaxaca">Oaxaca</option>
                                                            <option value="Puebla">Puebla</option>
                                                            <option value="Querétaro">Querétaro</option>
                                                            <option value="Quintana roo">Quintana Roo</option>
                                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                                            <option value="Sinaloa">Sinaloa</option>
                                                            <option value="Sonora">Sonora</option>
                                                            <option value="Tabasco">Tabasco</option>
                                                            <option value="Tamaulipas">Tamaulipas</option>
                                                            <option value="Tlaxcala">Tlaxcala</option>
                                                            <option value="Veracruz">Veracruz</option>
                                                            <option value="Yucatán">Yucatán</option>
                                                            <option value="Zacatecas">Zacatecas</option>
                                                            <option value="Extranjero">Extranjero</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                                    </div>
                                                    <input name="tel1" id="tel1" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">Teléfono 1 </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                                    </div>
                                                    <input name="tel2" id="tel2" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">Teléfono 2 </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                                    </div>
                                                    <input name="cel" id="cel" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'">
                                                    <label for="floatingInput" class="pl-5">Celular </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                                    </div>
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="Correo" data-inputmask="'alias': 'email'" />
                                                    <label for="floatingInput" class="pl-5">Email <small> *Ej. prueba@prueba.com</small> </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 my-1">
                                                <label for="aclaraObser">Observaciones <small>*campo no requerido</small></label>
                                                <div class="form-group-input">
                                                    <span data-toggle="tooltip" title="max. 200 caracteres">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-comments"></i></span>
                                                            </div>
                                                            <textarea name="observacion" id="observacion" class="form-control" rows="2" placeholder="Agrega alguna breve observación" maxlength="200"></textarea>
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
                                                <buttom type="submit" id="btnNuevoCliente" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoCliente"></div>
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

</html>