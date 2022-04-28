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
$tipoComprobacion = '7_imagenes';
$estado = 1;
$comSuperImg = 1;

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
    $query = "INSERT INTO comsupervisionimagenes(id_proyecto, textSupervision, tipoComprobacion, comSuperImg, estado, fecha_registro, id_capC) VALUES ('$id_proyecto', '$textSupervision', '$tipoComprobacion', '$comSuperImg',  '$estado', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    //var_dump($query);

    // Actualizar proyecto
    $queryP = "UPDATE proyectos SET comSuperImg = '$comSuperImg' WHERE id_proyecto = '$id_proyecto' ";
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
                alert(¡Error interno! Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte, Error detectado: ' . $e->getMessage() . ' )
                window.history.go(-1);
          </script>';
  }
}
desconectar();
