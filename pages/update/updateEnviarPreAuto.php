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
$id_recPzsDanadas = $_POST['id_recPzsDanadas4'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas4'];
$id_regCompraInicial = $_POST['id_regCompraInicial4'];

// Query Registro de folio registrosolicitud
$queryP = 'SELECT MAX(id_autorizado) + 1 FROM autorizados';
$result = mysqli_query($conexion,  $queryP);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Autoriz_Pz-00";
$folio_autoriz = $text . '' . $rowp[0];

$preAutoriz = 1;
$etapa = 'Enviado a Pre-Autorización';

try {
    $conexion->autocommit(FALSE);

    // Ingresamos proyectos
    $query1 = "UPDATE proyectos SET preAutoriz = $preAutoriz WHERE id_proyecto = '$id_proyecto' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO bitacorapiezas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, etapa, folio_autoriz, fecha_creacion, id_capC) VALUES ('$id_recPzsDanadas','$id_solPzsDanadas','$id_regCompraInicial','$id_proyecto','$nProyecto','$etapa','--', '$date','$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);

    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Enviado a Pre-Autorización correctamente!</strong></p>
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