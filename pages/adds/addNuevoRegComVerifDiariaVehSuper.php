<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_comverifdiariaveh =  $_POST['id_comverifdiariaveh'];
$textSupervision =  $_POST['textSupervision'];
$id_proyecto = $_POST['id_proyecto'];
$estado = 1;
$comSuperVerifDiariaVeh = 1;
$fecha_hoyS = $_POST['fecha_hoyS'];

if ($textSupervision == '') {
    echo "<div class='alert alert-danger' role='role'>
<p><strong>Error, Supervisión de Link de Video en Vivo es un campo requerido</strong></p>
</div>";
    exit;
} else {
     try {
         $conexion->autocommit(FALSE);
        // Registrar comprobación de supervision
        $query = "UPDATE comverifdiariaveh SET textSupervision = '$textSupervision', fecha_hoyS = '$fecha_hoyS', fecha_creacionS = '$date', id_capCS = '$id' WHERE id_comverifdiariaveh = '$id_comverifdiariaveh' ";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

        // Actualizar proyecto
        $queryP = "UPDATE proyectos SET comSuperVerifDiariaVeh = '$comSuperVerifDiariaVeh' WHERE id_proyecto = '$id_proyecto' ";
        $resultadoP = mysqli_query($conexion, $queryP);
        // var_dump($queryP);

        // ingresar datos a tabla indicador de mensajes diarios
        $queryM = "UPDATE indmensajes SET fecha_hoyS = '$fecha_hoyS', fecha_creacionS = '$date', id_capS = '$id' WHERE id_comverifdiariaveh = '$id_comverifdiariaveh' ";
        $resultadoM =mysqli_query($conexion, $queryM);
        // var_dump($queryM);

         $conexion->autocommit(TRUE);
         echo "<div class='alert alert-success' role='alert'>
         <p><strong>Registro de Supervisión diaria ingresada correctamente!</strong></p>
         </div>";
         echo '<script>
         alert("Registro de Supervisión diaria ingresada correctamente");
         window.location.href = "../admin/crudVerificacionDiariaVehiculos.php";
         </script>';
     } catch (Exception $e) {
         $conexion->rollback();
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