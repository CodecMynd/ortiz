<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.3 Modificar Proyecto | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">2.3.3 Modificar Proyecto </h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modificar Cliente del Proyecto -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-secondary card-outline">
                        <div class="card-header border-nav">
                            <h3 class="card-title">Modificar Cliente del Proyecto</h3>
                        </div>
                        <?php
                        $id_proyecto = $_GET['id'];
                        $query = "SELECT * FROM proyectos WHERE id_proyecto = $id_proyecto";
                        $respuesta = mysqli_query($conexion, $query);
                        $row = $respuesta->fetch_assoc();
                        $row['id_proyecto'];

                        $id_cliente = $row['id_cliente'];
                        $query = "SELECT nombres, aPaternoCliente, aMaternoCliente FROM clientes WHERE id_cliente = $id_cliente";
                        $respuesta = mysqli_query($conexion, $query);
                        $rowCliente = $respuesta->fetch_assoc();
                        $nomClienteCompleto = $rowCliente['nombres'] . ' ' . $rowCliente['aPaternoCliente'] . ' ' . $rowCliente['aMaternoCliente'];

                        $id_vehiculo = $row['id_vehiculo'];
                        $query = "SELECT M.marca, Mo.modelo, A.anio, V.placa, C.color, V.id_vehiculo, V.id_marca, V.id_anio, V.id_color
                        FROM vehiculos V 
                        INNER JOIN marcas M ON V.id_marca = M.id_marca 
                        INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                        INNER JOIN anios A ON V.id_anio = A.id_anio 
                        INNER JOIN colores C on V.id_color = C.id_color WHERE id_vehiculo = $id_vehiculo";


                        $respuesta = mysqli_query($conexion, $query);
                        $rowV = $respuesta->fetch_assoc();

                        $vehiculo = $rowV['marca'] . ' | ' . $rowV['modelo'] . ' | ' . $rowV['anio'] . ' | ' . $rowV['placa'] . ' | ' . $rowV['color'];
                        ?>
                        <section class="content">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <div class="row justify-content-center">
                                        <div class="col-md-2 col-sm-4 my-4">
                                            <div class="card card-secondary card-outline" style="height: 90%;">
                                                <div class="card-header">
                                                    <h3 class="card-title">Actualizar Cliente</h3>
                                                </div>
                                                <div class="card-body d-flex justify-content-center align-items-center">
                                                    <div class="btn-group" role="group">
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                <div class="input-group form-group">
                                                                    <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalUpdateSelectCliente">
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
                                                    <h3 class="card-title">Nombre del Cliente a Modificarse: <strong><?php echo $nomClienteCompleto ?></strong> </h3>
                                                </div>
                                                <form id='formUpdateCargarCliente'>
                                                    <input name='id_proyecto' id='id_proyecto' type='hidden' value='<?php echo $id_proyecto ?>'>
                                                    <div class="col-md-12">
                                                        <div id="cargarUpdateClienteTabla"></div>
                                                    </div>
                                                </form>
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
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            <!-- Modificar Vehiculo del Proyecto -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-secondary card-outline">
                        <div class="card-header border-nav">
                            <h3 class="card-title">Modificar Vehículo del Proyecto</h3>
                        </div>
                        <section class="content">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <div class="row justify-content-center">
                                        <div class="col-md-2 col-sm-4 my-4">
                                            <div class="card card-secondary card-outline" style="height: 90%;">
                                                <div class="card-header">
                                                    <h3 class="card-title">Actualizar Vehículo</h3>
                                                </div>
                                                <div class="card-body d-flex justify-content-center align-items-center">
                                                    <div class="btn-group" role="group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group form-group">
                                                                    <button class="btn btn-modal-selector" style="height:120px;" data-toggle="modal" data-target="#modalUpdateSelectVehiculo">
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
                                                    <h3 class="card-title">Datos del Vehículo a Modificarse: <strong><?php echo $vehiculo ?></strong></h3>
                                                </div>
                                                <form id='formUpdateCargarVehiculo'>
                                                    <input name='id_proyecto' id='id_proyecto' type='hidden' value='<?php echo $id_proyecto ?>'>
                                                    <div class="col-md-12">
                                                        <div id="cargarUpdateVehiculoTabla"></div>
                                                    </div>
                                                </form>
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
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            <!-- Modificar Generales del Proyecto -->
            <section class="content mb-2">
                <div class="container-fluid">
                    <div class="card card-secondary card-outline">
                        <div class="card-header border-nav">
                            <h3 class="card-title">Modificar Datos Generales del Proyecto</h3>
                        </div>
                        <section class="content">
                            <form id="formUpdateProyectoDatosGral">
                                <div class="container-fluid">
                                    <div class="col-md-12">
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
                                                        <input name='id_proyecto' id='id_proyecto' type='hidden' value='<?php echo $id_proyecto ?>'>
                                                        <div class="col-md-2 col-sm-12 my-1">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa-solid fa-arrow-down-1-9"></i></span>
                                                                </div>
                                                                <input name="nProyecto" id="nProyecto" type="text" class="form-control" placeholder="Número de proyecto " required maxlength="15" data-toggle="tooltip" data-placement="bottom" title="Número de proyecto" value="<?php echo $row['nProyecto']; ?>" readonly>
                                                                <label for="floatingInput" class="pl-5">No. de Proyecto </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 my-1 form-group">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa-solid fa-list-ol"></i></span>
                                                                </div>
                                                                <input name="nOrden" id="nOrden" type="number" class="form-control" placeholder="Número de orden" required maxlength="15" data-toggle="tooltip" data-placement="bottom" title="Número de orden" value="<?php echo $row['nOrden'] ?>" >
                                                                <label for="floatingInput" class="pl-5">*No. de Orden</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12">
                                                            <div class="form-group">
                                                                <label style="padding-left: 20px;">*Tipo de reparación</label>
                                                                <div class="input-group"></div>
                                                                <span data-toggle="tooltip" title="Tipo de reparación a realizar" data-placement="bottom">
                                                                    <select name="tipoReparacion" id="tipoReparacion" class="form-control" style="width: 100%;">
                                                                        <option value="<?php echo $row['tipoReparacion']; ?>"><?php echo $row['tipoReparacion'] ?></option>
                                                                        <option disabled>___________</option>
                                                                        <option value="N">N</option>
                                                                        <option value="GR">GR</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 my-1">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa-solid fa-gauge-high"></i></span>
                                                                </div>
                                                                <input name="km" id="km" type="text" class="form-control" placeholder="Kilometraje" required maxlength="12" data-toggle="tooltip" data-placement="bottom" title="Redondea Kilometraje actual" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'suffix': ' km', 'placeholder': '0'" value="<?php echo $row['km']; ?>">
                                                                <label for="floatingInput" class="pl-5">*Kilometraje </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 my-1">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mt-2">
                                                                        <i class="fa-solid fa-money-bill-1-wave"></i>
                                                                    </span>
                                                                </div>
                                                                <input name="valorVenta" id="currency1" type="text" class="form-control" placeholder="Kilometraje" required maxlength="12" data-toggle="tooltip" data-placement="bottom" title="Ingresa valor venta" value="<?php echo $row['valorVenta']; ?>">
                                                                <label for="floatingInput" class="pl-5">*Valor venta inicial</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 my-1">
                                                            <div class="input-group form-floating mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text mt-2">
                                                                        <i class="fa-solid fa-money-bill-1-wave"></i>
                                                                    </span>
                                                                </div>
                                                                <input name="valorVenta" id="currency1" type="text" class="form-control" placeholder="Kilometraje" required maxlength="12" data-toggle="tooltip" data-placement="bottom" title="Ingresa valor venta" value="<?php echo $row['valorVenta']; ?>">
                                                                <label for="floatingInput" class="pl-5">*Valor venta inicial</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 my-1">
                                                            <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                                <label class="ml-5 mb-2">*Diagnostico</label>
                                                                <span data-toggle="tooltip" title="max. 200 caracteres">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa-solid fa-user-doctor"></i></span>
                                                                        </div>
                                                                        <textarea name="diagnostico" id="diagnostico" class="form-control" rows="4" placeholder="Agrega alguna breve observación de Diagnostico" maxlength="200"><?php echo $row['diagnostico']; ?></textarea>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 my-1">
                                                            <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                                <label class="ml-5 mb-2">*Descripción del servicio 1</label>
                                                                <span data-toggle="tooltip" title="max. 200 caracteres">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                                        </div>
                                                                        <textarea name="descripServ1" id="descripServ1" class="form-control" rows="4" placeholder="Agrega alguna breve Descripción del servicio" maxlength="200"><?php echo $row['descripServ1']; ?></textarea>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-12 my-1">
                                                            <div class="form-group-input" style="border: 1px solid #CED4DA;">
                                                                <label class="ml-5 mb-2">Descripción del servicio 2</label>
                                                                <span data-toggle="tooltip" title="max. 200 caracteres">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa-solid fa-toolbox"></i></span>
                                                                        </div>
                                                                        <textarea name="descripServ2" id="descripServ2" class="form-control" rows="4" placeholder="Agrega alguna breve Descripción del servicio" maxlength="200"><?php echo $row['descripServ2']; ?></textarea>
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
                                                            <buttom type="submit" id="btnUpdateProyectoDatosGral" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 align-self-center">
                                                            <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                        </div>
                                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                        <br>
                                                        <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                            <div id="respuestaUpdateProyectoDatosGral"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </section>
            <?php
            require '../components/footer.php';
            ?>
        </div>
        <?php
        // Scripts principales
        require '../components/scripts-main.php';
        // Scripts dataTables
        require '../components/scripts-dataTables.php';
        // Seleccionar Cliente
        require '../components/modal-updateSelectClientes.php';
        // Seleccionar Vehiculo
        require '../components/modal-updateSelectVehiculos.php';
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