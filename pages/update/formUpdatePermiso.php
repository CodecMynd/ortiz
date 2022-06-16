<?php

require '../components/head-main.php';
?>
<title>1.1.4 Asignar Permisos | <?php echo $nomComp ?></title>

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
                            <h1 class="float-left m-0">1.1.4 Asignar Permisos</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $id_usuario = $_GET['id'];
            $query = "SELECT * FROM permisos WHERE id_usuario = $id_usuario";
            $respuesta = mysqli_query($conexion, $query);
            $rowPer = $respuesta->fetch_assoc();


            $queryU = "SELECT * FROM usuarios WHERE  id_usuario =  $id_usuario";
            $resultado = mysqli_query($conexion, $queryU);
            while ($row = $resultado->fetch_assoc()) {
                $user = $row['id_usuario'];
                $nombres = $row['nombres'];
                $aPaterno = $row['aPaterno'];
                $aMaterno = $row['aMaterno'];
                $admin = $row['admin'];
                $nombreComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
            }
            ?>

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h2 class="card-title">*Asignar permisos a: <strong><?php echo $nombreComp ?></strong> </h2>
                                    <div class="card-tools">
                                        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                    </div>
                                </div>

                                <form id="formAsigPermUsuario" method="POST">
                                    <div class="seleccionarTodo" id="seleccionarTodo">
                                        <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario ?>">
                                        <div class="card-body">
                                            <section class="content">
                                                <div class="container-fluid">
                                                    <h5 class="mb-2">Habilita los check para asignar los Permisos</h5>
                                                    <div class="row justify-content-center">
                                                        <!-- 0.0 Indicadores -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>0.0 Indicadores</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chart-line"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">0.1 Estatus Para Envío de Mensajes</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="indMensajes" id="indMensajes" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['indMensajes'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chart-line"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">0.2 Estatus Para Cambio de Asesor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="indCambioAsesor" id="indCambioAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['indCambioAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chart-line"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">0.3 Estatus Sin Comprobación Ni Supervisión de Placas</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="indSinComSupPlacas" id="indSinComSupPlacas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['indSinComSupPlacas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chart-line"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">0.4 Estatus Cambios de Semana de Alta</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="indCambioSemAlta" id="indCambioSemAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['indCambioSemAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chart-line"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">0.5 Estatus Cambios de Semana de Solicitud de Alta</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="indCambioSemSolAlta" id="indCambioSemSolAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['indCambioSemSolAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chart-line"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">0.6 Estatus Vehículos sin Asignar Asesor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="indVehSinAsignarAsesor" id="indVehSinAsignarAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['indVehSinAsignarAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chart-line"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">0.7 Estatus Incidencias</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="indIncidencias" id="indIncidencias" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['indIncidencias'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.1 Usuarios -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.1 Usuarios</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.1.1 Editar Usuarios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="editarUsu" id="editarUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" <?php if ($rowPer['editarUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-key"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.1.2 Asignar Contraseña</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="asignarCon" id="asignarCon" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['asignarCon'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.1.3 Eliminar Usuario</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliminarUsu" id="eliminarUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliminarUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.1.4 Asignar Permisos</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="asignarPer" id="asignarPer" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['asignarPer'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-user-plus"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.1.5 Nuevo Usuario</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="nuevoUsu" id="nuevoUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['nuevoUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.1.6 Ver Tabla Usuarios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaUsuario" id="verTablaUsuario" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaUsuario'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.2 Marcas -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.2 Marcas</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.2.1 Registro de marcas</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regMarca" id="regMarca" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regMarca'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.2.2 Modificar Marca</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modMarca" id="modMarca" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modMarca'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.2.3 Eliminar Marca</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliminaMar" id="eliminaMar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliminaMar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.2.4 Ver Tabla Marca</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaMarca" id="verTablaMarca" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaMarca'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.3 Modelos -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.3 Modelos</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.3.1 Registro de Modelo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regModelo" id="regModelo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regModelo'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.3.2 Modificar Modelo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modModelo" id="modModelo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modModelo'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.3.3 Eliminar Modelo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliminarMod" id="eliminarMod" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliminarMod'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.3.4 Ver tabla Modelo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaModelo" id="verTablaModelo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaModelo'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.4 Años -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.4 Años</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.4.1 Registro de Años</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regAnios" id="regAnios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regAnios'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.4.2 Modificar Años</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modAnios" id="modAnios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modAnios'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.4.3 Eliminar Año</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliminarAnio" id="eliminarAnio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliminarAnio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.4.4 Ver Tabla Año</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAnio" id="verTablaAnio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAnio'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.5 Colores -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.5 Colores</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.5.1 Registro de Colores</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regColor" id="regColor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regColor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.5.2 Modificar color</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modColor" id="modColor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modColor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.5.3 Eliminar Color</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliminarCol" id="eliminarCol" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliminarCol'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.5.4 Ver Tabla Color</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaColor" id="verTablaColor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaColor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.6.1 Semanas Alta-->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.6 Semanas</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <!-- 1.6.1 Semanas Alta -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>1.6.1 Semanas Alta</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.1.1 Registro de Semana de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSemana" id="regSemana" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSemana'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.1.2 Eliminar Semana de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSemana" id="eliSemana" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSemana'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.1.3 Ver Tabla Semanas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSemana" id="verTablaSemana" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSemana'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 1.6.2 Semanas Cobro -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>1.6.2 Semanas Cobro</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.2.1 Registro de Semana Cobro</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSemanaCobro" id="regSemanaCobro" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSemanaCobro'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.2.2 Eliminar Semana Cobro</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSemanaCobro" id="eliSemanaCobro" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSemanaCobro'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.2.3 Ver Tabla Semanas Cobro</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSemanaCobro" id="verTablaSemanaCobro" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSemanaCobro'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 1.6.3 Semanas de Solicitud de Alta -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>1.6.3 Semanas de Solicitud de Alta</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.3.1 Registro Semana Solicitud de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSemSolAlta" id="regSemSolAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSemSolAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.3.2 Eliminar Semana Solicitud de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSemSolAlta" id="eliSemSolAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSemSolAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.6.3.3 Ver Tabla Semanas de Solicitud de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSemSolAlta" id="verTablaSemSolAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSemSolAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.7 Agentes -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.7 Agentes</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.7.1 Registro Agente Servicio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regAgente" id="regAgente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regAgente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.7.2 Eliminar Agente Servicio</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliAgente" id="eliAgente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliAgente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.7.3 Ver Tabla Agentes</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAgente" id="verTablaAgente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAgente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.8 Forma de Pago -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.8 Forma de Pago</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.8.1 Registro Forma de Pago</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regFormaPago" id="regFormaPago" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regFormaPago'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.8.2 Eliminar Forma de Pago</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliFormaPago" id="eliFormaPago" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliFormaPago'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.8.3 Ver Tabla Forma de Pago</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaFormaPago" id="verTablaFormaPago" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaFormaPago'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.9 Técnicos -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.9 Técnicos</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <!-- 1.9.1 Técnico Armador -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>1.9.1 Técnico Armador</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.1.1 Registro de Técnico Armador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regTecArmador" id="regTecArmador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regTecArmador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.1.2 Modificar Técnico Armador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="modTecArmador" id="modTecArmador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modTecArmador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.1.3 Eliminar Técnico Armador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliTecArmador" id="eliTecArmador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliTecArmador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.1.4 Ver Tabla Técnico Armador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaTecArmador" id="verTablaTecArmador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaTecArmador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 1.9.2 Técnico Montador -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>1.9.2 Técnico Montador</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.2.1 Registro de Técnico Montador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regTecMontador" id="regTecMontador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regTecMontador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.2.2 Modificar Técnico Montador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="modTecMontador" id="modTecMontador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modTecMontador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.2.3 Eliminar Técnico Montador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliTecMontador" id="eliTecMontador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliTecMontador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">1.9.2.4 Ver Tabla Técnico Montador</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaTecMontador" id="verTablaTecMontador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaTecMontador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.10 Asesores -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.10 Asesores</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.10.1 Registro de Asesor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regAsesor" id="regAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.10.2 Modificar Asesor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modAsesor" id="modAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.10.3 Eliminar Asesor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliAsesor" id="eliAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.10.4 Ver Tabla Asesor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAsesor" id="verTablaAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.11 Permisos de Usuarios -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.11 Ver Permisos de Usuarios</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.11.1 permisos de Usuarios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verPermisoUsuario" id="verPermisoUsuario" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verPermisoUsuario'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.11.2 Ver Tabla permisos de Usuarios</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaPermisoUsuario" id="verTablaPermisoUsuario" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaPermisoUsuario'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 1.12 Proveedores -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>1.12 Proveedores</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.12.1 Nuevo Proveedor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="nuevoProvee" id="nuevoProvee" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['nuevoProvee'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.12.2 Editar Proveedor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modProvee" id="modProvee" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modProvee'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.12.3 Eliminar Proveedor</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliProvee" id="eliProvee" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliProvee'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">1.12.4 Ver Tabla Proveedores</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaProvee" id="verTablaProvee" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaProvee'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 2.1 Vehículos -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.1 Vehículos</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.1.1 Registro de Vehículo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regVehiculo" id="regVehiculo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regVehiculo'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.1.2 Modificar Vehículo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modVehiculo" id="modVehiculo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modVehiculo'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.1.3 Eliminar Vehículo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliVehiculo" id="eliVehiculo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliVehiculo'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.1.4 Ver Tabla Vehículo</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaVeh" id="verTablaVeh" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaVeh'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 2.2 Clientes -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.2 Clientes</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.2.1 Registro de Cliente</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regCliente" id="regCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.2.2 Modificar Cliente</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modCliente" id="modCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.2.3 Eliminar Cliente</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliCliente" id="eliCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.2.4 Ver Tabla Cliente</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaCli" id="verTablaCli" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaCli'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >2.3 Proyectos -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.3 Proyectos</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3. Proyectos</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-12 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.1 Registro de Proyecto</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regProyecto" id="regProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-12 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.2 Ver Tabla Lista de Proyectos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="listProyecto" id="listProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['listProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3 Modificar Proyectos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="modProyecto" id="modProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4 Eliminar Proyectos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliProyecto" id="eliProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-file-pdf"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.5 Descarga PDF Proyectos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="pdfProyecto" id="pdfProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['pdfProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6 Ver Generales Lista de Proyectos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralProy" id="verGralProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.2.2 Verificación Diaria Vehículos Activos -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.2.2 Verificación Diaria Vehículos Activos</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.2.2.1 Registrar Comprobación Link de Video en Vivo</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComVerifDiariaVeh" id="regComVerifDiariaVeh" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComVerifDiariaVeh'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.2.2.2 Registrar Supervisión Link de Video en Vivo</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComVerifDiariaVehSuper" id="regComVerifDiariaVehSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComVerifDiariaVehSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.2.2.3 Ver Generales Link de Video en Vivo</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComVerifDiariaVeh" id="verGralComVerifDiariaVeh" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComVerifDiariaVeh'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.2.2.4 Eliminar Comprobación Link de Video en Vivo</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComVerifDiariaVehv" id="eliComVerifDiariaVehv" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComVerifDiariaVehv'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.2.2.5 Eliminar Supervisión Link de Video en Vivo</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComVerifDiariaVehSuper" id="eliComVerifDiariaVehSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComVerifDiariaVehSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.2.2.5 Ver Tabla Verificacion Diaria Vehículos Activos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComVerifDiariaVeh" id="verTablaComVerifDiariaVeh" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComVerifDiariaVeh'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.3 Verificación Diaria de Baterías -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.3 Verificación Diaria de Baterías</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.1 Registro Comprobación Verificación Diaria Baterías</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComVerifDiaBat" id="regComVerifDiaBat" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComVerifDiaBat'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.2 Registro Supervisión de Comprobación Diaria Baterías</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSupComVerifDiaBat" id="regSupComVerifDiaBat" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSupComVerifDiaBat'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.3 Ver Generales Incidencias</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralIncidencias" id="verGralIncidencias" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralIncidencias'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.4 Ver Generales Verificación Diaria de Baterías</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralVerDiaBat" id="verGralVerDiaBat" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralVerDiaBat'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.5 Eliminar Incidencia</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliIncidencia" id="eliIncidencia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliIncidencia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.6 Eliminar Comprobación Recepción de Piezas Dañadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComVerifDiaBat" id="eliComVerifDiaBat" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComVerifDiaBat'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.7 Eliminar Supervisión de Comprobación Recepción de Piezas Dañadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSupComVerifDiaBat" id="eliSupComVerifDiaBat" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSupComVerifDiaBat'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.3.8 Ver Tabla Verificación Diaria de Baterías</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaVerifDiaBat" id="verTablaVerifDiaBat" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaVerifDiaBat'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.4 Actividad Mínima Diaria  -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.4 Actividad Mínima Diaria </strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4.1 Registro Comprobación de Actividad Mínima Diaria</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComActMinDia" id="regComActMinDia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComActMinDia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4.2 Registro Supervisión de Comprobación de Actividad Mínima Diaria</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComSuperActMinDia" id="regComSuperActMinDia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComSuperActMinDia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4.3 Ver Generales Actividad Mínima Diaria</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralActMinDia" id="verGralActMinDia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralActMinDia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4.4 Eliminar Comprobación de Actividad Mínima Diaria</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComActMinDia" id="eliComActMinDia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComActMinDia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4.5 Eliminar Supervisión de Comprobación de Actividad Mínima Diaria</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComSuperActMinDia" id="eliComSuperActMinDia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComSuperActMinDia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4.6 Ver tabla Actividad Mínima Diaria</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaActMinDia" id="verTablaActMinDia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaActMinDia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.5 Asignación de Top -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.5 Asignación de Top</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body ">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.5.1 Registro Motivo Asignación de Top</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regAsignacionTop" id="regAsignacionTop" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regAsignacionTop'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.5.2 Eliminar Motivo Asignación de Top</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliAsignacionTop" id="eliAsignacionTop" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliAsignacionTop'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.5.3 Ver Generales Asignación de Top</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralAsignacionTop" id="verGralAsignacionTop" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralAsignacionTop'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.5.4 Ver Tabla Asignación de Top</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="vertablaAsignacionTop" id="vertablaAsignacionTop" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['vertablaAsignacionTop'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.6 Programa de Asesoramiento Técnico -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.6 Programa de Asesoramiento Técnico</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body ">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.1 Registro Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regAseTec" id="regAseTec" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regAseTec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.2 Eliminar Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliAseTec" id="eliAseTec" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliAseTec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.3 Ver Generales Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralAseTec" id="verGralAseTec" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralAseTec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.4 Ver Tabla Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="vertablaAseTec" id="vertablaAseTec" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['vertablaAseTec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.6.1 Seguimiento Diario Programa de Asesoramiento Técnico -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.6.1 Seguimiento Diario Programa de Asesoramiento Técnico</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.1.1 Registro Comprobación de Seguimiento Diario Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComSegDiaAseTecnico" id="regComSegDiaAseTecnico" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComSegDiaAseTecnico'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.1.2 Registro Supervisión de Seguimiento Diario Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSuperSegDiaAseTecnico" id="regSuperSegDiaAseTecnico" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSuperSegDiaAseTecnico'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.1.3 Ver Generales Seguimiento Diario Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralSegDiaProAseTecnico" id="verGralSegDiaProAseTecnico" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralSegDiaProAseTecnico'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.1.4 Eliminar Comprobación de Seguimiento Diario Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComSegDiaAseTecnico" id="eliComSegDiaAseTecnico" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComSegDiaAseTecnico'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.6.1.5 Eliminar Supervisión de Seguimiento Diario Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComSegDiaAseTecnicoSuper" id="eliComSegDiaAseTecnicoSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComSegDiaAseTecnicoSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.4.6 Ver tabla Seguimiento Diario Programa de Asesoramiento Técnico</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSegDiaProAseTecnico" id="verTablaSegDiaProAseTecnico" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSegDiaProAseTecnico'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.7 Captura de Valor Venta Inicial -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.7 Captura de Valor Venta Inicial</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.7 Tabla Captura de Valor Venta Inicial</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaCapValVenInicial" id="verTablaCapValVenInicial" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaCapValVenInicial'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.7.1 Capturar Valor Venta Inicial <strong>(1)</strong></span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regCapValVenInicial" id="regCapValVenInicial" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regCapValVenInicial'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.7.2 Capturar Valor Venta Inicial <strong>(+1)</strong></span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="perRegCapValVenInicial" id="perRegCapValVenInicial" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['perRegCapValVenInicial'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.7.3 Ver Generales Captura de Valor Venta Inicial</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralCapValVenInicial" id="verGralCapValVenInicial" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralCapValVenInicial'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.9.1 Comprobación de Placas -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.9.1 Comprobación de Placas</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.1.1 Registro Comprobación de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComPlacas" id="regComPlacas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComPlacas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.1.2 Eliminar Comprobación de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComPlacas" id="eliComPlacas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComPlacas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.1.3 Registro Supervisión de Comprobación de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComPlacasSuper" id="regComPlacasSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComPlacasSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.1.4 Eliminar Supervisión de Comprobación de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComPlacasSuper" id="eliComPlacasSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComPlacasSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.1.5 Ver Generales Comprobación de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComPlacas" id="verGralComPlacas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComPlacas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.1.6 Ver tabla Comprobación de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComPlacas" id="verTablaComPlacas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComPlacas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.9.2 Solicitud Cambio de Placas -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.9.2 Solicitud Cambio de Placas</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.2.1 Registro Solicitud Cambio de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="solCambioPlacas" id="solCambioPlacas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['solCambioPlacas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.2.2 Registrar Autorización Cambio de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="cambioPlacasAutorizar" id="cambioPlacasAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['cambioPlacasAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.2.3 Ver Generales Solicitud Cambio de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralcambioPlacasAutorizar" id="verGralcambioPlacasAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralcambioPlacasAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.9.2.4 Ver tabla Solicitud Cambio de Placa</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSolCambioPlacas" id="verTablaSolCambioPlacas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSolCambioPlacas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.10 Comprobación de Kilometraje -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.10 Comprobación de Kilometraje</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.10.1 Registro Comprobación de Kilometraje</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComKm" id="regComKm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComKm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.10.2 Eliminar Comprobación de Kilometraje</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComKm" id="eliComKm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComKm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.10.3 Registro Supervisión de Comprobación de Kilometraje</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComKmSuper" id="regComKmSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComKmSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.10.4 Eliminar Supervisión de Comprobación de Kilometraje</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComKmSuper" id="eliComKmSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComKmSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.10.5 Ver Generales Comprobación de Kilometraje</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComKm" id="verGralComKm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComKm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.10.6 Ver tabla Comprobación de Kilometraje</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComKm" id="verTablaComKm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComKm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.11 Comprobación de 7 Imagenes -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.11 Comprobación de 7 Imagenes</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.11.1 Registro Comprobación de 7 Imagenes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComImg" id="regComImg" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComImg'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.11.2 Eliminar Comprobación de 7 Imagenes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComImg" id="eliComImg" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComImg'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.11.3 Registro Supervisión de Comprobación de 7 Imagenes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComImgSuper" id="regComImgSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComImgSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.11.4 Eliminar Supervisión de Comprobación de 7 Imagenes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComImgSuper" id="eliComImgSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComImgSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.11.5 Ver Generales Comprobación de 7 Imagenes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComImg" id="verGralComImg" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComImg'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.11.6 Ver tabla Comprobación de 7 Imagenes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComImg" id="verTablaComImg" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComImg'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.12 Comprobación de INE Clientes -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.12 Comprobación de INE Clientes</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.12.1 Registro Comprobación de INE Clientes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComCliente" id="regComCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.12.2 Eliminar Comprobación de INE Clientes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComCliente" id="eliComCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.12.3 Registro Supervisión de Comprobación de INE Clientes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComClienteSuper" id="regComClienteSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComClienteSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.12.4 Eliminar Supervisión de Comprobación de INE Clientes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComClienteSuper" id="eliComClienteSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComClienteSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.12.5 Ver Generales Comprobación de INE Clientes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComCliente" id="verGralComCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.12.6 Ver tabla Comprobación de INE Clientes</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComCliente" id="verTablaComCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.13 Comprobación de Documentación Firmada Ingreso de Vehículos -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.13 Comprobación de Documentación Firmada Ingreso de Vehículos</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.13.1 Registro Comprobación de Documentación Firmada Ingreso de Vehículos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComDocuFirm" id="regComDocuFirm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComDocuFirm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.13.2 Eliminar Comprobación de Documentación Firmada Ingreso de Vehículos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComDocuFirm" id="eliComDocuFirm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComDocuFirm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.13.3 Registro Supervisión de Comprobación de Documentación Firmada Ingreso de Vehículos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComDocuFirmSuper" id="regComDocuFirmSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComDocuFirmSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.13.4 Eliminar Supervisión de Comprobación de Documentación Firmada Ingreso de Vehículos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComDocuFirmSuper" id="eliComDocuFirmSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComDocuFirmSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.13.5 Ver Generales Comprobación de Documentación Firmada Ingreso de Vehículos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComDocuFirm" id="verGralComDocuFirm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComDocuFirm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.13.6 Ver tabla Comprobación de Documentación Firmada Ingreso de Vehículos</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComDocuFirm" id="verTablaComDocuFirm" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComDocuFirm'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.14 Comprobación de Garantia -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.14 Comprobación de Garantia</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.14.1 Registro Comprobación de Garantia</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComGarantia" id="regComGarantia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComGarantia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.14.2 Eliminar Comprobación de Garantia</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComGarantia" id="eliComGarantia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComGarantia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.14.3 Registro Supervisión de Comprobación de Garantia</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComGarantiaSuper" id="regComGarantiaSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComGarantiaSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.14.4 Eliminar Supervisión de Comprobación de Garantia</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComGarantiaSuper" id="eliComGarantiaSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComGarantiaSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.14.5 Ver Generales Comprobación de Garantia</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComGarantia" id="verGralComGarantia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComGarantia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.14.6 Ver tabla Comprobación de Garantia</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComGarantia" id="verTablaComGarantia" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComGarantia'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.15.1 Comprobación de Asignación de Asesor -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.15.1 Comprobación de Asignación de Asesor</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.1.1 Registrar Comprobación de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComAsesor" id="regComAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.1.2 Eliminar Comprobación de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComAsesor" id="eliComAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.1.3 Registrar Supervisión Comprobación de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regComAsesorSuper" id="regComAsesorSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComAsesorSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.1.4 Eliminar Supervisión de Comprobación de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliComAsesorSuper" id="eliComAsesorSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComAsesorSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.1.5 Ver Comprobación y Supervisión de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralComAsesor" id="verGralComAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.6 Ver tabla Comprobación de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaComAsesor" id="verTablaComAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaComAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.15.2 Solicitud Cambio de Asesor -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.15.2 Solicitud Cambio de Asesor</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.2.1 Registro Solicitud Cambio de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="solCambioAsesor" id="solCambioAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['solCambioAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.2.2 Registrar Autorización Cambio de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="cambioAsesorAutorizar" id="cambioAsesorAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['cambioAsesorAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.2.3 Ver Generales Solicitud Cambio de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralcambioAsesorAutorizar" id="verGralcambioAsesorAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralcambioAsesorAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.15.2.4 Ver tabla Solicitud Cambio de Asesor</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSolCambioAsesor" id="verTablaSolCambioAsesor" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSolCambioAsesor'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.16 Solicitar Cambio de Semana de Solicitud de Alta -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.16 Solicitar Cambio de Semana de Solicitud de Alta</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.16.1 Solicitar Cambio Semana Solicitud de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="solCamSemanaSolAltas" id="solCamSemanaSolAltas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['solCamSemanaSolAltas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.16.2 Registrar Autorización Cambio Semana Solicitud de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="cambioSolSemSolAltaAutorizar" id="cambioSolSemSolAltaAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['cambioSolSemSolAltaAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.16.3 Ver Generales Solicitud Cambio Semana Solicitud de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralcambioSolSemSolAltaAutorizar" id="verGralcambioSolSemSolAltaAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralcambioSolSemSolAltaAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.16.4 Ver tabla Solicitud Cambio Semana Solicitud de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSolCamSemanaSolAltas" id="verTablaSolCamSemanaSolAltas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSolCamSemanaSolAltas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- 2.3.17.1 Solicitar Cambio Semana de Alta -->
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.3.17 Solicitar Cambio Semana de Alta</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.17.1 Solicitar Cambio Semana de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="solCamSemanaAltas" id="solCamSemanaAltas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['solCamSemanaAltas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.17.2 Registrar Autorización Cambio Semana de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="cambioSolSemAltaAutorizar" id="cambioSolSemAltaAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['cambioSolSemAltaAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.17.3 Ver Generales Solicitud Cambio Semana de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralcambioSemAltaAutorizar" id="verGralcambioSemAltaAutorizar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralcambioSemAltaAutorizar'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.3.17.4 Ver tabla Solicitud Cambio Semana de Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSolCamSemanaAltas" id="verTablaSolCamSemanaAltas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSolCamSemanaAltas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >2.4 Solicitud Alta Proyecto -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.4 Solicitud Alta Proyecto</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.4.1 Ver Tabla Proyectos Activos para realizar Solicitud</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaProyAct" id="verTablaProyAct" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaProyAct'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.4.2 Ver Tabla Registro de Solicitud Alta Proyecto</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaRegSolAltProy" id="verTablaRegSolAltProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaRegSolAltProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.4.3 Registro de Solicitud Alta Proyecto</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSolAltProy" id="regSolAltProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSolAltProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-file-pdf"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.4.4 Descargar PDF Registro de Solicitud Alta Proyecto</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="pdfRegSolAltProy" id="pdfRegSolAltProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['pdfRegSolAltProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.4.5 Eliminar Solicitud Alta Proyecto</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliRegSolAltProy" id="eliRegSolAltProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliRegSolAltProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-comments"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.4.6 Ver Observaciones Solicitud Alta Proyecto</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verObsRegSolAltProy" id="verObsRegSolAltProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verObsRegSolAltProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >2.5 Alta Proyecto -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.5 Alta Proyecto</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.5.1 Registro de Alta</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regAlta" id="regAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.5.2 Eliminar Alta</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliAlta" id="eliAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-file-pdf" verTablaRegSolAltProy></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.5.3 PDF Alta Proyecto</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="pdfAlta" id="pdfAlta" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['pdfAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-photo-film"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.5.4 Ver Link de Video, Observaciones y Generales</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verLinkObsAlta" id="verLinkObsAlta
                                                                                        " data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verLinkObsAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.5.5 Ver Tabla Alta Proyecto</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAlta" id="verTablaAlta
                                                                                        " data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAlta'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >2.6 Proyectos con Códio Identificador -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.6 Proyectos con Código Identificador</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <!-- 2.6.1 Registro de Código Identificador -->
                                                                    <div class="col-md-12 col-sm-6 col-12">
                                                                        <div class="card card-info card-outline collapsed-card">
                                                                            <div class="card-header">
                                                                                <h2 class="card-title"><strong>2.6.1 Registro de Código Identificador</strong></h2>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.1.1 Registro Código Identificador</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="regCodIdentificador" id="regCodIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regCodIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.1.2 Eliminar Código Identificador</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="eliCodIdentificador" id="eliCodIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliCodIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-file-pdf" verTablaRegSolAltProy></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.1.3 PDF Código Identificador</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="pdfCodIdentificador" id="pdfCodIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['pdfCodIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-photo-film"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.1.4 Ver Link de Video, Observaciones y Generales</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="verLinkObsIdentificador" id="verLinkObsIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verLinkObsIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.1.5 Ver Tabla Código Identificador</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="verTablaCodIdentificador" id="verTablaCodIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaCodIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- 2.6.2 Reporte de Alta por Asignar Código -->
                                                                    <div class="col-md-12 col-sm-6 col-12">
                                                                        <div class="card card-info card-outline collapsed-card">
                                                                            <div class="card-header">
                                                                                <h2 class="card-title"><strong>2.6.2 Reporte de Alta por Asignar Código</strong></h2>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.2.1 Ver Tabla Proyectos Dados de Alta Por Asignar Código ID</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="vertablaDadosAltaAsignarCodId" id="vertablaDadosAltaAsignarCodId" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['vertablaDadosAltaAsignarCodId'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.2.2 Ver Generales Proyectos Dados de Alta Por Asignar Código ID</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="verGralDadosAltaAsignarCodId" id="verGralDadosAltaAsignarCodId" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralDadosAltaAsignarCodId'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- 2.6.3 Comprobación Diaria de Altas Por Asignar Código ID -->
                                                                    <div class="col-md-12 col-sm-6 col-12">
                                                                        <div class="card card-info card-outline collapsed-card">
                                                                            <div class="card-header">
                                                                                <h2 class="card-title"><strong>2.6.3 Comprobación Diaria de Altas Por Asignar Código ID</strong></h2>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.3.1 Registrar Comprobación Diaria de Altas Por Asignar Código ID</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="regComDiaAltasAsignarCodId" id="regComDiaAltasAsignarCodId" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComDiaAltasAsignarCodId'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text"> 2.6.3.2 Registrar Supervisión Diaria de Altas Por Asignar Código ID</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="regComDiaAltasAsignarCodIdSuper" id="regComDiaAltasAsignarCodIdSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regComDiaAltasAsignarCodIdSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.3.3 Ver Generales Verificación y Supervisión</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="verGralComDiaAltasAsignarCodId" id="verGralComDiaAltasAsignarCodId
                                                                                        " data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralComDiaAltasAsignarCodId'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.3.4 Eliminar Comprobación Link de Video en Vivo</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="eliComDiaAltasAsignarCodId" id="eliComDiaAltasAsignarCodId" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComDiaAltasAsignarCodId'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.3.5 Eliminar Supervisión Link de Video en Vivo</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="eliComDiaAltasAsignarCodIdSuper" id="eliComDiaAltasAsignarCodIdSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliComDiaAltasAsignarCodIdSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.3.6 Ver Tabla Comprobación Diaria de Altas Por Asignar Código ID</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="vertablaComDiaAltasAsignarCodId" id="vertablaComDiaAltasAsignarCodId" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['vertablaComDiaAltasAsignarCodId'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- 2.6.4 Seguimiento Diario de Cobranza -->
                                                                    <div class="col-md-12 col-sm-6 col-12">
                                                                        <div class="card card-info card-outline collapsed-card">
                                                                            <div class="card-header">
                                                                                <h2 class="card-title"><strong>2.6.4 Seguimiento Diario de Cobranza</strong></h2>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                        <i class="fas fa-plus"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="row justify-content-center">
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.4.1 Registrar Comprobación de Seguimiento Diario de Cobranza</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="regSeguimientoDiarioCobranza" id="regSeguimientoDiarioCobranza" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSeguimientoDiarioCobranza'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.4.2 Registrar Supervisión de Seguimiento Diario de Cobranza</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="regSeguimientoDiarioCobranzaSuper" id="regSeguimientoDiarioCobranzaSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSeguimientoDiarioCobranzaSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.4.3 Ver Generales Seguimiento Diario de Cobranza</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="verGralSeguimientoDiarioCobranza" id="verGralSeguimientoDiarioCobranza
                                                                                        " data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralSeguimientoDiarioCobranza'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.4.4 Eliminar Comprobación Seguimiento Diario de Cobranza</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="eliSeguimientoDiarioCobranza" id="eliSeguimientoDiarioCobranza" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSeguimientoDiarioCobranza'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.4.5 Eliminar Supervisón Seguimiento Diario de Cobranza</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="eliSeguimientoDiarioCobranzaSuper" id="eliSeguimientoDiarioCobranzaSuper" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSeguimientoDiarioCobranzaSuper'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-6 col-12">
                                                                                        <button type="button" class="btn btn-permisos">
                                                                                            <div class="info-box">
                                                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                <div class="info-box-content">
                                                                                                    <span class="info-box-text">2.6.4.6 Ver Tabla Seguimiento Diario de Cobranza</span>
                                                                                                    <span class="info-box-text"> <input type="checkbox" name="vertablaSeguimientoDiarioCobranza" id="vertablaSeguimientoDiarioCobranza" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['vertablaSeguimientoDiarioCobranza'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >2.7 Alta Proyecto -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.7 Supervisión de Registro Código Identificador</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.7.1 Registro de Supervisión Código Identificador</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSuperCodIdentificador" id="regSuperCodIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSuperCodIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.7.2 Eliminar Supervisión de Registro Código Identificador</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSuperCodIdentificador" id="eliSuperCodIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSuperCodIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-photo-film"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.7.3 Ver Link de Video, Observaciones y Generales</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verLinkObsSuperIdentificador" id="verLinkObsSuperIdentificador
                                                                                        " data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verLinkObsSuperIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.7.4 Ver Tabla Código Identificador</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSuperCodIdentificador" id="verTablaSuperCodIdentificador" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSuperCodIdentificador'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >2.8 Consecutivos -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.8 Consecutivos</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-list-ol"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.8.1 Consecutivos Solicitud Alta Proyectos</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="consSolAltaProy" id="consSolAltaProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['consSolAltaProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-list-ol"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.8.2 Consecutivo Alta de Proyectos</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="consAltaProy" id="consAltaProy" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['consAltaProy'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-list-ol"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.8.3 Consecutivo Codigo Identificador</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="consCodId" id="consCodId" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['consCodId'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >2.9 Bitacora -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.9 Bitacora de Proyectos</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">2.9.1 Ver Tabla Bitácora de Proyectos</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaBitacora" id="verTablaBitacora" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaBitacora'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- 2.10 Solicitudes de Cambio -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>2.10 Solicitudes de Cambio </strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <!-- 5.1 Captura Proyectos Extras -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>2.10.1 Solicitud Cambio Valor Alta</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.10.1.1 Solicitar Cambio Valor Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="solAutorizDescuento" id="solAutorizDescuento" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['solAutorizDescuento'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.10.1.2 Autorizar Solicitud Cambio Valor Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="autorizarSolDesc" id="autorizarSolDesc" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['autorizarSolDesc'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.10.1.3 Ver Generales Solicitud de Cambio de Valor Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralSolAutorizDesc" id="verGralSolAutorizDesc" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralSolAutorizDesc'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">2.10.1.4 Ver Tabla Solicitud Cambio Valor Alta</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSolAutorizDescuento" id="verTablaSolAutorizDescuento" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSolAutorizDescuento'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >3.1 Alta Proyecto -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>3.1 Reporte Diferencia Valor Alta Vs. Valor Código Identificador</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.1.1 Registrar Motivo Supervisión</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regMotivoSupVVAvsVCodID" id="regMotivoSupVVAvsVCodID" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regMotivoSupVVAvsVCodID'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.1.2 Modificar Motivo Supervisión</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modMotivoSupVVAvsVCodID" id="modMotivoSupVVAvsVCodID" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modMotivoSupVVAvsVCodID'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.1.3 Ver Observaciones y Generales</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralRepVVAvsVCodID" id="verGralRepVVAvsVCodID" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralRepVVAvsVCodID'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.1.4 Ver Tabla Diferencia Valor Alta Vs. Valor Código Identificador</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaRepVVAvsVCodID" id="verTablaRepVVAvsVCodID" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaRepVVAvsVCodID'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >3.2 Alta Proyecto -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>3.2 Reporte Diferencia Valor Venta Inicial Vs. Valor Alta</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.2.1 Registrar Motivo Supervisión</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regMotivoSupVVIvsVVA" id="regMotivoSupVVIvsVVA" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regMotivoSupVVIvsVVA'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pen-to-square"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.2.2 Modificar Motivo Supervisión</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="modMotivoSupVVIvsVVA" id="modMotivoSupVVIvsVVA" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['modMotivoSupVVIvsVVA'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.2.2 Ver Observaciones y Generales</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralRepVVIvsVVA" id="verGralRepVVIvsVVA" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralRepVVIvsVVA'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">3.2.3 Ver Tabla Diferencia Valor Venta Inicial Vs. Valor Alta</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaRepVVIvsVVA" id="verTablaRepVVIvsVVA" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaRepVVIvsVVA'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >4.1 Recepción de Piezas Dañadas -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>4.1 Recepción de Piezas Dañadas</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <!-- 4.1.1 Recepción de Piezas Dañadas -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.1 Recepción de Piezas Dañadas</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.1 Registrar Link de Desarmado</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regLinkRecPzsDanadas" id="regLinkRecPzsDanadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regLinkRecPzsDanadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.2 Eliminar Link de Desarmado</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliLinkRecPzsDanadas" id="eliLinkRecPzsDanadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliLinkRecPzsDanadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.3 Ver Generales Recepción de Piezas Dañadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralRecPzsDanadas" id="verGralRecPzsDanadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralRecPzsDanadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.4 Registrar Solicitud de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSolRecPzsDanadas" id="regSolRecPzsDanadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSolRecPzsDanadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.5 Eliminar Solicitud de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSolRecPzsDanadas" id="eliSolRecPzsDanadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSolRecPzsDanadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.6 Registro de Compra Inicial</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="perRegCompraInicial" id="perRegCompraInicial" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['perRegCompraInicial'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.7 Eliminar Registro de Compra Inicial</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliRegCompraInicial" id="eliRegCompraInicial" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliRegCompraInicial'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.1.2 Cotizando -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.2 Cotizando </strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.2.1 Enviar de Cotizando a Pre-Autorización </span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPreAuto" id="enviarPreAuto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPreAuto'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.2.2 Ver Tabla Cotizando</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaRecPzsDanadas" id="verTablaRecPzsDanadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaRecPzsDanadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.1.3 Pre-Autorización -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.3 Pre-Autorización </strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.3.1 Regresar de Pre-Autorización a Cotizando </span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarCotizando" id="regresarCotizando" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarCotizando'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.3.2 Enviar de Pre-Autorización a Autorizado</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarAutoriz" id="enviarAutoriz" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarAutoriz'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.3.3 Ver Tabla Pre-Autorización</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaPreautorizacion" id="verTablaPreautorizacion" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaPreautorizacion'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.1.4 Autorizado  -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.4 Autorizado </strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.4.1 Regresar de Autorizado a Pre-Autorizado</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarPreAutizacion" id="regresarPreAutizacion" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarPreAutizacion'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.4.2 Enviar de Autorizado a Proceso de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarAutoProceSurtPzs" id="enviarAutoProceSurtPzs" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarAutoProceSurtPzs'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.4.3 Ver Tabla Autorizado</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAutorizado" id="verTablaAutorizado" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAutorizado'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.1.5 Proceso de Surtido de Piezas -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.5 Proceso de Surtido de Piezas</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.5.1 Regresar de Proceso de Surtido de Piezas a Autorizado</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarAuto" id="regresarAuto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarAuto'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.5.2 Enviar de Proceso de Surtido de Piezas a Piezas Entregadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPzEntregadas" id="enviarPzEntregadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPzEntregadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.5.3 Ver Generales Proceso de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralProceSurtPzs" id="verGralProceSurtPzs" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralProceSurtPzs'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.5.4 Ver Tabla Proceso de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAutoProceSurtPzs" id="verTablaAutoProceSurtPzs" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAutoProceSurtPzs'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.1.6 Piezas Entregadas -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.6 Piezas Entregadas</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.6.1 Regresar de Piezas Entregadas a Proceso de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarAutoProceSurtPzs" id="regresarAutoProceSurtPzs" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarAutoProceSurtPzs'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.6.2 Enviar de Piezas Entregadas a Piezas Firmadas de Recibido</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPzsFirmaRecibidas" id="enviarPzsFirmaRecibidas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPzsFirmaRecibidas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-file-pdf"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.6.3 Descargar PDF Piezas Entregadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="pdfPzsEntregadas" id="pdfPzsEntregadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['pdfPzsEntregadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.6.4 Ver Generales Piezas Entregadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralPzsEntregadas" id="verGralPzsEntregadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralPzsEntregadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.6.5 Ver Tabla Piezas Entregadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaPzsEntregadas" id="verTablaPzsEntregadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaPzsEntregadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.1.7 Piezas Firmadas de Recibido -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.7 Piezas Firmadas de Recibido</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.7.1 Regresar de Piezas Firmadas de Recibido a Piezas Entregadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarPzsEntregadas" id="regresarPzsEntregadas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarPzsEntregadas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.7.2 Enviar de Piezas Firmadas de Recibido a Supervisión de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPzsFirmaRecibidas" id="enviarPzsFirmaRecibidas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPzsFirmaRecibidas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.7.3 Ver Generales Piezas Firmadas de Recibido</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralPzsFirmadasRec" id="verGralPzsFirmadasRec" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralPzsFirmadasRec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.7.4 Ver Tabla Piezas Firmadas de Recibido</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaPzsFirmadasRec" id="verTablaPzsFirmadasRec" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaPzsFirmadasRec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.1.8 Supervisión de Surtido de Piezas -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.1.8 Supervisión de Surtido de Piezas</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.8.1 Regresar de Supervisión de Surtido de Piezas a Piezas Firmadas de Recibido</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarPzsFirmadasRec" id="regresarPzsFirmadasRec" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarPzsFirmadasRec'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <!-- <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.7.2 Enviar Supervisión de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPzsFirmaRecibidas" id="enviarPzsFirmaRecibidas" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPzsFirmaRecibidas'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div> -->
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.8.2 Ver Generales Supervisión de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="VerGralSuperSurtPzs" id="VerGralSuperSurtPzs" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['VerGralSuperSurtPzs'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.8.3 Ver Tabla Supervisión de Surtido de Piezas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSuperSurtPzs" id="verTablaSuperSurtPzs" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSuperSurtPzs'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >4.2 Autorizacion de Compras -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>4.2 Solicitud de Piezas Adicionales</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <!-- 4.2.1 Registro de Solicitud de Piezas Adicionales -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.2 Cotizando: Piezas Adicionales</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.1 Registro de Solicitud de Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSolPzsAdicionales" id="regSolPzsAdicionales" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSolPzsAdicionales'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.2 Autorizar Pieza Adicional</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="validarSolPzsAdicionales" id="validarSolPzsAdicionales" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['validarSolPzsAdicionales'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.3 Eliminar Agregado de Solicitud de Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliAgregadoSolpzsAdicionales" id="eliAgregadoSolpzsAdicionales" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliAgregadoSolpzsAdicionales'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.4 Eliminar Solicitud de Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSolPzsAdicionales" id="eliSolPzsAdicionales" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSolPzsAdicionales'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.5 Ver Generales Solicitud de Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralSolPzsAdicionales" id="verGralSolPzsAdicionales" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralSolPzsAdicionales'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.6 Enviar de Cotizando a Pre-Autorización : Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPreAutoPzsAdic" id="enviarPreAutoPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPreAutoPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.7 Ver Tablas Solicitud de Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSolPzsAdicionales" id="verTablaSolPzsAdicionales" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSolPzsAdicionales'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.2.2 Pre-Autorización: Piezas Adicionales -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.2.2 Pre-Autorización: Piezas Adicionales </strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.2.1 Regresar de Pre-Autorización: Piezas Adicionales a Cotizando: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarCotizandoPzsAdic" id="regresarCotizandoPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarCotizandoPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.2.2 Enviar de Pre-Autorización: Piezas Adionales a Autorizado: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarAutorizPzsAdic" id="enviarAutorizPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarAutorizPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.2.3 Ver Tabla Pre-Autorizacion: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaPreautorizacionPzsAdic" id="verTablaPreautorizacionPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaPreautorizacionPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.2.3 Autorizado: Piezas Adicionales  -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.2.3 Autorizado: Piezas Adicionales</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.3.1 Regresar de Autorizado: Piezas Adicionales a Pre-Autorización: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarPreAutoPzsAdic" id="regresarPreAutoPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarPreAutoPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.3.2 Enviar de Autorizado: Piezas Adionales a Proceso de Surtido de Piezas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarAutoProceSurtPzsAdic" id="enviarAutoProceSurtPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarAutoProceSurtPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.3.3 Ver Tabla Autorizado: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAutorizadoPzsAdic" id="verTablaAutorizadoPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAutorizadoPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.2.4 Proceso de Surtido de Piezas: Piezas Adicionales -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong> 4.2.4 Proceso de Surtido de Piezas: Piezas Adicionales</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.4.1 Regresar de Proceso de Surtido de Piezas: Piezas Adicionales a Autorizado: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarAutorizPzsAdic" id="regresarAutorizPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarAutorizPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.4.2 Enviar de Proceso de Surtido de Piezas: Piezas Adicionales a Piezas Entregadas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPzsEntregadasAdic" id="enviarPzsEntregadasAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPzsEntregadasAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.4.3 Ver Generales Proceso de Surtido de Piezas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralProceSurtPzsAdic" id="verGralProceSurtPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralProceSurtPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.4.4 Ver Tabla Proceso de Surtido de Piezas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaAutoProceSurtPzsAdic" id="verTablaAutoProceSurtPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaAutoProceSurtPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.2.5 Piezas Entregadas: Piezas Adicionales -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.2.5 Piezas Entregadas: Piezas Adicionales</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.5.1 Regresar de Piezas Entregadas: Piezas Adicionales a Proceso de Surtido de Piezas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarPzsEntregadasAdic" id="regresarPzsEntregadasAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarPzsEntregadasAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.5.2 Enviar de Piezas Entregadas: Piezas Adicionales a Piezas Firmadas de Recibido: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarPzsFirmRecAdic" id="enviarPzsFirmRecAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarPzsFirmRecAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-file-pdf"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.1.5.3 Descargar PDF Piezas Entregadas</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="pdfPzsEntregadasAdic" id="pdfPzsEntregadasAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['pdfPzsEntregadasAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.5.4 Ver Generales Piezas Entregadas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralPzsEntregadasAdic" id="verGralPzsEntregadasAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralPzsEntregadasAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.5.5 Ver Tabla Piezas Entregadas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaPzsEntregadasAdic" id="verTablaPzsEntregadasAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaPzsEntregadasAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.2.6 Piezas Firmadas de Recibido: Piezas Adicionales -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.2.6 Piezas Firmadas de Recibido: Piezas Adicionales</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.6.1 Regresar de Piezas Firmadas de Recibido: Piezas Adicionales a Piezas Entregadas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarPzsEntregadasAdic2" id="regresarPzsEntregadasAdic2" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarPzsEntregadasAdic2'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.6.2 Enviar de Piezas Firmadas de Recibido: Piezas Adicionales a Supervisión de Surtido de Piezas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarSuperSurtPzsAdic" id="enviarSuperSurtPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarSuperSurtPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.6.3 Ver Generales Piezas Firmadas de Recibido: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralPzsFirmaRecAdic" id="verGralPzsFirmaRecAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralPzsFirmaRecAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.6.4 Ver Tabla Piezas Firmadas de Recibido: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaPzsFirmadasRecAdic" id="verTablaPzsFirmadasRecAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaPzsFirmadasRecAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- 4.2.7 Supervisión de Surtido de Piezas: Piezas Adicionales -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>4.2.7 Supervisión de Surtido de Piezas: Piezas Adicionales</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-reply'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.7.1 Regresar de Supervisión de Surtido de Piezas: Piezas Adicionales a Piezas Firmadas de Recibido: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regresarPzsFirmRecAdic" id="regresarPzsFirmRecAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regresarPzsFirmRecAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.7.2 Ver Generales Supervisión de Surtido de Piezas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralSuperSurtPzsAdic" id="verGralSuperSurtPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralSuperSurtPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">4.2.7.3 Ver Tabla Supervisión de Surtido de Piezas: Piezas Adicionales</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaSuperSurtPzsAdic" id="verTablaSuperSurtPzsAdic" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaSuperSurtPzsAdic'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >4.3 Cronometro de Surtido de Piezas -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>4.3 Cronometro de Surtido de Piezas</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">4.3.1 Registro Entrega de Pieza</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regEntregaPz" id="regEntregaPz" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regEntregaPz'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">4.3.2 Supervisión Registro Entrega de Pieza</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSuperEntragaPz" id="regSuperEntragaPz" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSuperEntragaPz'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">4.3.3 Eliminar Registro Entrega de Pieza</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliRegEntregaPz" id="eliRegEntregaPz" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliRegEntregaPz'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">4.3.4 Eliminar Supervisión Registro Entrega de Pieza</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliRegSuperEntragaPz" id="eliRegSuperEntragaPz" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliRegSuperEntragaPz'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">4.3.5 Ver Generales Registro Entrega de Pieza</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralEntregaPz" id="verGralEntregaPz" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralEntregaPz'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                            <button type="button" class="btn btn-permisos">
                                                                                <div class="info-box">
                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                    <div class="info-box-content">
                                                                                        <span class="info-box-text">4.3.6 Ver Tabla Entrega de Pieza</span>
                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaCronoSurPzs" id="verTablaCronoSurPzs" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaCronoSurPzs'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                    </div>
                                                                                </div>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- >5 Proyectos Extras -->
                                                        <div class="col-12">
                                                            <div class="card card-secondary card-outline collapsed-card">
                                                                <div class="card-header">
                                                                    <h2 class="card-title"><strong>5.0 Proyectos Extras</strong></h2>
                                                                    <div class="card-tools">
                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-md-12 col-sm-12 col-12">
                                                                            <!-- 5.1 Captura Proyectos Extras -->
                                                                            <div class="card card-info card-outline collapsed-card">
                                                                                <div class="card-header">
                                                                                    <h2 class="card-title"><strong>5.1 Captura Proyectos Extras</strong></h2>
                                                                                    <div class="card-tools">
                                                                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                                                            <i class="fas fa-plus"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="row justify-content-center">
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">5.1.1 Registro de Proyecto Extra</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regProyExtra" id="regProyExtra" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regProyExtra'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">5.1.2 Elimniar Registro Proyecto Extra</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliProyExtra" id="eliProyExtra" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliProyExtra'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-pencil"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">5.1.3 Registrar Supervisión Proyecto Extra</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="regSuperProyExtra" id="regSuperProyExtra" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['regSuperProyExtra'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-trash-can"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">5.1.4 Eliminar Supervisión Proyecto Extra</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="eliSuperProyExtra" id="eliSuperProyExtra" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['eliSuperProyExtra'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                            else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">5.1.5 Ver Generales Proyecto Extra</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verGralProyExtra" id="verGralProyExtra" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verGralProyExtra'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                        else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class='fa-solid fa-paper-plane'></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">5.1.6 Enviar A Proyecto Extra Utilizado</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="enviarProyUtil" id="enviarProyUtil" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['enviarProyUtil'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                    else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 col-12">
                                                                                            <button type="button" class="btn btn-permisos">
                                                                                                <div class="info-box">
                                                                                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-eye"></i></span>
                                                                                                    <div class="info-box-content">
                                                                                                        <span class="info-box-text">5.1.7 Ver Tabla Proyecto Extra</span>
                                                                                                        <span class="info-box-text"> <input type="checkbox" name="verTablaRegProyExtra" id="verTablaRegProyExtra" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['verTablaRegProyExtra'] == 1) echo 'checked';
                                                                                                                                                                                                                                                                                                                                                                                                else echo ''; ?>></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
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
                                        </div>
                                        <div class="card-footer border-footer">
                                            <div class="row justify-content-left">
                                                <div class="col-md-2 col-sm-12 align-self-center">
                                                    <buttom type="submit" id="btnUpdatePermisoUsuario" name="save" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                                </div>
                                                <div class="col-md-2 col-sm-12 align-self-center">
                                                    <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                                </div>
                                                <br>
                                                <div class="col-md-1 col-sm-12 align-self-center">
                                                    <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                </div>
                                                <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                    <div id="respuestaUpdatePermisoUsuario"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-12">
                                    <div class="card card-secondary card-outline collapsed-card">
                                        <div class="card-header">
                                            <h2 class="card-title"><strong>Asignar Todo / Quitar Todo</strong></h2>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form id="formAsigPermAdmin">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12 text-center">
                                                        <p>Botón para <strong>Asignar</strong> todos los permisos ó <strong>Quitar</strong> todos los permisos</p>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 col-12 cuadro">
                                                        <button type="button" class="btn btn-permisos">
                                                            <input type="hidden" name="usuario" id="usuario" value="<?php echo $id_usuario ?>">
                                                            <span class="info-box-text"> <input type="checkbox" name="admin" id="admin" data-toggle="toggle" data-on="Todos" data-off="Ninguno" data-width="100" data-height="10" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"></span>
                                                            <buttom type="submit" id="btnUpdateAdmin" name="save" class="btn btn-secondary btn-inline-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                        <div id="respuestaUpdatePermisoAdmin"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
    // Scripts principal
    require '../components/scripts-main.php';
    ?>
</body>
<script>
    // Actualizar permisos a usuarios --------------------------------------------
    $('#btnUpdatePermisoUsuario').click(function() {
        $.ajax({
                url: 'updatePermisoUsuario.php',
                type: 'POST',
                data: $('#formAsigPermUsuario').serialize(),
            })
            .done(function(res) {
                $('#respuestaUpdatePermisoUsuario').html(res)
            })
    });

    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdatePermisoUsuario").on('click', function() {
        $("#btnUpdatePermisoUsuario").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdatePermisoUsuario").css('visibility', 'visible');
        }, 180000);
    });

    // Actualizar permisos a usuarios --------------------------------------------
    $('#btnUpdateAdmin').click(function() {
        $.ajax({
                url: 'updatePermisoAdmin.php',
                type: 'POST',
                data: $('#formAsigPermAdmin').serialize(),
            })
            .done(function(res) {
                $('#respuestaUpdatePermisoAdmin').html(res)
            })
    });

    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdateAdmin").on('click', function() {
        $("#btnUpdateAdmin").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateAdmin").css('visibility', 'visible');
        }, 180000);
    });
</script>

</html>