<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_SegDiaProAseTecnico = $_POST['id_SegDiaProAseTecnico'];


try {
  $conexion->autocommit(FALSE);


  $queryD = ("UPDATE segdiaproasetecnico SET textSupervision = '', fecha_hoyS = '', id_capCS = '', fecha_mod = '$date', id_capM = $id  WHERE id_SegDiaProAseTecnico = $id_SegDiaProAseTecnico ");
  $resultadoD = mysqli_query($conexion, $queryD);
  //var_dump($queryD);

  $conexion->commit(TRUE);
  echo "<div class='alert alert-success' role='alert'>
       <p><strong>Supervisión Eliminada correctamente!</strong></p>
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
    }, 5000);
  });
</script>