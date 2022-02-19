<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$pass =  $_POST['password'];

$query = "UPDATE usuarios SET pass = '$pass', usuario = '$usuario',  fecha_mod = '$date', id_captM = '$id' WHERE id_usuario = $id_usuario";

$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "<div class='alert alert-success' role='alert'>
     <p>¡La contraseña se modificó exitosamente!</p>
     </div>";
  } else {
    echo "<div class='alert alert-danger' role='role'>
    <p>Hu sucedido un error, reintente</p>
     </div>";
  }
  desconectar();
?>

<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut(1500);
        }, 3000);

        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 3000);
    });
</script>
