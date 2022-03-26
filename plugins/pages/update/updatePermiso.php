<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_modulo = $_POST['id_modulo'];
$modulo = $_POST['modulo'];
$boton = $_POST['boton'];
$permiso = $_POST['permiso'];


if ($modulo == '' || $boton == '' || $permiso == '') {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, todos los campos son requeridos</strong></p>
         </div>";
    exit;
} else {
    $query = "UPDATE modulos SET modulo = '$modulo', boton = '$boton', permiso = '$permiso', fecha_mod = '$date', id_captM = $id_modulo WHERE id_modulo = $id_modulo";

    $verificar_permiso = mysqli_query($conexion, "SELECT * FROM modulos WHERE modulo = '$modulo' AND boton = '$boton' AND permiso = '$permiso' ");

    if (mysqli_num_rows($verificar_permiso) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
    <p><strong>¡Error, este Modulo, Botón y Permiso ya se encuentran  registrados, verifica por favor!</strong></p>
    </div>";
        exit;
    } else {
        $resultado = mysqli_query($conexion, $query);
        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
            <p><strong>Permiso ingresado correctamente!</strong></p>
            </div>";
        } else {
            echo "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
        </div>";
        }
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