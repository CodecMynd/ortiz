<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto3'];
$nProyecto = $_POST['nProyecto3'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdic3'];
$id_regSolpzadicional = $_POST['id_regSolpzadicional3'];

$query = "SELECT fecha_creacion FROM cotizandopzsadic WHERE id_cotizandoPzsAdic = $id_cotizandoPzsAdic";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$fecha_creacion = $row['fecha_creacion'];

//Cronometro 
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fecha_creacion);

$diff = $fecha1->diff($fecha2);

$cronometro = $diff->days." Dia(s), ". $diff->h . ' h. '.$diff->i." m. ".$diff->s . ' s.';

$pzadicionial = 0;
$preAutorizPzsAdic = 1;
$etapa = 'Enviado de Cotizando: Piezas Adicionales a Pre-Autorización : Piezas Adicionales';

try {
    $conexion->autocommit(FALSE);

    // Ingresamos proyectos
    $query1 = "UPDATE cotizandopzsadic SET pzadicionial = '$pzadicionial', preAutorizPzsAdic = $preAutorizPzsAdic WHERE id_cotizandoPzsAdic = '$id_cotizandoPzsAdic' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);
    
    $query2 = "INSERT INTO preautorizadospzsadic(id_regSolpzadicional, id_proyecto, nProyecto, cronoPreAuto, fecha_creacion, id_capC) VALUES ('$id_regSolpzadicional','$id_proyecto','$nProyecto','$cronometro', '$date','$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);
    $id_preAutorizadoPzsAdic = mysqli_insert_id($conexion);

    $query3 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_preAutorizadoPzsAdic, id_proyecto, nProyecto, etapa, fecha_creacion, id_capC) VALUES ('$id_cotizandoPzsAdic', '$id_regSolpzadicional','$id_preAutorizadoPzsAdic','$id_proyecto','$nProyecto','$etapa', '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query2);



    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Enviado de Cotizando: Piezas Adicionales a Pre-Autorización: Piezas Adicionales correctamente!</strong></p>
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