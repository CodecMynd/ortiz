<?php
require '../../config/functions.php';
if (!haIniciadoSesion()) {
  header('Location: ../../../index.php');
}
conectar();
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$id = $_SESSION['id_usuario'];


$consulta = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.comPlacas, P.estadoProyectoEliminado, P.comSuperPlaca,
C.nombres, C.aPaternoCliente, C.aMaternoCliente,
V.placa, M.marca, Mo.modelo, A.anio, Co.color,
CP.linkComPlaca, CP.fecha_creacion,
UP.nombres AS UPN, UP.aPaterno AS UPP, UP.aMaterno AS UPM,
CS.textSupervision, CS.fecha_registro AS CSF,
UCS.nombres AS UCSN, UCS.aPaterno AS UCSP, UCS.aMaterno AS UCSM
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co On V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN clientes C on P.id_cliente = C.id_cliente
LEFT JOIN complacas CP ON P.id_proyecto = CP.id_proyecto
LEFT JOIN usuarios UP ON CP.id_capC = UP.id_usuario
LEFT JOIN comsupervision CS ON P.id_proyecto = CS.id_proyecto
LEFT JOIN usuarios UCS ON CS.id_capC = UCS.id_usuario";
$resultado = mysqli_query($conexion, $query);

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
?>