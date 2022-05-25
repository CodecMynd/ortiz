<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto =  $_POST['id_proyecto1'];
$nProyecto =  $_POST['nProyecto1'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas1'];
$comEntragaPz = $_POST['comEntragaPz'];
$borrado = 0;
$com = 1;
// Query Registro de folio Alta
$queryP = 'SELECT MAX(id_entregaPz) + 1 FROM entregapzs';
$result = mysqli_query($conexion,  $queryP);
$rowA = mysqli_fetch_row($result);

// Prefijo folio
$text = "Entrega_Pieza-00";
$folioEntregaPz = $text . '' . $rowA[0];

if ($comEntragaPz == '') {

  echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, el campo Link de Registro de Entrega de Pieza es requerido</strong></p>
  </div>";
  exit;
} else {

  $conexion->autocommit(FALSE);
  try {
    // Registrar motivo de supervision
    $query = "INSERT INTO entregapzs(id_proyecto, nProyecto, id_solPzsDanadas, comEntregaPz, folioEntregaPz, borrado, com, fecha_regCom, id_capCcom) VALUES ( '$id_proyecto', '$nProyecto', '$id_solPzsDanadas', '$comEntragaPz', '$folioEntregaPz', '$borrado', '$com', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);

    $conexion->commit();

    echo "<div class='alert alert-success' role='alert'>
     <p><strong>Link de Registro Entrega de Pieza ingresado correctamente!</strong></p>
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