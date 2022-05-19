<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_cambioSemSolAlta = $_POST['id_cambioSemSolAlta'];
$estatusAprobado = (!empty($_POST['estatusAprobado'])) ? $_POST['estatusAprobado'] : 0;
$semanaAsignado = $_POST['semanaAsignado'];
$id_proyecto = $_POST['id_proyecto'];
$id_regSolicitud = $_POST['id_regSolicitud'];
$folioRegSolicitud = $_POST['folioRegSolicitud'];
$estatusEspera = '';
$capMotivo = 1;

if ($estatusAprobado == 0) {
    $estatusEspera = 0;
    // Registrar motivo de supervision
    $query = "UPDATE cambiosemsolalta SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1', fecha_mod = '$date', id_capM = '$id' WHERE id_cambioSemSolAlta  = '$id_cambioSemSolAlta' ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>¡Seleccionaste Cambio de Semana de Solicitud de Alta no Autorizado!, se guardaron los cambios correctamente</strong></p>
              </div>";
    } else {
        echo "<div class='alert alert-danger' role='role'>
                    <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
                    <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
              </div>";
    }
} else {
    $estatusEspera = 2;

    $conexion->autocommit(FALSE);
    try {
        // Registrar motivo de supervision
        $query = "UPDATE cambiosemsolalta SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1', fecha_mod = '$date', id_capM = '$id' WHERE id_cambioSemSolAlta = '$id_cambioSemSolAlta' ";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

        $query2 = "UPDATE registrosolicitud SET id_semana = '$semanaAsignado', fecha_mod = '$date', id_capM = '$id' WHERE id_regSolicitud  = '$id_regSolicitud' AND folioRegSolicitud = '$folioRegSolicitud' ";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($query2);

        $query3 = "UPDATE registrosolicitudbitacora SET id_semana = '$semanaAsignado', fecha_mod = '$date', id_capM = '$id' WHERE id_proyecto  = '$id_proyecto' AND folioRegSolicitud = '$folioRegSolicitud' ";
        $resultado3 = mysqli_query($conexion, $query3);
        // var_dump($query3);

        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>Cambio de Semana de Solicitud de Alta Autorizado y modificado Exitosamente!</strong></p>
             </div>";
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
        }, 5000);
    });
</script>