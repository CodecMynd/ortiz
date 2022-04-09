<?php
require 'query.php';
?>
<!DOCTYPE html>
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
    <link rel="icon" href="../../src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="shortcut icon" href="../../src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="apple-touch-icon" href="../../src/img/logos/favicon.png" type="image/gif">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/1522572059.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="../../src/css/custom.min.css">
    <!-- Bootstrap toggle -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- ribbon -->
    <link rel="stylesheet" href="../../src/css/ribbon.css">


    <!-- tooltip -->
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    <style>
        .cuadro {
            border-radius: 25px;
            border: 1px solid #868788;
            margin: 10px 20px;
        }

        .pie {
            background-color: #F4F6F9;
            text-align: center;
            border-top: 1px solid #9FA0A2;
        }

        /* pointer solo lectura */
        input[readonly] {
            cursor: no - drop;
        }

        @media (min-width:320px) and (max-width:425px) {
            .bienvenido {
                margin-bottom: 5px;
                width: 100%;
                font-size: 500px;
            }
        }

        @media (min-width:320px) and (max-width:425px) {
            .content-header {
                margin-bottom: 70px;
                width: 100%;

            }

            .content-header h1 {
                font-size: 20px;
                padding: 10px 10px 5px;
                text-align: center;
            }
        }

        @media (min-width:320px)and (max-width: 720px) {
            .title-nav {
                display: none;
            }
        }


        /* @media (max-width: 600px) {
            .title-nav {
                display: none;
            }
        } */



        .suma {
            text-align: center;
            background-color: #5A6268;
            color: #fff;
            font-weight: 900;
            font-size: 18px;
            width: auto;
        }

        tr th {
            font-size: 13px;
            text-align: center;
        }

        tr td {
            font-size: 15px;
            font-weight: 500;
        }
    </style>
    <!-- notas
onkeyup="javascript:this.value=this.value.toLowerCase(); para input minusculas
onkeyup="javascript:this.value=this.value.toUpperCase(); para input mayusculas
Poner enlaces disabled, agregamos disabled 
-->