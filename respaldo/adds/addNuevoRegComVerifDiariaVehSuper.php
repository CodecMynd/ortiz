<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_comverifdiariaveh =  $_POST['id_comverifdiariaveh'];
$textSupervision =  $_POST['textSupervision'];
$id_proyecto = $_POST['id_proyecto'];
$estado = 1;
$comSuperVerifDiariaVeh = 1;
$fecha_hoyS = $_POST['fecha_hoyS'];

if ($textSupervision == '') {
    echo "<div class='alert alert-danger' role='role'>
<p><strong>Error, Supervisión de Link de Video en Vivo es un campo requerido</strong></p>
</div>";
    exit;
} else {
    // Registrar comprobación de supervision
    $query = "UPDATE comverifdiariaveh SET textSupervision = '$textSupervision', fecha_hoyS = '$fecha_hoyS', fecha_creacionS = '$date', id_capCS = '$id' WHERE id_comverifdiariaveh = '$id_comverifdiariaveh' ";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);

    // Actualizar proyecto
    $queryP = "UPDATE proyectos SET comSuperVerifDiariaVeh = '$comSuperVerifDiariaVeh' WHERE id_proyecto = '$id_proyecto' ";
    $resultadoP = mysqli_query($conexion, $queryP);
    // var_dump($queryP);

     if ($resultadoP) {
         echo "<div class='alert alert-success' role='alert'>
        <p><strong>¡Supervisión Link de Video en Vivo ingresado correctamente!</strong></p>
        </div>";
     } else {
         echo "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
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
        }, 3000);
    });
</script>