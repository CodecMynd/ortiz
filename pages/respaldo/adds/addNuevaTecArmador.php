<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$tecArmador =  $_POST['tecArmador'];
if ($tecArmador == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, El campo Nombre Técnico Armador es un campo requerido</strong></p>
    </div>";
    exit;
} else {
    $query = "INSERT INTO tecarmadores(tecArmador, fecha_creacion, id_capC) VALUES ('$tecArmador', '$date', $id)";

    $verificar_tecArmador = mysqli_query($conexion, "SELECT tecArmador FROM tecarmadores WHERE tecArmador = '$tecArmador' ");

    if (mysqli_num_rows($verificar_tecArmador) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>Error, este Nombre Técnico Armador ya esta registrado</strong></p>
        </div>";
        exit;
    } else {
        
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
                <p>Nombre Técnico Armador ingresada correctamente</p>
                </div>";
        } else {
            echo "<div class='alert alert-danger' role='role'>
            <p><strong>Error interno: vuelve a intentarlo</strong></p>
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
