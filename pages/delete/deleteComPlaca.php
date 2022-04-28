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
$id_complaca = $_POST['id_complaca3'];
$comPlacas = 0;

$conexion->autocommit(FALSE);
try {

  $queryD = ("DELETE FROM complacas WHERE id_complaca = $id_complaca");
  $resultadoD = mysqli_query($conexion, $queryD);


  $queryU = "UPDATE proyectos SET comPlacas = '$comPlacas' WHERE id_proyecto = $id_proyecto";
  $resultadoU = mysqli_query($conexion, $queryU);

  $conexion->commit();

  echo '<script>
    alert("¡Comprobación eliminada exitosamente!")
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
