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
$linkSegDiaProAseTecnico = $_POST['linkSegDiaProAseTecnico'];
$fecha_hoyV  = $_POST['fecha_hoyV'];
$com = 1;

if ($linkSegDiaProAseTecnico == '') {
    echo "<div class='alert alert-danger' role='role'>
  <p><strong>Error, Link de Video en Vivo es un campo requerido</strong></p>
  </div>";
    exit;
} else {
    $conexion->autocommit(FALSE);
       try {

        // Registrar motivo de supervision
        $query = "INSERT INTO segdiaproasetecnico(id_proyecto, nProyecto, linkSegDiaProAseTecnico, com, fecha_hoyV, fecha_creacionV, id_capCV) VALUES ('$id_proyecto', '$nProyecto', '$linkSegDiaProAseTecnico', '$com', '$fecha_hoyV', '$date', '$id')";

        $resultado = mysqli_query($conexion, $query);
        //var_dump($query);

           $conexion->commit();
               echo "<div class='alert alert-success' role='alert'>
               <p><strong>Registro Comprobación Diaria de Programa de Asesoramiento Técnico!</strong></p>
               </div>";
               echo '<script>
               alert("Registro Comprobación Diaria de Programa de Asesoramiento Técnico");
               window.location.href = "../admin/crudSegDiaAsesoramientoTecnico.php";
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