<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.1 Registro de Proyecto | <?php echo $nomComp ?></title>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="m-0">2.3.1 Registro de Proyecto </h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registro Proyecto -->
            <form id="formNuevoProyecto">
                <div class="card-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <?php
                                    if ($regProyecto == 0) {
                                        echo "<div class='card card-secondary card-outline collapsed-card'>";
                                    } else {
                                        echo "<div class='card card-secondary card-outline'>";
                                    } ?>
                                    <div class="card-header border-nav">
                                        <h3 class="card-title">Registro nuevo Proyecto</h3>
                                        <div class="card-tools">
                                            <?php
                                            if ($regProyecto == 0) {
                                                echo ' <a type="button" id="regProyecto" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="left" title="2.3.1 Registro de Proyecto"><i class="fa-solid fa-eye-slash"></i>&nbsp;&nbsp; Registro de Proyecto</a>';
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-2 col-sm-4 my-4">
                                                <div class="card card-secondary card-outline " style="height: 90%;">
                                                    <div class="card-header">
                                                        <h3 class="card-title"><i class="fa-solid fa-magnifying-glass"></i> Buscar Cliente</h3>
                                                    </div>
                                                    <div class="card-body d-flex justify-content-center align-items-center">
                                                        <div class="btn-group" role="group">
                                                            <div class="row ">
                                                                <div class="col-md-12">
                                                                    <div class="input-group form-group">
                                                                        <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalSelectCliente">
                                                                            <i class="fa-solid fa-user-tie fa-3x"></i>
                                                                            <h6>Clientes</h6>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-12 my-4">
                                                <div class="card card-secondary card-outline" style="height: 90%;">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Datos del Cliente</h3>
                                                    </div>
                                                    <div id="cargarClienteTabla"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-2 col-sm-4 my-4">
                                                <div class="card card-secondary card-outline" style="height: 90%;">
                                                    <div class="card-header">
                                                        <h3 class="card-title"><i class="fa-solid fa-magnifying-glass"></i> Buscar Vehículo</h3>
                                                    </div>
                                                    <div class="card-body d-flex justify-content-center align-items-center">
                                                        <div class="btn-group" role="group">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="input-group form-group">
                                                                        <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalSelectVehiculo">
                                                                            <i class="fa-solid fa-car-crash fa-3x"></i>
                                                                            <h6>Vehículos</h6>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-sm-12 my-4">
                                                <div class="card card-secondary card-outline" style="height: 90%;">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Datos del Vehículo</h3>
                                                    </div>
                                                    <div id="cargarVehiculoTabla"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 col-sm-4 my-4">
                                                <div class="card card-secondary card-outline ">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Dato Generales</h3>
                                                        <div class="card-tools">
                                                            *Campos requeridos
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-3 col-sm-12 my-1">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend parpadea">
                                                                    <span class="input-group-text"><i class="fa-solid fa-arrow-down-1-9"></i></span>
                                                                </div>
                                                                <?php
                                                                $queryP = "SELECT MAX(id_nProyecto) + 1 FROM nproyectos";
                                                                $result = mysqli_query($conexion,  $queryP);
                                                                $row = mysqli_fetch_row($result);
                                                                ?>
                                                                <input name="nProyecto" id="nProyecto" type="text" class="form-control" placeholder="Número de proyecto " required maxlength="15" data-toggle="tooltip" data-placement="bottom" title="Número de proyecto" value="<?php echo $row[0]; ?>" readonly>
                                                                <label for="floatingInput" class="pl-5">*Núm. de Proyecto </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 my-1 form-group">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend parpadea">
                                                                    <span class="input-group-text"><i class="fa-solid fa-list-ol"></i></span>
                                                                </div>
                                                                <input name="nOrden" id="nOrden" type="number" class="form-control" placeholder="Número de orden" required maxlength="15" data-toggle="tooltip" data-placement="bottom" title="Número de orden">
                                                                <label for="floatingInput" class="pl-5">*Núm. de Orden</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12">
                                                            <div class="form-group">
                                                                <label style="padding-left: 20px;" class="parpadea">*Tipo de reparación</label>
                                                                <div class="input-group"></div>
                                                                <span data-toggle="tooltip" title="Tipo de reparación a realizar" data-placement="bottom">
                                                                    <select name="tipoReparacion" id="tipoReparacion" class="form-control" style="width: 100%;">
                                                                        <option disabled selected>Selecciona</option>
                                                                        <option disabled>___________</option>
                                                                        <option value="N">N</option>
                                                                        <option value="GR">GR</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-sm-12 my-1">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend parpadea">
                                                                    <span class="input-group-text"><i class="fa-solid fa-gauge-high"></i></span>
                                                                </div>
                                                                <input name="km" id="km" type="text" class="form-control" placeholder="Kilometraje" required maxlength="12" data-toggle="tooltip" data-placement="bottom" title="Redondea Kilometraje actual" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'suffix': ' km', 'placeholder': '0'">
                                                                <label for="floatingInput" class="pl-5">*Kilometraje </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 my-1">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend parpadea">
                                                                    <span class="input-group-text mt-2">
                                                                        <i class="fa-solid fa-money-bill-1-wave"></i>
                                                                    </span>
                                                                </div>
                                                                <input name="valorVenta" id="currency1" type="text" class="form-control" placeholder="Kilometraje" required maxlength="12" data-toggle="tooltip" data-placement="bottom" title="Ingresa valor venta">
                                                                <label for="floatingInput" class="pl-5">*Valor venta Inicial </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 my-1">
                                                            <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                                <label class="ml-5 mb-2">*Diagnostico</label>
                                                                <span data-toggle="tooltip" title="max. 200 caracteres">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend parpadea">
                                                                            <span class="input-group-text"><i class="fa-solid fa-user-doctor"></i></span>
                                                                        </div>
                                                                        <textarea name="diagnostico" id="diagnostico" class="form-control" rows="4" placeholder="Agrega alguna breve observación de Diagnostico" maxlength="200"></textarea>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 my-1">
                                                            <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                                <label class="ml-5 mb-2">*Descripción del servicio 1</label>
                                                                <span data-toggle="tooltip" title="max. 200 caracteres">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend parpadea">
                                                                            <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                                        </div>
                                                                        <textarea name="descripServ1" id="descripServ1" class="form-control" rows="4" placeholder="Agrega alguna breve Descripción del servicio" maxlength="200"></textarea>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 my-1">
                                                            <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                                <label class="ml-5 mb-2">Descripción del servicio 2</label>
                                                                <span data-toggle="tooltip" title="max. 200 caracteres">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend parpadea">
                                                                            <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                                        </div>
                                                                        <textarea name="descripServ2" id="descripServ2" class="form-control" rows="4" placeholder="Agrega alguna breve Descripción del servicio" maxlength="200"></textarea>
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
                                                            <buttom type="submit" id="btnNuevoProyecto" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 align-self-center">
                                                            <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                        </div>
                                                        <!-- <div class='col-md-3 col-sm-12 align-self-center'>
                                                            <a href='../admin/crudProyectos.php' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Ir a 2.3.2 Tabla Lista de Proyectos'><i class='fa-solid fa-arrow-right'></i> Ir a 2.3.2 Lista de Proyectos</a>
                                                        </div> -->
                                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                        <br>
                                                        <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                            <div id="respuestaNuevoProyecto"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
            <?php
            require '../components/footer.php';
            ?>
        </div>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../components/scripts-dataTables.php';
    // Seleccionar Cliente
    require '../components/modal-selectClientes.php';
    // Seleccionar Vehiculo
    require '../components/modal-selectVehiculos.php';
    ?>
    <!-- avisos -->
    <script src="../../src/js/toastr.js"></script>
    <script>
        //  iniciar inputMask 
        $(document).ready(function() {
            $(":input").inputmask();
        });

        $(document).ready(function() {
            $("#currency1").inputmask({
                alias: "currency",
                prefix: ''
            });
            $("#currency2").inputmask({
                alias: "currency",
                prefix: '₱ '
            });
            $("#currency3").inputmask({
                alias: "pesos"
            });
        });
    </script>

</body>

</html>