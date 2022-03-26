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

//Regresar Registro de Registro Codigo Identificador a Alta de proyecto para realizar Solicitud
$query = ("UPDATE proyectos SET proyectoActivo = 0, registroSolicitud = 0, altaProyecto = 1, proyCodIdentificador= 0, superCodIdentificador = 0 WHERE id_proyecto = $id_proyecto ");
$resultado = mysqli_query($conexion, $query);
//var_dump($query);
//echo '<br>';

$queryD = ("DELETE FROM registrocodidenti WHERE id_regcodidenti = $id_regcodidenti ");
$resultadoD = mysqli_query($conexion, $queryD);
//var_dump($queryD);
//echo '<br>';

$queryU = ("UPDATE registrocodidentibitacora SET borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = '$id' WHERE id_regcodidenti = $id_regcodidenti");
$resultadoU = mysqli_query($conexion, $queryU);
//var_dump($queryU);
//echo '<br>';

$queryDC = ("DELETE FROM desglocecodid WHERE id_proyecto = $id_proyecto AND codIdProyBase = '$codIdProyBase' ");
$resultadoDC = mysqli_query($conexion, $queryDC);
//var_dump($queryD);
//echo '<br>';

$queryUD = ("UPDATE desglocecodidbitacora SET borrado = 1, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = $id_proyecto AND codIdProyBase = '$codIdProyBase' ");
$resultadoUD = mysqli_query($conexion, $queryUD);
var_dump($queryU);
//echo '<br>'; 


//Bitacora
$queryBI = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
$resultadoBI = mysqli_query($conexion, $queryBI);
var_dump($queryBI);


if ($resultadoBI) {
      echo '<script type="text/javascript">
        window.history.go(-1);
         </script>';
 } else {
      echo '<script type="text/javascript">
        alert("Error");
        window.history.go(-1);
         </script>';
 }

desconectar();
