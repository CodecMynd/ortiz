<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto13'];
$nProyecto = $_POST['nProyecto13'];
$id_regSolpzadicional = $_POST['id_regSolpzadicional13'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdic13'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdic13'];
$id_autorizadoPzsAdic = $_POST['id_autorizadoPzsAdic13'];
$id_AutoProceSurtPzAdic = $_POST['id_AutoProceSurtPzAdic13'];
$id_pzsEntregadasAdic = $_POST['id_pzsEntregadasAdic13'];
$id_pzsFirmadasRecAdic = $_POST['id_pzsFirmadasRecAdic13'];

$comenSuperSurtPzsAdic = $_POST['comenSuperSurtPzsAdic'];

$query = "SELECT fecha_creacion FROM cotizandopzsadic WHERE id_cotizandoPzsAdic  = $id_cotizandoPzsAdic ";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$fechaCotizado = $row['fecha_creacion'];

$query1 = "SELECT folio_autorizPzsAdic FROM autorizadospzsadic WHERE id_autorizadoPzsAdic  = $id_autorizadoPzsAdic ";
$respuesta1 = mysqli_query($conexion, $query1);
$row1 = $respuesta1->fetch_assoc();
$folio_autorizPzsAdic = $row1['folio_autorizPzsAdic'];

$query2 = "SELECT folioPzsSurtidaAdic FROM pzstregadasadic WHERE id_pzsEntregadasAdic  = $id_pzsEntregadasAdic ";
$respuesta2 = mysqli_query($conexion, $query2);
$row2 = $respuesta2->fetch_assoc();
$folioPzsSurtidaAdic = $row2['folioPzsSurtidaAdic'];

//Cronometro 
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fechaCotizado);

$diff = $fecha1->diff($fecha2);

$cronoSuperSurtPzsAdic = $diff->days . " Dia(s), " . $diff->h . ' h. ' . $diff->i . " m. " . $diff->s . ' s.';

$pzsFirmadaRecAdic = 0;
$superSurtPzsAdic = 1;

$etapa = 'Enviado de Piezas Firmadas de Recibido: Piezas Adicionales a Supervisión de Surtido de Piezas: Piezas Adicionales';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE cotizandopzsadic SET pzsFirmadaRecAdic = $pzsFirmadaRecAdic, superSurtPzsAdic = '$superSurtPzsAdic' WHERE id_cotizandoPzsAdic = '$id_cotizandoPzsAdic' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO supersurtpzsadic(id_pzsFirmadasRecAdic, id_proyecto, nProyecto, comenSuperSurtPzsAdic, cronoSuperSurtPzsAdic, fecha_creacion, id_capC) VALUES ('$id_pzsFirmadasRecAdic', '$id_proyecto', '$nProyecto', '$comenSuperSurtPzsAdic', '$cronoSuperSurtPzsAdic', '$date', '$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);
    $id_superSurtPzsAdic = mysqli_insert_id($conexion);


    $query3 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_preAutorizadoPzsAdic, id_pzsEntregadasAdic, id_superSurtPzsAdic, id_proyecto, nProyecto, etapa, folio_autorizPzsAdic, folioPzsSurtidaAdic, fecha_creacion, id_capC) VALUES ('$id_cotizandoPzsAdic','$id_regSolpzadicional','$id_preAutorizadoPzsAdic', '$id_pzsEntregadasAdic', '$id_superSurtPzsAdic', '$id_proyecto','$nProyecto','$etapa','$folio_autorizPzsAdic', '$folioPzsSurtidaAdic', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Proyecto Enviado de Piezas Firmadas de Recibido: Piezas Adicionales a Supervisión de Surtido de Piezas: Piezas Adicionales correctamente!</strong></p>
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