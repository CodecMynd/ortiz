<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_proyecto =  $_POST['id_proyecto'];
$nProyecto =  $_POST['nProyecto'];
$linkComDiaAltasAsignarCodId = $_POST['linkComDiaAltasAsignarCodId'];
$fecha_hoyV  = $_POST['fecha_hoyV'];


if ($linkComDiaAltasAsignarCodId == '') {
    echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, Link de Video en Vivo es un campo requerido</strong></p>
  </div>";
    exit;
} else {

    try {
        $conexion->autocommit(FALSE);
        // Registrar motivo de supervision
        $query = "INSERT INTO comdiaaltasasignarcodid(id_proyecto, nProyecto, linkComDiaAltasAsignarCodId, fecha_hoyV, fecha_creacionV, id_capCV) VALUES ('$id_proyecto', '$nProyecto', '$linkComDiaAltasAsignarCodId', '$fecha_hoyV', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);


        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                <p><strong>Registro de Comprovación diaria ingresada correctamente!</strong></p>
                </div>";
        echo '<script>
                alert("Registro de Verificación diaria ingresada correctamente");
                window.location.href = "../admin/crudComDiariaAltasAsignarCodId.php";
                </script>';
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