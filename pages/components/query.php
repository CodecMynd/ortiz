<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../index.php');
}

conectar();
$id = $_SESSION['id_usuario'];
ini_set('date.timezone', 'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$dateFront = date('d-m-Y H:i:s');

//query usuarios
$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
    $nombres = $row['nombres'];
    $aPaterno = $row['aPaterno'];
    $aMaterno = $row['aMaterno'];
    $usuario = $row['usuario'];
    $email = $row['email'];
    $tel = $row['tel'];
    $passUser = $row['pass'];
    $admin = $row['admin'];
    $tel = $row['tel'];

    $nomComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
}

// Mostar Modal al recargar pagína
if ($passUser === 'SIN_PASSWORD') {
    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        $(".sin_contraseña").modal("toggle")
    });
</script>';
}

// comboBox formAddVehiculos
$sql = "SELECT id_marca, marca FROM marcas  ORDER BY marca ASC";
$resultMarca = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

$sql = "SELECT * FROM anios  ORDER BY anio DESC";
$resultAnio = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));




/// contadores de registros 
// # marcas
$count_reg_marcas = mysqli_query($conexion, "SELECT id_marca FROM marcas ");
//# usuarios
$count_reg_usuarios = mysqli_query($conexion, "SELECT id_usuario FROM usuarios ");
//# usuarios
$count_reg_marcas = mysqli_query($conexion, "SELECT id_marca FROM marcas ");
//# usuarios
$count_reg_modelos = mysqli_query($conexion, "SELECT id_modelo FROM modelos ");



