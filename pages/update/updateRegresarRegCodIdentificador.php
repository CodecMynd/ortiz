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
$id_regcodidenti = $_POST['id_regcodidenti'];
$codIdProyBase = $_POST['codIdProyBase'];
$status = 'Borrado de 2.6 Código Identificador';
$etapa = 'Proyecto regresado a 2.5 Alta Proyecto';

$conexion->autocommit(FALSE);

try {

  //Regresar Registro de Registro Codigo Identificador a Alta de proyecto para realizar Solicitud
  $query = ("UPDATE proyectos SET proyectoActivo = 0, registroSolicitud = 0, altaProyecto = 1, proyCodIdentificador= 0, superCodIdentificador = 0 WHERE id_proyecto = $id_proyecto ");
  $resultado = mysqli_query($conexion, $query);
  // var_dump($query);
  //echo '<br>';

  $query1 = ("DELETE FROM registrocodidenti WHERE id_regcodidenti = $id_regcodidenti ");
  $resultado1 = mysqli_query($conexion, $query1);
  // var_dump($query1);
  //echo '<br>';

  $query2 = ("UPDATE registrocodidentibitacora SET borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = '$id' WHERE id_regcodidenti = $id_regcodidenti");
  $resultado2 = mysqli_query($conexion, $query2);
  // var_dump($query2);
  //echo '<br>';

  $query3 = ("DELETE FROM desglocecodid WHERE id_proyecto = $id_proyecto AND codIdProyBase = '$codIdProyBase' ");
  $resultado3 = mysqli_query($conexion, $query3);
  // var_dump($query3);
  //echo '<br>';

  $query4 = ("UPDATE desglocecodidbitacora SET borrado = 1, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = $id_proyecto AND codIdProyBase = '$codIdProyBase' ");
  $resultado4 = mysqli_query($conexion, $query4);
  // var_dump($query4);
  //echo '<br>'; 


  //Bitacora
  $query5 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
  $resultado5 = mysqli_query($conexion, $query5);
  // var_dump($query5);

  $conexion->commit();

   echo '<script type="text/javascript">
        alert("¡Comprobación eliminada exitosamente!")
          window.history.go(-1);
           </script>';
} catch (Exception $e) {
  echo '<script type="text/javascript">
     alert("¡Error interno  Por favor repórtelo inmediatamente a el área de Soporte!")
         window.history.go(-1);
          </script>';
}



desconectar();
