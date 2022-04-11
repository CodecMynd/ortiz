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
$folioRegAlta = $_POST['folioRegAlta'];
$link = $_POST['link'];
$observAudiFinal = $_POST['observAudiFinal'];
$borrado = 0;
$fecha_creacion = $_POST['fecha_creacion'];

// cronometro
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fecha_creacion);

$diff = $fecha1->diff($fecha2);

$cronometro = $diff->days . " Dia(s), " . $diff->h . ' h. ' . $diff->i . " m. " . $diff->s . ' s.';
$status = 'Activo';
$etapa = 'Proyecto avanzó a 2.5 Alta Proyecto';

if ($link == '') {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, el campo Link es requerido</strong></p>
         </div>";
    exit;
} else if ($observAudiFinal == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Observaciones es requerido</strong></p>
    </div>";
    exit;
} else {

    $conexion->autocommit(FALSE);
    try {

        // Insertamos tabla linkvideos
        $queryL = "INSERT INTO linkvideos(link, fecha_creacion, id_capC) VALUES ( '$link','$date', '$id')";
        $resultado = mysqli_query($conexion, $queryL);
        $id_link = mysqli_insert_id($conexion);
        //var_dump($queryL);

        // Insertamos tabla registroalta
        $query = "INSERT INTO registroalta(folioRegAlta, id_proyecto, id_link, observAudiFinal, cronometro, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegAlta', '$id_proyecto', '$id_link', '$observAudiFinal', '$cronometro', $borrado, '$status', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        //var_dump($query);

        // Insertamos tabla registroaltabitacora
        $query = "INSERT INTO registroaltabitacora(folioRegAlta, id_proyecto, id_link, observAudiFinal, cronometro, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegAlta', '$id_proyecto', '$id_link', '$observAudiFinal', '$cronometro', $borrado, '$status', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        //var_dump($query);;


        // Ingresamos id a tabla proyectos modificar registros
        $queryP = "UPDATE proyectos SET registroSolicitud = 0, altaProyecto = 1 WHERE id_proyecto = $id_proyecto";
        $resultado2 = mysqli_query($conexion, $queryP);
        //var_dump($queryP);

        // Bitacora
        $queryBI = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
        $resultadoBI = mysqli_query($conexion, $queryBI);

        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
              <p><strong>Registro de Alta Proyecto ingresado correctamente!</strong></p>
              </div>
              <div class='col-md-12 col-sm-12 align-self-center'>
                  <a href='../components/altaProyecto.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i> Descargar PDF</a>
              </div>";
    } catch (Exception $e) {
        $conexion->rollback();
        echo 'Error detectado: ',  $e->getMessage(), "\n";
        echo "<div class='alert alert-danger' role='role'>
              <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
              <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
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