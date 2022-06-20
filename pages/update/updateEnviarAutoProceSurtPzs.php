<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$comenProceSurtPz = $_POST['comenProceSurtPz'];
$id_proyecto = $_POST['id_proyecto8'];
$nProyecto = $_POST['nProyecto8'];
$id_recPzsDanadas = $_POST['id_recPzsDanadas8'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas8'];
$id_regCompraInicial = $_POST['id_regCompraInicial8'];
$id_autorizado = $_POST['id_autorizado8'];

$query = "SELECT folio_autoriz FROM autorizados WHERE id_autorizado = $id_autorizado";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$folio_autoriz = $row['folio_autoriz'];

// Query Registro de folio registrosolicitud
$queryP = 'SELECT MAX(id_AutoProceSurtPz) + 1 FROM autoprocesurtpzs';
$result = mysqli_query($conexion,  $queryP);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Surtido_Desarm-00";
$folioProceSurtPz = $text . '' . $rowp[0];


$autorizado = 0;
$autoProceSurtPz = 1;

$etapa = 'Enviado a Proceso de Surtido de Piezas';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE proyectos SET autorizado = '$autorizado', autoProceSurtPz = '$autoProceSurtPz' WHERE id_proyecto = '$id_proyecto' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO autoprocesurtpzs(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_autorizado, id_proyecto, nProyecto, comenProceSurtPz, folioProceSurtPz, fecha_creacion, id_capC) 
                                VALUES ('$id_recPzsDanadas', '$id_solPzsDanadas', '$id_regCompraInicial', '$id_autorizado', '$id_proyecto', '$nProyecto', '$comenProceSurtPz', '$folioProceSurtPz', '$date', '$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);


    $query3 = "INSERT INTO bitacorapiezas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, etapa, folio_autoriz, fecha_creacion, id_capC) VALUES ('$id_recPzsDanadas','$id_solPzsDanadas','$id_regCompraInicial','$id_proyecto','$nProyecto','$etapa','$folio_autoriz', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Proyecto enviado a Proceso de Surtido de Piezas correctamente!</strong></p>
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