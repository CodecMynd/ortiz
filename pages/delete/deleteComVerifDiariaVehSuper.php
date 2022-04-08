<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto'];
$comSuperVerifDiariaVeh = 0;
$tipoComprobacion = 'verificarV';
$id_comSupervision = $_POST['id_comSupervision'];

$queryD = ("DELETE FROM comsupervision WHERE id_proyecto = $id_proyecto AND id_comSupervision = '$id_comSupervision'");
$resultadoD = mysqli_query($conexion, $queryD);
// var_dump($queryD);


$queryU = "UPDATE proyectos SET comSuperVerifDiariaVeh = '$comSuperVerifDiariaVeh' WHERE id_proyecto = $id_proyecto";
$resultadoU = mysqli_query($conexion, $queryU);
// var_dump($queryU);


if ($resultadoU) {
  header("Location: ../admin/crudVerificacionDiariaVehiculos.php" );
 } else {
   echo "<div class='alert alert-danger' role='role'>
       <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
       </div>";
 }

desconectar();
?>
