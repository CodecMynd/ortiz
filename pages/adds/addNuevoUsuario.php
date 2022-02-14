<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


    $nombres =  $_POST['nombres'];
    $aPaterno =  $_POST['aPaterno'];
    $aMaterno =  $_POST['aMaterno'];
    $usuario =  $_POST['usuario'];
    $email =  $_POST['email'];
    $tel =  $_POST['tel'];

    
    $query = "INSERT INTO usuarios (nombres, aPaterno, aMaterno, usuario, email, tel, fecha_creacion, id_captC) VALUES ('$nombres', '$aPaterno', '$aMaterno', '$usuario', '$email', '$tel', '$date', $id);";

    $resultado = mysqli_query($conexion, $query);
     if ($conexion->query($resultado)) {  
         return true;
     }else{
         return false;
     }

desconectar();
?>