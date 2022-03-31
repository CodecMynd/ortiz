<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id'];
$comAsesor = 0;

$queryD = ("DELETE FROM comasesor WHERE id_proyecto = $id_proyecto");
$resultadoD = mysqli_query($conexion, $queryD);


$queryU = "UPDATE proyectos SET comAsesor = '$comAsesor' WHERE id_proyecto = $id_proyecto";
$resultadoU = mysqli_query($conexion, $queryU);

desconectar();

?>
