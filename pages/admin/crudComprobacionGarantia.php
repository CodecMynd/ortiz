<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Comprobación de Garantia | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.14 Lista Comprobación de Garantia</h1>
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
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comGarantia, P.estadoProyectoEliminado, P.comSuperGarantia,
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
                                } else if ($verTablaComGarantia == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comGarantia, P.estadoProyectoEliminado, P.comSuperGarantia,
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
                                    } else if ($verTablaComGarantia == 0) { ?>
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
                                                <th>Garantia</th>
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
                                                $cG = $row['comGarantia'];
                                                $nP = $row['nProyecto'];
                                                $cSG = $row['comSuperGarantia'];
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
                                                        if ($cG == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Sin Comprobar Garantia</span></h6>';
                                                        } else if ($cG == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Garantia Comprobada</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($cSG == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">No Supervisado</span></h6>';
                                                        } else if ($cSG == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Supervisado</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Comprobación de Garantia"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="columns:2; min-width:2em;">
                                                                    <!-- <div class="btn-group"> -->
                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.14.1 Registrar Comprobación de Garantia">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComGarantia"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cG == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComGarantia-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                </button>
                                                                            <?php } else if ($super == 1 && $cG == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="siRegComGarantia"><i class="fa-solid fa-pencil"></i></a>';
                                                                            } else if ($regComGarantia == 1 && $cG == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComGarantia-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                </button>
                                                                            <?php  } else if ($regComGarantia == 1 && $cG == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="regComGarantia"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="regComGarantia"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                            } ?>
                                                                        </span>
                                                                    </li>
                                                                    <!-- <div class="dropdown-divider"></div> -->

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.14.3 Registrar Supervisión Comprobación de Garantia">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComGarantia"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cSG == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComGarantiaSuper-<?php echo $idP ?>"><i class="fa-solid fa-spell-check"></i>
                                                                                </button>
                                                                            <?php } else if ($super == 1 && $cSG == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="siRegComSuperGarantia"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } else if ($regComGarantia == 1 && $cSG == 0) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".regComGarantiaSuper-<?php echo $idP ?>"><i class="fa-solid fa-spell-check"></i>
                                                                                </button>
                                                                            <?php  } else if ($regComGarantia == 1 && $cSG == 1) {
                                                                                echo '<a class="btn btn-outline-danger" id="regComGarantia"><i class="fa-solid fa-spell-check"></i>
                                                                            </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="regComGarantia"><i class="fa-solid fa-spell-check"></i>
                                                                            </a>';
                                                                            } ?>
                                                                        </span>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.14.5 Ver Generales Comprobación de Garantia">
                                                                            <?php if ($super == 1) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralComGarantia<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                            <?php  } else if ($verGralComGarantia == 1) { ?>
                                                                                <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralComGarantia<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                            <?php } else { ?>
                                                                                <a class="btn btn-outline-danger" id="verGralComGarantia"><i class="fa-solid fa-comments"></i>
                                                                                </a>
                                                                            <?php } ?>
                                                                        </span>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.14.2 Eliminar Comprobación de Garantia">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComGarantia"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cG == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComGarantia<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i></a>
                                                                            <?php  } else if ($super == 1 && $cG == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noEliComGarantia"><i class="fas fa-trash-alt"></i></a>';
                                                                            } else if ($eliComGarantia == 1 && $cG == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComGarantia<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            <?php  } else if ($eliComGarantia == 1 && $cG == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noeliComGarantia"><i class="fas fa-trash-alt"></i>
                                                                                    </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="eliComGarantia"><i class="fas fa-trash-alt"></i>
                                                                                </a>';
                                                                            }
                                                                            ?>
                                                                        </span>
                                                                    </li>
                                                                    <!-- <div class="dropdown-divider"></div> -->
                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.14.4 Eliminar Supervisión Comprobación de Garantia">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noComGarantia"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 && $cSG == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComGarantiaSuper<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i></a>
                                                                            <?php  } else if ($super == 1 && $cSG == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noEliComGarantia"><i class="fa-solid fa-eraser"></i></a>';
                                                                            } else if ($eliComGarantia == 1 && $cSG == 1) { ?>
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComGarantiaSuper<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            <?php  } else if ($eliComGarantia == 1 && $cSG == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="noeliComGarantia"><i class="fa-solid fa-eraser"></i>
                                                                                    </a>';
                                                                            } else {
                                                                                echo '<a class="btn btn-outline-danger" id="eliComGarantia"><i class="fa-solid fa-eraser"></i>
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
                                                require '../components/modal-regComGarantia.php';
                                                require '../components/modal-eliminarComGarantia.php';
                                                require '../components/modal-regComGarantiaSuper.php';
                                                require '../components/modal-eliminarComGarantiaSuper.php';
                                                require '../components/modal-verGralComGarantia.php';
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
                                                <th>Garantia</th>
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
        // noComGarantia PROYECTO ELIMINADO, NO SE PUEDE REALIZAR ESTA ACCION --------------------------------------------------------------
        $(document).ready(function() {
            $("#noComGarantia ").click(function() {
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

        // noEliComGarantia NO TIENE COMPROBACION DE PLACA, NO HAY NADA QUE BORRAR --------------------------------------------------------------
        $(document).ready(function() {
            $("#noEliComGarantia ").click(function() {
                toastr["error"]("¡NO TIENE COMPROBACION DE PLACA, NO HAY NADA QUE BORRAR!")

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

        // noEliComGarantia NO SE PUEDE VOLVER A REGISTRAR UNA COMPROBACION DE PLACAS --------------------------------------------------------------
        $(document).ready(function() {
            $("#siRegComGarantia ").click(function() {
                toastr["error"]("¡NO SE PUEDE VOLVER A REGISTRAR UNA COMPROBACION DE PLACAS!")

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

        // siRegComSuperGarantia NO SE PUEDE VOLVER A REGISTRAR UNA SUPERVISION DE COMPROBACION DE PLACAS --------------------------------------------------------------
        $(document).ready(function() {
            $("#siRegComSuperGarantia ").click(function() {
                toastr["error"]("¡NO SE PUEDE VOLVER A REGISTRAR UNA SUPERVISION DE COMPROBACION DE PLACAS!")

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


        //  2.3.14.2 Eliminar Comprobación de Garantia ------------------------------------------------------------
        $('.btnBorrarComGarantia').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Comprobación de Garantia? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteComGarantia.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudComprobacionGarantia.php";
                        $('#respuestaProyectoBorrado').html(data);
                    }
                });
            }
            return false;
        });

        //  2.3.14.4 Eliminar Supervision Comprobación de Garantia ------------------------------------------------------------
        $('.btnBorrarComGarantiaSuper').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Supervisión de Comprobación de Garantia? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteComGarantiaSuper.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudComprobacionGarantia.php";
                        $('#respuestaProyectoBorrado').html(data);
                    }
                });
            }
            return false;
        });
    </script>
</body>

</html>