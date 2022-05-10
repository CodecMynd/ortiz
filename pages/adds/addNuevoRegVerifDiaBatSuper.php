<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$date2 = date('Y-m-d ');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto2'];
$nProyecto = $_POST['nProyecto2'];
$id_verifDiaBat = $_POST['id_verifDiaBat2'];
$textSupervision = $_POST['textSupervision'];
$sup = (!empty($_POST['sup'])) ? $_POST['sup'] : 0;
$incidencia = $_POST['incidencia'];
$supS = 1;

if ($textSupervision == '') {
  echo '<script>
    alert("Error, Supervisión de Comprobación Diaria es un campo requerido");
    window.history.go(-1);
  </script>';
  exit;
} else if ($sup == 1) {

  if ($incidencia == '') {
    echo '<script>
      alert("Error, Incidencia es un campo requerido");
      window.history.go(-1);
    </script>';
    exit;
  } else {

    $queryf = 'SELECT MAX(id_incidencia) + 1 FROM incidencias';
    $result = mysqli_query($conexion,  $queryf);
    $rowA = mysqli_fetch_row($result);

    // Prefijo folio
    $text = "Incidencia_bateria-00";
    $folio = $text . '' . $rowA[0];

    $conexion->autocommit(FALSE);
    try {
      // Registrar Supervision diaria baterias
      $query = "UPDATE verificaciondiariabaterias SET textSupervision = '$textSupervision', sup = '$supS', fecha_hoyS = '$date2', fecha_creacionS = '$date', id_capCS = '$id' WHERE id_verifDiaBat = '$id_verifDiaBat' ";
      $resultado = mysqli_query($conexion, $query);
      // var_dump($query);

      // Registrar Incidencias
      $query2 = "INSERT INTO incidencias(id_proyecto, nProyecto, id_verifDiaBat, incidencia, sup, folio, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$id_verifDiaBat', '$incidencia', '$sup', '$folio', '$date', '$id')";
      $resultado2 = mysqli_query($conexion, $query2);
      // var_dump($query2);

      $conexion->commit();

      echo "<div class='alert alert-success' role='alert'>
       <p><strong>Supervisión de Comprobación Diaria e Incidencia ingresados correctamente!</strong></p>
       </div>";
    } catch (Exception $e) {
      $conexion->rollback();

      echo 'Error detectado: ',  $e->getMessage(), "\n";
      echo "<div class='alert alert-danger' role='role'>
                   <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
             </div>";
    }
  }
} else {


  $conexion->autocommit(FALSE);
  try {
      // Registrar Supervision diaria baterias
      $query = "UPDATE verificaciondiariabaterias SET textSupervision = '$textSupervision', sup = '$supS', fecha_hoyS = '$date2', fecha_creacionS = '$date', id_capCS = '$id' WHERE id_verifDiaBat = '$id_verifDiaBat' ";
      $resultado = mysqli_query($conexion, $query);
      // var_dump($query);

    $conexion->commit();

    echo "<div class='alert alert-success' role='alert'>
       <p><strong>Supervisión de Comprobación Diaria ingresado correctamente!</strong></p>
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