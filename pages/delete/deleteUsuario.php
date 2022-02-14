<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

if (isset($_POST['borrarId'])) {
    $borrarId = $_POST['borrarId'];
}

// revisar si existe el registro en la tabla
$sql = "SELECT * FROM usuarios WHERE id_usuario = $borrarId";
$result = mysqli_query($conexion, $sql);

if ($result->num_rows > 0) {
    // borramos el registro de la tabla
    $query = "DELETE FROM usuarios WHERE id_usuario = $borrarId";
    $resultado = mysqli_query($conexion, $query);
    
    if ($conexion) {
        echo 1;
        exit;
    }else{
        echo 0;
        exit;
    }
}
desconectar();

?>
