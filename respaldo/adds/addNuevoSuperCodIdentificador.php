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
$id_regcodidenti = $_POST['id_regcodidenti'];
$compCodId = $_POST['compCodId'];
$folioSupervision = $_POST['folioSupervision'];
$borrado = 0;
$status = 'Supervisión Código Identificador';
$etapa = 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador';

if ($compCodId == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Comprobación Código Identificador es requerido</strong></p>
    </div>";
    exit;
}
try {
    $conexion->autocommit(FALSE);

    // Ingresamos id a tabla proyectos modificar registros
    $queryP = "UPDATE proyectos SET proyCodIdentificador = 0, superCodIdentificador = 1  WHERE id_proyecto = $id_proyecto";
    $resultadoP = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    // Insertamos tabla registrocodidenti
    $queryC = "UPDATE registrocodidenti SET status = '$status', supervisado = 1";
    $resultadoC = mysqli_query($conexion, $queryC);
    //var_dump($query);

    // Insertamos tabla registrocodidentibitacora
    $queryCB = "UPDATE registrocodidentibitacora SET status = '$status', supervisado = 1";
    $resultadoCB = mysqli_query($conexion, $queryCB);
    //var_dump($query);

    // Insertamos registro en tabla supervisado
    $queryS = "INSERT INTO supervisado(folioSupervision, id_regcodidenti, id_proyecto, compCodId, supervisado, fecha_creacion, id_capC) VALUES ('$folioSupervision', $id_regcodidenti, $id_proyecto, '$compCodId', 1, '$date', $id)";
    $resultadoS = mysqli_query($conexion, $queryS);
    //var_dump($query);

    // Insertamos registro en tabla supervisado
    $querySB = "INSERT INTO supervisadobitacora(folioSupervision, id_regcodidenti, id_proyecto, compCodId, supervisado, fecha_creacion, id_capC) VALUES ('$folioSupervision', $id_regcodidenti, $id_proyecto, '$compCodId', 1,'$date', $id)";
    $resultadoSB = mysqli_query($conexion, $querySB);
    //var_dump($query);

    // Bitacora
    $queryBI = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
    $resultadoBI = mysqli_query($conexion, $queryBI);

    $conexion->autocommit(TRUE);

    echo "<div class='alert alert-success' role='alert'>
    <p><strong>Supervisión de Registro Código Identificador ingresado correctamente!</strong></p>
    </div>";
} catch (Exception $e) {
    $conexion->rollback();
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
        }, 5000);
    });
</script>