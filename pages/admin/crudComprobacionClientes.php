<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Comprobación de INE Clientes | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.12 Lista Comprobación de INE Clientes</h1>
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
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comCliente, P.estadoProyectoEliminado, P.comSuperCliente,
                                    C.nombres, C.aPaternoCliente, C.aMaternoCliente,
                                    V.placa, M.marca, Mo.modelo, A.anio, Co.color
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C on P.id_cliente = C.id_cliente
                                --   WHERE P.id_proyecto = 1
                                    ORDER BY nProyecto DESC";
                                } else if ($verTablaComPlacas == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comCliente, P.estadoProyectoEliminado, P.comSuperCliente,
                                    C.nombres, C.aPaternoCliente, C.aMaternoCliente,
                                    V.placa, M.marca, Mo.modelo, A.anio, Co.color
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C on P.id_cliente = C.id_cliente
                                    ORDER BY nProyecto DESC";
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
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                                $cC = $row['comCliente'];
                                                $nP = $row['nProyecto'];
                                                $cSC = $row['comSuperCliente'];
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
                                                        if ($cC == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Sin Comprobar Placas</span></h6>';
                                                        } else if ($cC == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Placa Comprobada</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($cSC == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">No Supervisado</span></h6>';
                                                        } else if ($cSC == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Supervisado</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Comprobación de INE Clientes"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="columns:2; min-width:2em;">
                                                                    <!-- <div class="btn-group"> -->
                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.12.1 Registrar Comprobación de INE Clientes">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComCliente"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cC == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComCliente-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                </button>
                                                                            <?php } else if ($super == 1 && $cC == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="siRegComCliente"><i class="fa-solid fa-pencil"></i></a>';
                                                                            } else if ($regComCliente == 1 && $cC == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComCliente-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                </button>
                                                                            <?php  } else if ($regComCliente == 1 && $cC == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="regComCliente"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="regComCliente"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                            } ?>
                                                                        </span>
                                                                    </li>
                                                                    <!-- <div class="dropdown-divider"></div> -->

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.12.3 Registrar Supervisión Comprobación de INE Clientes">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComCliente"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cSC == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComClienteSuper-<?php echo $idP ?>"><i class="fa-solid fa-spell-check"></i>
                                                                                </button>
                                                                            <?php } else if ($super == 1 && $cSC == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="siRegComSuperCliente"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } else if ($regComCliente == 1 && $cSC == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComClienteSuper-<?php echo $idP ?>"><i class="fa-solid fa-spell-check"></i>
                                                                                </button>
                                                                            <?php  } else if ($regComCliente == 1 && $cSC == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="regComCliente"><i class="fa-solid fa-spell-check"></i>
                                                                            </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="regComCliente"><i class="fa-solid fa-spell-check"></i>
                                                                            </a>';
                                                                            } ?>
                                                                        </span>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.12.5 Ver Generales Comprobación de INE Clientes">
                                                                            <?php if ($super == 1) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralComCliente<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                            <?php  } else if ($verGralComCliente == 1) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralComCliente<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                            <?php } else { ?>
                                                                                <a class="btn btn-outline-danger" id="verGralComCliente"><i class="fa-solid fa-comments"></i>
                                                                                </a>
                                                                            <?php } ?>
                                                                        </span>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.12.2 Eliminar Comprobación de INE Clientes">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComCliente"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cC == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComCliente<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i></a>
                                                                            <?php  } else if ($super == 1 && $cC == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noEliComCliente"><i class="fas fa-trash-alt"></i></a>';
                                                                            } else if ($eliComCliente == 1 && $cC == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComCliente<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            <?php  } else if ($eliComCliente == 1 && $cC == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noEliComCliente"><i class="fas fa-trash-alt"></i>
                                                                                    </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="eliComCliente"><i class="fas fa-trash-alt"></i>
                                                                                </a>';
                                                                            }
                                                                            ?>
                                                                        </span>
                                                                    </li>
                                                                    <!-- <div class="dropdown-divider"></div> -->
                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.12.4 Eliminar Supervisión Comprobación de INE Clientes">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComCliente"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cSC == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComClienteSuper<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i></a>
                                                                            <?php  } else if ($super == 1 && $cSC == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noEliComCliente"><i class="fa-solid fa-eraser"></i></a>';
                                                                            } else if ($eliComCliente == 1 && $cSC == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComClienteSuper<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            <?php  } else if ($eliComCliente == 1 && $cSC == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noeliComCliente"><i class="fa-solid fa-eraser"></i>
                                                                                    </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="eliComCliente"><i class="fa-solid fa-eraser"></i>
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
                                                require '../components/modal-regComCliente.php';
                                                require '../components/modal-eliminarComCliente.php';
                                                require '../components/modal-regComClienteSuper.php';
                                                require '../components/modal-eliminarComClienteSuper.php';
                                                require '../components/modal-verGralComCliente.php';
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
        // noComPlacas PROYECTO ELIMINADO, NO SE PUEDE REALIZAR ESTA ACCION --------------------------------------------------------------
        $(document).ready(function() {
            $("#noComPlacas ").click(function() {
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

        // noEliComPlacas NO TIENE COMPROBACION DE PLACA, NO HAY NADA QUE BORRAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#noEliComPlacas ").click(function() {
                toastr["error"]("¡NO TIENE COMPROBACION DE INE CLIENTES, NO HAY NADA QUE BORRAR!")

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

        // noEliComPlacas NO SE PUEDE VOLVER A REGISTRAR UNA COMPROBACION DE PLACAS --------------------------------------------------------------
        $(document).ready(function() {
            $("#siRegComPlacas ").click(function() {
                toastr["error"]("¡NO SE PUEDE VOLVER A REGISTRAR UNA COMPROBACION DE INE CLIENTES!")

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

        // siRegComSuperPlacas NO SE PUEDE VOLVER A REGISTRAR UNA SUPERVISION DE COMPROBACION DE PLACAS --------------------------------------------------------------
        $(document).ready(function() {
            $("#siRegComSuperPlacas ").click(function() {
                toastr["error"]("¡NO SE PUEDE VOLVER A REGISTRAR UNA SUPERVISION DE COMPROBACION DE INE CLIENTES!")

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


        //  2.3.9.2 Eliminar Comprobación de Placa ------------------------------------------------------------
        $('.btnBorrarComCliente').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Comprobación de INE Cliente? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteComCliente.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudComprobacionClientes.php";
                        $('#respuestaProyectoBorrado').html(data);
                    }
                });
            }
            return false;
        });

        //  2.3.9.4 Eliminar Supervision Comprobación de Placa ------------------------------------------------------------
        $('.btnBorrarComClienteSuper').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Supervisión de Comprobación de INE Cliente? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteComClienteSuper.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudComprobacionClientes.php";
                        $('#respuestaProyectoBorrado').html(data);
                    }
                });
            }
            return false;
        });
    </script>
</body>

</html>