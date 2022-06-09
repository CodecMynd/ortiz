<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Verificación Actividad Mínima Diaria | <?php echo $nomComp ?></title>

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
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <h1 class="m-0">Tabla 2.3.4 Verificación Actividad Mínima Diaria</h1>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registros -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tablas Consultadas</strong></h2>
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
                                <div class="card-footer" style="height: 50px;">
                                    <marquee width="100%" behavior="alternate">
                                        <marquee behavior="alternate">
                                            <p>Consulta optimizada, ultima actualización: <strong>05/05/2022</strong></p>
                                        </marquee>
                                    </marquee>
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
                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaActMinDia == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableActMinDia" class="display compact table-bordered table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Asesor</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Top</th>
                                                <th>Asesoramiento Técnico</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Último Registro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Color</th>
                                                <th>Asesor</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Top</th>
                                                <th>Asesoramiento Técnico</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Status Comprobación</th>
                                                <th>Status Supervisión</th>
                                                <th>Último Registro</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <?php
                                    desconectar();
                                    ?>
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
    <div id="divModal"></div>
    <script>
        function mostarDetalles(id_proyecto) {
            var ruta = '../components/modal-VerGralActMinDiaria.php?id_proyecto=' + id_proyecto;
            $.get(ruta, function(data) {
                $('#divModal').html(data);
                $('#modal-verGralActMinDiaria').modal('show');
            });
        }
    </script>

    </script>
    <!-- avisos -->
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
create view vactMinDiaria as
SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comActMinDia, P.estadoProyectoEliminado, P.comSuperActMinDia,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,                                    
MAX(AM.fecha_hoyV) AS FV, MAX(AM.fecha_hoyS) AS FS, MAX(AM.id_ActMinDiaria) AS id_ActMinDiaria,
ASE.asesor
FROM proyectos P
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
LEFT JOIN actmindiaria AM ON P.id_proyecto = AM.id_proyecto
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 GROUP BY P.id_proyecto;-->