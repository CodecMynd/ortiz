<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
   header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_proyecto =  $_POST['id_proyecto'];
$textSupervision =  $_POST['textSupervision'];
$tipoComprobacion = 'asesor';
$estado = 1;
$comSuperAsesor = 1;

$conexion->autocommit(FALSE);
try {
   // Registrar comprobación de supervision
   $query = "INSERT INTO comsupervision(id_proyecto, textSupervision, tipoComprobacion, estado, fecha_registro, id_capC) VALUES ('$id_proyecto', '$textSupervision', '$tipoComprobacion', '$estado', '$date', '$id')";
   $resultado = mysqli_query($conexion, $query);
   //var_dump($query);

   // Actualizar proyecto
   $queryP = "UPDATE proyectos SET comSuperAsesor = '$comSuperAsesor' WHERE id_proyecto = '$id_proyecto' ";
   $resultadoP = mysqli_query($conexion, $queryP);
   //var_dump($queryP);

   $conexion->commit();
   echo '<script>
         alert("Supervisión de Comprobación de Asignacion de Asesor Ingresado correctamente")
         window.history.go(-1);
         </script>';
} catch (Exception $e) {
   $conexion->rollback();
   echo '<script>
         alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: ' . $e->getMessage() . ' )
         window.history.go(-1);
         </script>';
}

desconectar();
