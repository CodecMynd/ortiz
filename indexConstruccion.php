<?php
require 'config/functions.php';
if(haIniciadoSesion()){
    if($_SESSION['admin'] == 1){
        header('Location: pages/admin/panelAdmin.php');
    }else if($_SESSION['admin'] == 0){
        header('Location: pages/user/panelUsuario.php');
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
        <img src="src/img/logos/logo.png" alt="">
        <div class="card">

        <img src="src/img/construccion.gif" alt="">

        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script> 
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="src/js/main.js"></script>
</body>

</html>