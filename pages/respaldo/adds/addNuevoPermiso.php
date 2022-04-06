<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

// $id_marca = (isset($_POST['marca'])) ? $_POST['marca']: '';
$modulo = $_POST['modulo'];
$boton = $_POST['boton'];
$permiso = $_POST['permiso'];


if ($modulo == '' || $boton == '' || $permiso == '') {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, todos los campos son requeridos</strong></p>
         </div>";
    exit;
} else {
    $query = "INSERT INTO modulos( modulo, boton, permiso, fecha_creacion, id_captC) VALUES ('$modulo', '$boton', '$permiso', '$date', $id)";

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
            <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
            <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
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
        }, 5000);
    });
</script>