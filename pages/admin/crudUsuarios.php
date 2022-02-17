<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Usuarios | <?php echo $nomComp ?></title>

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
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="panelAdmin.php"><i class="fa-solid fa-house-user"></i> Inicio</a></li>
                                <li class="breadcrumb-item active"><a href="#"><i class="fa-solid fa-table-columns"></i> Tabla Usuario</a></li>
                            </ol> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->

            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuarios dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <span data-toggle="tooltip" data-placement="left" title="1.1.5 Nuevo Usuario">
                                            <a type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalAgregarUsuarios" data-toggle="tooltip" data-placement="left" title="1.1.5 Nuevo Usuario">
                                                <i class="fa-solid fa-user-plus"></i> Nuevo Usuario</a>
                                        </span>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
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
                                                            echo '<span class="badge badge-pill badge-danger">Sin Asignar</span>';
                                                        } else {
                                                            echo '<span class="badge badge-pill badge-success">Asignada</span>';
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
                                                                                <a class="btn btn-secondary" href="../update/formUpdateUsuario.php?id=<?php echo $row['id_usuario'] ?>"><i class="fas fa-edit"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.1.2 Asignar Contraseña">
                                                                                <a class="btn btn-secondary" href="../update/formUpdatePass.php?id=<?php echo $row['id_usuario'] ?>"> <i class="fa-solid fa-lock"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.1.3 Eliminar Usuario">
                                                                            </span><!-- Small modal -->
                                                                            <a class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm<?php echo $row['id_usuario'] ?>"><i class="fas fa-trash-alt"></i>
                                                                            </a>

                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.1.4 Asignar Permiso">
                                                                                <a class="btn btn-secondary" href="../update/formUpdatePermisos.php?id=<?php echo $row['id_usuario'] ?>"><i class="fa-solid fa-key"></i>
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
                                                // include '../components/modals.php';
                                                // require '../components/modal-editarUsuario.php';
                                                require '../components/modal-eliminarUsuario.php';
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
    require '../components/modal-miPass.php';
    // require '../components/modal-multiselec.php';
    require '../components/modal-nuevoUsuario.php';
    ?>
    <script>
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

        $('.btnBorrarUsuario').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar este usuario? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteUsuario.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudUsuarios.php";
                        $('#respuesta').html(data);
                    }
                });
            }
            return false;

        });
        // /1.1.3 Borrar usuario  **************************
    </script>

</body>

</html>