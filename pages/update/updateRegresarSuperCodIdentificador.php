<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
    header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];

$id_proyecto = $_POST['id_proyecto'];
$id_regcodidenti = $_POST['id_regcodidenti'];
$status = 'Borrado de 2.7 Supervisión Código Identificador';

//   Regresar Registro de Registro Codigo Identificador a Alta de proyecto para realizar Solicitud
$query = ("UPDATE proyectos SET proyCodIdentificador = 1, superCodIdentificador = 0 WHERE id_proyecto = $id_proyecto ");
$resultado = mysqli_query($conexion, $query);
// var_dump($query);

$queryD = ("UPDATE registrocodidenti SET supervisado = 0  WHERE id_regcodidenti = $id_regcodidenti ");
$resultadoD = mysqli_query($conexion, $queryD);
// var_dump($queryD);

$queryU = ("UPDATE registrocodidentibitacora SET supervisado = 1, borrado = 1, status = '$status', fecha_borrado = '$date', id_capB = $id WHERE id_regcodidenti = $id_regcodidenti ");
$resultadoU = mysqli_query($conexion, $queryU);
// var_dump($queryU);


$queryS = ("UPDATE supervisado SET supervisado = 0, borradoFechaSupervisado = '$date', id_capB = $id WHERE id_regcodidenti = $id_regcodidenti ");
$resultadoS = mysqli_query($conexion, $queryS);
// var_dump($queryS);


//  if ($resultadoU) {
//      echo '<script type="text/javascript">
//         window.history.go(-1);
//          </script>';
//  } else {
//      echo '<script type="text/javascript">
//         alert("Error");
//         window.history.go(-1);
//          </script>';
//  }

 desconectar();
