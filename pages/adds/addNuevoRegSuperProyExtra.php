<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
   header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_proyecto = $_POST['id_proyecto2'];

$id_proyExtra =  $_POST['id_proyExtra2'];
$folioProyExtra = $_POST['folioProyExtra2'];
$textSupervision = $_POST['textSupervision'];
$estado = 1;
$super = 1;
$comSuperAsesor = 1;

if ($textSupervision == '') {
   echo "<div class='alert alert-danger' role='role'>
   <p><strong>Error, El campo Link de Supervisión es requerido </strong></p>
   </div>";
   exit;
} else {
   try {
      $conexion->autocommit(FALSE);
      // Registrar comprobación de supervision
      $query = "INSERT INTO comsupervisionproyextra(id_proyecto, id_proyExtra, textSupervision, estado, fecha_registro, id_capC) VALUES ('$id_proyecto', '$id_proyExtra', '$textSupervision', '$estado', '$date','$id')";
      $resultado = mysqli_query($conexion, $query);
      // var_dump($query);

      $query2 = "UPDATE proyextras SET super = $super WHERE id_proyExtra = $id_proyExtra";
      $resultado = mysqli_query($conexion, $query2);
      // var_dump($query2);

      $conexion->commit();
      echo "<div class='alert alert-success' role='alert'>
            <p><strong>Supervisión de Proyecto Extra ingresado correctamente!</strong></p>
         </div>";
   } catch (Exception $e) {
      $conexion->rollback();
      echo 'Error detectado: ',  $e->getMessage(), "\n";
      echo "<div class='alert alert-danger' role='role'>
                 <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
                 <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
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