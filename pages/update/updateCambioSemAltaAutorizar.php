<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_cambioSemAlta = $_POST['id_cambioSemAlta'];
$estatusAprobado = (!empty($_POST['estatusAprobado'])) ? $_POST['estatusAprobado'] : 0;
$semanaAsignado = $_POST['semanaAsignado'];
$id_proyecto = $_POST['id_proyecto'];
$id_regAlta = $_POST['id_regAlta'];
$folioRegAlta = $_POST['folioRegAlta'];
$estatusEspera = '';
$capMotivo = 1;

if ($estatusAprobado == 0) {
    $estatusEspera = 0;
    // Registrar motivo de supervision
    $query = "UPDATE cambiosemalta SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1', fecha_mod = '$date', id_capM = '$id' WHERE id_cambioSemAlta  = '$id_cambioSemAlta' ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>¡Seleccionaste Cambio de Semana de Alta no Autorizado!, se guardaron los cambios correctamente</strong></p>
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
        $query = "UPDATE cambiosemalta SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1', fecha_mod = '$date', id_capM = '$id' WHERE id_cambioSemAlta = '$id_cambioSemAlta' ";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

        $query2 = "UPDATE registroalta SET id_semana = '$semanaAsignado', fecha_mod = '$date', id_capM = '$id' WHERE id_regAlta  = '$id_regAlta' AND folioRegAlta = '$folioRegAlta' ";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($query2);

        $query3 = "UPDATE registroaltabitacora SET id_semana = '$semanaAsignado', fecha_mod = '$date', id_capM = '$id' WHERE id_proyecto  = '$id_proyecto' AND folioRegAlta = '$folioRegAlta' ";
        $resultado3 = mysqli_query($conexion, $query3);
        // var_dump($query3);

        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>Cambio de Semana de Alta Autorizado y modificado Exitosamente!</strong></p>
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