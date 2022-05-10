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
$folioCambioAsesor = $_POST['folioCambioAsesor'];
$asesorActual = $_POST['id_asesor'];
$motivo = $_POST['motivo'];
$asesorAsignado = (!empty($_POST['asesorAsignado'])) ? $_POST['asesorAsignado'] : 0;
$estatusEspera = 1;
$estatusAprobado = 0;

if ($motivo == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo '*Motivo del Cambio' es requerido</strong></p>
    </div>";
    exit;
} else if ($asesorAsignado == 0) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo '*Asesor por Asignar' es requerido</strong></p>
    </div>";
    exit;
} else if ($asesorActual == $asesorAsignado) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, No estas cambiando Asesor, selecciona una opción diferente al asesor actual de la lista desplegable</strong></p>
    </div>";
    exit;
} else {

    // Insertamos tabla proyectos
    $query = "INSERT INTO cambioasesores(id_proyecto, folioCambioAsesor, asesorActual, asesorAsignado, motivo, estatusEspera, estatusAprobado, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$folioCambioAsesor', '$asesorActual', '$asesorAsignado', '$motivo', '$estatusEspera', '$estatusAprobado', '$date', $id)";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
               <p><strong>¡Solicitud generada exitosamente. Registro de Solicitud de Cambio de Asesor queda en espera de su Validación!</strong></p>
            </div>";
    } else {
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
        }, 50000);

        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 5000);
    });
</script>