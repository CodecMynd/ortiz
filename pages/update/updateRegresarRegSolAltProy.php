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
$id_regSolicitud = $_POST['id_regSolicitud'];
$status = 'Borrado de 2.4.2 Solicitud Alta Proyecto';

//   Regresar Registro de Solicitud Alta Proyecto a Proyectos Activos para realizar Solicitud
$query = ("UPDATE proyectos SET proyectoActivo = 1, registroSolicitud = 0 WHERE id_proyecto = $id_proyecto ");
$resultado = mysqli_query($conexion, $query);
//   var_dump($query);

//Borrar ID Registro de Solicitud Alta Proyecto
$queryD = ("DELETE FROM registrosolicitud WHERE id_regSolicitud = $id_regSolicitud");
$resultadoD = mysqli_query($conexion, $queryD);

//Borrar ID Registro de Solicitud Alta Proyecto
$queryD = ("UPDATE registrosolicitudbitacora SET borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = '$id' WHERE id_regSolicitud = $id_regSolicitud");
$resultadoD = mysqli_query($conexion, $queryD);

if ($resultadoD) {
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
