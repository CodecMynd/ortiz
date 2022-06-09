<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_regSolpzadicional = $_POST['id_regSolpzadicional'];
$estatusAprobado = (!empty($_POST['estatusAprobado'])) ? $_POST['estatusAprobado'] : 0;


$id_proyecto = $_POST['id_proyecto'];
$estatusEspera = '';
$capMotivo = 1;

if ($estatusAprobado == 0) {
    $estatusEspera = 0;
    // Registrar motivo de supervision
    $query = "UPDATE registrosolicitudpzsadicionales SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1' WHERE id_regSolpzadicional = '$id_regSolpzadicional' ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>¡Seleccionaste Solicitud de Pieza Adicional no Autorizado!, se guardaron los cambios correctamente</strong></p>
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
        $query = "UPDATE registrosolicitudpzsadicionales SET estatusEspera = '$estatusEspera', estatusAprobado = '$estatusAprobado', verificado = '1' WHERE id_regSolpzadicional = '$id_regSolpzadicional' ";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);


        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                    <p><strong>Solicitud de Pieza Adicional Autorizado Exitosamente!</strong></p>
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