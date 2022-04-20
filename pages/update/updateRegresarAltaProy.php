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

  $queryU = ("UPDATE registroaltabitacora SET borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = '$id' WHERE id_regAlta =  $id_regAlta");
  $resultadoU = mysqli_query($conexion, $queryU);
  // var_dump($queryU);
  // echo '<br>';

  //Bitacora
  $queryBI = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
  $resultadoBI = mysqli_query($conexion, $queryBI);
  // var_dump($queryBI);
  // echo '<br>';

  $conexion->commit();
  echo '<script type="text/javascript">
alert("Registro eliminado exitosamente!")
  window.history.go(-1);
   </script>';
} catch (Exception $e) {
  echo '<script type="text/javascript">
  alert("¡Error interno  Por favor repórtelo inmediatamente a el área de Soporte!")
      window.history.go(-1);
       </script>';
}



desconectar();
