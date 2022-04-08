<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_marca = $_POST['id'];
$query = ("DELETE FROM marcas WHERE id_marca = $id_marca");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
