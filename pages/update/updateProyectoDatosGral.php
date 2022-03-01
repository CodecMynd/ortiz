<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');

date_default_timezone_set("America/Mexico_City");
setlocale(LC_TIME, 'es_VE.UTF-8', 'esp');
$data['fecha'] = $date;
/* Convertimos la fecha a marca de tiempo */
$marca = strtotime($data['fecha']);
$fecha = strftime('%A %e de %B de %Y', $marca);


$id = $_SESSION['id_usuario'];
$id_proyecto = $_POST['id_proyecto'];

$nOrden = $_POST['nOrden'];
$nProyecto = $_POST['nProyecto'];
$tipoReparacion = $_POST['tipoReparacion'];
$km = $_POST['km'];
$valorVenta = $_POST['valorVenta'];
$diagnostico = $_POST['diagnostico'];
$descripServ1 = $_POST['descripServ1'];
$descripServ2 = $_POST['descripServ2'];

if (
    $nProyecto == '' || $tipoReparacion == '' || $km == '' || $valorVenta == '' || $diagnostico == '' || $descripServ1
    == ''
) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, todos los campos marcados con * son requeridos</strong></p>
    </div>";
    exit;
} else {
    // Insertamos tabla proyectos
    $query = "UPDATE proyectos SET nOrden = '$nOrden', nProyecto = '$nProyecto', tipoReparacion = '$tipoReparacion', km = '$km', valorVenta = '$valorVenta', diagnostico = '$diagnostico', descripServ1 = '$descripServ1',descripServ2 = '$descripServ2', fecha = '$date', fecha_mod = '$date', id_capM = $id WHERE id_proyecto = $id_proyecto ";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);
}
if ($resultado) {
    echo "<div class='alert alert-success' role='alert'>
            <p><strong>Datos Generales del Proyecto modificados correctamente!</strong></p>
        </div>
        <div class='col-md-12 col-sm-12 align-self-center'>
            <a href='../components/ordenTrabajo.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i>Descargar PDF</a>
        </div>
            ";
} else {
    echo "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
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