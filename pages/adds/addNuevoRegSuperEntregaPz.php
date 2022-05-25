<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto =  $_POST['id_proyecto2'];
$nProyecto =  $_POST['nProyecto2'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas2'];
$id_entregaPz = $_POST['id_entregaPz2'];
$superEntragaPz = $_POST['superEntragaPz'];
$borrado = 0;
$sup = 1;


if ($superEntragaPz == '') {

  echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, el campo Link de Supervisión de Registro de Entrega de Pieza es requerido</strong></p>
  </div>";
  exit;
} else {

  $conexion->autocommit(FALSE);
  try {
    // Registrar motivo de supervision
    $query = "UPDATE entregapzs SET superEntregaPz = '$superEntragaPz', sup = '$sup', fecha_regSup = '$date', id_capCsup = '$id' WHERE id_entregaPz = '$id_entregaPz'  ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    $conexion->commit();

    echo "<div class='alert alert-success' role='alert'>
      <p><strong>Supervisión de Link de Registro Entrega de Pieza ingresado correctamente!</strong></p>
      </div>";
  } catch (Exception $e) {
    $conexion->rollback();

    echo 'Error detectado: ',  $e->getMessage(), "\n";
    echo "<div class='alert alert-danger' role='role'>
  <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
  </div>";
  }
}
desconectar();
?>
<script type="text/javascript">
  $(document).ready(function() {
    setTimeout(function() {
      $(".alert-success").fadeOut(1500);
    }, 3000);

    setTimeout(function() {
      $(".alert-danger").fadeIn(1500);
    }, 3000);
  });
</script>