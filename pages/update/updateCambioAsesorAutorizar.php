<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_cambioAsesor = $_POST['id_cambioAsesor'];
$estatusAprobado = (!empty($_POST['estatusAprobado'])) ? $_POST['estatusAprobado'] : 0;
$asesorAsignado = $_POST['asesorAsignado'];

$id_proyecto = $_POST['id_proyecto'];
$estatusEspera = '';
$capMotivo = 1;

if ($estatusAprobado == 0) {
    $estatusEspera = 0;
    // Registrar motivo de supervision
    $query = "UPDATE cambioasesores SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1', fecha_mod = '$date', id_capM = '$id' WHERE id_cambioAsesor = '$id_cambioAsesor' ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>¡Seleccionaste Cambio de Asesor no Autorizado!, se guardaron los cambios correctamente</strong></p>
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
        $query = "UPDATE cambioasesores SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1', fecha_mod = '$date', id_capM = '$id' WHERE id_cambioAsesor = '$id_cambioAsesor' ";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

        $query2 = "UPDATE comasesor SET id_asesor = '$asesorAsignado', fecha_mod = '$date', id_capM = '$id' WHERE id_proyecto = '$id_proyecto' ";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($query2);

        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>Xambio de Asesor Autorizado y modificado Exitosamente!</strong></p>
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