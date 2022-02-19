<?php
require '../components/head-main.php';
?>
<title>Edición de Usuario | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">Edición de Usuario</h1>
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
            $id = $_GET['id'];
            $query = "SELECT * FROM usuarios WHERE id_usuario = $id";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            ?>
                                                                                                                                                                                                                                          else echo ''; ?>
            <!-- Form editar usuario -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuario seleccionado para editar</h3>
                                    <small class="float-right">*Ultima modificación: <?php echo $row['fecha_mod'] ?></small>
                                </div>
                                <form id="formUpdateUsuario">
                                    <div class="card-body">
                                        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input autofocus name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $row['nombres'] ?>">
                                                    <label for="floatingInput" class="pl-5">Nombre(s) <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aPaterno" id="aPaterno" type="text" class="form-control" placeholder="Apellido Paterno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" value="<?php echo $row['aPaterno'] ?>">
                                                    <label for="floatingInput" class="pl-5">Apellido Paterno <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aMaterno" id="aMaterno" type="text" class="form-control" placeholder="Apellido Materno" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" value="<?php echo $row['aMaterno'] ?>">
                                                    <label for="floatingInput" class="pl-5">Apellido Materno <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                                    </div>
                                                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $row['usuario'] ?>" onkeyup="javascript:this.value=this.value.toLowerCase();">
                                                    <label for="floatingInput" class="pl-5">Usuario <small>*Campo a Editar</small></label>
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
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                                    </div>
                                                    <input name="tel" id="tel" type="text" class="form-control" placeholder="Telefono" data-inputmask="'mask' : '(999) 999-9999'" value="<?php echo $row['tel'] ?>">
                                                    <label for="floatingInput" class="pl-5">Teléfono <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 tipo-usuario">
                                                <div class="input-group">
                                                    <input type="checkbox" data-toggle="toggle" data-on="Admin" data-off="Usuario" data-size="mini" data-onstyle="success" data-offstyle="danger" name="admin" id="admin" value="1" <?php if ($row['admin'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha Actualización <small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
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
                                                <buttom type="button" id="btnUpdateUsuario" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>

                                            <!-- <button type="button" class="btn btn-primary">
                                            Coincidencias <span class="badge badge-light">9</span>
                                                <span class="sr-only">unread messages</span>
                                            </button> -->
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateUsuario"></div>
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
    // Scripts principales
    require '../components/scripts-main.php';
    ?>
    <script>
        //  iniciar inputMask 
        $(document).ready(function() {
            $(":input").inputmask();
        });
    </script>
</body>

</html>