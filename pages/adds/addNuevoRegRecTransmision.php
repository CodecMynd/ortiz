<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto =  $_POST['id_proyecto3'];
$nProyecto =  $_POST['nProyecto3'];
$id_envioRecTransm = $_POST['id_envioRecTransm3'];
$linkRecTransm = $_POST['linkRecTransm'];

$rec = 1;

if ($linkRecTransm == '') {
  echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, el Link de Recepción de Transmisión es requerido</strong></p>
  </div>";
  exit;
} else {

  $conexion->autocommit(FALSE);
  try {
    // Registrar motivo de supervision
    $query = "UPDATE enviorectransm SET linkRecTransm = '$linkRecTransm', rec = '$rec', fecha_creacionRec = '$date', id_capCR = '$id' WHERE id_envioRecTransm = '$id_envioRecTransm'";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    $conexion->commit();

    echo "<div class='alert alert-success' role='alert'>
     <p><strong>Link de Recepción de Transmisión ingresado correctamente!</strong></p>
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
