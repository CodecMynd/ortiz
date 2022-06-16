<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto4'];
$nProyecto = $_POST['nProyecto4'];
$id_proyExtra = $_POST['id_proyExtra4'];
$semProyExtraUtil = $_POST['semProyExtraUtil'];

// Query Registro de folio 
$queryP = 'SELECT MAX(id_proyExtraUtil) + 1 FROM proyextrasutil';
$result = mysqli_query($conexion,  $queryP);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Proy_Extra_Utilizado-00";
$folioProyExtraUtil = $text . '' . $rowp[0];

$proyExtraCapt = 0;
$proyExtraUtil = 1;

try {
    $conexion->autocommit(FALSE);

    // Ingresamos proyextras
    $query1 = "UPDATE proyextras SET proyExtraCapt = '$proyExtraCapt', proyExtraUtil = $proyExtraUtil  WHERE id_proyExtra = '$id_proyExtra' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    // Ingresamos proyextras
    $query2 = "INSERT INTO proyextrasutil(id_proyExtra, id_proyecto, nProyecto, folioProyExtraUtil, semProyExtraUtil, fecha_creacion, id_capC) VALUES ('$id_proyExtra', '$id_proyecto', '$nProyecto', '$folioProyExtraUtil', '$semProyExtraUtil', '$date', '$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query1);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Enviado a Proyecto Extra Utilizado correctamente!</strong></p>
             </div>";
} catch (Exception $e) {
    $conexion->rollback();
    echo 'Error detectado: ',  $e->getMessage(), "\n";
    echo "<div class='alert alert-danger' role='role'>
                     <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
                     <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
              </div>";
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