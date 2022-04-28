<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$conexion->autocommit(FALSE);
try {
  
$id_comImagenes = $_POST['id_comImagenes3'];
$id_proyecto = $_POST['id_proyecto3'];
$comImg = 0;

$queryD = ("DELETE FROM comimagenes WHERE id_comImagenes = $id_comImagenes");
$resultadoD = mysqli_query($conexion, $queryD);


$queryU = "UPDATE proyectos SET comImg = '$comImg' WHERE id_proyecto = $id_proyecto";
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
