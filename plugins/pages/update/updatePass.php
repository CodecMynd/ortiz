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
$usuarioPass =$_POST['usuarioPass'];
$pass = $_POST['pass'];


if ($id_usuario == '' || $pass == '') {
    echo "<div class='alert alert-danger' role='role'>
          <p><strong>Error, Contraseña es un campo requeridos</strong></p>
          </div>";
    exit;
} else {
    $query = "UPDATE usuarios SET usuario = '$usuarioPass', pass = '$pass', fecha_mod = '$date', id_captM= '$id' WHERE id_usuario = $id_usuario";
    
    $resultado = mysqli_query($conexion, $query);
    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
             <p><strong>Contraseña actualizada correctamente!</strong></p>
             </div>";
    } else {
        echo "<div class='alert alert-danger' role='role'>
         <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
         </div>";
    }
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
        }, 4000);
    });
</script>