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
    $query = "INSERT INTO vehiculos(id_marca, id_modelo, id_anio, placa, id_color, fecha_creacion, id_captC ) VALUES ('$marca' , '$modelo', '$anio', '$placa', '$color', '$date', '$id' )";
    // var_dump($query);
    $verificar_vehiculo = mysqli_query($conexion, "SELECT id_marca, id_modelo, id_anio, placa, id_color FROM vehiculos WHERE id_marca = '$marca' AND id_modelo = '$modelo' AND id_anio = '$anio' AND placa = '$placa' AND id_color = '$color' ");
// var_dump($query);
    if (mysqli_num_rows($verificar_vehiculo) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
    <p><strong>¡Error, Estos datos del Vehículo ya se encuentran  registrados, verifica por favor!</strong></p>
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
        <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
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