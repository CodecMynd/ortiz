<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


    $nombres =  $_POST['nombres_add'];
    $aPaterno =  $_POST['aPaterno_add'];
    $aMaterno =  $_POST['aMaterno_add'];
    $usuario =  $_POST['usuario_add'];
    $email =  $_POST['email_add'];
    $tel =  $_POST['tel_add'];

    
    $query = "INSERT INTO usuarios (nombres, aPaterno, aMaterno, usuario, email, tel, fecha_creacion, id_captC) 
    VALUES ('$nombres', '$aPaterno', '$aMaterno', '$usuario', '$email', '$tel', '$date', $id);";

     $resultado = mysqli_query($conexion, $query);
    if ($conexion->query($resultado)) {  
        return true;
    }else{
        return false;
    }

desconectar();
?>