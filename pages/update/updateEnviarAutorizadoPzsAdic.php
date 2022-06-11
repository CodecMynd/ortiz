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
$id_regSolpzadicional = $_POST['id_regSolpzadicional5'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdic5'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdic5'];

$query = "SELECT fecha_creacion FROM preautorizadospzsadic WHERE id_preAutorizadoPzsAdic = $id_preAutorizadoPzsAdic";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$fecha_creacion = $row['fecha_creacion'];


//Cronometro 
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fecha_creacion);

$diff = $fecha1->diff($fecha2);

$cronoAutorizadoPzAdic = $diff->days." Dia(s), ". $diff->h . ' h. '.$diff->i." m. ".$diff->s . ' s.';

// Query Registro de folio registrosolicitud
$queryP = 'SELECT MAX(id_autorizadoPzsAdic ) + 1 FROM autorizadospzsadic';
$result = mysqli_query($conexion,  $queryP);
$rowp = mysqli_fetch_row($result);

// Prefijo folio
$text = "Autoriz_Pz_Adicional-00";
$folio_autorizPzsAdic = $text . '' . $rowp[0];

$preAutorizPzsAdic = 0;
$autorizadoPzsAdic = 1;

$etapa = 'Enviado de Pre-Autorización: Piezas Adionales a Autorizado: Piezas Adicionales';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE cotizandopzsadic SET preAutorizPzsAdic = $preAutorizPzsAdic, autorizadoPzsAdic = '$autorizadoPzsAdic' WHERE id_cotizandoPzsAdic = '$id_cotizandoPzsAdic' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);
    
    $query2 = "INSERT INTO autorizadospzsadic(id_regSolpzadicional, id_cotizandoPzsAdic, id_preAutorizadoPzsAdic, id_proyecto, nProyecto, folio_autorizPzsAdic, cronoAutorizadoPzAdic, fecha_creacion, id_capC) VALUES ( '$id_regSolpzadicional', '$id_cotizandoPzsAdic', '$id_preAutorizadoPzsAdic', '$id_proyecto', '$nProyecto', '$folio_autorizPzsAdic', '$cronoAutorizadoPzAdic', '$date', '$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);


    $query3 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_preAutorizadoPzsAdic, id_proyecto, nProyecto, etapa, folio_autorizPzsAdic, fecha_creacion, id_capC) VALUES ('$id_cotizandoPzsAdic', '$id_regSolpzadicional','$id_preAutorizadoPzsAdic','$id_proyecto','$nProyecto','$etapa','$folio_autorizPzsAdic', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                 <p><strong>Proyecto Enviado de Pre-Autorización: Piezas Adionales a Autorizado: Piezas Adicionales correctamente!</strong></p>
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