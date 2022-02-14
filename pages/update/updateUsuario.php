<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

    $id_usuario = $_POST['id_usuario'];
    $nombres =  $_POST['nombres'];
    $aPaterno =  $_POST['aPaterno'];
    $aMaterno =  $_POST['aMaterno'];
    $usuario =  $_POST['usuario'];
    $email =  $_POST['email'];
    $tel =  $_POST['tel'];


$query = "UPDATE usuarios SET nombres = '$nombres', aPaterno = '$aPaterno', aMaterno = '$aMaterno', usuario = '$usuario', email = '$email', tel= '$tel', fecha_mod = '$date' id_captM = '$id' WHERE id_usuario = $id_usuario";

    $resultado = mysqli_query($conexion, $query);


desconectar();
?>