<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$id_proyecto =  $_POST['id_proyecto2'];
$textSupervision =  $_POST['textSupervision'];
$tipoComprobacion = 'placas';
$estado = 1;
$comSuperPlaca = 1;

if ($textSupervision == '') {
    echo
    '<script>
    alert("Error, El campo Supervisión es requerido");
    window.history.go(-1);
  </script>';
    exit;
} else {

    $conexion->autocommit(FALSE);
    try {

        // Registrar comprobación de supervision
        $query = "INSERT INTO comsupervision(id_proyecto, textSupervision, tipoComprobacion, estado, fecha_registro, id_capC) VALUES ('$id_proyecto', '$textSupervision', '$tipoComprobacion', '$estado', '$date', '$id')";
        $resultado = mysqli_query($conexion, $query);
        // var_dump($query);

        // Actualizar proyecto
        $queryP = "UPDATE proyectos SET comSuperPlaca = '$comSuperPlaca' WHERE id_proyecto = '$id_proyecto' ";
        $resultadoP = mysqli_query($conexion, $queryP);
        // var_dump($queryP);

        $conexion->commit();
        echo '<script>
       alert("¡Supervisón de Link de comprobación Ingresado correctamente")
       window.history.go(-1);
       </script>';
    } catch (Exception $e) {
        $conexion->rollback();
        echo '<script>
        alert("¡Error interno! Por favor repórtelo inmediatamente a el área de Soporte")
        window.history.go(-1);
        </script>';
    }
}
desconectar();
