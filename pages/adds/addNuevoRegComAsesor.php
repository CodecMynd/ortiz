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
$id_asesor = (empty($_POST['id_asesor'])) ? 0 : $_POST['id_asesor'];

if ($id_asesor == 0) {
    echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, Selecciona un Asesor de la lista</strong></p>
  </div>";
    exit;
} else {

    $conexion->autocommit(FALSE);
    try {

        // Registrar motivo de supervision
        $query = "INSERT INTO comasesor(id_proyecto, nProyecto, id_asesor, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$id_asesor', '$date', '$id')";
        $verificar_id = mysqli_query($conexion, "SELECT id_proyecto FROM comasesor WHERE id_proyecto = '$id_proyecto' ");

        if (mysqli_num_rows($verificar_id) > 0) {
            echo
            "<div class='alert alert-danger' role='role'>
                <p><strong>¡Error, ID '$id_proyecto' ya se encuentra  registrado, Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!</strong></p>
            </div>";
            exit;
        } else {
            $resultado = mysqli_query($conexion, $query);
            // var_dump($query);
        }
        // Actualizar supervision valores
        $queryP = "UPDATE proyectos SET comAsesor = 1 WHERE id_proyecto = '$id_proyecto' AND nProyecto = '$nProyecto' ";
        $resultadoP = mysqli_query($conexion, $queryP);
        // var_dump($queryP);

        $conexion->commit();
        echo "<div class='alert alert-success' role='alert'>
           <p><strong>Asesor Asignado correctamente!</strong></p>
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
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert-success").fadeOut(1500);
        }, 3000);

        setTimeout(function() {
            $(".alert-danger").fadeIn(1500);
        }, 3000);
    });
</script>