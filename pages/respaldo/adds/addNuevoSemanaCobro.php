<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$semanaCobro =  $_POST['semanaCobro'];

$query = "INSERT INTO semanascobro(semanaCobro, fecha_creacion, id_capC) VALUES ('$semanaCobro', '$date', $id)";

$verificar_semanaCobro = mysqli_query($conexion, "SELECT semanaCobro FROM semanascobro WHERE semanaCobro = '$semanaCobro' ");
if (mysqli_num_rows($verificar_semanaCobro) > 0) {
    echo "<div class='alert alert-danger' role='role'>
        <p><strong>Error, esta Semana Cobro ya esta registrada</strong></p>
    </div>";
    exit;
    }else {
    $resultado = mysqli_query($conexion, $query);
    if ($resultado) {
        echo
        "<div class='alert alert-success' role='alert'>
            <p>Semana Cobro ingresada correctamente</p>
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