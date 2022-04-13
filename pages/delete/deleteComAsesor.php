<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto3'];
$id_comAsesor = $_POST['id_comAsesor3'];
$comAsesor = 0;

$conexion->autocommit(FALSE);
try {
$queryD = ("DELETE FROM comasesor WHERE id_comAsesor = $id_comAsesor");
$resultadoD = mysqli_query($conexion, $queryD);


$queryU = "UPDATE proyectos SET comAsesor = '$comAsesor' WHERE id_proyecto = $id_proyecto";
$resultadoU = mysqli_query($conexion, $queryU);

$conexion->commit();
echo '<script>
alert("Comprobación de Asesor se elimino correctamente")
window.history.go(-1);
 </script>';

} catch (Exception $e){
  $conexion->rollback();

  echo '<script>
         alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: '.$e->getMessage().' )
         window.history.go(-1);
         </script>';
}

desconectar();
