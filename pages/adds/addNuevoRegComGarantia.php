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
$linkComGarantia = $_POST['linkComGarantia'];

// Registrar motivo de supervision
$query = "INSERT INTO comGarantias(id_proyecto, nProyecto, linkComGarantia, fecha_creacion, id_capC) VALUES ('$id_proyecto', '$nProyecto', '$linkComGarantia', '$date', '$id')";
$resultado = mysqli_query($conexion, $query);
//var_dump($query);

// Actualizar supervision valores
$queryP = "UPDATE proyectos SET comGarantia = 1 WHERE id_proyecto = '$id_proyecto' AND nProyecto = '$nProyecto' ";
$resultadoP = mysqli_query($conexion, $queryP);
//var_dump($queryP);

if ($resultadoP) {
           echo '<script>
         window.history.go(-1);
      </script>';
  } else {
            echo '<script>
          alert("Error")
          window.history.go(-1);
          </script>';
  }
desconectar();
?>

