<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyectoE2'];
$nProyecto = $_POST['nProyectoE2'];
$id_regSolpzadicional = $_POST['id_regSolpzadicionalE2'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdicE2'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdicE2'];
$id_autorizadoPzsAdic = $_POST['id_autorizadoPzsAdicE2'];
$borrado = 1;

$query = "SELECT folio_autorizPzsAdic	 FROM autorizadospzsadic WHERE id_autorizadoPzsAdic = $id_autorizadoPzsAdic";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$folio_autorizPzsAdic	 = $row['folio_autorizPzsAdic'];

$etapa = 'Proyecto eliminado en Autorizado: Piezas Adicionales';

try {
  $conexion->autocommit(FALSE);


  $query1 = ("UPDATE preautorizadospzsadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_preAutorizadoPzsAdic = $id_preAutorizadoPzsAdic ");
  $resultado1 = mysqli_query($conexion, $query1);
  // var_dump($query1);

  $query2 = ("UPDATE registrosolicitudpzsadicionales SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_regSolpzadicional = $id_regSolpzadicional");
  $resultado2 = mysqli_query($conexion, $query2);
  // var_dump($query2);

  $query3 = ("UPDATE cotizandopzsadic SET autorizadoPzsAdic = 0, borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_cotizandoPzsAdic = $id_cotizandoPzsAdic");
  $resultado3 = mysqli_query($conexion, $query3);
  // var_dump($query3);

  $query4 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_preAutorizadoPzsAdic, id_pzsEntregadasAdic, id_superSurtPzsAdic, id_proyecto, nProyecto, folio_autorizPzsAdic, folioPzsSurtidaAdic, etapa, borrado, fecha_borrado, id_capB) VALUES ('$id_cotizandoPzsAdic', '$id_regSolpzadicional', '$id_preAutorizadoPzsAdic', '', '', '$id_proyecto', '$nProyecto', '$folio_autorizPzsAdic	', '--', '$etapa', '$borrado', '$date', '$id')";
  $resultado4 = mysqli_query($conexion, $query4);
  // var_dump($query4);

  $query5 = ("UPDATE autorizadospzsadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_autorizadoPzsAdic = $id_autorizadoPzsAdic");
  $resultado5 = mysqli_query($conexion, $query5);
  // var_dump($query5);

  $conexion->commit(TRUE);
  echo "<div class='alert alert-success' role='alert'>
       <p><strong>Proyecto eliminado en Autorizado: Piezas Adicionales correctamente!</strong></p>
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