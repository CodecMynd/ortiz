<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();

ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');


$id = $_SESSION['id_usuario'];
$id_proyecto = $_POST['id_proyecto'];
$folioRegSolicitud = $_POST['folioRegSolicitud'];
$valorVentaAlta = $_POST['valorVentaAlta'];
$id_semana = (!empty($_POST['id_semana'])) ? $_POST['id_semana'] : '';
$inspecCalidad = $_POST['inspecCalidad'];
$observCliente = $_POST['observCliente'];
$borrado = 0;
$status = 'Activo';

if (empty($valorVentaAlta)) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Ingresa una cantidad en campo Valor Venta Alta</strong></p>
    </div>";
} else if ($id_semana == '') {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, Ingresa una opción de la lista Semana</strong></p>
         </div>";
    exit;
} else if ($inspecCalidad == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Ingresa en campo Observación Inspección de Control de Calidad</strong></p>
    </div>";
    exit;
} else if ($observCliente == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Ingresa en campo Observaciones Para el Cliente</strong></p>
    </div>";
    exit;
} else {

    // Insertamos tabla registrosolicitud
    $query = "INSERT INTO registrosolicitud(folioRegSolicitud, id_proyecto, valorVentaAlta, id_semana, inspecCalidad, observCliente, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegSolicitud', '$id_proyecto', '$valorVentaAlta', $id_semana, '$inspecCalidad', '$observCliente', $borrado, '$status', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

        // Insertamos tabla registrosolicitudbitacora
        $query = "INSERT INTO registrosolicitudbitacora(folioRegSolicitud, id_proyecto, valorVentaAlta, id_semana, inspecCalidad, observCliente, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegSolicitud', '$id_proyecto', '$valorVentaAlta', $id_semana, '$inspecCalidad', '$observCliente', $borrado, '$status', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);


    // Ingresamos id a tabla proyectos modificar registros
    $queryP = "UPDATE `proyectos` SET proyectoActivo = 0, registroSolicitud = 1 WHERE id_proyecto = $id_proyecto";
    $resultado2 = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>
             <p><strong>Proyecto ingresado correctamente!</strong></p>
         </div>
        <div class='col-md-12 col-sm-12 align-self-center'>
             <a href='../components/solicitudAlta.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i> Descargar PDF</a>
         </div>
         ";
    } else {
        echo "<div class='alert alert-danger' role='role'>
         <p><strong>¡Error interno: vuelve a intentarlo!</strong></p>
         </div>";
    }
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