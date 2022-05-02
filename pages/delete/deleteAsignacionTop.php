<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_top = $_POST['id_top'];


$conexion->autocommit(FALSE);
try {

  $queryD = ("DELETE FROM tops WHERE id_top = $id_top");
  $resultadoD = mysqli_query($conexion, $queryD);

  $conexion->commit();

  echo '<script>
    alert("¡Motivo Asignación de Top eliminada exitosamente!")
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
