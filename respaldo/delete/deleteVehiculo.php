<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_vehiculo = $_POST['id'];
$query = ("DELETE FROM vehiculos WHERE id_vehiculo = $id_vehiculo");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
