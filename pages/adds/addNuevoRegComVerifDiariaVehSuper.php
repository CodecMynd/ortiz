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
$tipoComprobacion = 'verificarV';
$estado = 1;
$comSuperVerifDiariaVeh = 1;
// Registrar comprobación de supervision
$query = "INSERT INTO comsupervision(id_proyecto, textSupervision, tipoComprobacion, estado, fecha_registro, id_capC) VALUES ('$id_proyecto', '$textSupervision', '$tipoComprobacion', '$estado', '$date', '$id')";
$resultado = mysqli_query($conexion, $query);
// var_dump($query);

// Actualizar proyecto
$queryP = "UPDATE proyectos SET comSuperVerifDiariaVeh = '$comSuperVerifDiariaVeh' WHERE id_proyecto = '$id_proyecto' ";
$resultadoP = mysqli_query($conexion, $queryP);
// var_dump($queryP);

  if ($resultadoP) {
      echo '<script>
    window.history.go(-2);
  </script>';
  } else {
       echo '<script>
     alert("Error")
     window.history.go(-2);
     </script>';
  }
desconectar();
?>

