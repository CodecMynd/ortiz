<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_usuario = $_POST['usuario'];
$pass =  $_POST['password'];

$query = "UPDATE usuarios SET pass = '$pass', fecha_mod = '$date', id_captM = '$id' WHERE id_usuario = $id";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    echo '<script type="text/javascript>
                    alert("Lo siento!, Error al modificar" );
                    window.history.go(-1);
                 </script>';
} else {
    echo '<script>
                    alert("Tus datos se modificaron exitosamente.");
                    header("Location: ../../../config/cerrar-sesion.php");
                 </script>';
}
