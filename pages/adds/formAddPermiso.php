<?php
require '../components/head-main.php';
?>
<title>Nuevo Permiso | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
    .cuadro {
        border-radius: 25px;
        border: 1px solid #868788;
        margin:10px 20px;
    }
</style>
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
                            <h1 class="float-left m-0">Crear Permiso</h1>
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
                        <div class="col-10">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Todos los campos son obligatorios</h3>
                                </div>

                                <form id="formNuevoPermiso" autocomplete="off">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 cuadro">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 my-1">
                                                        <div class="input-group">
                                                            <?php
                                                            $sql = "SELECT modulo  FROM modulos GROUP BY modulo  ORDER BY modulo DESC";
                                                            $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                                            ?>
                                                            <label for="modulo" class="pl-5">Selecciona para copiar o crea nuevo</label>
                                                            <select id="cargaModulo" class="form-control" title="Selecciona un Modulo de la lista para copiarlo" style="width: 100%;" ata-toggle="tooltip" data-placement="bottom" title="Carga tu seleccion">
                                                                <option selected disabled>Selecciona un Módulo</option>
                                                                <option disabled>_________________</option>
                                                                <?php while ($rowModulo = $result->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $rowModulo['modulo'] ?>">
                                                                        <?php echo $rowModulo['modulo'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 my-1">
                                                        <div class="input-group form-floating mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                                                            </div>
                                                            <input name="modulo" id="modulo" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Por favor ingresa por orden de numeración de lista consecutiva">
                                                            <label for="floatingInput" class="pl-5"> Nombre del Modulo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 cuadro">
                                                <div class="row">
                                                <div class="col-md-12 col-sm-12 my-1">
                                                        <div class="input-group">
                                                            <?php
                                                            $sql = "SELECT boton  FROM modulos GROUP BY boton  ORDER BY boton DESC";
                                                            $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                                            ?>
                                                            <label for="boton" class="pl-5">Solo para guía de numeración</label>
                                                            <select id="cargaBoton" class="form-control"style="width: 100%;">
                                                                <option selected disabled>Selecciona un Botón</option>
                                                                <option disabled>_________________</option>
                                                                <?php while ($rowModulo = $result->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $rowModulo['boton'] ?>">
                                                                        <?php echo $rowModulo['boton'] ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 my-1">
                                                        <div class="input-group form-floating mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                                                            </div>
                                                            <input name="boton" id="boton" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Por favor ingresa por orden de numeración de lista consecutiva">
                                                            <label for="floatingInput" class="pl-5"> Nombre del Botón</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="permiso" id="permiso" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Por favor ingresa por orden de numeración de lista consecutiva">
                                                    <label for="floatingInput" class="pl-5"> Nombre del Permiso</label>
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
                                                <buttom type="submit" id="btnNuevoPermiso" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>

                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoPermiso"></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function() {
            $(document).on('change', '#cargaModulo', function() {
                var value = $(this).val();
                $('#modulo').val(value);
            });
        });
        $(function() {
            $(document).on('change', '#cargaBoton', function() {
                var value = $(this).val();
                $('#boton').val(value);
            });
        });
    </script>


</html>