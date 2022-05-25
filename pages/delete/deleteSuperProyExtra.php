<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyExtra = $_POST['id_proyExtra3'];
$textSupervision = $_POST['textSupervision3'];
$id_comSuperProyExtra = $_POST['id_comSuperProyExtra3'];

$status = 'Borrado de 5.1 Captura Proyectos Extras';
$etapa = 'Proyecto Borrado de 5.1 Captura Proyectos Extras';
$super = 0;

$conexion->autocommit(FALSE);
try {

  //Borrar ID Registro Proyecto Extra
  $query1 = "DELETE FROM comsupervisionproyextra WHERE id_proyExtra = $id_proyExtra";
  $resultado1 = mysqli_query($conexion, $query1);
  // var_dump($queryD);
  // echo '<br>';

  $query2 = "UPDATE proyextras SET super = $super WHERE id_proyExtra = $id_proyExtra";
  $resultado = mysqli_query($conexion, $query2);
  // var_dump($query2);

  $conexion->commit();
  echo "<div class='alert alert-success' role='alert'>
  <p><strong>Supervisión de Proyecto Extra, Eliminado correctamente!</strong></p>
  </div>";
} catch (Exception $e) {
  $conexion->rollback();
  echo 'Error detectado: ',  $e->getMessage(), "\n";
  echo "<div class='alert alert-danger' role='role'>
              <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
              <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
       </div>";
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
