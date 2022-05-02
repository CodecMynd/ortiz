<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_aseTec = $_POST['id_aseTec'];


$conexion->autocommit(FALSE);
try {

  $queryD = ("DELETE FROM asesoramientostecnicos WHERE id_aseTec = $id_aseTec");
  $resultadoD = mysqli_query($conexion, $queryD);

  $conexion->commit();

  echo '<script>
    alert("¡Motivo Programa de Asesoramiento Técnico eliminado exitosamente!")
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
