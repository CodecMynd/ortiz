<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Usuarios | <?php echo $usuario ?></title>

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
                            <h1 class="m-0">Tabla Usuarios</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="panelAdmin.php"><i class="fa-solid fa-house-user"></i> Inicio</a></li>
                                <li class="breadcrumb-item active"><a href="#"><i class="fa-solid fa-table-columns"></i> Tabla Usuario</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->

            <!-- Table ususrios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuarios dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <span data-toggle="tooltip" data-placement="left" title="1.1.5 Nuevo Usuario">
                                            <a type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalAgregarUsuarios">
                                                <i class="fa-solid fa-user-plus"></i> Nuevo Usuario</a>
                                        </span>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                $query = "SELECT * FROM usuarios ORDER BY id_usuario DESC";
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <table id="tableCrudUsuarios" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Usuario</th>
                                                <th>Contraseña</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) { ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $nombres = $row['nombres'];
                                                        $aPaterno = $row['aPaterno'];
                                                        $aMaterno = $row['aMaterno'];
                                                        echo $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;

                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['usuario'] ?>
                                                    </td>
                                                    <td>
                                                        <?php $pass = $row['pass'];
                                                    
                                                        if ($pass == 'SIN CONTRASEÑA') {
                                                            echo '<span class="badge badge-pill badge-danger">SIN AGREGAR</span>';
                                                        } else {
                                                            echo '<span class="badge badge-pill badge-success">AGREGADA</span>';
                                                        }

                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.1.1 Editar Usuario">
                                                                                <a href="../update/formUpdateUsuario.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-secondary"><i class="fas fa-edit"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.1.2 Asignar Contraseña">
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target="#editPass<?php echo $row['id_usuario'] ?>"> <i class="fa-solid fa-lock"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.1.3 Eliminar Usuario">
                                                                                <a class="btn btn-secondary btn-borrarUsuario" data-id='<?php echo $row['id_usuario']; ?>'><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.1.4 Asignar Permiso">
                                                                                <a class="btn btn-secondary" href=""><i class="fa-solid fa-key"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                include '../components/modals.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Usuario</th>
                                                <th>Contraseña</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /table usuario -->
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../components/scripts-dataTables.php';
    // Modals
    require '../components/modals.php';
    ?>
    <script>
        // 1.1.5 Registrar usuario nuevo **************************
        $(document).ready(function() {
            $("#regNuevoUsuario").click(function(e) {
                e.preventDefault();
                let nombres = $("#nombres").val();
                let aPaterno = $("#aPaterno").val();
                let aMaterno = $("#aMaterno").val();
                let usuario = $("#usuario").val();
                let email = $("#email").val();
                let tel = $("#tel").val();

                if (nombres !== "" && aPaterno !== "" && aMaterno !== "" && usuario !== "" && email !== "" && tel !== "") {
                    $.ajax({
                        url: '../adds/addNuevoUsuario.php',
                        type: 'POST',
                        cache: false,
                        data: {
                            nombres: nombres,
                            aPaterno: aPaterno,
                            aMaterno: aMaterno,
                            usuario: usuario,
                            email: email,
                            tel: tel
                        },
                        beforeSend: function() {
                            $('.btnRegNuevoUsuario').val('Validando...');
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
            });
        });
        // /1.1.5Registrar usuario nuevo ***********************

        // 1.1.3 Borrar usuario  **************************
        $(document).on("click", ".btn-borrarUsuario", function() {
            if (confirm("¿Estás seguro de eliminar este usuario? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).data('id');
                var element = this;
                $.ajax({
                    url: "../delete/deleteUsuario.php",
                    type: "POST",
                    cache: false,
                    data: {
                        borrarId: id
                    },
                    success: function(data) {
                        if (data == 1) {
                            $(element).closest("tr").fadeOut();
                            alert("Registro de usuario eliminado correctamente");
                        } else {
                            alert("Identificación de usuario inválida");
                        }
                    }
                });
            }
        });
        // /1.1.3 Borrar usuario  **************************

        // 1.1.2 Actualizar contraseña **************************
        $('#enviarFormUpdatePass').click(function() {
            $.ajax({
                    url: '../update/updatePass.php',
                    type: 'POST',
                    data: $('#formUpdatePass').serialize(),
                })
                .done(function(res) {
                    $('#res_updateFormPass').html(res)
                })
        });
        // 1.1.2 Actualizar contraseña **************************
    </script>

</body>

</html>