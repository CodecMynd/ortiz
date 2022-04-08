<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_comverifdiariaveh = $_POST['id_comverifdiariaveh'];
$id_proyecto = $_POST['id_proyecto'];

$query = ("DELETE FROM comverifdiariaveh WHERE id_comverifdiariaveh = $id_comverifdiariaveh");
$resultado = mysqli_query($conexion, $query);
// var_dump($query);

 $query1 = "UPDATE proyectos SET comSuperVerifDiariaVeh = 0, comVerifDiariaVeh = 0 WHERE id_proyecto = '$id_proyecto' ";
 $resultado1 = mysqli_query($conexion, $query1);
// var_dump($query1);


if ($resultado1) {
    header("Location: ../admin/crudVerificacionDiariaVehiculos.php" );
   } else {
     echo "<div class='alert alert-danger' role='role'>
         <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
         </div>";
   }

desconectar();
?>
