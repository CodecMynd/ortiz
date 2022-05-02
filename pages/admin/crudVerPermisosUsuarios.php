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
                    <div class="row my-3 mx-1">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla 1.11 Permisos de Usuarios <small>(solo consulta)</small></h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuarios dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>

                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1 OR $verTablaPermisoUsuario == 1) { 
                                    $query = "SELECT * FROM usuarios WHERE super <> 1 AND admin <> 1 AND eliminado = 0 ORDER BY id_usuario DESC";
                                } else {
                                    $query = "SELECT super FROM usuarios WHERE super = 10";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaPermisoUsuario == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableSm" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <!-- <th>Usuario</th> -->
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
                                                    <td style="width: 90%;">
                                                        <?php
                                                        $nombres = $row['nombres'];
                                                        $aPaterno = $row['aPaterno'];
                                                        $aMaterno = $row['aMaterno'];
                                                        echo $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
                                                        ?>
                                                    </td>
                                                    <!-- <td style="width:20%">
                                                        <?php echo $row['usuario'] ?>
                                                    </td> -->
                                                    <td>
                                                        <?php $pass = $row['pass'];
                                                        if ($pass == 'SIN_PASSWORD') {
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
                                                                <ul class="dropdown-menu" style="min-width: 2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.11.1 Ver Permisos de Usuarios">
                                                                                <?php if ($super == 1 OR $verPermisoUsuario == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../components/tablaVerPermisos.php?id=<?php echo $row['id_usuario'] ?>"><i class="fa-solid fa-key"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verPermisoUsuario"><i class="fa-solid fa-key"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarUsuario.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <!-- <th>Usuario</th> -->
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
    ?>
    <!-- avisos -->
    <script>
// verPermisoUsuario 1.11.1 Ver Permisos de Usuarios R  --------------------------------------------------------------
$(document).ready(function () {
    $("#verPermisoUsuario").click(function () {
        toastr["error"]("¡No tienes acceso a: 1.11.1 VER PERMISOS DE USUARIOS, consulta al administrador!")

        tostadas.opciones = {
            "botóncerrar": falso,
            "depuración": cierto,
            "newestOnTop": falso,
            "barra de progreso": falso,
            "positionClass": "brindis arriba a la derecha",
            "prevenir duplicados": falso,
            "onclick": nulo,
            "showDuration": "400",
            "ocultarDuración": "1000",
            "tiempo de espera": "5000",
            "tiempo de espera extendido": "1200",
            "showEasing": "oscilación",
            "hideEasing": "lineal",
            "showMethod": "fundido de entrada",
            "hideMethod": "desaparecer"
        }
    })
});
</script>

</body>

</html>