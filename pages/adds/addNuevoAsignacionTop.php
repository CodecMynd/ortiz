<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_proyecto =  $_POST['id_proyecto'];
$nProyecto =  $_POST['nProyecto'];
$motivo = $_POST['motivo'];
$top = 1;


if ($motivo == '') {
    echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, Motivo es un campo requerido</strong></p>
  </div>";
    exit;
} else {

    try {
        $conexion->autocommit(FALSE);

        $query = "INSERT INTO tops(id_proyecto, nProyecto, top, motivo, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$top', '$motivo', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);


        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
                  <p><strong>Registro Motivo Asignación de Top ingresado correctamente!</strong></p>
                  </div>";
        echo '<script>
                  alert("Registro Motivo Asignación de Top ingresado correctamente");
                  window.location.href = "../admin/crudAsignacionTop.php";
                  </script>';
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