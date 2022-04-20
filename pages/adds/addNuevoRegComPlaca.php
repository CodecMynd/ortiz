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
$linkComPlaca = $_POST['linkComPlaca'];

if ($linkComPlaca == '') {
  echo
  '<script>
  alert("Error, El link de comprobación es un campo requerido");
  window.history.go(-1);
</script>';
  exit;
} else {

  $conexion->autocommit(FALSE);
  try {

    // Registrar motivo de supervision
    $query = "INSERT INTO complacas(id_proyecto, nProyecto, linkComPlaca, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$linkComPlaca', '$date', '$id')";
    $resultado = mysqli_query($conexion, $query);
    // var_dump($query);

    // Actualizar supervision valores
    $queryP = "UPDATE proyectos SET comPlacas = 1 WHERE id_proyecto = '$id_proyecto' AND nProyecto = '$nProyecto' ";
    $resultadoP = mysqli_query($conexion, $queryP);
    // var_dump($queryP);

    $conexion->commit();

    echo '<script>
           alert("¡Link de comprobación Ingresado correctamente")
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
