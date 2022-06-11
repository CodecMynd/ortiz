<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto10'];
$nProyecto = $_POST['nProyecto10'];
$id_regSolpzadicional = $_POST['id_regSolpzadicional10'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdic10'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdic10'];
$id_autorizadoPzsAdic = $_POST['id_autorizadoPzsAdic10'];
$id_AutoProceSurtPzAdic = $_POST['id_AutoProceSurtPzAdic10'];
$id_pzsEntregadasAdic = $_POST['id_pzsEntregadasAdic10'];

 $query = "SELECT folioPzsSurtidaAdic FROM pzstregadasadic WHERE id_pzsEntregadasAdic = $id_pzsEntregadasAdic";
 $respuesta1 = mysqli_query($conexion, $query);
 $row1 = $respuesta1->fetch_assoc();
 $folioPzsSurtidaAdic = $row1['folioPzsSurtidaAdic'];

 $query = "SELECT folio_autorizPzsAdic FROM autorizadospzsadic WHERE id_autorizadoPzsAdic = $id_autorizadoPzsAdic ";
 $respuesta2 = mysqli_query($conexion, $query);
 $row2 = $respuesta2->fetch_assoc();
 $folio_autorizPzsAdic = $row2['folio_autorizPzsAdic'];

 $query = "SELECT folioPzsSurtidaAdic FROM pzstregadasadic WHERE id_pzsEntregadasAdic = $id_pzsEntregadasAdic  ";
 $respuesta3 = mysqli_query($conexion, $query);
 $row3 = $respuesta3->fetch_assoc();
 $folioPzsSurtidaAdic = $row3['folioPzsSurtidaAdic'];

$pzsEntregadasAdic = 0;
$autoProceSurtPzAdic = 1;

$etapa = 'Regresó de Piezas Entregadas: Piezas Adicionales a Proceso de Surtido de Piezas: Piezas Adicionales';

try {
    $conexion->autocommit(FALSE);

    $query1 = "UPDATE cotizandopzsadic SET autoProceSurtPzAdic = $autoProceSurtPzAdic, pzsEntregadasAdic = '$pzsEntregadasAdic' WHERE id_cotizandoPzsAdic = '$id_cotizandoPzsAdic' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "UPDATE pzstregadasadic SET borrado = 1, fecha_borrado = '$date', id_capB = '$id'  WHERE id_pzsEntregadasAdic = '$id_pzsEntregadasAdic' ";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);
    

    $query3 = "INSERT INTO bitacorapiezasadicionales(id_cotizandoPzsAdic, id_regSolpzadicional, id_preAutorizadoPzsAdic, id_pzsEntregadasAdic , id_proyecto, nProyecto, etapa, folio_autorizPzsAdic, folioPzsSurtidaAdic, fecha_borrado, id_capB) VALUES ('$id_cotizandoPzsAdic', '$id_regSolpzadicional','$id_preAutorizadoPzsAdic','$id_pzsEntregadasAdic','$id_proyecto','$nProyecto','$etapa','$folio_autorizPzsAdic', '$folioPzsSurtidaAdic',  '$date','$id')";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Regresado de Piezas Entregadas: Piezas Adicionales a Proceso de Surtido de Piezas: Piezas Adicionales correctamente!</strong></p>
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