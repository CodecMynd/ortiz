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
$query = "SELECT nProyecto, altaProyecto FROM proyectos WHERE id_proyecto = $id_proyecto";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$row['altaProyecto'];
$row['nProyecto'];


$folioRegAlta = $_POST['folioRegAlta'];
$link = $_POST['link'];
$observAudiFinal = $_POST['observAudiFinal'];
$borrado = 0;
$fecha_creacion = $_POST['fecha_creacion'];
$id_semana = (!empty($_POST['id_semana'])) ? $_POST['id_semana'] : '0';

// cronometro
$fecha1 = new DateTime($date);
$fecha2 = new DateTime($fecha_creacion);

$diff = $fecha1->diff($fecha2);

$cronometro = $diff->days . " Dia(s), " . $diff->h . ' h. ' . $diff->i . " m. " . $diff->s . ' s.';
$status = 'Activo';
$etapa = 'Proyecto avanzó a 2.5 Alta Proyecto';

if($row['altaProyecto'] == 1){
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, el Número de Proyecto: {$row['nProyecto']} ya fue registrado a Alta de Proyecto, verifica en la Tabla 2.9 Bitacora de Proyectos</strong></p>
         </div>";
    exit;
}else if ($link == '') {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, el campo Link es requerido</strong></p>
         </div>";
    exit;
} else if ($observAudiFinal == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Observaciones es requerido</strong></p>
    </div>";
    exit;
} else if ($id_semana == 0) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, el campo Semana Alta es requerido</strong></p>
    </div>";
    exit;
} else {

    $conexion->autocommit(FALSE);
    try {

        // Insertamos tabla linkvideos
        $query1 = "INSERT INTO linkvideos(link, fecha_creacion, id_capC) VALUES ( '$link','$date', '$id')";
        $resultado1 = mysqli_query($conexion, $query1);
        $id_link = mysqli_insert_id($conexion);
        //var_dump($queryL);

        // Insertamos tabla registroalta
        $query2 = "INSERT INTO registroalta(folioRegAlta, id_proyecto, id_link, observAudiFinal, cronometro, id_semana, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegAlta', '$id_proyecto', '$id_link', '$observAudiFinal', '$cronometro', '$id_semana', '$borrado', '$status', '$date', '$id')";

        $verificar_id = mysqli_query($conexion, "SELECT id_proyecto FROM registroalta WHERE id_proyecto = '$id_proyecto' ");
        if (mysqli_num_rows($verificar_id) > 0) {
          echo
          "<div class='alert alert-danger' role='role'>
            <p><strong>¡Error, ID '$id_proyecto' ya se encuentra  registrado, Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!</strong></p>
            </div>";
          exit;
        } else {
          $resultado2 = mysqli_query($conexion, $query2);
          // var_dump($query);
        }


        // Insertamos tabla registroaltabitacora
        $query3 = "INSERT INTO registroaltabitacora(folioRegAlta, id_proyecto, id_link, observAudiFinal, cronometro, id_semana, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegAlta', '$id_proyecto', '$id_link', '$observAudiFinal', '$cronometro', '$id_semana', '$borrado', '$status', '$date', '$id')";
        $resultado3 = mysqli_query($conexion, $query3);
        //var_dump($query);;


        // Ingresamos id a tabla proyectos modificar registros
        $query4 = "UPDATE proyectos SET registroSolicitud = 0, altaProyecto = 1 WHERE id_proyecto = $id_proyecto";
        $resultado4 = mysqli_query($conexion, $query4);
        //var_dump($queryP);

        // Bitacora
        $query5 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
        $resultado5 = mysqli_query($conexion, $query5);

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