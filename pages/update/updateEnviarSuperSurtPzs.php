<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto14'];
$nProyecto = $_POST['nProyecto14'];
$id_recPzsDanadas = $_POST['id_recPzsDanadas14'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas14'];
$id_regCompraInicial = $_POST['id_regCompraInicial14'];
$id_autorizado = $_POST['id_autorizado14'];
$id_pzsEntregadas = $_POST['id_pzsEntregadas14'];
$id_pzsFirmadasRec = $_POST['id_pzsFirmadasRec14'];
$comenSuperSurtPzs = $_POST['comenSuperSurtPzs'];

$query = "SELECT fecha_creacion FROM recpzsdanadas WHERE id_recPzsDanadas = $id_recPzsDanadas";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$fechaRegLink = $row['fecha_creacion'];

$query1 = "SELECT folio_autoriz FROM autorizados WHERE id_autorizado = $id_autorizado";
$respuesta1 = mysqli_query($conexion, $query1);
$row1 = $respuesta1->fetch_assoc();
$folio_autoriz = $row1['folio_autoriz'];

$query2 = "SELECT folioPzsSurtida FROM pzstregadas WHERE id_pzsEntregadas = $id_pzsEntregadas";
$respuesta2 = mysqli_query($conexion, $query2);
$row2 = $respuesta2->fetch_assoc();
$folioPzsSurtida = $row2['folioPzsSurtida'];

//Cronometro 
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fechaRegLink);

$diff = $fecha1->diff($fecha2);

$cronoSuperSurtPzs = $diff->days . " Dia(s), " . $diff->h . ' h. ' . $diff->i . " m. " . $diff->s . ' s.';

$pzsFirmadaRec = 0;
$superSurtPzs = 1;

$etapa = 'Enviado a Supervisión de Surtido de Piezas';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE proyectos SET pzsFirmadaRec = $pzsFirmadaRec, superSurtPzs = '$superSurtPzs' WHERE id_proyecto = '$id_proyecto' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO supersurtpzs(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_pzsFirmadasRec, id_proyecto, nProyecto, comenSuperSurtPzs, cronoSuperSurtPzs, fecha_creacion, id_capC) VALUES ( '$id_recPzsDanadas', '$id_solPzsDanadas', '$id_regCompraInicial', '$id_pzsFirmadasRec', '$id_proyecto', '$nProyecto', '$comenSuperSurtPzs', '$cronoSuperSurtPzs', '$date', '$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);


    $query3 = "INSERT INTO bitacorapiezas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, etapa, folio_autoriz, folioPzsSurtida, fecha_creacion, id_capC) VALUES ('$id_recPzsDanadas','$id_solPzsDanadas','$id_regCompraInicial','$id_proyecto','$nProyecto','$etapa','$folio_autoriz', '$folioPzsSurtida', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Proyecto Enviado a Supervisión de Surtido de Piezas correctamente!</strong></p>
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