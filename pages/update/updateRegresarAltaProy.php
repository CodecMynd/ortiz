<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto'];
$id_regAlta = $_POST['id_regAlta'];
$status = 'Borrado de 2.5 Alta Proyecto';
$etapa = 'Proyecto regresado a 2.4.2 Registro de Solicitud en espera de Alta';
$folioRegAlta = $_POST['folioRegAlta'];

$conexion->autocommit(FALSE);
try {

  //   Regresar Registro de Solicitud Alta Proyecto a Proyectos Activos para realizar Solicitud
  $query = ("UPDATE proyectos SET proyectoActivo = 0, registroSolicitud = 1, altaProyecto = 0, proyCodIdentificador= 0, superCodIdentificador= 0 WHERE id_proyecto = $id_proyecto ");
  $resultado = mysqli_query($conexion, $query);
  // var_dump($query);
  // echo '<br>';

  //Borrar ID Registro de Solicitud Alta Proyecto
  $queryD = ("DELETE FROM registroalta WHERE id_regAlta = $id_regAlta");
  $resultadoD = mysqli_query($conexion, $queryD);
  // var_dump($queryD);
  // echo '<br>';

  $queryU = ("UPDATE registroaltabitacora SET borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto =  $id_proyecto AND folioRegAlta = '$folioRegAlta'");
  $resultadoU = mysqli_query($conexion, $queryU);
  // var_dump($queryU);
  // echo '<br>';

  //Bitacora
  $queryBI = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
  $resultadoBI = mysqli_query($conexion, $queryBI);
  // var_dump($queryBI);
  // echo '<br>';

  $conexion->commit();
  echo "<div class='alert alert-success' role='alert'>
  <p><strong>Registro de Alta de Proyecto Eliminado correctamente!</strong></p>
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
