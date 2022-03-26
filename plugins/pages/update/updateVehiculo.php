<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_vehiculo = $_POST['id_vehiculo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$placa = $_POST['placa'];
$color = $_POST['color'];


if ($marca == '' || $modelo == '' || $anio == '' || $placa == '' || $color == '') {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, todos los campos son requeridos</strong></p>
         </div>";
    exit;
} else {
    $query = "UPDATE vehiculos SET id_marca = '$marca', id_modelo = '$modelo', id_anio = '$anio', placa = '$placa', id_color = '$color', fecha_mod = '$date', id_captM = '$id' WHERE id_vehiculo = $id_vehiculo ";

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