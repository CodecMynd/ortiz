<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto15'];
$nProyecto = $_POST['nProyecto15'];
$id_recPzsDanadas = $_POST['id_recPzsDanadas15'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas15'];
$id_regCompraInicial = $_POST['id_regCompraInicial15'];
$id_autorizado = $_POST['id_autorizado15'];
$id_pzsEntregadas = $_POST['id_pzsEntregadas15'];
$id_pzsFirmadasRec = $_POST['id_pzsFirmadasRec15'];
$id_superSurtPzs = $_POST['id_superSurtPzs15'];


$query = "SELECT folioPzsSurtida FROM pzstregadas WHERE id_pzsEntregadas = $id_pzsEntregadas";
$respuesta = mysqli_query($conexion, $query);
$row1 = $respuesta->fetch_assoc();
$folioPzsSurtida = $row1['folioPzsSurtida'];

$query = "SELECT folio_autoriz FROM autorizados WHERE id_autorizado = $id_autorizado";
$respuesta = mysqli_query($conexion, $query);
$row2 = $respuesta->fetch_assoc();
$folio_autoriz = $row2['folio_autoriz'];

$superSurtPzs = 0;
$pzsFirmadaRec = 1;

$etapa = 'Regresó a Piezas Firmadas de Recibido';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE proyectos SET superSurtPzs = $superSurtPzs, pzsFirmadaRec = '$pzsFirmadaRec' WHERE id_proyecto = '$id_proyecto' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "UPDATE supersurtpzs SET borrado = 1, fecha_borrado = '$date', id_capB = '$id'  WHERE id_superSurtPzs = '$id_superSurtPzs' ";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);


    $query3 = "INSERT INTO bitacorapiezas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, etapa, folio_autoriz, folioPzsSurtida, fecha_borrado, id_capB) VALUES ('$id_recPzsDanadas','$id_solPzsDanadas','$id_regCompraInicial','$id_proyecto','$nProyecto','$etapa','$folio_autoriz', '$folioPzsSurtida', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Regresado a Piezas Firmadas de Recibido correctamente!</strong></p>
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