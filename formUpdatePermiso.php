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
            $id_permiso = $_GET['id'];
            $cont = 0;
            $selectPermisos = '';

            $queryPermisos = "SELECT P.id_permiso, P.id_modulo, P.id_usuario, P.status, M.permiso, U.id_usuario 
            FROM permisos P 
            INNER JOIN modulos M ON P.id_modulo = M.id_modulo 
            INNER JOIN usuarios U ON P.id_usuario = U.id_usuario WHERE U.id_usuario = $id_permiso";
            $resultado = mysqli_query($conexion, $queryPermisos);
            ?>
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">*Todos los campos son obligatorios</h3>
                                </div>
                                <form action="">
                                    <div class="card-body">
                                        <h5 class="mb-2">Permisos</h5>
                                        <div class="row">
                                            <?php while ($row = $resultado->fetch_assoc()) {

                                            ?>
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <button type="button" class="btn btn-permisos">
                                                        <div class="info-box">
                                                            <input type="hidden" value="<?php echo $id_permiso ?>">
                                                            <input type="hidden" value="<?php echo $row['id_permiso'] ?>">
                                                            <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check-double"></i></span>
                                                            <div class="info-box-content">
                                                                <span class="info-box-text"><?php echo $row['permiso']; ?></span>
                                                                <span class="info-box-text"> <input type="checkbox" data-toggle="toggle" data-on="Admin" data-off="Usuario" data-size="mini" data-onstyle="success" data-offstyle="danger" name="status" id="status" value="1"></span>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <input type="hidden" name="result" value="<?php echo  base64_encode(serialize($data)); ?>">
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <buttom type="submit" id="btnNuevoUsuario" class="btn btn-secondary btn-block btnNuevoUsuario" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaNuevoUsuario"></div>
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


</html>