<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_comverifdiariaveh = $_POST['id_comverifdiariaveh'];
$id_proyecto = $_POST['id_proyecto'];
$comVerifDiariaVeh = 0;

$queryD = ("DELETE FROM comverifdiariaveh WHERE id_comverifdiariaveh = $id_comverifdiariaveh ");
$resultadoD = mysqli_query($conexion, $queryD);
//var_dump($queryD);


$queryU = "UPDATE proyectos SET comVerifDiariaVeh = '$comVerifDiariaVeh' WHERE id_proyecto = $id_proyecto";
$resultadoU = mysqli_query($conexion, $queryU);
//var_dump($queryU);


 if ($resultadoU) {
  header("Location: ../admin/crudVerificacionDiariaVehiculos.php" );
 } else {
   echo "<div class='alert alert-danger' role='role'>
       <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
       </div>";
 }

desconectar();
?>
