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
$asesor = $_POST['asesor'];
$linkComVerifDiariaVeh = $_POST['linkComVerifDiariaVeh'];
$fecha_hoyV  = $_POST['fecha_hoyV'];


if ($linkComVerifDiariaVeh == '') {
    echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, Link de Video en Vivo es un campo requerido</strong></p>
  </div>";
    exit;
} else {

    try {
        $conexion->autocommit(FALSE);
        // Registrar motivo de supervision
        $query = "INSERT INTO comverifdiariaveh(id_proyecto, nProyecto, asesor, linkComVerifDiariaVeh, fecha_hoyV, fecha_creacionV, id_capCV) VALUES ('$id_proyecto', '$nProyecto', '$asesor', '$linkComVerifDiariaVeh', '$fecha_hoyV', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        $id_comverifdiariaveh = mysqli_insert_id($conexion);
        // var_dump($query);

        // Actualizar supervision valores
        $queryP = "UPDATE proyectos SET comVerifDiariaVeh = 1 WHERE id_proyecto = '$id_proyecto' AND nProyecto = '$nProyecto' ";
        $resultadoP = mysqli_query($conexion, $queryP);
        // var_dump($queryP);

        // ingresar datos a tabla indicador de mensajes diarios
        $queryM = "INSERT INTO indmensajes(id_proyecto, nProyecto, asesores, id_comverifdiariaveh, fecha_hoyV, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$asesor', '$id_comverifdiariaveh', '$fecha_hoyV', '$date', $id)";
        $resultadoM = mysqli_query($conexion, $queryM);
        // var_dump($queryM);

        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                <p><strong>Registro de Verificación diaria ingresada correctamente!</strong></p>
                </div>";
        echo '<script>
                alert("Registro de Verificación diaria ingresada correctamente");
                window.location.href = "../admin/crudVerificacionDiariaVehiculos.php";
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