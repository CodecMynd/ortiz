<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_tecArmador = $_POST['id'];
$query = ("DELETE FROM tecarmadores WHERE id_tecArmador = $id_tecArmador");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
