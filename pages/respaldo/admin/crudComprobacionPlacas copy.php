<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Comprobación de Placas | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.9 Lista Comprobación de Placas</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Comprobcion de placas -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos dados de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    // $query = "SELECT id_proyecto, nProyecto, nOrden, comPlacas, estadoProyectoEliminado, comSuperPlaca, nombres, aPaternoCliente, aMaternoCliente, placa, marca, modelo, anio, color
                                    // FROM test
                                    // ORDER BY nProyecto DESC";
                                    $query = "SELECT * FROM vplacas ";
                                } else if ($verTablaComPlacas == 1) {
                                    $query = "SELECT * FROM vplacas ";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaComPlacas == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableComPlacas" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Cliente</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                                $cP = $row['comPlacas'];
                                                $nP = $row['nProyecto'];
                                                $cS = $row['comSuperPlaca'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 9%;">
                                                        <?php echo $row['nProyecto'] ?>
                                                    </td>
                                                    <td style="width: 9%;">
                                                        <?php echo $row['nOrden'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['marca'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['modelo'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['anio'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['placa'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['color'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombres'] . ' ' . $row['aPaternoCliente'] . ' ' . $row['aMaternoCliente']; ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $Eliminado = $row['estadoProyectoEliminado'];
                                                        if ($Eliminado == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Eliminado</span></h6>';
                                                        } else {
                                                            echo '<h6><span class="badge badge-success badge-pill">Activo</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($cP == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Sin Comprobar Placas</span></h6>';
                                                        } else if ($cP == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Placa Comprobada</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($cS == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">No Supervisado</span></h6>';
                                                        } else if ($cS == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Supervisado</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Comprobación de Placas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="columns:2; min-width:2em;">
                                                                    <!-- <div class="btn-group"> -->
                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.9.1 Registrar Comprobación de Placa">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="eliminado"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cP == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComPlacas-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                </button>
                                                                            <?php } else if ($super == 1 && $cP == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="yaRegistrado"><i class="fa-solid fa-pencil"></i></a>';
                                                                            } else if ($regComPlacas == 1 && $cP == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComPlacas-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                </button>
                                                                            <?php  } else if ($regComPlacas == 1 && $cP == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="yaRegistrado"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="regComPlacas"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                            } ?>
                                                                        </span>
                                                                    </li>
                                                                    <!-- <div class="dropdown-divider"></div> -->

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.9.3 Registrar Supervisión Comprobación de Placa">
                                                                            <?php if ($cP == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="comprobar"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } else if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="eliminado"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cS == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComPlacasSuper-<?php echo $idP ?>"><i class="fa-solid fa-spell-check"></i>
                                                                                </button>
                                                                            <?php } else if ($super == 1 && $cS == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="yaRegistrado"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } else if ($regComPlacasSuper == 1 && $cS == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComPlacasSuper-<?php echo $idP ?>"><i class="fa-solid fa-spell-check"></i>
                                                                                </button>
                                                                            <?php  } else if ($regComPlacasSuper == 1 && $cS == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="regComPlacas"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="regComPlacasSuper"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } ?>
                                                                        </span>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.9.5 Ver Generales Comprobación de Placas">
                                                                            <?php if ($super == 1) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralComPlacas<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                            <?php  } else if ($verGralComPlacas == 1) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralComPlacas<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                            <?php } else { ?>
                                                                                <a class="btn btn-outline-danger" id="verGralComPlacas"><i class="fa-solid fa-comments"></i>
                                                                                </a>
                                                                            <?php } ?>
                                                                        </span>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.9.2 Eliminar Comprobación de Placa">
                                                                            <?php if ($cS == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="elimina"><i class="fas fa-trash-alt"></i></a>';
                                                                            } else if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="eliminado"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cP == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComPlaca<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i></a>
                                                                            <?php  } else if ($super == 1 && $cP == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="resgistra"><i class="fas fa-trash-alt"></i></a>';
                                                                            } else if ($eliComPlacas == 1 && $cP == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComPlaca<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            <?php  } else if ($eliComPlacas == 1 && $cP == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noeliComPlacas"><i class="fas fa-trash-alt"></i>
                                                                                    </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="eliComPlacas"><i class="fas fa-trash-alt"></i>
                                                                                </a>';
                                                                            }
                                                                            ?>
                                                                        </span>
                                                                    </li>
                                                                    <!-- <div class="dropdown-divider"></div> -->
                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.9.4 Eliminar Supervisión Comprobación de Placa">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="eliminado"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cS == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComPlacaSuper<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i></a>
                                                                            <?php  } else if ($super == 1 && $cS == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="resgistra"><i class="fa-solid fa-eraser"></i></a>';
                                                                            } else if ($eliComPlacasSuper == 1 && $cS == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComPlacaSuper<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            <?php  } else if ($eliComPlacasSuper == 1 && $cS == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noeliComPlacas"><i class="fa-solid fa-eraser"></i>
                                                                                    </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="eliComPlacasSuper"><i class="fa-solid fa-eraser"></i>
                                                                                </a>';
                                                                            }
                                                                            ?>
                                                                        </span>
                                                                    </li>


                                                                    <!-- </div> -->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                            <?php
                                                require '../components/modal-regComPlaca.php';
                                                require '../components/modal-eliminarComPlaca.php';
                                                require '../components/modal-regComPlacaSuper.php';
                                                require '../components/modal-eliminarComPlacaSuper.php';
                                                require '../components/modal-verGralComPlacas.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Cliente</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
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
    <script src="../../src/js/toastr.js"></script>
    <script>
        // comprobar NO SE PUEDE HACER UNA SUPERVISION SIN HABER PRIMERO HECHO UNA COMPROBACION DE PLACAS --------------------------------------------------------------
        $(document).ready(function() {
            $("#comprobar ").click(function() {
                toastr["error"]("¡NO SE PUEDE HACER UNA SUPERVISIÓN SIN HABER PRIMERO HECHO UNA COMPROBACIÓN!")

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

        // comprobar NO SE PUEDE HACER UNA SUPERVISION SIN HABER PRIMERO HECHO UNA COMPROBACION DE PLACAS --------------------------------------------------------------
        $(document).ready(function() {
            $("#elimina").click(function() {
                toastr["error"]("¡NO SE PUEDE ELIMINAR UNA COMPROBACIÓN, PRIMERO ELIMINA LA SUPERVISIÓN!")

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

        // eliminado PROYECTO ELIMINADO, NO SE PUEDE REALIZAR ESTA ACCION --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliminado ").click(function() {
                toastr["error"]("¡PROYECTO ELIMINADO, NO SE PUEDE REALIZAR ESTA ACCION!")

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

        // resgistra NO TIENE COMPROBACION, PRIMERO REGISTRA YA DESPUES PUEDES BORRAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#resgistra ").click(function() {
                toastr["error"]("¡NO TIENE REGISTRO DE COMPROBACION!")

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

        // resgistra NO SE PUEDE VOLVER A REGISTRAR, PRIMERO ELIMINA Y VUELVE A REGISTRAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#yaRegistrado ").click(function() {
                toastr["error"]("¡NO SE PUEDE VOLVER A REGISTRAR, ELIMINA Y VUELVE A REGISTRAR!")

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

        // regComPlacas 2.3.9.1 REGISTRAR COMPROBACIÓN DE PLACA --------------------------------------------------------------
        $(document).ready(function() {
            $("#regComPlacas ").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.9.1 REGISTRAR COMPROBACIÓN DE PLACA, consulta al administrador!")

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

        // eliComPlacas 2.3.9.2 REGISTRAR COMPROBACIÓN DE PLACA --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliComPlacas ").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.9.2 ELIMINAR COMPROBACIÓN DE PLACA, consulta al administrador!")

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

        // regComPlacasSuper 2.3.9.3 REGISTRAR COMPROBACIÓN DE PLACA --------------------------------------------------------------
        $(document).ready(function() {
            $("#regComPlacasSuper ").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.9.3 REGISTRAR SUPERVISION DE COMPROBACIÓN DE PLACA, consulta al administrador!")

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

        // eliComPlacasSuper 2.3.9.4  ELIMINAR SUPERVISION COMPROBACIÓN DE PLACA --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliComPlacasSuper ").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.9.4 ELIMINAR SUPERVISIÓN DE COMPROBACIÓN DE PLACA, consulta al administrador!")

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

        // 2.3.9.1  Registro Comprobación de Placa --------------------------------------------------------------------
        //  $('#btnNuevoRegComPlaca').click(function() {
        //      $.ajax({
        //              url: '../adds/addNuevoRegComPlaca.php',
        //              type: 'POST',
        //              data: $('#formNuevoRegComPlaca').serialize(),
        //          })
        //          .done(function(res) {
        //              $('#respuestaNuevoRegComPlaca').html(res)
        //             //  $(".regComPlacas-<?php echo $idP ?>").modal("hide")
        //          })
        //  });



        //  2.3.9.2 Eliminar Comprobación de Placa ------------------------------------------------------------
        $('.btnBorrarComPlaca').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Comprobación de Placa? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteComPlaca.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudComprobacionPlacas.php";
                        $('#respuestaProyectoBorrado').html(data);
                    }
                });
            }
            return false;
        });

        //  2.3.9.4 Eliminar Supervision Comprobación de Placa ------------------------------------------------------------
        $('.btnBorrarComPlacaSuper').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Supervisión de Comprobación de Placa? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteComPlacaSuper.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudComprobacionPlacas.php";
                        $('#respuestaProyectoBorrado').html(data);
                    }
                });
            }
            return false;
        });
    </script>
</body>

</html>
<!-- SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comPlacas, P.estadoProyectoEliminado, P.comSuperPlaca,
C.nombres, C.aPaternoCliente, C.aMaternoCliente,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,
CP.linkComPlaca, CP.fecha_creacion,
UP.nombres AS UPN, UP.aPaterno AS UPP, UP.aMaterno AS UPM,
CS.textSupervision, CS.fecha_registro AS CSF,
UCS.nombres AS UCSN, UCS.aPaterno AS UCSP, UCS.aMaterno AS UCSM
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
INNER JOIN clientes C on P.id_cliente = C.id_cliente
LEFT JOIN complacas CP ON P.id_proyecto = CP.id_proyecto
LEFT JOIN usuarios UP ON CP.id_capC = UP.id_usuario
LEFT JOIN comsupervision CS ON P.id_proyecto = CS.id_proyecto
LEFT JOIN usuarios UCS ON CS.id_capC = UCS.id_usuario -->