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
$id_envioRecTransm = $_POST['id_envioRecTransm2'];

 $conexion->autocommit(FALSE);
 try {

    $query = "DELETE FROM enviorectransm WHERE id_envioRecTransm  = '$id_envioRecTransm'";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($queryB);

    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
           <p><strong>Proyecto en Envío y Recepción de Transmisión Eliminado correctamente!</strong></p>
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