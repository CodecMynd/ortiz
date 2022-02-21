<?php

use LDAP\Result;

require '../components/head-main.php';
?>
<title>Edición Permiso | <?php echo $nomComp ?></title>

</head>

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
                            <h1 class="float-left m-0">Edición Permiso</h1>
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

            ?>


            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Permisos para que el usuario pueda navegar</h3>
                                </div>

                                <form id="formAsigPermUsuario" method="POST">
                                    <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario?>">
                                    <div class="card-body">
                                        <section class="content">
                                            <div class="container-fluid">
                                                <h5 class="mb-2">Asignar Permisos</h5>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.1.1 Editar Usuarios</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="editarUsu" id="editarUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1" <?php if ($rowPer['editarUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.1.2 Asignar Contraseña</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="asignarCon" id="asignarCon" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['asignarCon'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.1.3 Eliminar Usuario</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliminarUsu" id="eliminarUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['eliminarUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.1.4 Asignar Permisos</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="asignarPer" id="asignarPer" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['asignarPer'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.1.5 Nuevo Usuario</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="nuevoUsu" id="nuevoUsu" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['nuevoUsu'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.2.1 Registro de marcas</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="" id="" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['regMarca'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.2.2 Modificar Marca</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="modMarca" id="modMarca" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['modMarca'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.2.3 Eliminar Marca</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliminaMar" id="eliminaMar" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="<?php echo $rowPer['eliminaMar']?>"  <?php if ($rowPer['eliminaMar'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.3.1 Registro de Modelo</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="regModelo" id="regModelo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['regModelo'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.3.2 Modificar Modelo</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="modModelo" id="modModelo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['modModelo'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.3.3 Eliminar Modelo</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliminarMod" id="eliminarMod" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['eliminarMod'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.4.1 Registro de Años</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="regAnios" id="regAnios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['regAnios'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.4.2 Modificar Años</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="modAnios" id="modAnios" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['modAnios'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.4.3 Eliminar Año</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliminarAnio" id="eliminarAnio" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['eliminarAnio'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.5.1 Registro de Permiso</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="regPermiso" id="regPermiso" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['regPermiso'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.5.2 Modificar Permiso</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="modPermiso" id="modPermiso" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['modPermiso'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">1.5.3 Eliminar Permiso</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliPermiso" id="eliPermiso" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['eliPermiso'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.1.1 Registro de Vehículo</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="regVehiculo" id="regVehiculo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['regVehiculo'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.1.2 Modificar Vehículo</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="modVehiculo" id="modVehiculo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['modVehiculo'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.1.3 Eliminar Vehículo</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliVehiculo" id="eliVehiculo" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['eliVehiculo'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.2.1 Registro de Cliente</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="regCliente" id="regCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['regCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.2.2 Modificar Cliente</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="modCliente" id="modCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['modCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.2.3 Eliminar Cliente</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliCliente" id="eliCliente" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['eliCliente'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.3.1 Registro de Proyecto</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="regProyecto" id="regProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['regProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.3.2 Lista de Proyectos</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="listProyecto" id="listProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['listProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.3.3 Modificar Proyectos</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="modProyecto" id="modProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['modProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.3.4 Eliminar Proyectos</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="eliProyecto" id="eliProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['eliProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-12">
                                                        <button type="button" class="btn btn-permisos">
                                                            <div class="info-box">
                                                                <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                                <div class="info-box-content">
                                                                    <span class="info-box-text">2.3.5 Descarga PDF Proyectos</span>
                                                                    <span class="info-box-text"> <input type="checkbox" name="pdfProyecto" id="pdfProyecto" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"  <?php if ($rowPer['pdfProyecto'] == 1) echo 'checked';
                                                                                                                                                                                                                                          else echo ''; ?>></span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnUpdatePermisoUsuario" name="save" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdatePermisoUsuario"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
$('#btnUpdatePermisoUsuario').click(function () {
    $.ajax({
            url: 'updatePermisoUsuario.php',
            type: 'POST',
            data: $('#formAsigPermUsuario').serialize(),
        })
        .done(function (res) {
            $('#respuestaUpdatePermisoUsuario').html(res)
        })
});

//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdatePermisoUsuario").on('click', function () {
    $("#btnUpdatePermisoUsuario").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdatePermisoUsuario").css('visibility', 'visible');
    }, 300000);
});
</script>

</html>