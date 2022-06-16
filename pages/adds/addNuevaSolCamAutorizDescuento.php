<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto'];
$id_regSolicitud = $_POST['id_regSolicitud'];
$folioCambioValAlta = $_POST['folioCambioValAlta'];
$valorVentaAltaAsignado = $_POST['valorVentaAltaAsignado'];
$valorVentaAltaActual = $_POST['valorVentaAltaActual'];
$folioRegSolicitud = $_POST['folioRegSolicitud'];
$motivo = $_POST['motivo'];
$estatusEspera = 1;
$estatusAprobado = 0;


if ($motivo == ' ') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo '*Motivo del Cambio' es requerido</strong></p>
    </div>";
    exit;
} else {
    try {
        $conexion->autocommit(FALSE);

        $query = "INSERT INTO cambioautorizdescuento(id_proyecto, id_regSolicitud, folioCambioValAlta, folioRegSolicitud, valorVentaAltaActual, valorVentaAltaAsignado, motivo, estatusEspera, estatusAprobado, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$id_regSolicitud', '$folioCambioValAlta', '$folioRegSolicitud', '$valorVentaAltaActual', '$valorVentaAltaAsignado', '$motivo', '$estatusEspera', '$estatusAprobado', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

        $conexion->commit(TRUE);
        echo "<div class='alert alert-success' role='alert'>
            <p><strong>Solicitud de Autorización de Descuento ingresado correctamente!</strong></p></div>";
    } catch (Exception $e) {
        $conexion->rollback();
        echo 'Error detectado: ',  $e->getMessage(), "\n";
        echo "<div class='alert alert-danger' role='role'>
                 <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
                 <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
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