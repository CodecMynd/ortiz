<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$queryf = 'SELECT MAX(id_solPzsDanadas ) + 1 FROM solpzsdanadas';
$result = mysqli_query($conexion,  $queryf);
$rowA = mysqli_fetch_row($result);

// Prefijo folio
$text = "Solicitud_Pieza-00";
$folio_solicitud = $text . '' . $rowA[0]; 

$id_proyecto =  $_POST['id_proyecto'];
$id_recPzsDanadas =  $_POST['id_recPzsDanadas'];
$nProyecto = $_POST['nProyecto'];
$cantidad = $_POST['cantidad'];
$minVideo = $_POST['minVideo'];
$descripcion = $_POST['descripcion'];
$borrado = '0';
$enUso = '1';

if ($cantidad == '') {
  echo
  '<script>
  alert("Error, El campo Cantidad es requerido");
  window.history.go(-1);
</script>';
  exit;
} else if ($minVideo == '') {
  echo
  '<script>
  alert("Error, El campo Minuto del Video es requerido");
  window.history.go(-1);
</script>';
  exit;
} else if ($descripcion == '') {
  echo
  '<script>
  alert("Error, El campo Descripción es requerido");
  window.history.go(-1);
</script>';
  exit;
} else {



  // Registrar comprobación de supervision
  $query = "INSERT INTO solpzsdanadas(id_proyecto, id_recPzsDanadas, nProyecto, folio_solicitud, cantidad, descripcion, minVideo, borrado, enUso, fecha_creacion, id_capC) VALUES ('$id_proyecto','$id_recPzsDanadas','$nProyecto','$folio_solicitud','$cantidad','$descripcion', '$minVideo', '$borrado', '$enUso', '$date','$id')";
  $resultado = mysqli_query($conexion, $query);
  // var_dump($query);

   if ($resultado) {
     echo "<div class='alert alert-success' role='alert'>
       <p><strong>Registros de Solicitud de Piezas ingresado correctamente</strong></p>
       </div>";
   } else {
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