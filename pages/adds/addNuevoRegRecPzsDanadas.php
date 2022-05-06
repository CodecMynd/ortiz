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
$linkRecPzsDanadas = $_POST['linkRecPzsDanadas'];
$borrado = 0;
$enUso = 1;
if ($linkRecPzsDanadas == '') {
  echo
  '<script>
   alert("Error, El link de Piezas Dañadas es un campo requerido");
   window.history.go(-1);
 </script>';
  exit;
} else {

  $conexion->autocommit(FALSE);
  try {
    // Registrar motivo de supervision
    $query = "INSERT INTO recpzsdanadas(id_proyecto, nProyecto, linkRecPzsDanadas, borrado, enUso, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$linkRecPzsDanadas', '$borrado', '$enUso', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);

    $conexion->commit();

    echo "<div class='alert alert-success' role='alert'>
     <p><strong>Link de Piezas Dañadas ingresado correctamente!</strong></p>
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
