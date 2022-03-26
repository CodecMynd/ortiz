<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id'];

$id_proyecto = $_POST['id'];
$comSuperImg = 0;
$tipoComprobacion = '7img';

$queryD = ("DELETE FROM comsupervision WHERE id_proyecto = $id_proyecto AND tipoComprobacion = '$tipoComprobacion'");
$resultadoD = mysqli_query($conexion, $queryD);


$queryU = "UPDATE proyectos SET comSuperImg = '$comSuperImg' WHERE id_proyecto = $id_proyecto";
$resultadoU = mysqli_query($conexion, $queryU);

desconectar();

?>
