<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto4'];
$nProyecto = $_POST['nProyecto4'];
$id_regSolpzadicional = $_POST['id_regSolpzadicional4'];
$id_cotizandoPzsAdic = $_POST['id_cotizandoPzsAdic4'];
$id_preAutorizadoPzsAdic = $_POST['id_preAutorizadoPzsAdic4'];


$pzadicionial = 1;
$preAutorizPzsAdic = 0;
$etapa = 'Regresó a Cotizando: Piezas Adicionales';

try {
    $conexion->autocommit(FALSE);

    // // Ingresamos id a tabla proyectos modificar registros
    $query1 = "UPDATE proyectos SET pzadicionial = '$pzadicionial', preAutorizPzsAdic = '$preAutorizPzsAdic' WHERE id_proyecto = '$id_proyecto' ";
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);

    $query2 = "INSERT INTO bitacorapiezasadicionales(id_regSolpzadicional, id_preAutorizadoPzsAdic, id_proyecto, nProyecto, etapa, fecha_borrado, id_capB) VALUES ('$id_regSolpzadicional','$id_preAutorizadoPzsAdic','$id_proyecto','$nProyecto','$etapa', '$date','$id')";
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);


    $query3 = "DELETE FROM preautorizadospzsadic WHERE id_preAutorizadoPzsAdic = '$id_preAutorizadoPzsAdic' ";
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);


    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
                <p><strong>Proyecto Regresado a Cotizando: Piezas Adicionales correctamente!</strong></p>
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