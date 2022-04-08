<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_cliente = $_POST['id'];
$query = ("DELETE FROM clientes WHERE id_cliente = $id_cliente");
$resultado = mysqli_query($conexion, $query);
desconectar();

?>
