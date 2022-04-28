<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto4'];
$id_comSupervision = $_POST['id_comSupervision4'];
$comSuperPlaca = 0;
$tipoComprobacion = 'placas';

 try{
   $conexion->autocommit(FALSE);

$queryD = ("DELETE FROM comsupervision WHERE id_comSupervision = $id_comSupervision ");
$resultadoD = mysqli_query($conexion, $queryD);
// var_dump($queryD);

$queryU = "UPDATE proyectos SET comSuperPlaca = '$comSuperPlaca' WHERE id_proyecto = $id_proyecto";
$resultadoU = mysqli_query($conexion, $queryU);
// var_dump($queryU);


 $conexion->autocommit(TRUE);
 if($resultadoD and $resultadoU){
  echo '<script>
  alert("¡Supervisión de Comprobación eliminada exitosamente!")
  window.history.go(-1);
</script>';
   }

} catch(Exception $e){
  $conexion->rollback();
  echo '<script>
  alert("¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!")
  window.history.go(-1);
</script>';
}

desconectar();
