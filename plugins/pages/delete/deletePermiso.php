<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_modulo = $_POST['id'];
$query = ("DELETE FROM modulos WHERE id_modulo = $id_modulo");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
