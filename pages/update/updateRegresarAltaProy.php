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

//   Regresar Registro de Solicitud Alta Proyecto a Proyectos Activos para realizar Solicitud
$query = ("UPDATE proyectos SET registroSolicitud = 1, altaProyecto = 0 WHERE id_proyecto = $id_proyecto ");
$resultado = mysqli_query($conexion, $query);


//Borrar ID Registro de Solicitud Alta Proyecto
$queryD = ("DELETE FROM registroalta WHERE id_regAlta = $id_regAlta");
$resultadoD = mysqli_query($conexion, $queryD);


$queryU = ("UPDATE registroaltabitacora SET borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = '$id' WHERE id_regAlta =  $id_regAlta");
$resultadoU = mysqli_query($conexion, $queryU);



 if ($resultadoU) {
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
