<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyectoE1'];
$nProyecto = $_POST['nProyectoE1'];
$id_regSolpzadicional = $_POST['id_regSolpzadicionalE1'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdicE1'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdicE1'];
$borrado = 1;

$etapa = 'Proyecto eliminado en Pre-Autorización: Piezas Adicionales';

try {
  $conexion->autocommit(FALSE);


  $query1 = ("UPDATE preautorizadospzsadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_preAutorizadoPzsAdic = $id_preAutorizadoPzsAdic ");
  $resultado1 = mysqli_query($conexion, $query1);
  // var_dump($query1);

  $query2 = ("UPDATE registrosolicitudpzsadicionales SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_regSolpzadicional = $id_regSolpzadicional");
  $resultado2 = mysqli_query($conexion, $query2);
  // var_dump($query2);

  $query3 = ("UPDATE cotizandopzsadic SET preAutorizPzsAdic = 0, borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_cotizandoPzsAdic = $id_cotizandoPzsAdic");
  $resultado3 = mysqli_query($conexion, $query3);
  // var_dump($query3);

  $query4 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_preAutorizadoPzsAdic, id_pzsEntregadasAdic, id_superSurtPzsAdic, id_proyecto, nProyecto, folio_autorizPzsAdic, folioPzsSurtidaAdic, etapa, borrado, fecha_borrado, id_capB) VALUES ('$id_cotizandoPzsAdic', '$id_regSolpzadicional', '$id_preAutorizadoPzsAdic', '', '', '$id_proyecto', '$nProyecto', '--', '--', '$etapa', '$borrado', '$date', '$id')";
  $resultado4 = mysqli_query($conexion, $query4);
  // var_dump($query4);

  $conexion->commit(TRUE);
  echo "<div class='alert alert-success' role='alert'>
       <p><strong>Proyecto eliminado en Pre-Autorización: Piezas Adicionales correctamente!</strong></p>
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