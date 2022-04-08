<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$asesor =  $_POST['asesor'];
if ($asesor == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, El campo Nombre Asesor es un campo requerido</strong></p>
    </div>";
    exit;
} else {
    $query = "INSERT INTO asesores(asesor, fecha_creacion, id_capC) VALUES ('$asesor', '$date', $id)";

    $verificar_asesor = mysqli_query($conexion, "SELECT asesor FROM asesores WHERE asesor = '$asesor' ");

    if (mysqli_num_rows($verificar_asesor) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>Error, este Nombre de Asesor ya esta registrado</strong></p>
        </div>";
        exit;
    } else {
        
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
                <p>Nombre Asesor ingresado correctamente</p>
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
