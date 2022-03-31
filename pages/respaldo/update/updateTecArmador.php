<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_tecArmador = $_POST['id_tecArmador'];

$tecArmador =  $_POST['tecArmador'];
if ($tecArmador == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Nombre de Técnico Armador es un campo requerido</strong></p>
    </div>";
    exit;
} else {
    $query = "UPDATE tecarmadores SET tecArmador = '$tecArmador', fecha_mod = '$date', id_capM = '$id' WHERE id_tecArmador = $id_tecArmador ";
    $resultado = mysqli_query($conexion, $query);
    
    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                <p>Nombre de Técnico Armador modificado correctamente</p>
                </div>";
    } else {
        echo "<div class='alert alert-danger' role='role'>
            <p><strong>Error interno: vuelve a intentarlo</strong></p>
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