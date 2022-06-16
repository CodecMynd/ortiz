<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$comenPzsEntregadas = $_POST['comenPzsEntregadas'];
$id_proyecto = $_POST['id_proyecto10'];
$nProyecto = $_POST['nProyecto10'];
$id_recPzsDanadas = $_POST['id_recPzsDanadas10'];
$id_solPzsDanadas = $_POST['id_solPzsDanadas10'];
$id_regCompraInicial = $_POST['id_regCompraInicial10'];
$id_autorizado = $_POST['id_autorizado10'];
$id_AutoProceSurtPz = $_POST['id_AutoProceSurtPz10'];

$query = "SELECT folio_autoriz FROM autorizados WHERE id_autorizado = $id_autorizado";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$folio_autoriz = $row['folio_autoriz'];

// Query Registro de folio 
$queryP = 'SELECT MAX(id_pzsEntregadas) + 1 FROM pzstregadas';
$result = mysqli_query($conexion,  $queryP);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Pieza_Surtida_00";
$folioPzsSurtida = $text . '' . $rowp[0];


$pzsEntregadas = 1;
$autoProceSurtPz = 0;

$etapa = 'Enviado a Piezas Entregadas';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE proyectos SET autoProceSurtPz = '$autoProceSurtPz', pzsEntregadas = '$pzsEntregadas' WHERE id_proyecto = '$id_proyecto' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO pzstregadas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_AutoProceSurtPz, id_proyecto, nProyecto, comenPzsEntregadas, folioPzsSurtida, fecha_creacion, id_capC) 
                                VALUES ('$id_recPzsDanadas', '$id_solPzsDanadas', '$id_regCompraInicial','$id_AutoProceSurtPz', '$id_proyecto', '$nProyecto', '$comenPzsEntregadas', '$folioPzsSurtida', '$date', '$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2); 


    $query3 = "INSERT INTO bitacorapiezas(id_recPzsDanadas, id_solPzsDanadas, id_regCompraInicial, id_proyecto, nProyecto, etapa, folio_autoriz, folioPzsSurtida, fecha_creacion, id_capC) VALUES ('$id_recPzsDanadas','$id_solPzsDanadas','$id_regCompraInicial','$id_proyecto','$nProyecto','$etapa','$folio_autoriz', '$folioPzsSurtida', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Proyecto enviado a Piezas Entregadas correctamente!</strong></p>
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