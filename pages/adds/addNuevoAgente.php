<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$agente =  $_POST['agente'];

$query = "INSERT INTO agentes(agente, fecha_creacion, id_capC) VALUES ('$agente', '$date', $id)";

$verificar_agente = mysqli_query($conexion, "SELECT agente FROM agentes WHERE agente = '$agente' ");
if (mysqli_num_rows($verificar_agente) > 0) {
    echo "<div class='alert alert-danger' role='role'>
        <p><strong>Error, esta Agente ya esta registrada</strong></p>
    </div>";
    exit;
    }else {
    $resultado = mysqli_query($conexion, $query);
    $id_agente = mysqli_insert_id($conexion);


    $queryN = "INSERT INTO agentesn(id_agente) VALUES ('$id_agente')";
    $resultadoN = mysqli_query($conexion, $queryN);

    $queryGR = "INSERT INTO agentesgr(id_agente) VALUES ('$id_agente')";
    $resultadoGR = mysqli_query($conexion, $queryGR);


    if ($resultadoGR) {
        echo
        "<div class='alert alert-success' role='alert'>
            <p>Agente ingresado correctamente</p>
        </div>";
    } else {
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