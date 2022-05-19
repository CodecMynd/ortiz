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
$etapa = 'Proyecto Completo Borrado';

 $conexion->autocommit(FALSE);
 try {

    $query1 = "INSERT INTO bitacora(id_proyecto, etapa, fechar_borrado, id_capB) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
    $resultad1 = mysqli_query($conexion, $query1);
    // var_dump($queryB);

    $query2 = ("UPDATE proyectos SET estadoProyectoEliminado = 0, proyectoActivo = 1, registroSolicitud= 0, altaProyecto = 0, proyCodIdentificador = 0, superCodIdentificador= 0, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = '$id_proyecto'");
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($queryP);

    // $queryD = ("DELETE desglocecodid WHERE id_proyecto = '$id_proyecto'");
    // $resultadoD = mysqli_query($conexion, $queryD);
    // var_dump($queryD);

   $conexion->commit();

  echo '<script>
    alert("¡Proyecto eliminado exitosamente!")
    window.history.go(-1);
  </script>';
} catch (Exception $e) {
  $conexion->rollback();

   echo '<script>
     alert("¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!")
     window.history.go(-1);
   </script>';
 }

desconectar();
