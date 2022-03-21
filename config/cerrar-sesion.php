<?php
require 'functions.php';
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
conectar();
id();

$id = $_SESSION['id_usuario'];
$estatusonline = "Offline";

$query = ("UPDATE usuarios SET estatus = '$estatusonline' WHERE id_usuario = $id");
$result = mysqli_query($conexion, $query);

//Tabla acceso
$queryA = "INSERT INTO acceso(id_usuario, fecha_cierre)VALUE($id, '$date') ";
$resultA = mysqli_query($conexion, $queryA);

session_start();
session_unset();
session_destroy();
header('Location: ../index.php');
