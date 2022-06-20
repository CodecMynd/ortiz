<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$comenProceSurtPzAdic = $_POST['comenProceSurtPzAdic'];
$id_proyecto = $_POST['id_proyecto7'];
$nProyecto = $_POST['nProyecto7'];
$id_regSolpzadicional = $_POST['id_regSolpzadicional7'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdic7'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdic7'];
$id_autorizadoPzsAdic = $_POST['id_autorizadoPzsAdic7'];

$query = "SELECT folio_autorizPzsAdic FROM autorizadospzsadic WHERE id_autorizadoPzsAdic = $id_autorizadoPzsAdic";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$folio_autorizPzsAdic = $row['folio_autorizPzsAdic'];

// Query Registro de folio registrosolicitud
$queryP = 'SELECT MAX(id_AutoProceSurtPzAdic) + 1 FROM autoprocesurtpzsadic';
$result = mysqli_query($conexion,  $queryP);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Surtido_Adic-00";
$folioProceSurtPzAdic = $text . '' . $rowp[0];


$autorizadoPzsAdic = 0;
$autoProceSurtPzAdic = 1;

$etapa = 'Enviar de Autorizado: Piezas Adionales a Proceso de Surtido de Piezas: Piezas Adicionales';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE cotizandopzsadic SET autorizadoPzsAdic = '$autorizadoPzsAdic', autoProceSurtPzAdic = '$autoProceSurtPzAdic' WHERE id_cotizandoPzsAdic = '$id_cotizandoPzsAdic' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO autoprocesurtpzsadic(id_autorizadoPzsAdic, id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_proyecto, nProyecto, comenProceSurtPzAdic, folioProceSurtPzAdic, fecha_creacion, id_capC) VALUES ('$id_autorizadoPzsAdic', '$id_regSolpzadicional', '$id_cotizandoPzsAdic', '$id_preAutorizadoPzsAdic', '$id_proyecto', '$nProyecto', '$comenProceSurtPzAdic', '$folioProceSurtPzAdic', '$date', '$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);


    $query3 = "INSERT INTO bitacorapiezasadicionales(id_regSolpzadicional, id_preAutorizadoPzsAdic, id_proyecto, nProyecto, etapa, folio_autorizPzsAdic, fecha_creacion, id_capC) VALUES ('$id_regSolpzadicional','$id_preAutorizadoPzsAdic','$id_proyecto','$nProyecto','$etapa','$folio_autorizPzsAdic', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Proyecto enviado de Autorizado: Piezas Adionales a Proceso de Surtido de Piezas: Piezas Adicionales correctamente!</strong></p>
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