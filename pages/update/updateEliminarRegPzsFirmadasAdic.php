<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyectoE5'];
$nProyecto = $_POST['nProyectoE5'];
$id_regSolpzadicional = $_POST['id_regSolpzadicionalE5'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdicE5'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdicE5'];
$id_autorizadoPzsAdic = $_POST['id_autorizadoPzsAdicE5'];
$id_AutoProceSurtPzAdic = $_POST['id_AutoProceSurtPzAdicE5'];
$id_pzsEntregadasAdic = $_POST['id_pzsEntregadasAdicE5'];
$id_pzsFirmadasRecAdic = $_POST['id_pzsFirmadasRecAdicE5'];

$borrado = 1;

$query = "SELECT folio_autorizPzsAdic	 FROM autorizadospzsadic WHERE id_autorizadoPzsAdic = $id_autorizadoPzsAdic";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$folio_autorizPzsAdic	 = $row['folio_autorizPzsAdic'];

$query2 = "SELECT folioPzsSurtidaAdic	 FROM pzstregadasadic WHERE id_pzsEntregadasAdic = $id_pzsEntregadasAdic";
$respuesta2 = mysqli_query($conexion, $query2);
$row2 = $respuesta2->fetch_assoc();
$folioPzsSurtidaAdic	 = $row2['folioPzsSurtidaAdic'];


$etapa = 'Proyecto eliminado en Piezas Firmadas de Recibido: Piezas Adicionales';

try {
  $conexion->autocommit(FALSE);


  $query1 = ("UPDATE preautorizadospzsadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_preAutorizadoPzsAdic = $id_preAutorizadoPzsAdic ");
  $resultado1 = mysqli_query($conexion, $query1);
  // var_dump($query1);

  $query2 = ("UPDATE registrosolicitudpzsadicionales SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_regSolpzadicional = $id_regSolpzadicional");
  $resultado2 = mysqli_query($conexion, $query2);
  // var_dump($query2);

  $query3 = ("UPDATE cotizandopzsadic SET pzsFirmadaRecAdic = 0, borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_cotizandoPzsAdic = $id_cotizandoPzsAdic");
  $resultado3 = mysqli_query($conexion, $query3);
  // var_dump($query3);

  $query4 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_preAutorizadoPzsAdic, id_pzsEntregadasAdic, id_superSurtPzsAdic, id_proyecto, nProyecto, folio_autorizPzsAdic, folioPzsSurtidaAdic, etapa, borrado, fecha_borrado, id_capB) VALUES ('$id_cotizandoPzsAdic', '$id_regSolpzadicional', '$id_preAutorizadoPzsAdic', '', '', '$id_proyecto', '$nProyecto', '$folio_autorizPzsAdic	', '$folioPzsSurtidaAdic', '$etapa', '$borrado', '$date', '$id')";
  $resultado4 = mysqli_query($conexion, $query4);
  // var_dump($query4);

  $query5 = ("UPDATE autorizadospzsadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_autorizadoPzsAdic = $id_autorizadoPzsAdic");
  $resultado5 = mysqli_query($conexion, $query5);
  // var_dump($query5);

  $query6 = ("UPDATE autoprocesurtpzsadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_AutoProceSurtPzAdic = $id_AutoProceSurtPzAdic");
  $resultado6 = mysqli_query($conexion, $query6);
  // var_dump($query6);

  $query7 = ("UPDATE pzstregadasadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_pzsEntregadasAdic = $id_pzsEntregadasAdic");
  $resultado7 = mysqli_query($conexion, $query7);
  // var_dump($query7);

  $query8 = ("UPDATE pzsfirmadasrecadic SET borrado = '$borrado', fecha_borrado = '$date', id_capB = '$id' WHERE id_pzsFirmadasRecAdic = $id_pzsFirmadasRecAdic");
  $resultado8 = mysqli_query($conexion, $query8);
  // var_dump($query7);

  $conexion->commit(TRUE);
  echo "<div class='alert alert-success' role='alert'>
       <p><strong>Proyecto eliminado en Piezas Firmadas de Recibido: Piezas Adicionales correctamente!</strong></p>
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