<?php
require 'functions.php';
conectar();
id();

$id = $_SESSION['id_usuario'];
$estatusonline = "Offline";

$query = ("UPDATE usuarios SET estatus = '$estatusonline' WHERE id_usuario = $id");
$result = mysqli_query($conexion, $query);
session_start();
session_unset();
session_destroy();
header('Location: ../index.php');

