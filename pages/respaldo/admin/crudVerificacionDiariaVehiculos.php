<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Verificacion Diaria Vehículos Activos | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.2.2 Verificacion Diaria Vehículos Activos</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Registros -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tablas en uso</strong></h2>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row justify-content-center">

                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Activos</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-trash-can"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                                    <div class="text-center "><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                                    $query = "SELECT * FROM verificacion LIMIT 100";
                                } else if ($verTablaComVerifDiariaVeh == 1) {
                                    $query = "SELECT * FROM verificacion LIMIT 10";
                                } else {
                                    $query = "SELECT id_proyecto
                                    FROM proyectos WHERE id_proyecto = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaComVerifDiariaVeh == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
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
                                                <th>Asesor</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Último Registro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                                $cV = $row['comVerifDiariaVeh'];
                                                $nP = $row['nProyecto'];
                                                $cSV = $row['comSuperVerifDiariaVeh'];
                                                $id_comverifdiariaveh = $row['id_comverifdiariaveh'];
                                                // $id_cS = $row['id_comSupervision'];
                                                $hoyS = $row['FS'];
                                                $fecha = new DateTime($hoyS);
                                                $fechaS = $fecha->format('d-m-Y');

                                                $hoyV = $row['FV'];
                                                $fecha = new DateTime($hoyV);
                                                $fechaV = $fecha->format('d-m-Y');

                                                $fecha_sistema;

                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 8%;">
                                                        <?php echo $row['nProyecto'] ?>
                                                    </td>
                                                    <td style="width: 7%;">
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
                                                        <?php if($row['asesor'] == ''){
                                                        echo '<h6><span class="badge badge-danger badge-pill">Sin Asesor</span></h6>';
                                                        }else{
                                                            echo "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>";
                                                        }
                                                        ?>
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
                                                        if (!empty($hoyV)) {
                                                            if ($fechaV == $fecha_sistema)
                                                                echo "<h6><span class='badge badge-success badge-pill'>Comprobado</span></h6>";
                                                        }
                                                        if ($fechaV <> $fecha_sistema) {
                                                            echo "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Comprobación</span></h6>";                                                          
                                                        }
                                                        if (empty($hoyV)) {
                                                            echo "<h6><span class='badge badge-danger badge-pill'>Sin registro</span></h6>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if (!empty($hoyS)) {
                                                            if ($fechaS == $fecha_sistema)
                                                                echo "<h6><span class='badge badge-success badge-pill'>Supervisado</span></h6>";
                                                        }
                                                        if ($fechaS <> $fecha_sistema) {
                                                            echo "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Supervisión</span></h6>";
                                                        }
                                                        if (empty($hoyS)) {
                                                            echo "<h6><span class='badge badge-danger badge-pill'>Sin registro</span></h6>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if (!empty($hoyS) and !empty($hoyV)) {
                                                            if ($fechaS == $fecha_sistema and $fechaV == $fecha_sistema)
                                                                echo "<h6><span class='badge badge-success badge-pill'>{$hoyV}</span></h6>";
                                                            if ($fechaS != $fecha_sistema)
                                                                echo "<h6><span class='badge badge-warning badge-pill parpadea'>Sin Registro del dia</span></h6>";
                                                        } else if (empty($hoyS) and empty($hoyV)) {
                                                            echo "<h6><span class='badge badge-danger badge-pill parpadea'>Sin Ningún Registro</span></h6>";
                                                        } else if (empty($hoyS)) {
                                                            echo "<h6><span class='badge badge-danger badge-pill'>Sin Supervisión</span></h6>";
                                                        } else if (empty($hoyV)) {
                                                            echo "<h6><span class='badge badge-danger badge-pill'>Sin Verificación</span></h6>";
                                                        }

                                                        ?>

                                                    </td>
                                                    <td>

                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Comprobación de Placas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style=" columns: 2; min-width:2em;">
                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.2.2.1 Registrar Comprobación Link de Video en Vivo">
                                                                            <?php if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="eliminado"><i class="fa-solid fa-ban"></i></a>';
                                                                            } else if ($super == 1 and ($fechaV <> $fecha_sistema)) {
                                                                                echo "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
                                                                            } else if ($super == 1 and (!empty($hoyV) != $fecha_sistema)) {
                                                                                echo "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
                                                                            } else if ($super == 1 and (!empty($hoyV) == $fecha_sistema)) {
                                                                                echo '<a class="btn btn-outline-danger" id="yaRegistrado"><i class="fa-solid fa-pencil"></i></a>';
                                                                            } else if ($regComVerifDiariaVeh == 1 and ($fechaV <> $fecha_sistema)) {
                                                                                echo "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
                                                                            } else if ($regComVerifDiariaVeh == 1 and (!empty($hoyV) != $fecha_sistema)) {
                                                                                echo "<a href='../adds/formAddVerificacionDiaria.php?id={$idP}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";
                                                                            } else if ($regComVerifDiariaVeh == 1 and (!empty($hoyV) == $fecha_sistema)) {
                                                                                echo '<a class="btn btn-outline-danger" id="yaRegistrado"><i class="fa-solid fa-pencil"></i></a>';
                                                                            }else{
                                                                                echo '<a class="btn btn-outline-danger" id="regComVerifDiariaVeh"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            }
                                                                            ?>

                                                                        </span>
                                                                    </li>
                                                                    <!-- <div class="dropdown-divider"></div> -->

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.2.2.2 Registrar Supervisión Link de Video en Vivo">
                                                                            <?php if(empty($hoyV)) {
                                                                                echo '<a class="btn btn-outline-danger" id="sinRegistro"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } else if (empty($hoyV)) {
                                                                            } else if ($super == 1 and ($fechaV == $fecha_sistema)) {
                                                                                echo "<a href='../adds/formAddSupervisionDiaria.php?id={$id_comverifdiariaveh}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";                                                                          
                                                                            } else if ($super == 1 and ($fechaS != $fecha_sistema)) {
                                                                                echo '<a class="btn btn-outline-danger" id="comprobar"><i class="fa-solid fa-pencil"></i></a>';                                                                                                                                 
                                                                            } else if ($Eliminado == 0) {
                                                                                echo '<a class="btn btn-outline-danger" id="eliminado"><i class="fa-solid fa-ban"></i></a>';                                                                       
                                                                            } else if ($regComVerifDiariaVehSuper == 1 and ($fechaV == $fecha_sistema)) {
                                                                                echo "<a href='../adds/formAddSupervisionDiaria.php?id={$id_comverifdiariaveh}' class='btn btn-secondary'><i class='fa-solid fa-pencil'></i></a>";                                                                          
                                                                            } else if ($regComVerifDiariaVehSuper == 1 and ($fechaS != $fecha_sistema)) {
                                                                                echo '<a class="btn btn-outline-danger" id="comprobar"><i class="fa-solid fa-pencil"></i></a>';   
                                                                            } else{
                                                                                echo '<a class="btn btn-outline-danger" id="regComVerifDiariaVehSuper"><i class="fa-solid fa-spell-check"></i></a>';
                                                                            } ?>
                                                                        </span>
                                                                    </li>

                                                                    <li class="dropdown-item">
                                                                        <span data-toggle="tooltip" title="2.3.2.2.3 Ver Generales Link de Video en Vivo">
                                                                            <?php if ($super == 1) { ?>
                                                                                <a href="../update/formUpdateVerifDiariaVeh.php?id=<?php echo $idP ?>" class="btn btn-secondary"><i class="fa-solid fa-eye"></i>
                                                                                </a>
                                                                            <?php  } else if ($verGralComVerifDiariaVeh == 1) { ?>
                                                                                <a href="../update/formUpdateVerifDiariaVeh.php?id=<?php echo $idP ?>" class="btn btn-secondary"><i class="fa-solid fa-eye"></i>
                                                                                </a>
                                                                            <?php } else { ?>
                                                                                <a class="btn btn-outline-danger" id="verGralComVerifDiariaVeh"><i class="fa-solid fa-comments"></i>
                                                                                </a>
                                                                            <?php } ?>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarComVerifDiariaVeh.php';
                                                require '../components/modal-eliminarComVerifDiariaVehSuper.php';
                                                require '../components/modal-verGralComVerifDiariaVeh.php';
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
                                                <th>Asesor</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Último Registro</th>
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
           // sinRegistro ¡SIN REGISTRO, AGREGA UNA COMPROBACIÓN PARA HABILITAR ESTE BÓTON --------------------------------------------------------------
           $(document).ready(function() {
            $("#sinRegistro ").click(function() {
                toastr["error"]("¡SIN REGISTRO, AGREGA UNA COMPROBACIÓN PARA HABILITAR ESTE BÓTON!")

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

        // regComVerifDiariaVeh 2.3.2.2.1 REGISTRAR COMPROBACIÓN LINK DE VIDEO EN VIVO --------------------------------------------------------------
        $(document).ready(function() {
            $("#regComVerifDiariaVeh ").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.2.2.1 REGISTRAR COMPROBACIÓN LINK DE VIDEO EN VIVO, consulta al administrador!")

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

        // eliComVerifDiariaVeh 2.3.9.2 REGISTRAR COMPROBACIÓN DE PLACA --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliComVerifDiariaVeh ").click(function() {
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

        // regComVerifDiariaVehSuper 2.3.9.3 REGISTRAR COMPROBACIÓN DE PLACA --------------------------------------------------------------
        $(document).ready(function() {
            $("#regComVerifDiariaVehSuper ").click(function() {
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
    </script>
</body>

</html>
<!-- VISTA
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comVerifDiariaVeh, P.estadoProyectoEliminado, P.comSuperVerifDiariaVeh,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,                                    
CV.linkComVerifDiariaVeh, CV.textSupervision, MAX(CV.fecha_hoyV) AS FV, MAX(CV.fecha_hoyS) AS FS, MAX(CV.id_comverifdiariaveh) AS id_comverifdiariaveh,
UV.nombres AS nombreV, UV.aPaterno AS paternoV, UV.aMaterno AS maternoV,
US.nombres AS nombreS, US.aPaterno AS paternoS, US.aMaterno AS maternoS,
ASE.asesor
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
LEFT JOIN comverifdiariaveh CV ON P.id_proyecto = CV.id_proyecto
LEFT JOIN usuarios UV ON CV.id_capCV = UV.id_usuario
LEFT JOIN usuarios US ON CV.id_capCS = US.id_usuario
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 GROUP BY P.id_proyecto  
ORDER BY P.nProyecto  DESC; -->