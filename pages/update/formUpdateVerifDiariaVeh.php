<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>2.3.2.2.5 Ver Generales Verificación y Supervisión | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
    @media (min-width:320px) and (max-width:425px) {
        .content-header {
            margin-bottom: 90px;
            width: 100%;

        }

        .content-header h1 {
            font-size: 20px;
            padding: 10px 10px 5px;
            text-align: center;
        }
    }
</style>
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
                            <h1 class="float-left m-0">2.3.2.2.5 Ver Generales Verificación y Supervisión</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Todos los campos son obligatorios</h3>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                            
                                <div class="card-body">
                                <?php
                                $id_proyecto = $_GET['id'];
                                $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                                V.placa, Co.color, M.marca, Mo.modelo, An.anio, A.asesor
                                from proyectos P 
                                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                                INNER JOIN colores Co ON V.id_color = Co.id_color
                                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                                INNER JOIN anios An ON V.id_anio = An.id_anio 
                                   LEFT JOIN comasesor C ON P.id_proyecto = C.id_proyecto
                                LEFT JOIN asesores A ON C.id_asesor = A.id_asesor
                                WHERE P.id_Proyecto = $id_proyecto";
                                $resultado1 = mysqli_query($conexion, $query1);
                                $row1 = $resultado1->fetch_assoc();
                                ?>
                                <table class="table table-sm table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Núm. de Proyecto</th>
                                            <th>Número de Orden</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Año</th>
                                            <th>Placas</th>
                                            <th>Color </th>
                                            <th>Asesor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="width: 5%;"><span class='badge badge-dark badge-pill'><?php echo $row1['id_proyecto'] ?></span></th>
                                            <td style="width: 10%;"><?php echo $row1['nProyecto'] ?></td>
                                            <td style="width: 10%;"><?php echo $row1['nOrden'] ?></td>
                                            <td><?php echo $row1['marca'] ?></td>
                                            <td><?php echo $row1['modelo'] ?></td>
                                            <td><?php echo $row1['anio'] ?></td>
                                            <td><?php echo $row1['placa'] ?></td>
                                            <td><?php echo $row1['color'] ?></td>
                                            <td><?php if (empty($row1['asesor'])) {
                                                    echo 'Sin Asesor ';
                                                } else {
                                                    echo $row1['asesor'];
                                                } ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <hr>
                                

                                <?php
                                $cont = 0;
                                // $query = "SELECT * FROM verificacion WHERE id_Proyecto = $id_proyecto";
                                $query = "SELECT P.id_proyecto, P.nProyecto, P.comSuperVerifDiariaVeh, P.comVerifDiariaVeh,
                                V.id_comverifdiariaveh, V.linkComVerifDiariaVeh, V.textSupervision, 
                                V.fecha_hoyV AS FV, V.fecha_hoyS AS FS, ASE.asesor, V.fecha_creacionV, V.fecha_creacionS,
                                UV.nombres AS nombreV, UV.aPaterno AS paternoV, UV.aMaterno AS maternoV,
                                US.nombres AS nombreS, US.aPaterno AS paternoS, US.aMaterno AS maternoS
                                from proyectos P
                                INNER JOIN comverifdiariaveh V ON P.id_proyecto = V.id_proyecto
                                LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
                                LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
                                LEFT JOIN usuarios UV ON V.id_capCV = UV.id_usuario
                                LEFT JOIN usuarios US ON V.id_capCS = US.id_usuario
                                WHERE P.id_Proyecto = $id_proyecto ORDER BY id_comverifdiariaveh DESC";
                                $resultado = mysqli_query($conexion, $query);
                                ?>
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Asesor</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisión</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $id_proyecto = $row['id_proyecto'];
                                                $idV = $row['id_comverifdiariaveh'];
                                                $textSupervision = $row['textSupervision'];
                                                $linkComVerifDiariaVeh = $row['linkComVerifDiariaVeh'];
                                                $hoyS = $row['FS'];
                                                $fecha = new DateTime($hoyS);
                                                $fechaS = $fecha->format('d-m-Y');

                                                $asesor = $row['asesor'];

                                                $hoyV = $row['FV'];
                                                $fecha = new DateTime($hoyV);
                                                $fechaV = $fecha->format('d-m-Y');
                                                $fecha_sistema;
                                                $fechaV = $row['FV'];
                                                $fechaS = $row['FS'];
                                                $com = $row['comVerifDiariaVeh'];
                                                $sup = $row['comSuperVerifDiariaVeh'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td style="width: 7%;">
                                                        <?php echo $row['nProyecto'] ?>
                                                    </td>
                                                    <td style="width: 15%;">
                                                        <?php echo $row['linkComVerifDiariaVeh'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombreV'] . ' ' . $row['paternoV'] . ' ' . $row['maternoV']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if (empty($hoyV)) {
                                                            echo '';
                                                        } else {
                                                            // $fecha = new DateTime($fechaV);
                                                            // echo $fecha_m_d_y = $fecha->format('d-m-Y');
                                                            echo $row['fecha_creacionV'];
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($asesor == '') {
                                                            echo "<h6><span class='badge badge-danger badge-pill'>Sin Asesor</span></h6>";
                                                        } else {
                                                            echo "<h6><span class='badge badge-success badge-pill'>{$row['asesor']}</span></h6>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="width: 15%;">
                                                        <?php echo $row['textSupervision'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombreS'] . ' ' . $row['paternoS'] . ' ' . $row['maternoS']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if (empty($hoyS)) {
                                                            echo '';
                                                        } else if ($hoyS != '0000-00-00') {
                                                            // $fecha = new DateTime($fechaS);
                                                            // echo $fecha_m_d_y = $fecha->format('d-m-Y');
                                                            echo $row['fecha_creacionS'];
                                                        }
                                                        ?>
                                                    </td>

                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Marcas"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu" style="min-width:2em">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.2.2.4 Eliminar Comprobación Link de Video en Vivo">
                                                                                <?php if ($super == 1 or $eliComVerifDiariaVehv == 1) { ?>
                                                                                    <a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarComVerifDiaria-<?php $hoyV ?>'><i class='fas fa-trash-alt'></i></a>

                                                                                <?php } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliComVerifDiariaVehv"><i class="fas fa-trash-alt"></i></a>';
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.3.2.2.5 Eliminar Supervisión Link de Video en Vivo">
                                                                                <?php if ($super == 1 and $sup == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($super == 1 and $sup == 1) { ?>
                                                                                    <a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarComSuperDiaria-<?php $row['id_comverifdiariaveh'] ?>'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else if ($eliComVerifDiariaVehSuper == 1 and $sup == 0) {
                                                                                    echo '<a class="btn btn-outline-danger" id="sinEliminar"><i class="fas fa-trash-alt"></i></a>';
                                                                                } else if ($eliComVerifDiariaVehSuper == 1 and $sup == 1) { ?>
                                                                                    <a class='btn btn-secondary' data-toggle='modal' data-target='.eliminarComSuperDiaria-<?php $row['id_comverifdiariaveh'] ?>'><i class='fas fa-trash-alt'></i></a>
                                                                                <?php } else {
                                                                                    echo '<a class="btn btn-outline-danger" id="eliComVerifDiariaVehSuper"><i class="fas fa-trash-alt"></i></a>';
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
                                                include '../components/modal-eliminarComVerifDiaria.php';
                                                include '../components/modal-eliminarComSuperDiaria.php';
                                                ?>
                                            <?php
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Link Verificación</th>
                                                <th>Capturista Verificador</th>
                                                <th>Fecha Registro Verificación</th>
                                                <th>Asesor</th>
                                                <th>Supervisión</th>
                                                <th>Capturista Supervisor</th>
                                                <th>Fecha Registro Supervisor</th>
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
    require '../components/scripts-dataTables.php';
    ?>
    <script>
        // 2.3.2.2.2 EliminAR Comprobacion ------------------------------------------------------------
        $('.btnBorrarComverifdiariaveh').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Comprobación? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteRegVerifDiariaVeh.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "formUpdateVerifDiariaVeh.php";
                        $('#respuesta').html(data);
                    }
                });
            }
            return false;
        });

        // 2.3.2.2.4 Eliminar Supervisión ------------------------------------------------------------
        $('.btnBorrarComsuperdiariaveh').click(function(e) {
            e.preventDefault();
            if (confirm("¿Estás seguro de eliminar esta Supervisión? Una vez borrado ya no se podrá recuperar la información.")) {
                var id = $(this).attr("id");

                var dataString = 'id=' + id;
                url = "../delete/deleteRegSuperDiariaVeh.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: dataString,
                    success: function(data) {
                        window.location.href = "formUpdateVerifDiariaVeh.php";
                        $('#respuesta').html(data);
                    }
                });
            }
            return false;
        });

        // 2.3.2.2.4  ELIMINAR COMPROBACION LINK DE VIDEO EN VIVO --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliComVerifDiariaVehv").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.2.2.4  ELIMINAR COMPROBACION LINK DE VIDEO EN VIVO, consulta al administrador!")

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
        // 2.3.2.2.5  ELIMINAR SUPERVISION LINK DE VIDEO EN VIVO --------------------------------------------------------------
        $(document).ready(function() {
            $("#eliComVerifDiariaVehSuper").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.2.2.5  ELIMINAR SUPERVISION LINK DE VIDEO EN VIVO, consulta al administrador!")

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
        // NO PUEDES ELIMINAR UN REGISTRO  DE SUPERVISIÓN VACIO --------------------------------------------------------------
        $(document).ready(function() {
            $("#sinEliminar").click(function() {
                toastr["error"]("¡NO PUEDES ELIMINAR UN REGISTRO  DE SUPERVISIÓN VACIO!")

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
        // NO PUEDES ELIMINAR COMPROBACION SIN ANTES BORRAR UNA SUPERVISION --------------------------------------------------------------
        $(document).ready(function() {
            $("#yaRegistro").click(function() {
                toastr["error"]("¡NO PUEDES ELIMINAR COMPROBACION SIN ANTES BORRAR UNA SUPERVISION!")

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