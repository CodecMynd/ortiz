<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_SegDiaProAseTecnico =  $_POST['id_SegDiaProAseTecnico'];
$textSupervision =  $_POST['textSupervision'];
$id_proyecto = $_POST['id_proyecto'];
$sup = 1;
$comSuperActMinDia = 1;
$fecha_hoyS = $_POST['fecha_hoyS'];

if ($textSupervision == '') {
    echo "<div class='alert alert-danger' role='role'>
<p><strong>Error, Supervisión de Link de Video en Vivo es un campo requerido</strong></p>
</div>";
    exit;
} else {
    $conexion->autocommit(FALSE);
     try {
        // Registrar comprobación de supervision
        $query = "UPDATE segdiaproasetecnico SET textSupervision = '$textSupervision', sup = '$sup', fecha_hoyS = '$fecha_hoyS', fecha_creacionS = '$date', id_capCS = '$id' WHERE id_SegDiaProAseTecnico = '$id_SegDiaProAseTecnico' ";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

         $conexion->commit();
         echo "<div class='alert alert-success' role='alert'>
        <p><strong>¡Supervisión de Comprobación Diaria Programa de Asesoramiento Técnico
        ingresada correctamente!</strong></p>
        </div>";
        echo '<script>
        alert("¡Supervisión de Comprobación Diaria Programa de Asesoramiento Técnico
        ingresada correctamente!");
        window.location.href = "../admin/crudSegDiaAsesoramientoTecnico.php";
        </script>';
     } catch (Exception $e) {
         $conexion->rollback();
         echo 'Error detectado: ',  $e->getMessage(), "\n";
         echo "<div class='alert alert-danger' role='role'>
         <h5>Analisis del Falló : (' . $conexion->errno . ') '. $conexion->error;</h5>  
        <p><strong>¡Error interno:! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
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