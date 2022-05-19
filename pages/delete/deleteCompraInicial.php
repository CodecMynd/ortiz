<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_regCompraInicial = $_POST['id_regCompraInicial4'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas4'];
// $folio_solicitud = $_POST['folio_solicitud4'];
// $borrado = '1';
// $enUso = '0';

try {
  $conexion->autocommit(FALSE);
  $query = "DELETE FROM regcomprainicial WHERE id_regCompraInicial = '$id_regCompraInicial' ";
  $resultado = mysqli_query($conexion, $query);

  $query2 = "UPDATE solpzsdanadas SET regCompraInicial = 0 WHERE id_solPzsDanadas = '$id_solPzsDanadas' ";
  $resultado2 = mysqli_query($conexion, $query2);

  $conexion->commit();
  echo "<div class='alert alert-success' role='alert'>
         <p><strong>Registro de Compra Inicial Eliminado correctamente!</strong></p>
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