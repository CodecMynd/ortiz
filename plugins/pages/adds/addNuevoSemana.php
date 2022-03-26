<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$semana =  $_POST['semana'];

$query = "INSERT INTO semanas(semana, fecha_creacion, id_capC) VALUES ('$semana', '$date', $id)";

$verificar_semana = mysqli_query($conexion, "SELECT semana FROM semanas WHERE semana = '$semana' ");
if (mysqli_num_rows($verificar_semana) > 0) {
    echo "<div class='alert alert-danger' role='role'>
        <p><strong>Error, esta Semana ya esta registrada</strong></p>
    </div>";
    exit;
    }else {
    $resultado = mysqli_query($conexion, $query);
    if ($resultado) {
        echo
        "<div class='alert alert-success' role='alert'>
            <p>Semana ingresada correctamente</p>
        </div>";
    } else {
        echo
        "<div class='alert alert-danger' role='role'>
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