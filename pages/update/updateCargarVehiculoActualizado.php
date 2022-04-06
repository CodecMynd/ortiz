<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_vehiculo = $_POST['id_vehiculo'];
$id_proyecto = $_POST['id_proyecto'];

$query = "UPDATE proyectos SET id_vehiculo = '$id_vehiculo', fecha_mod = '$date', id_capM = '$id' WHERE id_proyecto = '$id_proyecto'";
// var_dump($query);
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "<div class='alert alert-success' role='alert'>
            <p><strong>Vehículo del Proyecto Actualizado correctamente!</strong></p>
        </div>
        <div class='col-md-12 col-sm-12 align-self-center'>
            <a href='../components/ordenTrabajo.php?id={$id_proyecto}' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Descargar PDF'><i class='fa-solid fa-file-pdf'></i>Descargar PDF</a>
        </div>
        ";
} else {
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