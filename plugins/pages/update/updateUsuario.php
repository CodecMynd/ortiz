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
$nombres =  $_POST['nombres'];
$aPaterno =  $_POST['aPaterno'];
$aMaterno =  $_POST['aMaterno'];
$usuario =  $_POST['usuario'];
$email =  $_POST['email'];
$tel =  $_POST['tel'];


if ($nombres == '' || $aPaterno == '' || $aMaterno == '' || $usuario == '' || $tel == '' || $email == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, todos los campos son requerido</strong></p>
    </div>";
    exit;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de email invalido </p>
    </div>";
    exit;
} else if ($tel == 14) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Formato de telefono es de 10 dígitos</p>
    </div>";
    exit;
} else {
    $query = "UPDATE usuarios SET nombres = '$nombres', aPaterno = '$aPaterno', aMaterno = '$aMaterno', usuario = '$usuario', email = '$email', tel = '$tel' WHERE id_usuario = $id_usuario ";

    // $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombres = '$nombres' AND aPaterno = '$aPaterno' AND aMaterno = '$aMaterno' ");
    $resultado = mysqli_query($conexion, $query);
    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                <p><strong>¡Usuario ingresado correctamente!</strong></p>
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
        }, 3000);
    });
</script>