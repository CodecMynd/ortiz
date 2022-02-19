<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$marca =  $_POST['marca'];
if ($marca == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Marca es un campo requerido</strong></p>
    </div>";
    exit;
} else {
    $query = "INSERT INTO marcas(marca, fecha_creacion, id_capC) VALUES ('$marca', '$date', $id)";
    $verificar_Marca = mysqli_query($conexion, "SELECT marca FROM marcas WHERE marca = '$marca' ");

    if (mysqli_num_rows($verificar_Marca) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>Error, esta Marca ya esta registrada</strong></p>
        </div>";
        exit;
    } else {
        $resultado = mysqli_query($conexion, $query);
        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
                <p>Marca ingresada correctamente</p>
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
