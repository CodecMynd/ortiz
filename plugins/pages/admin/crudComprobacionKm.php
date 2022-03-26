<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Comprobación de Kilometraje | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla 2.3.10 Lista Comprobación de Kilometraje</h1>
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
                        <div class="col-md-11 col-sm-12">
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
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comKm,
                                    C.nombres, C.aPaternoCliente, C.aMaternoCliente,
                                    V.placa, M.marca, Mo.modelo, A.anio, Co.color
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C on P.id_cliente = C.id_cliente
                                      WHERE P.estadoProyectoEliminado = 1
                                    ORDER BY nProyecto DESC";
                                } else if ($verTablaComKm == 1) {
                                    $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comKm,
                                    C.nombres, C.aPaternoCliente, C.aMaternoCliente,
                                    V.placa, M.marca, Mo.modelo, A.anio, Co.color
                                    FROM proyectos P 
                                    INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                    INNER JOIN colores Co On V.id_color = Co.id_color
                                    INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                    INNER JOIN anios A ON V.id_anio = A.id_anio 
                                    INNER JOIN clientes C on P.id_cliente = C.id_cliente
                                      WHERE P.estadoProyectoEliminado = 1
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
                                    } else if ($verTablaComKm == 0) { ?>
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
                                                <th>Cliente</th>
                                                <th>Status Comprobación</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $idP = $row['id_proyecto'];
                                                $cK = $row['comKm'];
                                                $nP = $row['nProyecto'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 12%;">
                                                        <?php echo $row['nProyecto']?>
                                                    </td>
                                                    <td style="width: 10%;">
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
                                                        if ($cK == 0) {
                                                            echo '<h6><span class="badge badge-danger badge-pill">Sin Comprobar Kilometraje</span></h6>';
                                                        } else if ($cK == 1) {
                                                            echo '<h6><span class="badge badge-success badge-pill">Kilometraje Comprobado</span></h6>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width:2em;">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.10.1 Registrar Comprobación de Kilometraje">
                                                                                <?php if ($super == 1 && $cK == 0) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".regComKm-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                    </button>
                                                                                <?php } else if ($super == 1 && $cK == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="regComKm"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                                } else if ($regComKm == 1 && $cK == 0) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".regComKm-<?php echo $idP ?>"><i class="fa-solid fa-pencil"></i>
                                                                                    </button>
                                                                                <?php  } else if ($regComKm == 1 && $cK == 1) {
                                                                                    echo '<a class="btn btn-outline-danger" id="regComKm"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                                } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="regComKm"><i class="fa-solid fa-pencil"></i>
                                                                            </a>';
                                                                                } ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.10.2 Eliminar Comprobación de Kilometraje">
                                                                                <?php
                                                                                if ($super == 1 && $cK == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComKm<?php echo $row["id_proyecto"] ?> "><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($super == 1 && $cK == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="noEliComKm"><i class="fas fa-trash-alt"></i>
                                                                                </a>';
                                                                                } else if ($eliComKm == 1 && $cK == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".borrarComKm<?php echo $row["id_proyecto"] ?>"><i class="fas fa-trash-alt"></i>
                                                                                    </a>
                                                                                <?php  } else if ($eliComKm == 1 && $cK == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="noeliComPlacas"><i class="fas fa-trash-alt"></i>
                                                                                    </a>';
                                                                                } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliComKm"><i class="fas fa-trash-alt"></i>
                                                                                </a>';
                                                                                }
                                                                                ?>

                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.10.3 Ver Generales Comprobación de Kilometraje">
                                                                                <?php if ($super == 1) { ?>
                                                                                    <button class="btn btn-secondary" data-toggle="modal" data-target=".verGralComKm<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                                                <?php  } else if ($verGralComKm == 1) { ?>
                                                                                    <a class="btn btn-secondary" data-toggle="modal" data-target=".verGralComKm-<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-eye"></i></a>
                                                                                <?php } else { ?>
                                                                                    <a class="btn btn-outline-danger" id="verGralComKm"><i class="fa-solid fa-comments"></i>
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
                                                require '../components/modal-regComKm.php';
                                                require '../components/modal-eliminarComKm.php';
                                                require '../components/modal-verGralComKm.php';
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
                                                <th>Status Comprobación</th>
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
        // noEliComPlacas NO TIENE COMPROBACION DE PLACA --------------------------------------------------------------
        $(document).ready(function() {
            $("#noEliComKm ").click(function() {
                toastr["error"]("¡NO TIENE COMPROBACION DE KILOMETRAJE, NO HAY NADA QUE BORRAR!")

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
        $('.btnBorrarComKm').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Comprobación de Kilometraje? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteComKm.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "crudComprobacionKm.php";
                        $('#respuestaProyectoBorrado').html(data);
                    }
                });
            }
            return false;
        });
    </script>
</body>

</html>