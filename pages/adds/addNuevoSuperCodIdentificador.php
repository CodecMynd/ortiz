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
$query = "SELECT nProyecto, superCodIdentificador FROM proyectos WHERE id_proyecto = $id_proyecto";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();
$row['superCodIdentificador'];
$row['nProyecto'];

$id_regcodidenti = $_POST['id_regcodidenti'];
$compCodId = $_POST['compCodId'];
$folioSupervision = $_POST['folioSupervision'];
$borrado = 0;
$status = 'Supervisión Código Identificador';
$etapa = 'Proyecto avanzó a 2.7 Supervisión de Registro Código Identificador';

if ($row['superCodIdentificador'] == 1) {
    echo "<div class='alert alert-danger' role='role'>
         <p><strong>Error, el Número de Proyecto: {$row['nProyecto']} ya fue registrado a Supervisión de Registro Código Identificador, verifica en la Tabla 2.9 Bitacora de Proyectos</strong></p>
         </div>";
    exit;
} else if ($compCodId == '') {
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>Error, Comprobación Código Identificador es requerido</strong></p>
    </div>";
    exit;
}
$conexion->autocommit(FALSE);
try {

    // Ingresamos id a tabla proyectos modificar registros
    $query1 = "UPDATE proyectos SET proyCodIdentificador = 0, superCodIdentificador = 1  WHERE id_proyecto = $id_proyecto";
    $resultado1 = mysqli_query($conexion, $query1);
    //var_dump($queryP);


    // Insertamos tabla registrocodidenti
    $query2 = "UPDATE registrocodidenti SET status = '$status', supervisado = 1";
    $resultado2 = mysqli_query($conexion, $query2);

    //var_dump($query);

    // Insertamos tabla registrocodidentibitacora
    $query3 = "UPDATE registrocodidentibitacora SET status = '$status', supervisado = 1";
    $resultado3 = mysqli_query($conexion, $query3);
    //var_dump($query);

    // Insertamos registro en tabla supervisado
    $query4 = "INSERT INTO supervisado(folioSupervision, id_regcodidenti, id_proyecto, compCodId, supervisado, fecha_creacion, id_capC) VALUES ('$folioSupervision', $id_regcodidenti, $id_proyecto, '$compCodId', 1, '$date', $id)";

    $verificar_folio = mysqli_query($conexion, "SELECT folioSupervision FROM supervisado WHERE folioSupervision = '$folioSupervision'");

    if (mysqli_num_rows($verificar_folio) > 0) {
        echo
        "<div class='alert alert-danger' role='role'>
        <p><strong>¡Error, este ID ya se encuentra  registrado, verifica por favor con el Área  Soporte!</strong></p>
        </div>";
        exit;
    } else {

        $resultado4 = mysqli_query($conexion, $query4);
        //var_dump($query);
    }

    // Insertamos registro en tabla supervisado
    $query5 = "INSERT INTO supervisadobitacora(folioSupervision, id_regcodidenti, id_proyecto, compCodId, supervisado, fecha_creacion, id_capC) VALUES ('$folioSupervision', $id_regcodidenti, $id_proyecto, '$compCodId', 1,'$date', $id)";
    $resultado5 = mysqli_query($conexion, $query5);
    //var_dump($query);

    // Bitacora
    $query6 = "INSERT INTO bitacora(id_proyecto, etapa, fecha_modificacion, id_capM) VALUES ('$id_proyecto', '$etapa', '$date', $id)";
    $resultado6 = mysqli_query($conexion, $query6);

    $conexion->commit();

    echo "<div class='alert alert-success' role='alert'>
    <p><strong>Supervisión de Registro Código Identificador ingresado correctamente!</strong></p>
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
        }, 5000);
    });
</script>