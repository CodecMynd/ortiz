<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}

conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto =  $_POST['id_proyecto1'];
$nProyecto =  $_POST['nProyecto1'];
$linkComImagenes = $_POST['linkComImagenes'];
$comImg = 1;
if ($linkComImagenes == '') {
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
    $query = "INSERT INTO comimagenes(id_proyecto, nProyecto, linkComImagenes, comImg, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$linkComImagenes', '$comImg', '$date', '$id')";
    
    $verificar_id = mysqli_query($conexion, "SELECT id_proyecto FROM comimagenes WHERE id_proyecto = '$id_proyecto'");
    if (mysqli_num_rows($verificar_id) > 0) {
      echo "<div class='alert alert-danger' role='role'>
                     <p><strong>¡Error, ID '$id_proyecto' ya se encuentra  registrado, Por favor tome captura de pantalla y repórtelo inmediatamente a el área de Soporte!</strong></p>
              </div>";
      exit;
    } else {
      $resultado = mysqli_query($conexion, $query);
      //var_dump($query);
    }


    // Actualizar supervision valores
    $queryP = "UPDATE proyectos SET comImg = 1 WHERE id_proyecto = '$id_proyecto' AND nProyecto = '$nProyecto' ";
    $resultadoP = mysqli_query($conexion, $queryP);
    //var_dump($queryP);

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
