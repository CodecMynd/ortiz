<?php
require 'config/functions.php';
if(haIniciadoSesion()){
    if($_SESSION['admin'] == 1){
        header('Location: pages/admin/panelAdmin.php');
    }else if($_SESSION['admin'] == 0){
        header('Location: pages/admin/panelAdmin.php');
    }
}

conectar();

?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema Proyectos Ortiz | Control Interno">
    <meta name="keywords" content="Reparación, Venta de Transmisiones Automaticas, Direcciones Hidráulica">
    <meta name="author" content="ISC Jose Uriel Guerra Trinidad">
    <meta name="copyright" content="Servicio Ortiz Transmisiones Automaticas Taller de reparación de automóviles">
    <meta name="robots" content="index">

    <!-- Favicon -->
    <link rel="icon" href="src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="shortcut icon" href="src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="apple-touch-icon" href="src/img/logos/favicon.png" type="image/gif">
    <!-- Google Font CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="plugins/bootstrap/bootstrap-5.0.2.min.css" rel="stylesheet">
    <!-- Fontawesome Iconos -->
    <link rel="stylesheet" href="plugins/fontawesome/fontawesome-free-6.0.0-web/css/all.min.css" />
    <!-- NProgress barra de progreso -->
    <link rel="stylesheet" href="plugins/nprogress/nprogress.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="plugins/animate/animate.min.css">

    <link rel="stylesheet" href="plugins/nprogress/nprogress.css">
    <!-- Estilo de tema personalizado -->
    <link rel="stylesheet" href="src/css/style.css">

    <!-- *******************************************************************
    --- Plataforma propiedad de Servicio Ortiz Transmisiones Automaticas ---
    --------- Desarrollado por el ISC. Jose Uriel Guerra Trinidad ----------
    --------------- Inicio de proyecto 9 de febrero del 2022 ---------------
    ------------- Conclusión del proyecto xx de Abril del 2022--------------
    ******************************************************************** -->

    <title>Sistema Proyectos Ortiz </title>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <h4 class="login-box-msg">Formulario de Acceso</h4>
                <div class="main">
                    <form action="config/check-login.php" method="POST">
                        <div class="input-group form-floating mb-3">
                            <input name="usuario" id="usuario" type="text" class="form-control" id="floatingInput" placeholder="Ej. Juan" required pattern="[A-Za-z0-9 _-]{1,32}">
                            <label for="floatingInput">Usuario</label>
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input name="pass" id="pass" type="password" class="form-control" id="floatingInput" placeholder="Ingresa tu contraseña" required pattern="[A-Za-z0-9_-]{1,32}">
                            <label for="floatingInput">Contraseña</label>
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="row w-100 align-items-center">
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-md btnLogin btnGray" id="btnGray" value="Iniciar Sesión">
                                <button type="reset" class="btn btn-md btn-secondary">Limpiar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="error alert alert-danger" style="display: none;"><span>Datos de ingreso no validos, inténtalo de nuevo por favor</span></div>
                <div class="separator">
                    <div class="login-logo">
                        <img src="src/img/logos/logo.png" alt="Logo ortiz" width="100%">
                    </div>
                    <div>
                        <small class="text-center">©2022 Derechos reservados. JSOL Automotriz SRL de CV</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script> 
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="src/js/main.js"></script>
</body>

</html>