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
$id_semana = (!empty($_POST['id_semana'])) ? $_POST['id_semana'] : '0';
$inspecCalidad = $_POST['inspecCalidad'];
$observCliente = $_POST['observCliente'];
$tecArmador = $_POST['tecArmador'];
$tecMontador1 = $_POST['tecMontador1'];
$tecMontador2 = (!empty($_POST['tecMontador2'])) ? $_POST['tecMontador2'] : 1;
$tecMontador3 = (!empty($_POST['tecMontador3'])) ? $_POST['tecMontador3'] : 1;
$tecMontador4 = (!empty($_POST['tecMontador4'])) ? $_POST['tecMontador4'] : 1;
$borrado = 0;
$status = 'Activo';
$etapa = 'Proyecto avanzó a 2.4.2 Registro de Solicitud en espera de Alta';

if (empty($valorVentaAlta)) {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Ingresa una cantidad en campo Valor Venta Alta</strong></p>
    </div>";
} else if ($id_semana == '0') {
    echo "<div class='alert alert-danger' role='role'>
              <p><strong>Error, Ingresa una opción de la lista Semana de Alta</strong></p>
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
} else if ($tecArmador == '') {
    echo "<div class='alert alert-danger' role='role'>
        <p><strong>Error, Ingresa en campo Nombre de Técnico Armador </strong></p>
        </div>";
    exit;
} else if ($tecMontador1 == '') {
    echo "<div class='alert alert-danger' role='role'>
            <p><strong>Error, Ingresa en campo Nombre de Técnico Montador </strong></p>
            </div>";
    exit;
} else {

    $conexion->autocommit(FALSE);
    try {
        // Insertamos tabla registrosolicitud
        $query = "INSERT INTO registrosolicitud(folioRegSolicitud, id_proyecto, valorVentaAlta, id_semana, inspecCalidad, observCliente, tecArmador, tecMontador1, tecMontador2, tecMontador3, tecMontador4, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegSolicitud', $id_proyecto, '$valorVentaAlta', $id_semana, '$inspecCalidad', '$observCliente', '$tecArmador', '$tecMontador1', '$tecMontador2', '$tecMontador3', '$tecMontador4', $borrado, '$status', '$date', $id)";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

        // Insertamos tabla registrosolicitudbitacora
        $query = "INSERT INTO registrosolicitudbitacora(folioRegSolicitud, id_proyecto, valorVentaAlta, id_semana, inspecCalidad, observCliente, tecArmador, tecMontador1, tecMontador2, tecMontador3, tecMontador4, borrado, status, fecha_creacion, id_capC) VALUES ( '$folioRegSolicitud', $id_proyecto, '$valorVentaAlta', $id_semana, '$inspecCalidad', '$observCliente', '$tecArmador', '$tecMontador1', '$tecMontador2', '$tecMontador3', '$tecMontador4', $borrado, '$status', '$date', $id)";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($queryR);


        // // Ingresamos id a tabla proyectos modificar registros
        $query = "UPDATE proyectos SET proyectoActivo = 0, registroSolicitud = 1 WHERE id_proyecto = $id_proyecto";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($queryP);

        // Bitacora
        $query = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
        $resultado = mysqli_query($conexion, $query);


        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
               <p><strong>Proyecto ingresado correctamente!</strong></p>
            </div>
            <div class='col-md-12 col-sm-12 align-self-center'>
            <a href='../components/solicitudAlta.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i> Descargar PDF</a>
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
        }, 5000);
    });
</script>