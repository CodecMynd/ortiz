<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');

date_default_timezone_set("America/Mexico_City");
setlocale(LC_TIME, 'es_VE.UTF-8','esp');
$data['fecha'] = $date;
/* Convertimos la fecha a marca de tiempo */
$marca = strtotime($data['fecha']);
$fecha = strftime('%A %e de %B de %Y', $marca);

$id = $_SESSION['id_usuario'];

$id_cliente = $_POST['id_cliente'];
$id_vehiculo = $_POST['id_vehiculo'];

$nOrden = $_POST['nOrden'];
$nProyecto = $_POST['nProyecto'];
$tipoReparacion = $_POST['tipoReparacion'];
$km = $_POST['km'];
$valorVenta = $_POST['valorVenta'];
$diagnostico = $_POST['diagnostico'];
$descripServ1 = $_POST['descripServ1'];
$descripServ2 = $_POST['descripServ2'];

$conexion->autocommit(FALSE);
try {

    // Insertamos tabla proyectos
    $query = "INSERT INTO proyectos(id_cliente, id_vehiculo, nOrden, nProyecto, tipoReparacion, km, valorVenta, diagnostico, descripServ1, descripServ2, fecha, fecha_creacion, id_capC) VALUES ( '$id_cliente', '$id_vehiculo', '$nOrden', '$nProyecto', '$tipoReparacion', '$km', '$valorVenta', '$diagnostico', '$descripServ1', '$descripServ2', '$date', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);

    // var_dump($query);
    // id que se cargara a tabla nProyectos
    $id_id_nProyecto = mysqli_insert_id($conexion);

    // Ingresamos id a tabla nProyectos para que continue el contador de Numero de proyecto
    $queryNp = "INSERT INTO nproyectos(id_proyecto, fecha_creacion, id_capC) VALUES ('$id_id_nProyecto','$date', '$id')";
    $resultado2 = mysqli_query($conexion, $queryNp);

    // var_dump($queryNp);

    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
    <p><strong>Proyecto actualizado correctamente!</strong></p>
    </div>";

} catch (Exception $e) {
    $conexion->rollback();
    echo 'Error detectado: ',  $e->getMessage(), "\n";
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>??Error interno! Por favor tome captura de pantalla y rep??rtelo inmediatamente a el ??rea de Soporte</strong></p>
    <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>??Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
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
        }, 5000);
    });
</script>