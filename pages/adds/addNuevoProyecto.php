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
$etapa = 'Creación de nuevo proyecto';

if ($id_cliente == '' || $id_vehiculo == ''  || $nProyecto == '' || $tipoReparacion == '' || $km == '' || $valorVenta == '' || $diagnostico == '' || $descripServ1 == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, todos los campos marcados con * son requeridos</strong></p>
    </div>";
    exit;
} else {
    
    try {
        $conexion->autocommit(FALSE);
        // Insertamos tabla proyectos
        $query = "INSERT INTO proyectos(id_cliente, id_vehiculo, nOrden, nProyecto, tipoReparacion, km, valorVenta, diagnostico, descripServ1, descripServ2, proyectoActivo, registroSolicitud, altaProyecto, proyCodIdentificador, fecha_creacion, id_capC) VALUES ( '$id_cliente', '$id_vehiculo', '$nOrden', '$nProyecto', '$tipoReparacion', '$km', '$valorVenta', '$diagnostico', '$descripServ1', '$descripServ2',1,0,0,0, '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);
        $id_proyecto = mysqli_insert_id($conexion);

        // Ingresamos id a tabla nProyectos para que continue el contador de Numero de proyecto
        $query2 = "INSERT INTO nproyectos(id_proyecto, fecha_creacion, id_capC) VALUES ('$id_proyecto','$date', '$id')";
        $resultado2 = mysqli_query($conexion, $query2);
        // var_dump($queryNp);

        // se agrega en tabla capvalorventas
        $query3 = "INSERT INTO capvalorventas(id_proyecto) VALUES ('$id_proyecto')";
        $resultado3 = mysqli_query($conexion, $query3);
        // var_dump($queryC);

        $query4 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_registro, id_capR) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
        $resultado4 = mysqli_query($conexion, $query4);
        // var_dump($queryBI);

        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
               <p><strong>Proyecto ingresado correctamente!</strong></p>
            </div>
            <div class='col-md-12 col-sm-12 align-self-center'>
               <a href='../components/ordenTrabajo.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i>Descargar PDF</a>
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