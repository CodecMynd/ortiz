<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto12'];
$nProyecto = $_POST['nProyecto12'];
$id_recPzsDanadas = $_POST['id_recPzsDanadas12'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas12'];
$id_regCompraInicial = $_POST['id_regCompraInicial12'];
$id_autorizado = $_POST['id_autorizado12'];
$id_pzsEntregadas = $_POST['id_pzsEntregadas12'];
$comenPzsFirmadasRec = $_POST['comenPzsFirmadasRec'];
$linkDocumento = $_POST['linkDocumento'];

$query = "SELECT folio_autoriz, fecha_creacion FROM autorizados WHERE id_autorizado = $id_autorizado";
$respuesta = mysqli_query($conexion, $query);
$row1 = $respuesta->fetch_assoc();
$folio_autoriz = $row1['folio_autoriz'];
$fecha_creacion = $row1['fecha_creacion'];

$query = "SELECT folioPzsSurtida FROM pzstregadas WHERE id_pzsEntregadas = $id_pzsEntregadas";
$respuesta = mysqli_query($conexion, $query);
$row2 = $respuesta->fetch_assoc();
$folioPzsSurtida = $row2['folioPzsSurtida'];

//Cronometro 
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fecha_creacion);

$diff = $fecha1->diff($fecha2);

$cronoPzsFirmadasRec = $diff->days . " Dia(s), " . $diff->h . ' h. ' . $diff->i . " m. " . $diff->s . ' s.';

$pzsEntregadas = 0;
$pzsFirmadaRec = 1;

$etapa = 'Enviado a Piezas Firmadas de Recibido';
if ($linkDocumento == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Link del Documento es requerido</strong></p>
    </div>";
    exit;
} else {

    try {
        $conexion->autocommit(FALSE);

        $query1 = "UPDATE proyectos SET pzsEntregadas = $pzsEntregadas, pzsFirmadaRec = '$pzsFirmadaRec' WHERE id_proyecto = '$id_proyecto' ";
        $resultado1 = mysqli_query($conexion, $query1);
        // var_dump($query1);

        $query2 = "INSERT INTO pzsfirmadasrec(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, comenPzsFirmadasRec, linkDocumento, cronoPzsFirmadasRec, fecha_creacion, id_capC) VALUES ( '$id_recPzsDanadas', '$id_solPzsDanadas', '$id_regCompraInicial', '$id_proyecto', '$nProyecto', '$comenPzsFirmadasRec', '$linkDocumento', '$cronoPzsFirmadasRec', '$date', '$id')";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($query2);


        $query3 = "INSERT INTO bitacorapiezas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, etapa, folio_autoriz, folioPzsSurtida, fecha_creacion, id_capC) VALUES ('$id_recPzsDanadas','$id_solPzsDanadas','$id_regCompraInicial','$id_proyecto','$nProyecto','$etapa','$folio_autoriz', '$folioPzsSurtida', '$date','$id')";
        $resultado3 = mysqli_query($conexion, $query3);
        // var_dump($query3);


        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Proyecto Enviado a Piezas Firmadas de Recibido correctamente!</strong></p>
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
        }, 3000);
    });
</script>