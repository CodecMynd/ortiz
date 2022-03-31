<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_asesor = $_POST['id'];
$query = ("UPDATE asesores SET borrado = 1, fecha_borrado = '$date', id_capB = '$id' WHERE id_asesor = $id_asesor");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
