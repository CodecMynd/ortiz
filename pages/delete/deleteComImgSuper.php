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
$comSuperImg = 0;
$id_comSupervisionImagenes = $_POST['id_comSupervisionImagenes4'];

$conexion->autocommit(FALSE);
try {

  $queryD = ("DELETE FROM comsupervisionimagenes WHERE id_comSupervisionImagenes = $id_comSupervisionImagenes");
  $resultadoD = mysqli_query($conexion, $queryD);


  $queryU = "UPDATE proyectos SET comSuperImg = '$comSuperImg' WHERE id_proyecto = $id_proyecto";
  $resultadoU = mysqli_query($conexion, $queryU);

  $conexion->commit();

  echo '<script>
  alert("¡Supervisión eliminada exitosamente!")
  window.history.go(-1);
</script>';
} catch (Exception $e) {
  $conexion->rollback();

  echo '<script>
  alert("¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!")
  window.history.go(-1);
</script>';
}

desconectar();
