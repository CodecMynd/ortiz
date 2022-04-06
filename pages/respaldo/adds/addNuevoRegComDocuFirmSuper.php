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
$textSupervision =  $_POST['textSupervision'];
$tipoComprobacion = 'docufirm';
$estado = 1;
$comSuperDocuFirm = 1;

try{
    $conexion->autocommit(FALSE);
    // Registrar comprobación de supervision
    $query = "INSERT INTO comsupervision(id_proyecto, textSupervision, tipoComprobacion, estado, fecha_registro, id_capC) VALUES ('$id_proyecto', '$textSupervision', '$tipoComprobacion', '$estado', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);
    
    // Actualizar proyecto
    $queryP = "UPDATE proyectos SET comSuperDocuFirm = '$comSuperDocuFirm' WHERE id_proyecto = '$id_proyecto' ";
    $resultadoP = mysqli_query($conexion, $queryP);
    // var_dump($queryP);

    $conexion->autocommit(TRUE);
    if($resultado and $resultadoP){
    echo "<div class='alert alert-success' role='alert'>
    <p>Supervisión de Comprobación eliminada exitosamente</p>
    </div>";
    }

} catch(Exception $e){
    $conexion->rollback();
    echo "<div class='alert alert-danger' role='role'>
    <p><strong>¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte</strong></p>
    <a href='https://jsolautomotriz.workplace.com/groups/504053034641133'  target='_blank' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Area de Soporte'>¡Reporta aqui! <i class='fa-solid fa-triangle-exclamation parpadea'></i></a>
    </div>";

}

 desconectar();
