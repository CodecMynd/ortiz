<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_usuario = $_POST['id'];

$alphabeth = "acbdefghijklmnopqrstuvwxzABCDEFGHIJKLMNOPQRSTUVWYZ1234567890";
$code = "";
for ($i = 0; $i < 32; $i++) {
  $code .= $alphabeth[rand(0, strlen($alphabeth) - 1)];
 
}

$conexion->autocommit(FALSE);
try {
// $query = ("DELETE FROM usuarios WHERE id_usuario = $id_usuario");
$query = ("UPDATE usuarios SET usuario = '$code', pass = '$code', eliminado = '1', fecha_eliminado = '$date', id_captB = '$id', estatus = 'Borrado' WHERE  id_usuario = $id_usuario");
$resultado = mysqli_query($conexion, $query);
// var_dump($query);

$queryD = ("DELETE FROM permisos WHERE id_usuario = $id_usuario ");
$resultadoD = mysqli_query($conexion, $queryD); 

$conexion->commit();

echo '<script>
       alert("Usuario Eliminado correctamente")
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