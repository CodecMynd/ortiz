<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_ActMinDiaria = $_POST['id_ActMinDiaria'];
$id_proyecto = $_POST['id_proyecto'];

try {
    $conexion->autocommit(FALSE);
$query = ("DELETE FROM actmindiaria WHERE id_ActMinDiaria = $id_ActMinDiaria");
$resultado = mysqli_query($conexion, $query);
// var_dump($query);

 $query1 = "UPDATE proyectos SET comActMinDia = 0 WHERE id_proyecto = '$id_proyecto' ";
$resultado1 = mysqli_query($conexion, $query1);
// var_dump($query1);

 $conexion->autocommit(TRUE);
 echo "<script>
         alert('Se eliminon corractamentre la Comprobación de Actividad Mínima Diaria');
         window.history.go(-1);
     </script>";
 } catch (Exception $e) {
 $conexion->rollback();
 echo "<script>
         alert('Error interno');
         window.history.go(-1);
     </script>";
 }
 desconectar();
 ?>
