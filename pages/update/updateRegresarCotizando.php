<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto5'];
$nProyecto = $_POST['nProyecto5'];
$id_recPzsDanadas = $_POST['id_recPzsDanadas5'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas5'];
$id_regCompraInicial = $_POST['id_regCompraInicial5'];

$query = "SELECT id_preAutorizado FROM preautorizados WHERE id_recPzsDanadas = '$id_recPzsDanadas' AND id_solPzsDanadas = '$id_solPzsDanadas' AND id_regCompraInicial = '$id_regCompraInicial' AND id_proyecto = '$id_proyecto' ";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$id_preAutorizado = $row['id_preAutorizado'];

$cotizando = 1;
$preAutoriz = 0;
$etapa = 'Regresó a Cotizando';

try {
    $conexion->autocommit(FALSE);

    // // Ingresamos id a tabla proyectos modificar registros
    $query1 = "UPDATE proyectos SET cotizando = '$cotizando', preAutoriz = $preAutoriz WHERE id_proyecto = '$id_proyecto' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO bitacorapiezas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, etapa, folio_autoriz, fecha_borrado, id_capB) VALUES ('$id_recPzsDanadas','$id_solPzsDanadas','$id_regCompraInicial','$id_proyecto','$nProyecto','$etapa','--', '$date','$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);


    $query3 = "DELETE FROM preautorizados WHERE id_preAutorizado = '$id_preAutorizado' ";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query2);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Regresado a Cotizando correctamente!</strong></p>
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