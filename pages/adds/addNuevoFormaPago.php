<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$formaPago =  $_POST['formaPago'];
if ($formaPago == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Forma de Pago es un campo requerido</strong></p>
    </div>";
    exit;
} else {
    $query = "INSERT INTO formapagos(formaPago, fecha_creacion, id_capC) VALUES ('$formaPago', '$date', $id)";

    $verificar_formaPago = mysqli_query($conexion, "SELECT formaPago FROM formaPagos WHERE formaPago = '$formaPago' ");

    if (mysqli_num_rows($verificar_formaPago) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>Error, esta Forma de Pago ya esta registrada</strong></p>
        </div>";
        exit;
    } else {
        
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>
                <p>Forma de Pago ingresada correctamente</p>
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
        }, 5000);
    });
</script>
