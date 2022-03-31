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
$motivo =  $_POST['motivo'];
$supervisado = 1;
$capMotivo = 1;

// Registrar motivo de supervision
$query = "UPDATE repvalvenaltavsvalcodid SET motivo = '$motivo', fecha_mod = '$date', id_capM = '$id' WHERE id_proyecto = $id_proyecto";
$resultado = mysqli_query($conexion, $query);
// var_dump($query);


     if ($resultado) {
        echo '<script>
        alert("Modificado exitosamente");
        window.history.go(-1);
     </script>';
     } else {
         echo '<script>
         alert("Error")
         window.history.go(-1);
         </script>';
     }
desconectar();
?>
