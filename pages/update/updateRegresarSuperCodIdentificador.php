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
$status = 'Borrado de 2.7 Supervisión Código Identificador';
$etapa = 'Proyecto regresado a 2.6 Proyectos con Código Identificador';


$conexion->autocommit(FALSE);
try {

//   Regresar Registro de Registro Codigo Identificador a Alta de proyecto para realizar Solicitud
$queryP = ("UPDATE proyectos SET proyectoActivo = 0, registroSolicitud = 0, altaProyecto = 0, proyCodIdentificador= 1, superCodIdentificador = 0 WHERE id_proyecto = $id_proyecto ");
$resultadoP = mysqli_query($conexion, $queryP);
// var_dump($queryP);
// echo '<br>';

$queryD = ("UPDATE registrocodidenti SET supervisado = 0, status = '$status' WHERE id_proyecto = $id_proyecto ");
$resultadoD = mysqli_query($conexion, $queryD);
// var_dump($queryD);
// echo '<br>';

$queryU = ("UPDATE registrocodidentibitacora SET supervisado = 0, borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = $id WHERE id_proyecto = $id_proyecto ");
$resultadoU = mysqli_query($conexion, $queryU);
// var_dump($queryU);
// echo '<br>';

$queryS = ("DELETE FROM supervisado  WHERE id_proyecto = $id_proyecto ");
$resultadoS = mysqli_query($conexion, $queryS);
// var_dump($queryS);
// echo '<br>';

$querySB = ("UPDATE supervisadobitacora SET supervisado = 0, borradoFechaSupervisado = '$date', id_capB = $id WHERE id_proyecto = $id_proyecto ");
$resultadoSB = mysqli_query($conexion, $querySB);
// var_dump($querySB);
// echo '<br>';

//Bitacora
$queryBI = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
$resultadoBI = mysqli_query($conexion, $queryBI);
// var_dump($queryBI);
  
$conexion->commit();
    
echo '<script>
      alert("¡Eliminado este Registro de Supervisión de Código Identificador correctamente")
      window.history.go(-1);
      </script>';


} catch (Exception $e) {
$conexion->rollback();

echo '<script>
    alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: '.$e->getMessage().' )
    window.history.go(-1);
    </script>';
}

desconectar();
