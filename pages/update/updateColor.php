<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_color = $_POST['id_color'];
$color =  $_POST['color'];
if ($color == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Color es un campo requerido</strong></p>
    </div>";
    exit;
} else {
    $queryColor = "UPDATE colores SET color = '$color', fecha_mod = '$date', id_capM = '$id' WHERE id_color = $id_color";

    $verificar_Color = mysqli_query($conexion, "SELECT color FROM colores WHERE color = '$color' ");

    if (mysqli_num_rows($verificar_Color) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>Error, esta Marca ya esta registrada</strong></p>
        </div>";
        exit;
    } else {
        
        $resultadoColor = mysqli_query($conexion, $queryColor);

        if ($resultadoColor) {
            echo "<div class='alert alert-success' role='alert'>
                <p>Color ingresada correctamente</p>
                </div>";
        } else {
            echo 'Error detectado: ',  $e->getMessage(), "\n";
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
