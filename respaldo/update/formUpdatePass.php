<?php
require '../components/head-main.php';
?>
<title>1.1.2 Asignar Contraseña | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">1.1.2 Asignar Contraseña</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <!-- consulta sql -->
            <?php
            $id_pass = $_GET['id'];
            $query = "SELECT * FROM usuarios WHERE id_usuario = $id_pass";
            $respuesta = mysqli_query($conexion, $query);
            $rowPass = $respuesta->fetch_assoc();
            ?>
            <!-- Form editar usuario -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuario seleccionado para editar contraseña</h3>
                                    <small class="float-right">*Ultima modificación: <?php echo $rowPass['fecha_mod'] ?></small>
                                </div>

                                <form id="formUpdatePass" autocomplete="off">
                                    <div class="card-body">
                                        <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_pass ?>">
                                        <div class="row justify-content-center">
                                            <div class="col-md-5 col-sm-12 my-1">
                                                <label class="pl-5">Usuario</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                                    </div>
                                                    <input name="usuarioPass" id="usuarioPass" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $rowPass['usuario'] ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                                    </div>
                                                    <input autofocus name="pass" id="pass" type="text" class="form-control" placeholder="pass" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres">
                                                    <label for="floatingInput" class="pl-5">Nueva Contraseña</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 my-1">
                                                <input type="checkbox" id="check" onclick="test()"> Restaurar<br>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2"> Fecha Actualización <small>*Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista editor<small> *El que modifica</small></label>
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
                                                <buttom type="button" id="btnUpdatePass" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdatePass"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Form editar usuario -->
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    require '../components/scripts-main.php';
    ?>
</body>

</html>