<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>Edición de Usuario | <?php echo $usuario ?></title>

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
                            <h1 class="m-0">Formulario Edición de Usuario</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="panelAdmin.php"><i class="fa-solid fa-house-user"></i> Inicio</a></li>
                                <li class="breadcrumb-item active"><a href="#"><i class="fa-solid fa-table-columns"></i> Tabla Usuario</a></li>
                                <li class="breadcrumb-item active"><a href="../admin/crudUsuarios.php"><i class="fa-solid fa-table-columns"></i> Formuario Edición Usuario</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->

            <!-- Form editar usuario -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuario seleccionado para editar</h3>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $id = $_GET['id'];
                                $query = "SELECT * FROM usuarios WHERE id_usuario = $id";
                                $respuesta = mysqli_query($conexion, $query);
                                $row = $respuesta->fetch_assoc();
                                ?>
                                <form method="POST">
                                    <div class="card-body">
                                        <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id ?>">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                    </div>
                                                    <input name="nombres" id="nombres" type="text" class="form-control" placeholder="Nombre (s)" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $row['nombres'] ?>">
                                                    <label for="floatingInput" class="pl-5">Nombre(s) <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aPaterno" id="aPaterno" type="text" class="form-control" placeholder="Apellido Paterno" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" value="<?php echo $row['aPaterno'] ?>">
                                                    <label for="floatingInput" class="pl-5">Apellido Materno <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-group"></i></span>
                                                    </div>
                                                    <input name="aMaterno" id="aMaterno" type="text" class="form-control" placeholder="Apellido Materno" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Max. 40 caracteres" value="<?php echo $row['aMaterno'] ?>">
                                                    <label for="floatingInput" class="pl-5">Apellido Materno <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                                                    </div>
                                                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="usuario" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Max. 30 caracteres" value="<?php echo $row['usuario'] ?>">
                                                    <label for="floatingInput" class="pl-5">Usuario <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                                    </div>
                                                    <input name="email" id="email" type="email" class="form-control" placeholder="Correo" required maxlength="50" data-toggle="tooltip" data-placement="bottom" title="Max. 50 caracteres" value="<?php echo $row['email'] ?>">
                                                    <label for="floatingInput" class="pl-5">Email <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-mobile"></i></span>
                                                    </div>
                                                    <input name="tel" id="tel" type="text" class="form-control" placeholder="Telefono" onkeyup="javascript:this.value=this.value.toUpperCase();" required maxlength="10" data-toggle="tooltip" data-placement="bottom" title="Max. 10 caracteres" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask value="<?php echo $row['tel'] ?>">
                                                    <label for="floatingInput" class="pl-5">Teléfono <small>*Campo a Editar</small></label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha Actualización <small>*Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $date ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista Editor<small>*Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $usuario ?>" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <button type="button" id="btn_formEditarUsuario" class="btn btn-secondary btn-block btnUpdateUsuario"><i class="fas fa-pen"></i> Guardar</button>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
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
        $(document).ready(function() {
            $("#btn_formEditarUsuario").click(function(e) {
                e.preventDefault();
                let id_usuario = $("#id_usuario").val();
                let nombres = $("#nombres").val();
                let aPaterno = $("#aPaterno").val();
                let aMaterno = $("#aMaterno").val();
                let usuario = $("#usuario").val();
                let email = $("#email").val();
                let tel = $("#tel").val();

                if (nombres !== "" && aPaterno !== "" && aMaterno !== "" && usuario !== "" && email !== "" && tel !== "") {
                    $.ajax({
                        url: '../update/updateUsuario.php',
                        type: 'POST',
                        cache: false,
                        data: {
                            id_usuario:id_usuario,
                            nombres: nombres,
                            aPaterno: aPaterno,
                            aMaterno: aMaterno,
                            usuario: usuario,
                            email: email,
                            tel: tel
                        },
                        beforeSend: function() {
                            $('.btnUpdateUsuario').val('Validando...');
                        },
                        success: function(response) {
                            if (response != 0) {
                                $("#exito").fadeIn().delay(4000).fadeOut();
                                $('#formNuevoUsuario')[0].reset();
                            } else {
                                $("#fracaso").fadeIn().delay(4000).fadeOut();
                            }
                        }
                    });
                } else {
                    alert("Todos los campos son obligatorios")
                }
            })
        });
    </script>
</body>

</html>
