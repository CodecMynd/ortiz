<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Asesores | <?php echo $nomComp ?></title>

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
                            <h1 class="m-0">Tabla 1.10 Asesores</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->

            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Asesores dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <?php if ($super == 1 or $regAsesor == 1) { ?>
                                            <a type="button" class="btn btn-secondary" href="../adds/formAddAsesor.php" data-toggle="tooltip" data-placement="left" title="1.10.1 Registro de Asesor"> <i class="fa-solid fa-users-gear"></i>&nbsp;&nbsp; Registro de Asesor</a>
                                        <?php } else { ?>
                                            <a type="button" class="btn btn-outline-danger" id="regAsesor" data-toggle="tooltip" data-placement="left" title="1.10 Registro de Asesor"> <i class="fa-solid fa-users-gear"></i>&nbsp;&nbsp; Registro de Asesor</a>

                                        <?php } ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1 or $verTablaAsesor == 1) {
                                    $query = "SELECT id_asesor, asesor FROM asesores WHERE borrado = 0 ORDER BY id_asesor DESC";
                                } else {
                                    $query = "SELECT id_asesor FROM asesores WHERE id_asesor = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);

                                ?>
                                <div class="card-body">
                                    <?php if ($super == 1) {
                                    } else if ($verTablaAsesor == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableSm" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nombre Asesor</th>
                                                <th>Estatus</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $id_asesor = $row['id_asesor'];
                                                $count_reg_1 = mysqli_query($conexion, "SELECT P.id_proyecto, C.id_asesor 
                                                FROM proyectos P 
                                                INNER JOIN comasesor C ON P.id_proyecto = C.id_proyecto 
                                                WHERE C.id_asesor = $id_asesor AND P.estadoProyectoEliminado = 1 AND P.proyectoActivo = 1");

                                                $count_reg_2 = mysqli_query($conexion, "SELECT P.id_proyecto, C.id_asesor
                                                FROM proyectos P
                                                INNER JOIN comasesor C ON P.id_proyecto = C.id_proyecto
                                                WHERE C.id_asesor = $id_asesor AND P.estadoProyectoEliminado = 1 AND P.registroSolicitud = 1");

                                                $count_reg_3 = mysqli_query($conexion, "SELECT P.id_proyecto, C.id_asesor
                                                FROM proyectos P
                                                INNER JOIN comasesor C ON P.id_proyecto = C.id_proyecto
                                                WHERE C.id_asesor = $id_asesor AND P.estadoProyectoEliminado = 1 AND P.altaProyecto = 1");

                                                $suma = mysqli_num_rows($count_reg_1)+mysqli_num_rows($count_reg_2)+mysqli_num_rows($count_reg_3);

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <span class='badge badge-dark badge-pill'><?php echo $row['id_asesor'] ?></span>
                                                    </td>
                                                    <td style="width: 70%;">
                                                        <?php echo $row['asesor'] ?>
                                                    </td>
                                                    <td style="width:20%">
                                                        <button type="button" class="btn btn-sm btn-secondary">
                                                            En uso <span class="badge badge-light"><?php echo $suma ?></span>
                                                        </button>
                                                    </td>
                                                    <td style="width: 20%">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Asesor"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width: 2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.10.2 Modificar Asesor">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateAsesor.php?id=<?php echo $row['id_asesor'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php  } else if ($modAsesor == 1) { ?>
                                                                                    <a class="btn btn-secondary" href="../update/formUpdateAsesor.php?id=<?php echo $row['id_asesor'] ?>"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="modAsesor"><i class="fas fa-edit"></i>
                                                                                    </a>
                                                                                <?php } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="1.10.3 Eliminar Asesor">
                                                                                <?php
                                                                            
                                                                                if ($suma == 0) {
                                                                                    if ($super == 1 or $eliAsesor  == 1) {
                                                                                        echo "<a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarAsesor-{$row['id_asesor']}'><i class='fas fa-trash-alt'></i></a>";
                                                                                    } else {
                                                                                        echo "<a class='btn btn-outline-danger' id='eliAsesor'><i class='fas fa-trash-alt'></i></a>";
                                                                                    }
                                                                                } else {
                                                                                    echo "<a class='btn btn-outline-danger' id='enUso'><i class='fas fa-trash-alt'></i></a>";
                                                                                }
                                                                                ?>

                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarAsesor.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Nombre Asesor</th>
                                                <th>Estatus</th>
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
        // regAsesopr 1.10.1 REGISTRO DE ASESOR  --------------------------------------------------------------
        $(document).ready(function() {
            $("#regAsesor").click(function() {
                toastr["error"]("¡No tienes acceso a: 1.10.1 REGISTRO DE ASESOR, consulta al administrador!")

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

            // modAsesor  1.10.2 MODIFICAR ASESOR ---------------------------------------------------
            $("#modAsesor").click(function() {
                toastr["error"]("¡No tienes acceso a: 1.10.2 MODIFICAR ASESOR, consulta al administrador!")

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

            // eliAsesor  1.10.3 ELIMNAR ASESOR ---------------------------------------------------
            $("#eliAsesor").click(function() {
                toastr["error"]("¡No tienes acceso a: 1.10.3 ELIMNAR ASESOR, consulta al administrador!")

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

            $("#enUso").click(function() {
                toastr["error"]("¡Este Asesor esta en Uso y no esta permitido eliminarlos, debe verificar las tablas!")

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