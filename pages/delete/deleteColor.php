<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_color = $_POST['id'];
$query = ("DELETE FROM colores WHERE id_color = $id_color");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
