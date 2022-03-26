<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$etapa = 'Proyecto Completo Borrado';

$id_proyecto = $_POST['id'];

$query = "SELECT proyectoActivo, registroSolicitud, altaProyecto, proyCodIdentificador, superCodIdentificador FROM proyectos WHERE id_proyecto = $id_proyecto ";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();

$proyectoActivo = $row['proyectoActivo'];
$registroSolicitud = $row['registroSolicitud'];
$altaProyecto = $row['altaProyecto'];
$proyCodIdentificador = $row['proyCodIdentificador'];
$superCodIdentificador = $row['superCodIdentificador'];

if ($proyectoActivo == 1) {

    $queryB = "INSERT INTO bitacora(id_proyecto, etapa, fechar_borrado, id_capB) VALUES ( '$id_proyecto', '$etapa', '$date', $id)";
    $resultado = mysqli_query($conexion, $queryB);
    // var_dump($queryB);


    $queryP = ("UPDATE proyectos SET estadoProyectoEliminado = 0, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = $id_proyecto");
    $resultadoP = mysqli_query($conexion, $queryP);
    // var_dump($queryP);
    exit;
} else if ($registroSolicitud == 1) {
    $queryB = "INSERT INTO bitacora(id_proyecto, etapa, fechar_borrado, id_capB) VALUES ( '$id_proyecto', '$etapa', '$date', $id)";
    // $resultado = mysqli_query($conexion, $queryB);
    var_dump($queryB);

    $queryP = ("UPDATE proyectos SET estadoProyecto = 0, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = $id_proyecto");
    $resultadoP = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    $queryS = ("DELETE FROM registrosolicitud WHERE id_proyecto = $id_proyecto");
    $resultadoS = mysqli_query($conexion, $queryS);
    //var_dump($queryS);
    exit;
} else if ($altaProyecto == 1) {
    $queryB = "INSERT INTO bitacora(id_proyecto, etapa, fechar_borrado, id_capB) VALUES ( '$id_proyecto', '$etapa', '$date', $id)";
    $resultadoB = mysqli_query($conexion, $queryB);
    //var_dump($queryB);

    $queryP = ("UPDATE proyectos SET estadoProyecto = 0, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = $id_proyecto");
    $resultadoP = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    $queryS = ("DELETE FROM registrosolicitud WHERE id_proyecto = $id_proyecto");
    $resultadoS = mysqli_query($conexion, $queryS);
    //var_dump($queryS);

    $queryA = ("DELETE FROM registroalta WHERE id_proyecto = $id_proyecto");
    $resultadoA = mysqli_query($conexion, $queryA);
    //var_dump($queryA);
    exit;
} else if ($proyCodIdentificador == 1) {
    $queryB = "INSERT INTO bitacora(id_proyecto, etapa, fechar_borrado, id_capB) VALUES ( '$id_proyecto', '$etapa', '$date', $id)";
    $resultado = mysqli_query($conexion, $queryB);
    //var_dump($queryB);

    $queryP = ("UPDATE proyectos SET estadoProyecto = 0, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = $id_proyecto");
    $resultadoP = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    $queryS = ("DELETE FROM registrosolicitud WHERE id_proyecto = $id_proyecto");
    $resultadoS = mysqli_query($conexion, $queryS);
    //var_dump($queryS);

    $queryA = ("DELETE FROM registroalta WHERE id_proyecto = $id_proyecto");
    $resultadoA = mysqli_query($conexion, $queryA);
    //var_dump($queryA);

    $queryC = ("DELETE FROM registrocodidenti WHERE id_proyecto = $id_proyecto");
    $resultadoC = mysqli_query($conexion, $queryC);
    //var_dump($queryC);
    exit;
} else if ($superCodIdentificador == 1) {
    $queryB = "INSERT INTO bitacora(id_proyecto, etapa, fechar_borrado, id_capB) VALUES ( '$id_proyecto', '$etapa', '$date', $id)";
    $resultado = mysqli_query($conexion, $queryB);
    //var_dump($queryB);

    $queryP = ("UPDATE proyectos SET estadoProyecto = 0, fecha_borrado = '$date', id_capB = '$id' WHERE id_proyecto = $id_proyecto");
    $resultadoP = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

    $queryS = ("DELETE FROM registrosolicitud WHERE id_proyecto = $id_proyecto");
    $resultadoS = mysqli_query($conexion, $queryS);
    //var_dump($queryS);

    $queryA = ("DELETE FROM registroalta WHERE id_proyecto = $id_proyecto");
    $resultadoA = mysqli_query($conexion, $queryA);
    //var_dump($queryA);

    $queryC = ("DELETE FROM registrocodidenti WHERE id_proyecto = $id_proyecto");
    $resultadoC = mysqli_query($conexion, $queryC);
    //var_dump($queryC);

    $querySU = ("DELETE FROM supervisado WHERE id_proyecto = $id_proyecto");
    $resultadoSU = mysqli_query($conexion, $querySU);
    //var_dump($querySU);
    exit;
} else {
    echo "sin registro";
}


if ($resultado) {
    echo "<div class='alert alert-success' role='alert'>
          <p><strong>Proyecto borrado correctamente!</strong></p>
          </div>";
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