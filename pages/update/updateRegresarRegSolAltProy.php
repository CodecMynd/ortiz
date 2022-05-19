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
$id_regSolicitud = $_POST['id_regSolicitud'];
$status = 'Borrado de 2.4.2 Solicitud Alta Proyecto';
$etapa = 'Proyecto regresado a 2.4.1 Proyectos Activos para realizar Solicitud';
$folioRegSolicitud = $_POST['folioRegSolicitud'];

$conexion->autocommit(FALSE);
try {

    //   Regresar Registro de Solicitud Alta Proyecto a Proyectos Activos para realizar Solicitud
    $query1 = ("UPDATE proyectos SET proyectoActivo = 1, registroSolicitud = 0, altaProyecto = 0, proyCodIdentificador= 0, superCodIdentificador= 0 WHERE id_proyecto = $id_proyecto ");
    $resultado1 = mysqli_query($conexion, $query1);
    // var_dump($query1);
    // echo '<br>';

    //Borrar ID Registro de Solicitud Alta Proyecto
    $query2 = ("DELETE FROM registrosolicitud WHERE id_regSolicitud = $id_regSolicitud");
    $resultado2 = mysqli_query($conexion, $query2);
    // var_dump($query2);
    // echo '<br>';

    //Borrar ID Registro de Solicitud Alta Proyecto
    $query3 = ("UPDATE registrosolicitudbitacora SET borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = '$id_proyecto' AND folioRegSolicitud = '$folioRegSolicitud'");
    $resultado3 = mysqli_query($conexion, $query3);
    // var_dump($query3);
    // echo '<br>';

    //Bitacora
    $query4 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
    $resultado4 = mysqli_query($conexion, $query4);
    // var_dump($query4);
    // echo '<br>';

    $conexion->commit();
    echo "<div class='alert alert-success' role='alert'>
         <p><strong>Registro de Solicitud en espera de Alta Borrado exitosamente</strong></p>
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
