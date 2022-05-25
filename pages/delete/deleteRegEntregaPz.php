<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto3'];
$nProyecto = $_POST['nProyecto3'];
$id_entregaPz = $_POST['id_entregaPz3'];

$borrado = 1;
$com = 0;


$conexion->autocommit(FALSE);
try {

  // modificar proyecto          comEntragaPz 
  $query = ("UPDATE entregapzs SET comEntregaPz = '', borrado = '$borrado', com = 0, fecha_regCom = '', fecha_modCom = '$date', id_capCcom = '', id_capMcom = '$id'  WHERE  id_entregaPz = $id_entregaPz");
  $resultado = mysqli_query($conexion, $query);
  // var_dump($query);
  // echo '<br>';


  $conexion->commit();
  echo "<div class='alert alert-success' role='alert'>
   <p><strong>Registro de Entrega de Pieza Eliminado correctamente!</strong></p>
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