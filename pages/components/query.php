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

//query usuarios ------------------------------------------------------------------------------------------
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
    $super = $row['super'];
    $tel = $row['tel'];

    $nomComp = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
}

// comboBox formAddVehiculos
$sql = "SELECT id_marca, marca FROM marcas  ORDER BY marca ASC";
$resultMarca = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

$sql = "SELECT * FROM anios  ORDER BY anio DESC";
$resultAnio = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));


// query Permisos ------------------------------------------------------------------------------------------
$query = mysqli_query($conexion, "SELECT * FROM permisos WHERE id_usuario = $id");
while ($row = mysqli_fetch_array($query)) {
    $editarUsu = $row['editarUsu'];
    $asignarCon = $row['asignarCon'];
    $eliminarUsu = $row['eliminarUsu'];
    $asignarPer = $row['asignarPer'];
    $nuevoUsu = $row['nuevoUsu'];
    $regMarca = $row['regMarca'];
    $modMarca = $row['modMarca'];
    $eliminaMar = $row['eliminaMar'];
    $regModelo = $row['regModelo'];
    $modModelo = $row['modModelo'];
    $eliminarMod = $row['eliminarMod'];
    $regAnios = $row['regAnios'];
    $modAnios = $row['modAnios'];
    $eliminarAnio = $row['eliminarAnio'];
    $regPermiso = $row['regPermiso'];
    $modPermiso = $row['modPermiso'];
    $eliPermiso = $row['eliPermiso'];
    $regVehiculo = $row['regVehiculo'];
    $modVehiculo = $row['modVehiculo'];
    $eliVehiculo = $row['eliVehiculo'];
    $regCliente = $row['regCliente'];
    $modCliente = $row['modCliente'];
    $eliCliente = $row['eliCliente'];
    $regProyecto = $row['regProyecto'];
    $listProyecto = $row['listProyecto'];
    $modProyecto = $row['modProyecto'];
    $eliProyecto = $row['eliProyecto'];
    $pdfProyecto = $row['pdfProyecto'];
}

// Mostar Modal al recargar pagína en panelAdmin ------------------------------------------------------------------------------------------
if ($passUser === 'SIN_PASSWORD') {
    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        $(".sin_contraseña").modal("toggle")
    });
</script>';
}

/// contadores de registros ------------------------------------------------------------------------------------------
//# usuarios
$count_reg_usuarios = mysqli_query($conexion, "SELECT id_usuario FROM usuarios ");
// # marcas
$count_reg_marcas = mysqli_query($conexion, "SELECT id_marca FROM marcas ");
//# modelos
$count_reg_modelos = mysqli_query($conexion, "SELECT id_modelo FROM modelos ");
//# vehiculos
$count_reg_vehiculos = mysqli_query($conexion, "SELECT id_vehiculo FROM vehiculos ");
//# clientes
$count_reg_clientes = mysqli_query($conexion, "SELECT id_cliente FROM clientes ");
