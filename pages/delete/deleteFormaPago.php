<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_formaPago = $_POST['id'];
$query = ("DELETE FROM formapagos WHERE id_formaPago = $id_formaPago");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
